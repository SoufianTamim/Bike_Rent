<?php

namespace App\Providers;
use App\Models\Cart;
use App\Models\Product;
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
    View::composer(['bikes', 'contact', 'about', 'dashboard', 'gallery' ,'index' , 'single_bike'], function ($view) {
        $user = auth()->user();
        $products = Product::paginate(6);
        $cartItems = Cart::join('products', 'carts.product_id', '=', 'products.product_id')
                        ->where('carts.user_id', $user->user_id)
                        ->get(['carts.cart_id', 'products.name', 'products.price']);
        $view->with('products', $products)->with('cartItems', $cartItems);
    });
}
}
