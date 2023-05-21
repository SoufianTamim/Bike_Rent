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
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BookingController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $bookings = Booking::join('products', 'bookings.product_id', '=', 'products.product_id')
                        ->where('bookings.user_id', $user->user_id)
                        ->get(['bookings.book_id', 'products.name', 'products.price', 'products.category']);

        return view('profile.edit', ['bookings'=>$bookings]);
    }

    public function indexAll()
    {
        $bookings = Booking::join('products', 'bookings.product_id', '=', 'products.product_id')
                        ->get(['bookings.Booking_id', 'products.name', 'products.price', 'products.category']);
        return view('bikes', ['cartItems'=>$bookings]);
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
            'success_url' => route('success', [], true) . "?session_id={CHECKOUT_SESSION_ID}",
            'cancel_url' => route('cancel', [], true),
        ]);
        foreach($cartItems as $product) {
            $booking = new Booking();
            $booking->user_id = $user->user_id;
            $booking->product_id = $product->product_id;
            $booking->session_id = $session->id;
            $booking->period = $request->booking_period * $request->booking_period_select . ' DAYS';
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
        $session = \Stripe\Checkout\Session::retrieve($sessionId);
        if (!$session) {
            throw new NotFoundHttpException();
        }


        $bookings = Booking::where('session_id', $sessionId)->get();

        if ($bookings->isEmpty()) {
            throw new NotFoundHttpException();
        }

        // dd($bookings);

        foreach ($bookings as $booking) {
            if ($booking->status === 'unpaid') {
                // Update the booking status to 'paid'
                $cart = Cart::where('user_id', $booking->user_id);
                $product = Product::where('product_id', $booking->product_id)->first();
                $product->availability = 'booked';
                $booking->status = 'paid';
                $booking->save();
                $product->save();
                $cart->delete();
            }
        }

        // You can also retrieve the customer using 
        return view('checkout-success', compact('booking'));
    }





    //    public function webhook(Request $request)
    // {
    //     $payload = $request->getContent();
    //     $sig_header = $request->header('Stripe-Signature');
    //     $endpoint_secret = env('STRIPE_WEBHOOK_SECRET');

    //     try {
    //         $event = \Stripe\Webhook::constructEvent(
    //             $payload, $sig_header, $endpoint_secret
    //         );
    //     } catch (\Exception $e) {
    //         return response('', 400);
    //     }

    //     // Handle the event
    //     switch ($event->type) {
    //         case 'payment_intent.succeeded':
    //             $paymentIntent = $event->data->object;

    //             $payment = Payment::where('session_id', $paymentIntent->id)->first();
    //             if ($payment && $payment->status !== 'succeeded') {
    //                 $payment->status = 'succeeded';
    //                 $payment->save();

    //                 $booking = $payment->owner; // Assuming the payment belongs to an booking model
    //                 if ($booking && $booking->status === 'unpaid') {
    //                     // Update the booking status to 'paid'
    //                     $booking->status = 'paid';
    //                     $booking->save();
    //                     // Send email to customer
    //                 }
    //             }

    //             break;

    //         // Handle other event types as needed

    //         default:
    //             echo 'Received unknown event type: ' . $event->type;
    //     }

    //     return response('');
    // }
}
