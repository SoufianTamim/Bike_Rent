
    @include('layout.header')
    @include('layout.Title')
    <div class="two-checkout">
        <div class="cards-checkout">
            <div class="shop-product-cover">
                <div class="row product-cover list">
                    <div class="col-12 col-sm-4 prod-item-col">
                        @php
                            $totalPrice = 0;
                            $pricePerDay = 0;
                            $pricePerWeek = 0;
                            $pricePerMonth = 0;
                        @endphp
                        @if ($cartItems !== [])
                        @foreach ($cartItems as $cartItem)
                            <div class="product-item" style="height: 200px; padding-top: 23px;">
                                {{-- <span class="top-sale">top sale</span> --}}
                                <a href="#" class="product-img" style="heigth: 100px;"><img src={{ $cartItem->image1 }} alt="product"></a>
                                <div class="product-item-wrap">
                                    <div class="product-item-cover">
                                        <div class="price-cover">
                                            <div class="new-price">{{ $cartItem->price }} DH</div>
                                        </div>
                                        <h6 class="prod-title"><a href="/product/single/{{ $cartItem->product_id }}">{{ $cartItem->name }} “{{ $cartItem->size }}”<br>{{ $cartItem->category }}</a></h6>
                                    </div>
                                    <ul class="flex-row" style="justify-content: flex-end;">
                                        <form action={{ route('cart.delete', $cartItem->cart_id) }} method="post">
                                            @csrf
                                            <div class="flex">
                                                <button class="btn-delete" type="submit">
                                                    <li>><i class="fa fa-trash" style="color: #ff0000;" aria-hidden="true"></i></li>
                                                </button>
                                            </div>
                                        </form>
                                    </ul>
                                </div>
                            </div>
                            @php
                                $totalPrice += $cartItem->price;
                            @endphp
                        @endforeach
                        @else
    @php
        redirect()->route('bikes');
    @endphp



@endif
                        <hr>
                        <div class="flex-row" style="justify-content: space-between;">
                            <h5 class="Total-title">Total</h5>
                            <h5 id="total-price">{{ $totalPrice }} DH</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-checkout">
            <form action="/checkout" method="POST">
                @csrf
                <label for="selected_bike">SELECTED PERIOD:</label><br>
                <div class="flex-row">
                    <input type="number" id="period-input" name="booking_period" value="1" min="1" max="10000" onkeyup="calculateTotalPrice()">
                    <select class="nice-select" id="period-select" name="booking_period_select" onchange="calculateTotalPrice()">
                        <option value="1" data-price="{{ $pricePerDay }}">DAYS</option>
                        <option value="7" data-price="{{ $pricePerWeek }}">WEEK</option>
                        <option value="30" data-price="{{ $pricePerMonth }}">MONTH</option>
                    </select>
                </div>

                <label for="pickup_location" style="margin-top: 60px;">PICKUP LOCATION:</label><br>
                <input type="text" id="pickup_location" name="pickup_location"><br><br>


                <label for="drop_location">DROP LOCATION:</label><br>
                <input type="text" id="drop_location" name="drop_location"><br><br>
                <input type="checkbox" id="terms_and_conditions" name="terms_and_conditions" required>
                <label for="terms_and_conditions">I accept the <a href="terms">terms and conditions</a></label><br><br>
                <div class="container-card-payment">
                    <button type="submit" class="btn"><span>Pay</span></button>
                </div>
            </form>
        </div>
    </div>


    <script>
        function calculateTotalPrice() {
            // Get the total price of all the items in the cart.
            var totalPrice = 0;
            var cartItems = document.querySelectorAll('.product-item');
            for (var i = 0; i < cartItems.length; i++) {
                totalPrice += parseInt(cartItems[i].querySelector('.new-price').innerText);
            }

            // Get the selected period from the user.
            var periodSelect = document.getElementById('period-select');
            var periodInput = document.getElementById('period-input').value;
            var selectedOption = periodSelect.options[periodSelect.selectedIndex];
            var selectedPeriod = parseInt(selectedOption.value);

            // Multiply the total price by the selected period.
            var total = totalPrice * selectedPeriod * periodInput;

            // Display the total price on the checkout page.
            document.getElementById('total-price').innerText = total.toFixed(2) + ' DH';
            document.getElementById('TPrice').value = total.toFixed(2);
        }
    </script>



@include('layout.footer')

