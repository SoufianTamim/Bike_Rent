        <div class="top-panel">
            <div class="container">
                <div class="top-panel-cover">
                    <ul class="header-cont">
                        <li><a href="tel:+212677846064"><i class="fa fa-phone"></i>+212677846064</a></li>
                        <li><a href="mailto:soufiantamim22@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i>soufiantamim22@gmail.com</a></li>
                    </ul>
                    <ul class="icon-right-list">
                        <div class="icon-container">
                            <li><a class="header-like" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>@if (auth()->check()){{ $likesCount }} @endif</span></a></li>
                            <div class="modal">
                                @if(Auth::check() && Auth::user()->status == 'banned') @php Auth::logout(); @endphp  @endif
                                @if (!auth()->check())
                                <div class="title flex">
                                    <h5>Likes</h5>
                                </div>
                                    <p>you are a guest.</p>
                                @elseif($likeItems->count() < 1)
                                <div class="title flex">
                                    <h5>Likes</h5>
                                    </div>
                                    <p>no items liked.</p>
                                @elseif($likeItems->count() >= 1)
                                <div class="title flex">
                                    <h5>Likes</h5>
                                    <form action='/like/clear/ {{ Auth::user()->user_id }}' method="post">
                                        @csrf
                                        <button type="submit" class="btn-delete">
                                            <span id="font-color">clear like</span>
                                        </button>
                                    </form>
                                </div>
                                    @foreach ($likeItems as $likeItem)
                                        <div class="flex">
                                            <form action={{ route('like.delete', $likeItem->like_id) }} method="post">
                                                @csrf
                                                <div class="flex">
                                                    <button class="btn-delete" type="submit">
                                                        <span class="iconify" data-icon="ic:baseline-minus" style="color: red; font-size: 2rem; margin: 0 1rem 0 0;"></span>
                                                    </button>
                                                    <p> {{ $likeItem['name'] }}</p>
                                                </div>
                                            </form>
                                        </div>
                                    @endforeach
                                    <div class="btn-buy">
                                        <a href="" class="btn  "><span>add all to cart</span></a>
                                    </div>
                                @endif
                            </div>
                        </div>







                        {{-- ==================================================================================================== --}}
                        <li><a class="header-user" href="{{ url('/profile') }}"><i class="fa fa-user{{ Request::route()->getName() == 'profile' ? '' : ' active' }}" aria-hidden="true"></i></a></li>
                        {{-- ==================================================================================================== --}}
                        <div class="icon-container">
                            <li><a class="header-cart" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                            <div class="modal">
                                 @php
                                    $totalPrice = 0;
                                @endphp
                                @if (!auth()->check())
                                <div class="title flex">
                                <h5>Cart</h5>
                            </div>
                            <p>you are a guest.</p>

                                @elseif($likeItems->count() < 1)
                                <div class="title flex">
                                <h5>Cart</h5>
                            </div>
                            <p class="not-product"> no items found.</p>

                                @elseif($likeItems->count() >= 1)
                                <div class="title flex">
                                    <h5>Cart</h5>
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
                                        <a href="" class="btn  "><span>Proceed To Checkout</span></a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
