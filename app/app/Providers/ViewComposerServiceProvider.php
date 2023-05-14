<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\Like;
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
    View::composer(['bikes', 'contact','payement', 'about', 'dashboard', 'gallery', 'index', 'single_bike', 'profile.edit'], function ($view) {
        if (Auth::check()) {
            $user = Auth::user();
            // $user_id = Auth::user()->user_id;

            // dd($user_id);


            $products = Product::paginate(16);
            $cartItems = Cart::join('products', 'carts.product_id', '=', 'products.product_id')
                            ->where('carts.user_id', $user->user_id)
                            ->get(['carts.cart_id', 'products.name', 'products.price']);

            $likeItems = Like::join('products', 'likes.product_id', '=', 'products.product_id')
                                ->where('likes.user_id', $user->user_id)
                                ->get(['likes.like_id', 'products.name', 'products.price']);

        $likesCount =  Like::where('likes.user_id', $user->user_id)->count();                        
            $view->with('products', $products)->with('cartItems', $cartItems)->with('likeItems', $likeItems)->with('likesCount' , $likesCount);
        } else {
            $products = Product::paginate(16);
            $view->with('products', $products);
        }
    });
    }
}
