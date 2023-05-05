<x-master-layout>
<div class="all">
    <div class="promo_card">
        <h1>
            @if ($flag == "new")
                add a new product
            @else 
                modify your product     
            @endif
        </h1>
    </div>

    <div class="form-cont">
        @if ($errors->any())
            <div class="red-err">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
<form action="{{$route}}" method="POST" enctype="multipart/form-data">      
        @csrf   
        <input type="text" name="name" placeholder="Name" value={{ ($flag == "new")?old('name'):$product->name}}>
        
        <input type="text" name="manufacturer" placeholder="manufacturer" value={{($flag == "new")?old('manufacturer'):$product->manufacturer}}>
        
        <input type="text" name="model" placeholder="model" value={{($flag == "new")?old('model'):$product->model}}>
        
        <input type="text" name="available_quantity" placeholder="available quantity" value={{($flag == "new")?old('available_quantity'):$product->available_quantity}}>
        
        <input type="text" name="location" placeholder="location" value={{($flag == "new")?old('location'):$product->location}}>
        
        <input type="file" name="image1" placeholder="image 1" @if ($flag == "modify") value="{{$product->image1}}" @endif>
        <input type="file" name="image2" placeholder="image 2" @if ($flag == "modify") value="{{$product->image2}}" @endif>
        <input type="file" name="image3" placeholder="image 3" @if ($flag == "modify") value="{{$product->image3}}" @endif>
        <input type="file" name="image4" placeholder="image 4" @if ($flag == "modify") value="{{$product->image4}}" @endif>

        
        <input type="number" name="weight" placeholder="weight" value={{($flag == "new")?old('weight'):$product->weight}}>
        
        <input type="number" name="price" placeholder="price" value={{($flag == "new")?old('price'):$product->price}}>        
        
        <input type="date" name="created_at" placeholder="created at" value={{($flag == "new")?old('created_at'):$product->created_at}}>
        
        <select name="size" id="">
            <option value="" selected disabled> -- Select a wheel size -- </option>
            <option value="12" @if ( old('size') == "12") selected @endif>12</option>
            <option value="16" @if ( old('size') == "16") selected @endif>16</option>
            <option value="20" @if ( old('size') == "20") selected @endif>20</option>
            <option value="24" @if ( old('size') == "24") selected @endif>24</option>
            <option value="26" @if ( old('size') == "26") selected @endif>26</option>
            <option value="27.5" @if ( old('size') == "27.5") selected @endif>27.5</option>
            <option value="29" @if ( old('size') == "29") selected @endif>29</option>
        </select>
            
        <select name="category" id="">
            <option value="" selected disabled> <-- Select a Category --> </option>
            <option value="mountain bike" @if ( old('category') == "mountain bike") selected @endif>mountain bike</option>
            <option value="road bike" @if ( old('category') == "road bike") selected @endif>road bike</option>
            <option value="hybrid bike" @if ( old('category') == "hybrid bike") selected @endif>hybrid bike</option>
            <option value="folding bike" @if ( old('category') == "folding bike") selected @endif>folding bike</option>
            <option value="tantem bike" @if ( old('category') == "tantem bike") selected @endif>tantem bike</option>
            <option value="electric bike" @if ( old('category') == "electric bike") selected @endif>electric bike</option>
            <option value="cruiser bike" @if ( old('category') == "cruiser bike") selected @endif>cruiser bike</option>
            <option value="fatbike" @if ( old('category') == "fatbike") selected @endif>fat bike</option>
        </select>

      <select name="condition" id="">
        <option value="" selected disabled>  <-- Select a condition --> </option>
        <option value="new"      {{ (old('condition') ?? ($flag == "modify" && $product->condition == "new")) ? 'selected' : '' }}>new</option>
        <option value="like new" {{ (old('condition') ?? ($flag == "modify" && $product->condition == "like new")) ? 'selected' : '' }}>like new</option>
        <option value="excelent" {{ (old('condition') ?? ($flag == "modify" && $product->condition == "excelent")) ? 'selected' : '' }}>excelent</option>
        <option value="good"     {{ (old('condition') ?? ($flag == "modify" && $product->condition == "good")) ? 'selected' : '' }}>good</option>
        <option value="fair"     {{ (old('condition') ?? ($flag == "modify" && $product->condition == "fair")) ? 'selected' : '' }}>fair</option>
        <option value="poor"     {{ (old('condition') ?? ($flag == "modify" && $product->condition == "poor")) ? 'selected' : '' }}>poor</option>
    </select>
    <textarea name="description" id="" cols="50" rows="3" placeholder="description">{{($flag == "new")?old('description'):$product->description }}</textarea>
    <textarea name="maintenance_history" id="" cols="50" rows="3" placeholder="maintenance history">{{($flag == "new")?old('maintenance_history'):$product->maintenance_history }}</textarea>
    <input type="submit" value="ADD PRODUCT">
    </form>

    </div>
    </div>
</x-master-layout>