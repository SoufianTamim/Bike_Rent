<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\Like;
use App\Models\Booking;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */

    public function boot()
    {
        View::composer(['index', 'bikes', 'contact', 'payement',  'layout.top-panel', 'checkout', 'checkout-success', 'about', 'dashboard', 'gallery', 'single_bike', 'profile.edit', 'errors.404'], function ($view) {
            if (Auth::check()) {
                $user = Auth::user();
                $products = Product::paginate(15);
                $cartItems = Cart::join('products', 'carts.product_id', '=', 'products.product_id')
                    ->where('carts.user_id', $user->user_id)
                    ->get(['carts.cart_id', 'products.name', 'products.price', 'products.category', 'products.size', 'products.image1']);

                $likeItems = Like::join('products', 'likes.product_id', '=', 'products.product_id')
                    ->where('likes.user_id', $user->user_id)
                    ->get(['likes.like_id','products.product_id', 'products.name', 'products.availability', 'products.price']);

                $bookings = Booking::join('products', 'bookings.product_id', '=', 'products.product_id')
                    ->get(['*']);

                $likesCount = Like::where('likes.user_id', $user->user_id)->count();

                $view->with([
                    'products' => $products,
                    'cartItems' => $cartItems,
                    'likeItems' => $likeItems,
                    'likesCount' => $likesCount,
                    'bookings' => $bookings
                ]);
            } else {
                $products = Product::paginate(16);
                $view->with('products', $products);
            }
        });
    }

}
