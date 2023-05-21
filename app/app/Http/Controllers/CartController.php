<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $products = Product::paginate(16);
        $cartItems = Cart::join('products', 'carts.product_id', '=', 'products.product_id')
                        ->where('carts.user_id', $user->user_id)
                        ->get(['carts.cart_id', 'products.name', 'products.price', 'products.category']);
        return view('bikes', ['products' => $products, 'cartItems'=>$cartItems]);
    }


public function store(Request $request)
{
    $user = $request->user();
    $product = Product::findOrFail($request->input('product_id'));
    $carted = $user->carts->where('product_id', $product->product_id)->first();

    if ($carted) {
        return redirect()->route('bikes');
    }

    $carte = $user->carts()->create([
        'product_id' => $product->product_id,
    ]);

    if ($carte) {
        return redirect()->route('bikes');
    }
}


    public function add(Request $request)
    {
        $user = auth()->user();
        $product = Product::find($request->input('product_id'));

        $cart = new Cart();
        $cart->user_id = $user->id;
        $cart->product_id = $product->id;
        $cart->save();

        return redirect()->route('cart.index');
    }

    public function deleteCartItem($id)
    {

        $cart = Cart::where('cart_id', $id);
        $cart->delete();
        return redirect()->back();
    }

    public function clear($id)
    {
        $cart = Cart::where('user_id', $id);
        $cart->delete();
        return redirect()->back()->with('message', 'cart cleared');
    }


}
