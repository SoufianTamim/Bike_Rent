@include('layout.header')
@include('layout.news_Title')

	<!--================ S-NEWS ================-->
	<section class="s-news s-single-blog">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8 blog-cover">
					<div class="post-item-cover">
						<div class="post-header">
							<div class="post-thumbnail">
								<a href="{{ route('snews') }}">
									<img src="../img/blog-2.jpg" alt="img">
								</a>
							</div>
							<div class="meta">
								<span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i>Dec 26, 2019</span>
								<span class="post-by"><i class="fa fa-user" aria-hidden="true"></i>By <a href="#">Samson</a></span>
								<span class="post-category">Category: <a href="#">Coaching</a><a href="#">Lorem</a></span>
							</div>
						</div>
						<div class="post-content">
							<div class="text">
								<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
								<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences.</p>
								<blockquote>
									<p>“At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias”</p>
									<cite><a href="#">Kerry Ashman</a></cite>
								</blockquote>
								<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.</p>
							</div>
						</div>
						<div class="post-footer">
							<div class="meta">
								<span class="post-comment"><a href="#">Comments 2</a></span>
								<span class="post-tags">Tags: <a href="#">Lorem</a><a href="#">Dorem</a></span>
							</div>
						</div>
					</div>
					<!--=============== AUTOR-COVER ===============-->
					<div class="autor-cover">
						<img src="../img/autor-img.png" alt="img">
						<div class="autor-content">
							<div class="name">Samson Peters</div>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
						</div>
					</div>
					<!--============= AUTOR-COVER END =============-->
					<!--================ NAVIGATION ================-->
					<div class="navigation">
						<a href="#" class="navigation-item navigation-left">
							<span>previous</span>
							<div class="title">Sed ut perspiciatis unde</div>
						</a>
						<a href="#" class="navigation-item navigation-right">
							<span>next</span>
							<div class="title">Sed ut perspiciatis unde</div>
						</a>
					</div>
					<!--============== NAVIGATION END ==============-->
					<div class="reviews">
						<h2 class="title">Comments</h2>
						<ul class="reviews-list">
							<li class="item">
								<div class="review-item">
									<div class="review-avatar"><img src="../img/testimonials-1.png" alt="img"></div>
									<div class="review-content">
										<div class="name">Sam Piters</div>
										<div class="date">Dec 26, 2019</div>
										<p class="review-comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis cupiditate vel dicta animi nostrum delectus at doloremque nam eligendi unde! Nulla temporibus ut, libero, architecto tempora impedit ipsa mollitia unde.</p>
										<a href="#" class="review-btn"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
									</div>
								</div>
								<ul class="child">
									<li class="item">
										<div class="review-item">
											<div class="review-avatar"><img src="../img/testimonials-2.png" alt="img"></div>
											<div class="review-content">
												<div class="name">Anna Smith</div>
												<div class="date">Dec 27, 2019</div>
												<p class="review-comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla eligendi a cum corporis, minus reprehenderit quo aut at, quas quisquam?</p>
												<a href="#" class="review-btn"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
											</div>
										</div>
									</li>
								</ul>
							</li>
						</ul>
						<div class="reviews-form">
							<h2 class="title">Leave a Comment</h2>
							<form action="">
								<ul class="form-cover">
									<li class="inp-name"><input type="text" name="your-name" placeholder="Name"></li>
									<li class="inp-email"><input type="email" name="your-email" placeholder="E-mail"></li>
									<li class="inp-text"><textarea name="your-text" placeholder="Message"></textarea></li>
								</ul>
								<div class="checkbox-wrap">
									<div class="checkbox-cover">
										<input type="checkbox">
										<p>By using this form you agree with the storage and handling of your data by this website.</p>
									</div>
								</div>
								<div class="btn-form-cover">
									<button type="submit" class="btn"><span>submit comment</span></button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!--============== SIDEBAR ==============-->
				<div class="col-12 col-lg-4 sidebar">
					<a href="#" class="btn btn-sidebar"><span>Widgets</span></a>
					<ul class="widgets">
						<!--=========== WIDGET-SEARCH ===========-->
						<li class="widget widget-search">
							<h5 class="title">search</h5>
							<form class="search-form">
								<i class="fa fa-at" aria-hidden="true"></i>
								<input class="inp-form" type="email" name="search" placeholder="E-mail">
								<button type="submit" class="btn btn-form"><span>send</span></button>
							</form>
						</li>
						<!--========= WIDGET-SEARCH END =========-->
						<!--============ WIDGET-TAGS ============-->
						<li class="widget widget-tags">
							<h5 class="title">Tags</h5>
							<ul>
								<li><a href="#">Loremiipsum</a></li>
								<li><a href="#">Lorem</a></li>
								<li><a href="#">Sitiamet</a></li>
								<li><a href="#">Dolor</a></li>
								<li><a href="#">Lorem</a></li>
								<li><a href="#">Loremiipsum</a></li>
								<li><a href="#">Dolor</a></li>
								<li><a href="#">Sitiamet</a></li>
							</ul>
						</li>
						<!--========== WIDGET-TAGS END ==========-->
						<!--=========== WIDGET-ARHIVE ===========-->
						<li class="widget widget-archive">
							<h5 class="title">archive</h5>
							<ul>
								<li><a href="#">January 2019</a></li>
								<li><a href="#">February 2019</a></li>
								<li><a href="#">March 2019</a></li>
								<li><a href="#">April 2019</a></li>
								<li><a href="#">May 2019</a></li>
							</ul>
						</li>
						<!--========= WIDGET-ARHIVE END =========-->
						<!--========= WIDGET-CATEGORIES =========-->
						<li class="widget widget-categories">
							<h5 class="title">categories</h5>
							<ul>
								<li><a href="#">Training</a></li>
								<li><a href="#">Courses</a></li>
								<li><a href="#">Conferences</a></li>
								<li><a href="#">Development</a></li>
								<li><a href="#">UI/UX Designer</a></li>
							</ul>
						</li>
						<!--======= WIDGET-CATEGORIES END =======-->
						<!--======== WIDGET-RECENT-POSTS ========-->
						<li class="widget widget-recent-posts">
							<h5 class="title">recent blog posts</h5>
							<ul>
								<li>
									<a href="#">Mobile App Design: From Beginner to Intermediate</a>
									<div class="date"><i class="fa fa-calendar" aria-hidden="true"></i>Dec 27, 2019 at 5:47 pm</div>
								</li>
								<li>
									<a href="#">Et harum quidem rerum facilis est et expedita distinctio</a>
									<div class="date"><i class="fa fa-calendar" aria-hidden="true"></i>Dec 17, 2018 at 5:47 pm</div>
								</li>
								<li>
									<a href="#">Nam libero tempore, cum soluta nobis est eligendi optio</a>
									<div class="date"><i class="fa fa-calendar" aria-hidden="true"></i>Dec 8, 2018 at 5:47 pm</div>
								</li>
							</ul>
						</li>
						<!--====== WIDGET-RECENT-POSTS END ======-->
						<!--========== WIDGET-INSTAGRAM ==========-->
						<li class="widget widget-instagram">
							<h5 class="title">Instagram</h5>
							<ul>
								<li>
									<a href="#"><img src="../img/insta-widget-1.jpg" alt="img"></a>
								</li>
								<li>
									<a href="#"><img src="../img/insta-widget-2.jpg" alt="img"></a>
								</li>
								<li>
									<a href="#"><img src="../img/insta-widget-3.jpg" alt="img"></a>
								</li>
								<li>
									<a href="#"><img src="../img/insta-widget-4.jpg" alt="img"></a>
								</li>
								<li>
									<a href="#"><img src="../img/insta-widget-5.jpg" alt="img"></a>
								</li>
								<li>
									<a href="#"><img src="../img/insta-widget-6.jpg" alt="img"></a>
								</li>
							</ul>
						</li>
						<!--======== WIDGET-INSTAGRAM END ========-->
						<!--========== WIDGET-NEWSLETTER ==========-->
						<li class="widget widget-newsletter">
							<h5 class="title">newsletter</h5>
							<form class="subscribe-form">
								<i class="fa fa-at" aria-hidden="true"></i>
								<input class="inp-form" type="email" name="subscribe" placeholder="E-mail">
								<button type="submit" class="btn btn-form"><span>send</span></button>
							</form>
						</li>
						<!--======== WIDGET-NEWSLETTER END ========-->
					</ul>
				</div>
				<!--============ SIDEBAR END ============-->
			</div>
		</div>
	</section>
	<!--============== S-NEWS END ==============-->

@include('layout.footer')