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
        $products = Product::all(16);
        $cartItems = Cart::join('products', 'carts.product_id', '=', 'products.product_id')
                        ->where('carts.user_id', $user->user_id)
                        ->get(['carts.cart_id', 'products.name', 'products.price']);
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function add(Request $request)
    {
        $user = auth()->user();
        $product = Product::find($request->input('product_id'));

        $cart = new Cart();
        $cart->user_id = $user->id;
        $cart->product_id = $product->id;
        $cart->save();

        return redirect()->route('cart.index')->with('success', 'Product added to cart.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }

    public function deleteCartItem($id)
    {

        $cart = Cart::where('cart_id', $id);
        $cart->delete();
        return redirect()->back()->with('message', 'Item removed from cart.');
    }

    public function clear($id)
    {
        // $cart->user_id = $user->id;x
        $cart = Cart::where('user_id', $id);
        $cart->delete();
        return redirect()->back()->with('message', 'cart cleared');
    }


}
