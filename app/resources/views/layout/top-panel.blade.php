        <div class="top-panel">
            <div class="container">
                <div class="top-panel-cover">
                    <ul class="header-cont">
                        <li><a href="tel:+212677846064"><i class="fa fa-phone"></i>+212677846064</a></li>
                        <li><a href="mailto:contact@bike.tamimsoufian.com"><i class="fa fa-envelope" aria-hidden="true"></i>contact@bike.tamimsoufian.com</a></li>
                    </ul>
                    <ul class="icon-right-list">
                        <div class="icon-container">
                            <li><a class="header-like" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>
                                        @if (auth()->check())
                                            {{ $likesCount }}
                                        @endif
                                    </span></a></li>
                            <div class="modal">
                                @if (Auth::check() && Auth::user()->status == 'banned')
                                    @php Auth::logout(); @endphp
                                @endif
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
                                            <form action="{{ route('like.delete', $likeItem->like_id) }}" method="post">
                                                @csrf
                                                <div class="flex">
                                                    <button class="btn-delete" type="submit">
                                                        <span class="iconify" data-icon="ic:baseline-minus" style="color: red; font-size: 2rem; margin: 0 1rem 0 0;"></span>
                                                    </button>
                                                    <p>{{ $likeItem['name'] }}</p>
                                                </div>
                                            </form>
                                            @if ($likeItem->availability !== 'booked')
                                                <form action="{{ route('cart.store') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $likeItem->product_id }}">
                                                    <button type="submit" class="btn-delete">
                                                        <span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17.78" viewBox="0 0 576 512">
                                                                <path fill="gris" d="M0 24C0 10.7 10.7 0 24 0h45.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5l-51.6-271c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zm128 440a48 48 0 1 1 96 0a48 48 0 1 1-96 0zm336-48a48 48 0 1 1 0 96a48 48 0 1 1 0-96zM252 160c0 11 9 20 20 20h44v44c0 11 9 20 20 20s20-9 20-20v-44h44c11 0 20-9 20-20s-9-20-20-20h-44V96c0-11-9-20-20-20s-20 9-20 20v44h-44c-11 0-20 9-20 20z" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </form>
                                            {{-- @elseif (in_array($likeItem->product_id, $cartItems->pluck('product_id')->toArray()))
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <g fill="gray" stroke="gray" stroke-width="1.5">
                                                        <path d="M7.5 18a1.5 1.5 0 1 1 0 3a1.5 1.5 0 0 1 0-3Zm9 0a1.5 1.5 0 1 1 0 3a1.5 1.5 0 0 1 0-3Z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m11 10.8l1.143 1.2L15 9" />
                                                        <path stroke-linecap="round" d="m2 3l.261.092c1.302.457 1.953.686 2.325 1.231c.372.545.372 1.268.372 2.715V9.76c0 2.942.063 3.912.93 4.826c.866.914 2.26.914 5.05.914H12m4.24 0c1.561 0 2.342 0 2.894-.45c.551-.45.709-1.214 1.024-2.743l.5-2.424c.347-1.74.52-2.609.076-3.186c-.443-.577-1.96-.577-3.645-.577h-6.065m-6.066 0H7" />
                                                    </g>
                                                </svg> --}}
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                                    <g fill="red">
                                                        <path fill-rule="evenodd" d="M5.219 2.75H4.2a.75.75 0 0 1 0-1.5h1.603a.75.75 0 0 1 .727.566l1.502 5.937a1.998 1.998 0 0 1 .974-.253h7.989a2.012 2.012 0 0 1 1.955 2.468l-.783 3.461A2.009 2.009 0 0 1 16.21 15H9.79a2.008 2.008 0 0 1-1.956-1.57L7.05 9.967a2.058 2.058 0 0 1-.027-.145a.754.754 0 0 1-.05-.14L5.219 2.75ZM9.25 18.5a1.75 1.75 0 1 0 0-3.5a1.75 1.75 0 0 0 0 3.5Zm7 0a1.75 1.75 0 1 0 0-3.5a1.75 1.75 0 0 0 0 3.5Z" clip-rule="evenodd" opacity=".2" />
                                                        <path d="M3.712 2.5H2.5a.5.5 0 0 1 0-1h1.603a.5.5 0 0 1 .485.379l1.897 7.6a.5.5 0 0 1-.97.242L3.712 2.5Z" />
                                                        <path fill-rule="evenodd" d="M15.495 7.5h-7.99c-.15 0-.3.017-.447.05A2.02 2.02 0 0 0 5.55 9.969l.783 3.461A2.008 2.008 0 0 0 8.29 15h6.422a2.01 2.01 0 0 0 1.956-1.57l.783-3.462A2.012 2.012 0 0 0 15.495 7.5ZM7.283 8.525a.992.992 0 0 1 .223-.025h7.989a1.013 1.013 0 0 1 .98 1.247l-.784 3.462a1.009 1.009 0 0 1-.98.791H8.29c-.468 0-.875-.328-.98-.791l-.783-3.462a1.02 1.02 0 0 1 .757-1.222Z" clip-rule="evenodd" />
                                                        <path d="M17 16.75a1.75 1.75 0 1 1-3.5 0a1.75 1.75 0 0 1 3.5 0Zm-7 0a1.75 1.75 0 1 1-3.5 0a1.75 1.75 0 0 1 3.5 0Z" />
                                                        <path d="M1.15 1.878a.514.514 0 0 1 .728-.727l16.971 16.971a.514.514 0 0 1-.727.727L1.151 1.878Z" />
                                                    </g>
                                                </svg>
                                            @endif
                                        </div>
                                    @endforeach
                                    <div class="btn-buy">
                                        <a href="" class="btn  "><span>add all to cart</span></a>
                                    </div>
                                @endif
                            </div>
                        </div>
                        {{-- ==================================================================================================== --}}
                        <li><a class="header-user" href="{{ url('/profile') }}"><i class="fa fa-user" aria-hidden="true"></i></a></li>
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
                                @elseif($cartItems->count() < 1)
                                    <div class="title flex">
                                        <h5>Cart</h5>
                                    </div>
                                    <p class="not-product"> no items found.</p>
                                @elseif($cartItems->count() >= 1)
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
