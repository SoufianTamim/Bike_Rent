<div class="tab-pane fade" id="rentals" role="tabpanel" aria-labelledby="rentals-tab">
    <h3>rentals</h3>
    <div class="shop-product-cover">
        <div class="row product-cover block">
            @foreach ($bookings as $booking)
                <div class="col-12 col-sm-4 prod-item-col">
                    <div class="product-item">
                        <span class="top-sale">top sale</span>
                        <ul class="product-icon-top">
                            <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                        </ul>
                        <a href="/product/single/{{ $booking->product_id }}" class="product-img"><img src="{{ $booking->image1 }}" alt="product"></a>
                        <div class="product-item-wrap">
                            <div class="product-item-cover">
                                <div class="price-cover">
                                    <div class="new-price"></div>
                                </div>
                                <h6 class="prod-title"><a href="single-shop.html">Granite Peak 24" <br>Girls Mountain Bike</a></h6>
                                <a href="single-shop.html" class="btn"><span>buy now</span></a>
                            </div>
                            <div class="prod-info">
                                <ul class="prod-list">
                                    <li>Frame Size: <span>17</span></li>
                                    <li>Class: <span>City</span></li>
                                    <li>Number of speeds: <span>7</span></li>
                                    <li>Type: <span>Rigid</span></li>
                                    <li>Country registration: <span>USA</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
