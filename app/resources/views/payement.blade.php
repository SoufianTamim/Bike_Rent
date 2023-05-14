@include('layout.header')
@include('layout.Title')





<div class="container-card-payment">
    <div class="shop-product-cover">
        <div class="row product-cover list">
            <div class="col-12 col-sm-4 prod-item-col">
                <div class="product-item">
                    <span class="top-sale">top sale</span>
                    <ul class="product-icon-top">
                        {{-- <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li> --}}
                        <li><a href="#"><i class="fa fa-trash" style="color: #ff0000;" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-x" style="color: #ff0000;"></i></a></li>
                    </ul>
                    <a href="#" class="product-img"><img src="" alt="product"></a>
                    <div class="product-item-wrap">
                        <div class="product-item-cover">
                            <div class="price-cover">
                                <div class="new-price">1.699 DH</div>
                                {{-- <div class="old-price">$1.799</div> --}}
                            </div>
                            <h6 class="prod-title"><a href="">Granite Peak 24" <br>Girls Mountain Bike</a></h6>
                            {{-- <a href="single-shop.html" class="btn"><span>buy now</span></a> --}}
                        </div>
                        {{-- <div class="prod-info">
						<ul class="prod-list">
							<li>Frame Size: <span>17</span></li>
							<li>Class: <span>City</span></li>
							<li>Number of speeds: <span>7</span></li>
							<li>Type: <span>Rigid</span></li>
							<li>Country registration: <span>USA</span></li>
						</ul>
					</div> --}}
                    </div>
                </div>


                <div class="product-item">
                    <span class="top-sale">top sale</span>
                    <ul class="product-icon-top">
                        {{-- <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li> --}}
                        <li><a href="#"><i class="fa fa-trash" style="color: #ff0000;" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-x" style="color: #ff0000;"></i></a></li>
                    </ul>
                    <a href="#" class="product-img"><img src="" alt="product"></a>
                    <div class="product-item-wrap">
                        <div class="product-item-cover">
                            <div class="price-cover">
                                <div class="new-price">1.699 DH</div>
                                {{-- <div class="old-price">$1.799</div> --}}
                            </div>
                            <h6 class="prod-title"><a href="">Granite Peak 24" <br>Girls Mountain Bike</a></h6>
                            {{-- <a href="single-shop.html" class="btn"><span>buy now</span></a> --}}
                        </div>
                        {{-- <div class="prod-info">
						<ul class="prod-list">
							<li>Frame Size: <span>17</span></li>
							<li>Class: <span>City</span></li>
							<li>Number of speeds: <span>7</span></li>
							<li>Type: <span>Rigid</span></li>
							<li>Country registration: <span>USA</span></li>
						</ul>
					</div> --}}
                    </div>
                </div>


            </div>
        </div>
    </div>



<form action="" method="POST">

        <label for="selected_bike">SELECTED PERIOD:</label><br>
        <div class="flex-row">
            <input type="number" id="period" name="booking_period">
            <select class="nice-select" style="display: none;">
                <option>DAYS</option>
                <option>WEEK</option>
                <option>MONTH</option>
            </select>
        </div>


		<label for="pickup_location">PICKUP LOCATION:</label><br>
        <input type="text" id="pickup_location" name="pickup_location"><br><br>

        <label for="drop_location">DROP LOCATION:</label><br>
        <input type="text" id="drop_location" name="drop_location"><br><br>

        {{-- <label for="quantity">QUANTITY:</label><br>
        <input type="number" id="quantity" name="quantity" min="1"><br><br> --}}

        <label for="additional_options">ADDITIONAL OPTIONS:</label><br>
        <input type="checkbox" id="helmet" name="helmet" value="helmet">
        <label for="helmet">Helmet</label><br>
        <input type="checkbox" id="locks" name="locks" value="locks">
        <label for="locks">Locks</label><br>
        <input type="checkbox" id="other" name="other" value="other">
        <label for="other">Other</label><br><br>




        <input type="checkbox" id="terms_and_conditions" name="terms_and_conditions" required>
        <label for="terms_and_conditions">I accept the terms and conditions</label><br><br>


        <label for="safety_guidelines">SAFETY GUIDELINES:</label><br>
        <ul>
            <li>read safety guideleness</li>
            <li>wear helmet </li>
            <li>wera galsses </li>
            <li>do not go too fast </li>
            <li>always stay safe</li>
        </ul>



        <div class="container-card-payment">
            <button type="submit" class="btn "><span>Pay</span></button>
        </div>
    </form>




</div>



@include('layout.footer')
