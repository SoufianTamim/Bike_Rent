<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use App\Models\Cart;
use Stripe\Customer;
use App\Models\Booking;
use App\Models\Product;
use Illuminate\Http\Request;
use Laravel\Cashier\Payment;
use Stripe\Checkout\Session;
use App\Mail\BookingConfirmation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BookingController extends Controller
{
    public function index()
    {
        return view('checkout');
    }
    
    public function indexAll()
    {
        $bookings = Booking::paginate(15);

        return view('booking.product', ['bookings'=>$bookings]);
    }

    public function cancel()
    {
        return view('checkout');
    }

    public function checkout(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $user = Auth::user();
        $cartItems = Cart::join('products', 'carts.product_id', '=', 'products.product_id')
            ->where('carts.user_id', $user->user_id)
            ->get(['carts.cart_id', 'products.product_id', 'products.name', 'products.category','products.price', 'products.size', 'products.image1']);

        $lineItems = [];
        $totalPrice = 0;
        $code = substr(preg_replace('/[^0-9]/', '', uniqid()), 0, 9);
        foreach($cartItems as $product) {
            $totalPrice += $product->price * $request->booking_period_select * $request->booking_period * 100;
            $lineItem = [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => $product->name,
                        ],
                        'unit_amount' =>  $totalPrice,
                    ],
                    'quantity' => 1,
                ],
            ];
            $lineItems[] = $lineItem;
        }
        // Create the checkout session
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => route('success', [], true) . "?session_id={CHECKOUT_SESSION_ID}&code={$code}",
            'cancel_url' => route('cancel', [], true),
        ]);
        foreach($cartItems as $product) {
            $booking = new Booking();
            $booking->user_id = $user->user_id;
            $booking->product_id = $product->product_id;
            $booking->session_id = $session->id;
            $booking->period = $request->booking_period * $request->booking_period_select . ' DAYS';
            $booking->code = $code;
            $booking->price = $totalPrice / 100;
            $booking->status = 'unpaid';
            $booking->save();
        }
        // Redirect the user to the checkout page
        return redirect($session->url);
    }

    public function success(Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $sessionId = $request->get('session_id');
        $code = $request->get('code');
        $user = auth()->user();

        $session = \Stripe\Checkout\Session::retrieve($sessionId);
        if (!$session) {
            throw new NotFoundHttpException();
        }
        $bookings = Booking::where('session_id', $sessionId)->get();
        if ($bookings->isEmpty()) {
            throw new NotFoundHttpException();
        }
        foreach ($bookings as $booking) {
            if ($booking->status === 'unpaid') {
                // Update the booking status to 'paid'
                $cart = Cart::where('user_id', $booking->user_id);
                $product = Product::where('product_id', $booking->product_id)->first();
                $product->availability = 'booked';
                $booking->status = 'paid';
                $booking->code = $code;
                $booking->save();
                $product->save();
                $cart->delete();
            }
        }
        Mail::to($user)->send(new BookingConfirmation($bookings));

        // You can also retrieve the customer using
        return view('checkout-success', compact('bookings'));
    }

    public function unbook(Request $request)
    {
        $code = $request->code;
        $bookings = Booking::where('code', $code)->get();
        foreach ($bookings as $booking) {
            if ($booking->status === 'paid') {
                $product = Product::where('product_id', $booking->product_id)->first();
                $product->availability = 'available';
                $booking->status = 'completed';
                $booking->code = $code;
                $booking->save();
                $product->save();
            }
        }
    }

}
