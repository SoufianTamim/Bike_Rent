<div class="tab-pane fade" id="rentals" role="tabpanel" aria-labelledby="rentals-tab">
    <h3>rentals</h3>
    <div class="shop-product-cover">
        <div class="row product-cover block">
            @foreach ($bookings as $booking)
                <div class="col-12 col-sm-4 prod-item-col">
                    <div class="product-item">
                        <span class="top-sale">{{ $booking->availability }}</span>
                        <ul class="product-icon-top">
                            <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                            <form action="{{ route('like.store') }}" method="post">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $booking->product_id }}">
                                <button type="submit" class="btn-delete"><span><i class="fa fa-heart" aria-hidden="true"></i></span></button>
                            </form>
                        </ul>
                        <a href="/product/single/{{ $booking->product_id }}" class="product-img"><img src="{{ $product->image1 }}" alt="product"></a>
                        <div class="product-item-wrap">
                            <div class="product-item-cover">
                                <div class="price-cover">
                                    <div class="new-price">{{ $booking->price }} DH/DAY</div>
                                    <div class="old-price">{{ $booking->price }} DH</div>
                                </div>
                                <h6 class="prod-title"><a href="/product/single/{{ $booking->product_id }}">{{ $booking->name }}<br>{{ $booking->category }}</a></h6>
                            </div>
                            <div class="prod-info">
                                <ul class="prod-list">
                                    <li>Category: <span>{{ $booking->category }}</span></li>
                                    <li>Number of speeds: <span>{{ $booking->speeds_number }}</span></li>
                                    <li>Wheel Size: <span>{{ $booking->size }}</span></li>
                                    <li>Condition : <span>{{ $booking->condition }}</span></li>
                                    <li>Location : <span>{{ $booking->location }}</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
