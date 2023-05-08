	<!--===================== BIKES =====================-->
	<section class="s-shop">
		<div class="container">
			<div class="shop-sidebar-btn btn"><span>filter</span></div>
			<div class="row">
				<div class="col-12 col-lg-3 shop-sidebar">
					<ul class="widgets wigets-shop">
						<li class="widget wiget-cart">
							<h5 class="title">Cart</h5>
							<p class="not-product">No products in the cart.</p>
						</li>
						<li class="widget wiget-shop-category">
							<h5 class="title">categories</h5>
							<ul>
								<li><p><input type="checkbox" checked><span>Road Bike</span></p></li>
								<li><p><input type="checkbox"><span>Mountain Bike</span></p></li>
								<li><p><input type="checkbox"><span>BMX Bike</span></p></li>
								<li><p><input type="checkbox"><span>City Bike</span></p></li>
								<li><p><input type="checkbox"><span>Kids Bike</span></p></li>
								<li><p><input type="checkbox"><span>Safety Products</span></p></li>
							</ul>
						</li>
						<li class="widget wiget-brand">
							<h5 class="title">Brand</h5>
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
							<h5 class="title">condition</h5>
							<select class="nice-select">
								<option>new</option>
								<option>like new</option>
								<option>excelent</option>
								<option>good</option>
								<option>poor</option>
							</select>
						</li>
						<li class="widget wiget-brand">
							<h5 class="title">Wheel Size</h5>
							<select class="nice-select">
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
								<input type="text" id="amount-min">
								<span>&mdash;</span>
								<input type="text" id="amount-max">
							</div>
						</li>
						<li class="widget wiget-price">
							<h5 class="title">speeds</h5>
							<div class="amount-cover">
								<input type="number" min="1" max="20" id="speeds">
							</div>
						</li>
						<li class="widget wiget-price">
							<h5 class="title">weight</h5>
							<div class="amount-cover">
								<input type="number" min="1" max="100" id="weight" width="100px">
							</div>
						</li>
						{{-- <li class="widget wiget-color">
							<h5 class="title">color</h5>
							<ul>
								<li style="background: #f3deca"></li>
								<li style="background: #fa9483"></li>
								<li style="background: #2d4057"></li>
								<li style="background: #4097aa"></li>
								<li style="background: #0ac693"></li>
								<li style="background: #0c5061"></li>
								<li style="background: #f74440"></li>
								<li style="background: #e0e44a"></li>
							</ul>
						</li> --}}
					</ul>
					<a href="{{ route('bikes')}}" class="btn"><span>search</span></a>
					<a href="#" class="reset-filter-btn">Reset Filters</a>
				</div>
				<div class="col-12 col-lg-9 shop-cover">
					{{-- <div class="baner-shop">
						<span class="mask"></span>
						<img src="../img/banner-shop.jpg" alt="img">
						<div class="baner-item-content">
							<h2>our discount program</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmmpor incididunt ut labore et dolore magna aliqua.</p>
							<a href="{{ route('sbike') }}" class="btn"><span>read more</span></a>
							<div class="banner-sale-cover">
								<div class="banner-sale">30% off</div>
								<p>Lorem ipsum dolor sit amet</p>
							</div>
						</div>
					</div> --}}
					<h2 class="title">road bike</h2>
					<div class="shop-sort-cover">
						<div class="sort-left">{{ $count = DB::table('products')->count(); }} products found</div>
						<div class="sort-right">
							<div class="sort-by">
								<span class="sort-name">sort by:</span>
								<select class="nice-select">
									<option>best renting</option>
									<option>new product</option>
									<option>rent product</option>
								</select>
							</div>
							{{-- <ul class="sort-form">
								<li data-atr="large"><i class="fa fa-th-large" aria-hidden="true"></i></li>
								<li data-atr="block" class="active"><i class="fa fa-th" aria-hidden="true"></i></li>
								<li data-atr="list"><i class="fa fa-list" aria-hidden="true"></i></li>
							</ul> --}}
						</div>
					</div>
					<div class="shop-product-cover">
						<div class="row product-cover block">
							@foreach ($products as $product)
							<div class="col-12 col-sm-4 prod-item-col">
								<div class="product-item">
									<span class="top-sale">top Rent</span>
									<ul class="product-icon-top">
										<li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
									</ul>
									<a href="/product/single/{{$product->product_id}}" class="product-img"><img src="{{$product->image1 }}" alt="product"></a>
									<div class="product-item-wrap">
										<div class="product-item-cover">
											<div class="price-cover">
												<div class="new-price">{{$product->price }} DH/DAY</div>
												<div class="old-price">{{$product->price }} DH</div>
											</div>
											<h6 class="prod-title"><a href="/product/single/{{$product->product_id}}">{{$product->name }}<br>{{$product->category }}</a></h6>
											{{-- <a href="/product/single/{{$product->product_id}}" class="btn"><span>DETAILS </span></a> --}}
                    						<a href="#" class="btn btn-wishlist"><span>to cart</span></a>
										</div>
										<div class="prod-info">
											<ul class="prod-list">
												<li>Category: <span>{{ $product->category }}</span></li>
												<li>Number of speeds: <span>7</span></li>
												<li>Wheel Size: <span>{{ $product->size }}</span></li>
												<li>Condition : <span>{{ $product->condition }}</span></li>
												<li>Location  : <span>{{ $product->location }}</span></li>
											</ul>
										</div>
									</div>
								</div>
							</div>

							@endforeach
							{{-- <div class="col-12 col-sm-4 prod-item-col">
								<div class="product-item">
									<ul class="product-icon-top">
										<li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
									</ul>
									<a href="{{ route('sbike') }}" class="product-img"><img src="../img/prod-2.png" alt="product"></a>
									<div class="product-item-wrap">
										<div class="product-item-cover">
											<div class="price-cover">
												<div class="new-price">$1.699</div>
											</div>
											<h6 class="prod-title"><a href="{{ route('sbike') }}">Hyper E-Ride Bike 700C <br>20+ Mile Range</a></h6>
											<a href="{{ route('sbike') }}" class="btn"><span>RENT NOW</span></a>
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
							</div> --}}
							{{-- <div class="col-12 col-sm-4 prod-item-col">
								<div class="product-item">
									<span class="sale">11%</span>
									<ul class="product-icon-top">
										<li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
									</ul>
									<a href="{{ route('sbike') }}" class="product-img"><img src="../img/prod-3.png" alt="product"></a>
									<div class="product-item-wrap">
										<div class="product-item-cover">
											<div class="price-cover">
												<div class="new-price">$1.699</div>
												<div class="old-price">$1.799</div>
											</div>
											<h6 class="prod-title"><a href="{{ route('sbike') }}">Lightweight M370-27speed <br>Aluminum Alloy Mantis</a></h6>
											<a href="{{ route('sbike') }}" class="btn"><span>RENT NOW</span></a>
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
							<div class="col-12 col-sm-4 prod-item-col">
								<div class="product-item">
									<ul class="product-icon-top">
										<li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
									</ul>
									<a href="{{ route('sbike') }}" class="product-img"><img src="../img/prod-4.png" alt="product"></a>
									<div class="product-item-wrap">
										<div class="product-item-cover">
											<div class="price-cover">
												<div class="new-price">$1.699</div>
											</div>
											<h6 class="prod-title"><a href="{{ route('sbike') }}">New Spring Beach Cruiser <br>Bicycle Chrome</a></h6>
											<a href="{{ route('sbike') }}" class="btn"><span>RENT NOW</span></a>
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
							<div class="col-12 col-sm-4 prod-item-col">
								<div class="product-item">
									<ul class="product-icon-top">
										<li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
									</ul>
									<a href="{{ route('sbike') }}" class="product-img"><img src="../img/prod-5.png" alt="product"></a>
									<div class="product-item-wrap">
										<div class="product-item-cover">
											<div class="price-cover">
												<div class="new-price">$1.699</div>
											</div>
											<h6 class="prod-title"><a href="{{ route('sbike') }}">Granite Peak 24" <br>Girls Mountain Bike</a></h6>
											<a href="{{ route('sbike') }}" class="btn"><span>RENT NOW</span></a>
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
							<div class="col-12 col-sm-4 prod-item-col">
								<div class="product-item">
									<ul class="product-icon-top">
										<li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
									</ul>
									<a href="{{ route('sbike') }}" class="product-img"><img src="../img/prod-6.png" alt="product"></a>
									<div class="product-item-wrap">
										<div class="product-item-cover">
											<div class="price-cover">
												<div class="new-price">$1.699</div>
											</div>
											<h6 class="prod-title"><a href="{{ route('sbike') }}">Aluminum and Fork <br>Mountain Sr-26omg</a></h6>
											<a href="{{ route('sbike') }}" class="btn"><span>RENT NOW</span></a>
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
							<div class="col-12 col-sm-4 prod-item-col">
								<div class="product-item">
									<ul class="product-icon-top">
										<li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
									</ul>
									<a href="{{ route('sbike') }}" class="product-img"><img src="../img/prod-7.png" alt="product"></a>
									<div class="product-item-wrap">
										<div class="product-item-cover">
											<div class="price-cover">
												<div class="new-price">$1.699</div>
											</div>
											<h6 class="prod-title"><a href="{{ route('sbike') }}">Steel Frame MTB Bike <br>with 21 Speed</a></h6>
											<a href="{{ route('sbike') }}" class="btn"><span>RENT NOW</span></a>
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
							<div class="col-12 col-sm-4 prod-item-col">
								<div class="product-item">
									<ul class="product-icon-top">
										<li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
									</ul>
									<a href="{{ route('sbike') }}" class="product-img"><img src="../img/prod-8.png" alt="product"></a>
									<div class="product-item-wrap">
										<div class="product-item-cover">
											<div class="price-cover">
												<div class="new-price">$1.699</div>
											</div>
											<h6 class="prod-title"><a href="{{ route('sbike') }}">Leopard Rider No Chain <br>Mountain Bicycle</a></h6>
											<a href="{{ route('sbike') }}" class="btn"><span>RENT NOW</span></a>
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
							<div class="col-12 col-sm-4 prod-item-col">
								<div class="product-item">
									<span class="sale">11%</span>
									<ul class="product-icon-top">
										<li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
									</ul>
									<a href="{{ route('sbike') }}" class="product-img"><img src="../img/prod-3.png" alt="product"></a>
									<div class="product-item-wrap">
										<div class="product-item-cover">
											<div class="price-cover">
												<div class="new-price">$1.699</div>
												<div class="old-price">$1.799</div>
											</div>
											<h6 class="prod-title"><a href="{{ route('sbike') }}">Lightweight M370-27speed <br>Aluminum Alloy Mantis</a></h6>
											<a href="{{ route('sbike') }}" class="btn"><span>RENT NOW</span></a>
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
							</div> --}}
						</div>
						<div class="pagination-cover">
							<ul class="pagination">
								<li class="pagination-item item-prev"><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
								<li class="pagination-item active"><a href="#">1</a></li>
								<li class="pagination-item"><a href="#">2</a></li>
								<li class="pagination-item"><a href="#">3</a></li>
								<li class="pagination-item"><a href="#">4</a></li>
								<li class="pagination-item"><a href="#">5</a></li>
								<li class="pagination-item item-next"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--=================== BIKES END ===================-->