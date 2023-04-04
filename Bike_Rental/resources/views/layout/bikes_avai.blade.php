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
							<h5 class="title">bikes</h5>
							<ul>
								<li><p><input type="checkbox" checked><span>Road Bike</span></p></li>
								<li><p><input type="checkbox"><span>Mountain Bike</span></p></li>
								<li><p><input type="checkbox"><span>BMX Bike</span></p></li>
								<li><p><input type="checkbox"><span>City Bike</span></p></li>
								<li><p><input type="checkbox"><span>Kids Bike</span></p></li>
							</ul>
						</li>
						<li class="widget wiget-price">
							<h5 class="title">price($)</h5>
							<div id="slider-range"></div>
							<div class="amount-cover">
								<input type="text" id="amount-min">
								<span>&mdash;</span>
								<input type="text" id="amount-max">
							</div>
						</li>
						<li class="widget wiget-gender">
							<h5 class="title">gender</h5>
							<ul>
								<li><p><input type="checkbox"><span>Men’s</span></p></li>
								<li><p><input type="checkbox"><span>Women’s</span></p></li>
								<li><p><input type="checkbox"><span>Kids</span></p></li>
							</ul>
						</li>
						<li class="widget wiget-brand">
							<h5 class="title">brand</h5>
							<ul>
								<li><p><input type="checkbox"><span>Focus</span></p></li>
								<li><p><input type="checkbox"><span>Radon</span></p></li>
								<li><p><input type="checkbox"><span>Cube</span></p></li>
								<li><p><input type="checkbox"><span>Bikes</span></p></li>
								<li><p><input type="checkbox"><span>Cruzee</span></p></li>
							</ul>
						</li>
						<li class="widget wiget-color">
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
						</li>
					</ul>
					<a href="#" class="reset-filter-btn">Reset Filters</a>
				</div>
				<div class="col-12 col-lg-9 shop-cover">
					<div class="baner-shop">
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
					</div>
					<h2 class="title">road bike</h2>
					<div class="shop-sort-cover">
						<div class="sort-left">120 products found</div>
						<div class="sort-right">
							<div class="sort-by">
								<span class="sort-name">sort by:</span>
								<select class="nice-select">
									<option selected="selected" disabled>best selling</option>
									<option>new product</option>
									<option>sale product</option>
								</select>
							</div>
							<ul class="sort-form">
								<li data-atr="large"><i class="fa fa-th-large" aria-hidden="true"></i></li>
								<li data-atr="block" class="active"><i class="fa fa-th" aria-hidden="true"></i></li>
								<li data-atr="list"><i class="fa fa-list" aria-hidden="true"></i></li>
							</ul>
						</div>
					</div>
					<div class="shop-product-cover">
						<div class="row product-cover block">
							<div class="col-12 col-sm-4 prod-item-col">
								<div class="product-item">
									<span class="top-sale">top sale</span>
									<ul class="product-icon-top">
										<li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
									</ul>
									<a href="{{ route('sbike') }}" class="product-img"><img src="../img/prod-1.png" alt="product"></a>
									<div class="product-item-wrap">
										<div class="product-item-cover">
											<div class="price-cover">
												<div class="new-price">$1.699</div>
												<div class="old-price">$1.799</div>
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
							</div>
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