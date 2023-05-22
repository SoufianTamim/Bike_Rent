<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $products = Product::paginate(3);
        return view('product.product', ['products' => $products]);
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


        $image1 = $request->file('image1');
        $image2 = $request->file('image2');
        $image3 = $request->file('image3');
        $image4 = $request->file('image4');

        $filename1 = hash('sha256', time() . $image1->getClientOriginalName()) . '.' . $image1->getClientOriginalExtension();
        $path1 = $image1->storeAs('/products_images', $filename1, "public");
        $image1_url = Storage::url($path1);

        $filename2 = hash('sha256', time() . $image2->getClientOriginalName()) . '.' . $image2->getClientOriginalExtension();
        $path2 = $image2->storeAs('/products_images', $filename2, "public");
        $image2_url = Storage::url($path2);

        $filename3 = hash('sha256', time() . $image3->getClientOriginalName()) . '.' . $image3->getClientOriginalExtension();
        $path3 = $image3->storeAs('/products_images', $filename3, "public");
        $image3_url = Storage::url($path3);

        $filename4 = hash('sha256', time() . $image4->getClientOriginalName()) . '.' . $image4->getClientOriginalExtension();
        $path4 = $image4->storeAs('/products_images', $filename4, "public");
        $image4_url = Storage::url($path4);



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
            'image1' => $image1_url,
            'image2' => $image2_url,
            'image3' => $image3_url,
            'image4' => $image4_url,
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

    public function carts()
    {
        return $this->hasMany(Cart::class);
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

    public function return(string $id)
    {
        //
        $product = Product::where('product_id', $id)->first();
        $product->availability = "available";
        $product->save();

        return redirect('/bikes');
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


    public function filter(Request $request)
    {
        // Get the filter parameters from the request
        $category = $request->input('category');
        $brand = $request->input('brand');
        $condition = $request->input('condition');
        $wheelSize = $request->input('wheelSize');
        $minPrice = $request->input('minPrice');
        $maxPrice = $request->input('maxPrice');
        $speeds = $request->input('speeds');
        $weight = $request->input('weight');

        // Apply filters to the query
        $query = Product::query();

        if ($category) {
            $query->where('category', $category);
        }

        if ($brand) {
            $query->where('brand', $brand);
        }

        if ($condition) {
            $query->where('condition', $condition);
        }

        if ($wheelSize) {
            $query->where('wheel_size', $wheelSize);
        }

        if ($minPrice && $maxPrice) {
            $query->whereBetween('price', [$minPrice, $maxPrice]);
        }

        if ($speeds) {
            $query->where('speeds', $speeds);
        }

        if ($weight) {
            $query->where('weight', $weight);
        }

        // Fetch the filtered results
        $products = $query->get();

        // Pass the filtered results to the view
        return view('bikes.index', compact('products'));
    }

}
