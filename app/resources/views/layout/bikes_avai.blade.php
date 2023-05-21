 <!--===================== BIKES =====================-->
 <section class="s-shop">
     <div class="container">
         <div class="shop-sidebar-btn btn"><span>filter</span></div>
         <div class="row">
             <div class="col-12 col-lg-3 shop-sidebar">
                 <ul class="widgets wigets-shop">
                     <li class="widget wiget-cart"></li>
                     @php
                         $totalPrice = 0;
                     @endphp
                     @if (!auth()->check())
                         <div class="title">
                             <h5>Cart</h5>
                             <hr>
                         </div>
                         @php $text = "you are a guest" @endphp
                         <p>{{ $text }} </p>
                     @elseif ($cartItems->count() < 1)
                         <div class="title ">
                             <h5>Cart</h5>
                             <hr>
                         </div>
                         <p class="not-product">No products in the cart.</p>
                     @elseif ($cartItems->count() >= 1)
                         <div class="title ">
                             <h5>Cart</h5>
                             <hr>
                             <form action='/cart/clear/ {{ Auth::user()->user_id }}' method="post">
                                 @csrf
                                 <button type="submit" class="btn-delete">
                                     <span id="font-color">clear cart</span>
                                 </button>
                             </form>
                         </div>
                         @foreach ($cartItems as $cartItem)
                             <div class="flex">
                                 <form action={{ route('cart.delete', $cartItem->cart_id) }} method="post">
                                     @csrf
                                     <div class="flex">
                                         <button class="btn-delete" type="submit">
                                             <span class="iconify" data-icon="ic:baseline-minus" style="color: red; font-size: 2rem; margin: 0 1rem 0 0;"></span>
                                         </button>
                                         <p> {{ $cartItem['name'] }}</p>
                                     </div>
                                 </form>
                                 <p> {{ $cartItem['price'] }}</p>
                             </div>
                             @php
                                 $totalPrice += $cartItem['price'];
                             @endphp
                         @endforeach
                         <div class=" flex topo">
                             <h5>Total </h5>
                             <h5 class="">{{ $totalPrice }} DH</h5>
                         </div>
                         <div class="btn-buy">
                             <a href="/payement" class="btn  "><span>proceed to checkout</span></a>
                         </div>
                     @endif
                     </li>
                     <form action="" method="get" class="mar-5" >
                     <li class="widget wiget-shop-category">
                         <h5 class="title">categories</h5>
                         <ul>
                             <li>
                                 <p><input type="checkbox" name="category" ><span>Road Bike</span></p>
                             </li>
                             <li>
                                 <p><input type="checkbox" name="category" ><span>Mountain Bike</span></p>
                             </li>
                             <li>
                                 <p><input type="checkbox" name="category" ><span>BMX Bike</span></p>
                             </li>
                             <li>
                                 <p><input type="checkbox" name="category" ><span>City Bike</span></p>
                             </li>
                             <li>
                                 <p><input type="checkbox" name="category" ><span>Kids Bike</span></p>
                             </li>
                             <li>
                                 <p><input type="checkbox" name="category" ><span>Safety Products</span></p>
                             </li>
                         </ul>
                     </li>
                     <li class="widget wiget-brand">
                         <h5 class="title" name="brand" >Brand</h5>
                         <select class="nice-select">
                             <option>Pinarello</option>
                             <option>Eddy Merckx</option>
                             <option>Specialized</option>
                             <option>Giant</option>
                             <option>Trek</option>
                             <option>BMC</option>
                         </select>
                     </li>
                     <li class="widget wiget-brand">
                         <h5 class="title" >condition</h5>
                         <select class="nice-select" name="condition">
                             <option>new</option>
                             <option>like new</option>
                             <option>excelent</option>
                             <option>good</option>
                             <option>poor</option>
                         </select>
                     </li>
                     <li class="widget wiget-brand">
                         <h5 class="title">Wheel Size</h5>
                         <select class="nice-select" name="size">
                             <option>12</option>
                             <option>14</option>
                             <option>16</option>
                             <option>18</option>
                             <option>20</option>
                             <option>22</option>
                             <option>24</option>
                             <option>26</option>
                             <option>27.5</option>
                             <option>29</option>
                         </select>
                     </li>

                     <li class="widget wiget-price">
                         <h5 class="title">price(DH)</h5>
                         <div id="slider-range"></div>
                         <div class="amount-cover">
                             <input type="text" name="amount-min" id="amount-min">
                             <span>&mdash;</span>
                             <input type="text" name="amount-max" id="amount-max">
                         </div>
                     </li>
                     <li class="widget wiget-price">
                         <h5 class="title">speeds</h5>
                         <div class="amount-cover">
                             <input type="number" name="speeds_number" min="1" max="20" id="speeds">
                         </div>
                     </li>
                     <li class="widget wiget-price">
                         <h5 class="title">weight</h5>
                         <div class="amount-cover">
                             <input type="number" name="weight" min="1" max="100" id="weight" width="100px">
                         </div>
                     </li>
                     <li class=" mar-5 flex-row">
                         <button type="submit" class="btn btn-yellow"><span>Filter</span></button>
                         <button  onclick="this.form.reset()" class="btn"><span> Reset </span></button>
                        </li>
                    </form>
                </ul>
             </div>

             <div class="col-12 col-lg-9 shop-cover">

                 <h2 class="title">road bike</h2>
                 <div class="shop-sort-cover">
                     <div class="sort-left">{{ $count = DB::table('products')->count() }} products found</div>
                     <div class="sort-right">
                         <div class="sort-by">
                             <span class="sort-name">sort by:</span>
                             <select class="nice-select">
                                 <option>best renting</option>
                                 <option>new product</option>
                                 <option>rent product</option>
                             </select>
                         </div>

                     </div>
                 </div>
                 <div class="shop-product-cover">
                     <div class="row product-cover block">
                         @foreach ($products as $product)
                             <div class="col-12 col-sm-4 prod-item-col">
                                 <div class="product-item">
                                     <span class="top-sale">{{ $product->availability }}</span>
                                     <ul class="product-icon-top">
                                         <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                         <form action="{{ route('like.store') }}" method="post">
                                             @csrf
                                             <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                                             <button type="submit" class="btn-delete"><span><i class="fa fa-heart" aria-hidden="true"></i></span></button>
                                         </form>
                                     </ul>
                                     <a href="/product/single/{{ $product->product_id }}" class="product-img"><img src="{{ $product->image1 }}" alt="product"></a>
                                     <div class="product-item-wrap">
                                         <div class="product-item-cover">
                                             <div class="price-cover">
                                                 <div class="new-price">{{ $product->price }} DH/DAY</div>
                                                 <div class="old-price">{{ $product->price }} DH</div>
                                             </div>
                                             <h6 class="prod-title"><a href="/product/single/{{ $product->product_id }}">{{ $product->name }}<br>{{ $product->category }}</a></h6>
                                             {{-- <a href="/product/single/{{$product->product_id}}" class="btn"><span>DETAILS </span></a> --}}
                                             @if ($product->availability !== 'booked')
                                                 <form action="{{ route('cart.store') }}" method="post">
                                                     @csrf
                                                     <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                                                     <button type="submit" class="btn btn-wishlist"><span>to cart</span></button>
                                                 </form>
                                             @else
                                                 <button class="btn" disabled><span> Bike Resered Cannot be booked</span></button>
                                             @endif
                                         </div>
                                         <div class="prod-info">
                                             <ul class="prod-list">
                                                 <li>Category: <span>{{ $product->category }}</span></li>
                                                 <li>Number of speeds: <span>7</span></li>
                                                 <li>Wheel Size: <span>{{ $product->size }}</span></li>
                                                 <li>Condition : <span>{{ $product->condition }}</span></li>
                                                 <li>Location : <span>{{ $product->location }}</span></li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         @endforeach
                     </div>
                     {{ $products->links() }}
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--=================== BIKES END ===================-->
