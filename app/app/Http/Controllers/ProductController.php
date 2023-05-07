<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::paginate(4);
        return view('product.product', ['products' => $products]);
        // return view('product.product');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //== passing props to the form view
        $flag = "new";
        $route = "/product/create";
        return view('product.form', ['flag'=>$flag, 'route'=>$route]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $valid = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'condition' => 'required|string|max:255',
            'manufacturer' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'size' => 'required|string|max:255',
            'weight' => 'required|integer',
            'speeds_number' => 'required|integer',
            'price' => 'required|integer',
            'location' => 'required|string|max:255',
            'image1' => 'required|image|mimes:jpg,jpeg,png',
            'image2' => 'required|image|mimes:jpg,jpeg,png',
            'image3' => 'required|image|mimes:jpg,jpeg,png',
            'image4' => 'required|image|mimes:jpg,jpeg,png',
            'description' => 'required',
            'maintenance_history' => 'required',
            'created_at' => '',
        ]);

        $image1 = $request->file('image1')->store('public/productsImages');
        $image2 = $request->file('image2')->store('public/productsImages');
        $image3 = $request->file('image3')->store('public/productsImages');
        $image4 = $request->file('image4')->store('public/productsImages');


        $product = Product::create([
            'name' => $request->name,
            'category' => $request->category,
            'condition' => $request->condition,
            'manufacturer' => $request->manufacturer,
            'model' => $request->model,
            'size' => $request->size,
            'weight' => $request->weight,
            'speeds_number' => $request->speeds_number,
            'price' => $request->price,
            'maintenance_history' => $request->maintenance_history,
            'location' => $request->location,
            'image1' => $image1,
            'image2' => $image2,
            'image3' => $image3,
            'image4' => $image4,
            'description' => $request->description,
            'created_at' => $request->created_at,
        ]);

        return redirect('/product');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $product = Product::where('product_id', $id)->first();
        return view('product.single', ['product'=> $product]);
    }

     /**
     * Display the specified resource.
     */
    public function single(string $id)
    {
        //
        $product = Product::where('product_id', $id)->first();

        return view('single_bike', ['product'=> $product]);
    }

    public function display()
    {
        //

        $products = Product::all();
        return view('bikes', ['products' => $products]);


    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $route = "/product/update/$id";
        $flag = "modify";
        // $product = Product::find($id);
        $product = Product::where('product_id', $id)->first();
        return view('product.form', ['flag'=>$flag , 'route'=>$route , 'product'=>$product ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // update the product based on it s id

        $product = Product::where('product_id', $id)->first();
        $image1 = $request->file('image1')->store('public/productsImages');
        $image2 = $request->file('image2')->store('public/productsImages');
        $image3 = $request->file('image3')->store('public/productsImages');
        $image4 = $request->file('image4')->store('public/productsImages');
        $product->name  = $request->name;
        $product->category  = $request->category;
        $product->condition  = $request->condition;
        $product->manufacturer  = $request->manufacturer;
        $product->model  = $request->model;
        $product->size  = $request->size;
        $product->weight  = $request->weight;
        $product->speeds_number  = $request->speeds_number;
        $product->price  = $request->price;
        $product->maintenance_history  = $request->maintenance_history;
        $product->location  = $request->location;
        $product->image1  = $image1;
        $product->image2  = $image2;
        $product->image3  = $image3;
        $product->image4  = $image4;
        $product->description  = $request->description;
        $product->updated_at  = $request->updated_at;
        $product->update();

        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $product = Product::where('product_id', $id)->first();
        $product->delete();
        return redirect('/product');
    }
}
