<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Like;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->check()) {
            $user = auth()->user();
            $likeItems = Like::join('products', 'likes.product_id', '=', 'products.product_id')
                            ->where('likes.user_id', $user->user_id)
                            ->get(['likes.like_id', 'products.name', 'products.image1', 'products.price']);
            return view('bikes', [ 'likeItems'=>$likeItems]);
        } else {
            return view('bikes');
        }
    }



    public function store(Request $request)
    {
        $user = $request->user();
        $product = Product::findOrFail($request->input('product_id'));
        $liked = $user->likes->where('product_id', $product->product_id)->first();

        if ($liked) {
            return redirect()->route('bikes');
        }

        $like = $user->likes()->create([
            'product_id' => $product->product_id,
        ]);

        if ($like) {
            return redirect()->route('bikes');
        }
    }



    public function add(Request $request)
    {
        $user = auth()->user();
        $product = Product::find($request->input('product_id'));

        $like = new Like();
        $like->user_id = $user->id;
        $like->product_id = $product->id;
        $like->save();

        return redirect()->route('like.index')->with('success', 'Product added to like.');
    }

    public function deleteLikeItem($id)
    {

        $like = Like::where('like_id', $id);
        $like->delete();
        return redirect()->back()->with('message', 'Item removed from like.');
    }

    public function clear($id)
    {
        // $like->user_id = $user->id;x
        $like = Like::where('user_id', $id);
        $like->delete();
        return redirect()->back()->with('message', 'like cleared');
    }


}
