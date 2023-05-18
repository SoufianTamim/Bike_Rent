@include('layout.header')
@include('layout.Title')

<div class="two-checkout">
    <div class="form-checkout">
        <form action="/checkout" method="POST">
            <label for="selected_bike">SELECTED PERIOD:</label><br>
            <div class="flex-row">
                <input type="number" id="period" name="booking_period">
                <select class="nice-select" style="display: none;">
                    <option>DAYS</option>
                    <option>WEEK</option>
                    <option>MONTH</option>
                </select>
            </div>
            <label for="pickup_location" style="margin-top: 60px;">PICKUP LOCATION:</label><br>
            <input type="text" id="pickup_location" name="pickup_location"><br><br>
            <label for="drop_location">DROP LOCATION:</label><br>
            <input type="text" id="drop_location" name="drop_location"><br><br>
            <input type="checkbox" id="terms_and_conditions" name="terms_and_conditions" required>
            <label for="terms_and_conditions">I accept the <a href="terms">terms and conditions</a></label><br><br>
            <div class="container-card-payment">
                <button type="submit" class="btn "><span>Pay</span></button>
            </div>
        </form>
    </div>


    <div class="cards-checkout">
        <div class="shop-product-cover">
            <div class="row product-cover list">
                <div class="col-12 col-sm-4 prod-item-col">
                    @php
                        $totalPrice = 0;
                    @endphp
                    @foreach ($cartItems as $cartItem)
                        <div class="product-item" style="height: 200px; padding-top: 23px;">
                            {{-- <span class="top-sale">top sale</span> --}}
                            <a href="#" class="product-img" style="heigth: 100px;"><img src={{ $cartItem->image1 }} alt="product" "></a>
                            <div class="product-item-wrap">
                                <div class="product-item-cover">
                                    <div class="price-cover">
                                        <div class="new-price">{{ $cartItem->price }} DH</div>
                                    </div>
                                    <h6 class="prod-title"><a href="/product/single/{{ $cartItem->product_id }}">{{ $cartItem->name }} “{{ $cartItem->size }}”<br>{{ $cartItem->category }}</a></h6>
                                </div>
                                <ul class="flex-row" style="justify-content: flex-end;">
                                    <li><a href="#"><i class="fa fa-trash" style="color: #ff0000;" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        @php
                            $totalPrice += $cartItem->price;
                        @endphp
                    @endforeach
                    <hr>
                    <div class="flex-row" style="justify-content: space-between;">
                        <h5 class="Total-title">total </h5>
                        <h5 >{{ $totalPrice }} DH </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('layout.footer')
