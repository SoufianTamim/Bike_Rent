<!-- ============== S-SINGLE-PRODUCT ============== -->
<section class="s-single-product">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5">
                <!--===== SLIDER-SINGLE-FOR =====-->
                <div class="slider-single-for">
                    <div class="slide-single-for">
                        <a href="../img/single-slider-1.jpg" class="single-for-img" data-fancybox="prod1">
                            <img src="../img/single-slider-1.jpg" alt="img">
                        </a>
                    </div>
                    <div class="slide-single-for">
                        <a href="../img/single-slider-2.jpg" class="single-for-img" data-fancybox="prod1">
                            <img src="../img/single-slider-2.jpg" alt="img">
                        </a>
                    </div>
                    <div class="slide-single-for">
                        <a href="../img/single-slider-3.jpg" class="single-for-img" data-fancybox="prod1">
                            <img src="../img/single-slider-3.jpg" alt="img">
                        </a>
                    </div>
                    <div class="slide-single-for">
                        <a href="../img/single-slider-4.jpg" class="single-for-img" data-fancybox="prod1">
                            <img src="../img/single-slider-4.jpg" alt="img">
                        </a>
                    </div>
                </div>
                <!--=== SLIDER-SINGLE-FOR END ===-->
                <!--===== SLIDER-SINGLE-NAV =====-->
                <div class="slider-single-nav">
                    <div class="slide-single-nav">
                        <div class="single-nav-img">
                            <img src="../img/single-slider-1.jpg" alt="img">
                        </div>
                    </div>
                    <div class="slide-single-nav">
                        <div class="single-nav-img">
                            <img src="../img/single-slider-2.jpg" alt="img">
                        </div>
                    </div>
                    <div class="slide-single-nav">
                        <div class="single-nav-img">
                            <img src="../img/single-slider-3.jpg" alt="img">
                        </div>
                    </div>
                    <div class="slide-single-nav">
                        <div class="single-nav-img">
                            <img src="../img/single-slider-4.jpg" alt="img">
                        </div>
                    </div>
                </div>
                <!--=== SLIDER-SINGLE-NAV END ===-->
            </div>
            <div class="col-12 col-md-7 single-shop-left">
                <h2 class="title">{{$product->size}} inch {{$product->name}}</h2>
                <div class="single-price">
                    <div class="new-price">{{$product->price}} DH/DAY</div>
                    <div class="old-price">{{$product->price}} DH</div>
                </div>
                <div class="single-color">
                    <label>category:</label>
                    <span class="name-color">{{$product->category}} </span>
                </div>
                <div class="single-color">
                    <label>number of speeds :</label>
                    <span class="name-color">6</span>
                </div>
                <div class="single-color">
                    <label>condition :</label>
                    <span class="name-color">{{$product->condition}}</span>
                    {{-- <span class="color" style="background-color: #e0e44a;"></span> --}}
                </div>
                 <div class="single-color">
                    <label>size :</label>
                    <span class="name-color">{{$product->size}}</span>
                    {{-- <span class="color" style="background-color: #e0e44a;"></span> --}}
                </div>
                   <div class="single-color">
                    <label>weight :</label>
                    <span class="name-color">{{$product->weight}} kg</span>
                    {{-- <span class="color" style="background-color: #e0e44a;"></span> --}}
                </div>
                 <div class="single-color">
                    <label>location :</label>
                    <span class="name-color">{{$product->location}}</span>
                    {{-- <span class="color" style="background-color: #e0e44a;"></span> --}}
                </div>
                <div class="frame-size">
                    <label>description :</label>
                    <p>{{$product->description}} </p>
                </div>
                {{-- <div class="frame-size">
                    <label>wheel category:</label>
                    <p>{{$product->category}} </p>
                    <ul>
                        <li class="active">S</li>
                        <li>M</li>
                        <li>L</li>
                    </ul>
                </div>
                <div class="wheel-size">
                    <label>wheel size:</label>
                    <p>{{$product->size}} </p>
                    <ul>
                        <li class="active">24</li>
                        <li>26</li>
                        <li>28</li>
                    </ul>
                </div> --}}
                {{-- <div class="single-quanity">
                    <label>quanity:</label>
                    <input id="quanity" name="value" value="1">
                </div> --}}
                <div class="single-btn-cover">
                    <a href="#" class="btn btn-buy-now"><span>Rent now</span></a>
                    <a href="#" class="btn btn-wishlist"><span>add to cart</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============ S-SINGLE-PRODUCT END ============ -->
