<x-master-layout>
    <div class="all">
        <div class="promo_card">
            <h1>
                @if ($flag == 'new')
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
            <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <input type="text" name="name" placeholder="Name" value={{ $flag == 'new' ? old('name') : $product->name }}>
                    <input type="text" name="manufacturer" placeholder="manufacturer" value={{ $flag == 'new' ? old('manufacturer') : $product->manufacturer }}>
                </div>
                <div class="form-row">
                    <input type="text" name="model" placeholder="model" value={{ $flag == 'new' ? old('model') : $product->model }}>
                    <input type="text" name="location" placeholder="location" value={{ $flag == 'new' ? old('location') : $product->location }}>
                </div>
                <div class="form-row">
                    <input type="file" name="image1" placeholder="image 1" @if ($flag == 'modify') value="{{ $product->image1 }}" @endif>
                    <input type="file" name="image2" placeholder="image 2" @if ($flag == 'modify') value="{{ $product->image2 }}" @endif>
                </div>
                <div class="form-row">
                    <input type="file" name="image3" placeholder="image 3" @if ($flag == 'modify') value="{{ $product->image3 }}" @endif>
                    <input type="file" name="image4" placeholder="image 4" @if ($flag == 'modify') value="{{ $product->image4 }}" @endif>
                </div>
                <div class="form-row">
                    <input type="number" name="speeds_number" max="20" min="1" placeholder="number of speeds" value={{ $flag == 'new' ? old('speeds_number') : $product->speeds_number }}>
                    <input type="number" name="weight" placeholder="weight" value={{ $flag == 'new' ? old('weight') : $product->weight }}>
                </div>
                <div class="form-row">
                    <input type="number" name="price" placeholder="price" value={{ $flag == 'new' ? old('price') : $product->price }}>
                    <input type="date" disabled hidden value="{{date('Y-m-d')}}" name={{ $flag == 'new' ? 'created_at' : 'updated_at' }}>

                    <select name="condition" id="">
                        <option value="" selected disabled><-- Select a condition --></option>
                        <option value="new"      {{ old('condition') ?? $flag == 'modify' && $product->condition == 'new' ? 'selected' : '' }}>new</option>
                        <option value="like new" {{ old('condition') ?? $flag == 'modify' && $product->condition == 'like new' ? 'selected' : '' }}>like new</option>
                        <option value="excelent" {{ old('condition') ?? $flag == 'modify' && $product->condition == 'excelent' ? 'selected' : '' }}>excelent</option>
                        <option value="good"     {{ old('condition') ?? $flag == 'modify' && $product->condition == 'good' ? 'selected' : '' }}>good</option>
                        <option value="fair"     {{ old('condition') ?? $flag == 'modify' && $product->condition == 'fair' ? 'selected' : '' }}>fair</option>
                        <option value="poor"     {{ old('condition') ?? $flag == 'modify' && $product->condition == 'poor' ? 'selected' : '' }}>poor</option>
                    </select>
                </div>
                <div class="form-row">
                    <select name="size" id="">
                        <option value="" selected disabled> -- Select a wheel size -- </option>
                        <option value="12" {{ (old('size') == '12' || ($flag == 'modify' && $product->size == '12')) ? 'selected' : '' }}>12</option>
                        <option value="16" {{ (old('size') == '16' || ($flag == 'modify' && $product->size == '16')) ? 'selected' : '' }}>16</option>
                        <option value="20" {{ (old('size') == '20' || ($flag == 'modify' && $product->size == '20')) ? 'selected' : '' }}>20</option>
                        <option value="24" {{ (old('size') == '24' || ($flag == 'modify' && $product->size == '24')) ? 'selected' : '' }}>24</option>
                        <option value="26" {{ (old('size') == '26' || ($flag == 'modify' && $product->size == '26')) ? 'selected' : '' }}>26</option>
                        <option value="27.5" {{ (old('size') == '27.5' || ($flag == 'modify' && $product->size == '27.5')) ? 'selected' : '' }}>27.5</option>
                        <option value="29" {{ (old('size') == '29' || ($flag == 'modify' && $product->size == '29')) ? 'selected' : '' }}>29</option>
                    </select>
                    <select name="category" id="">
                        <option value="" selected disabled><-- Select a Category --> </option>
                        <option value="mountain bike" {{ (old('category') == 'mountain bike' || ($flag == 'modify' && $product->category == 'mountain bike')) ? 'selected' : '' }}>mountain bike</option>
                        <option value="road bike" {{ (old('category') == 'road bike' || ($flag == 'modify' && $product->category == 'road bike')) ? 'selected' : '' }}>road bike</option>
                        <option value="hybrid bike" {{ (old('category') == 'hybrid bike' || ($flag == 'modify' && $product->category == 'hybrid bike')) ? 'selected' : '' }}>hybrid bike</option>
                        <option value="folding bike" {{ (old('category') == 'folding bike' || ($flag == 'modify' && $product->category == 'folding bike')) ? 'selected' : '' }}>folding bike</option>
                        <option value="tandem bike" {{ (old('category') == 'tandem bike' || ($flag == 'modify' && $product->category == 'tandem bike')) ? 'selected' : '' }}>tandem bike</option>
                        <option value="electric bike" {{ (old('category') == 'electric bike' || ($flag == 'modify' && $product->category == 'electric bike')) ? 'selected' : '' }}>electric bike</option>
                        <option value="cruiser bike" {{ (old('category') == 'cruiser bike' || ($flag == 'modify' && $product->category == 'cruiser bike')) ? 'selected' : '' }}>cruiser bike</option>
                        <option value="rigid bike" {{ (old('category') == 'rigid bike' || ($flag == 'modify' && $product->category == 'rigid bike')) ? 'selected' : '' }}>rigid bike</option>
                        <option value="fat bike" {{ (old('category') == 'fat bike' || ($flag == 'modify' && $product->category == 'fat bike')) ? 'selected' : '' }}>fat bike</option>
                    </select>

                </div>
                <div class="form-row">
                    <textarea name="description" id="" cols="50" rows="3" placeholder="description">{{ $flag == 'new' ? old('description') : $product->description }}</textarea>
                    <textarea name="maintenance_history" id="" cols="50" rows="3" placeholder="maintenance history">{{ $flag == 'new' ? old('maintenance_history') : $product->maintenance_history }}</textarea>
                </div>
                <input type="submit" value="ADD PRODUCT">
            </form>
        </div>
    </div>
</x-master-layout>
