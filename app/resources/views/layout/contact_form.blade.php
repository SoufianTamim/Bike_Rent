	<!--=================== S-CONTACTS ===================-->
	<section class="s-contacts page-contacts">
		<div class="container s-anim">

			<h2 class="title">Contact us</h2>
			@if (isset($confirm))
				<p>{{$confirm}}</p>
			@endif
			<form  action="/contact/send/"  method="POST" name="contactform">
				@csrf
				<ul class="form-cover">
					<li class="inp-name"><input id="name" type="text" name="name" placeholder="Name"></li>
					<li class="inp-phone"><input id="phone" type="tel" name="phone" placeholder="Phone"></li>
					<li class="inp-email"><input id="email" type="email" name="email" placeholder="E-mail"></li>
					<li class="inp-text"><textarea id="comments" name="comment" placeholder="Message"></textarea></li>
				</ul>
				<div class="checkbox-wrap">
					<div class="checkbox-cover">
						<input type="checkbox">
						<p>By using this form you agree with the storage and handling of your data by this website.</p>
					</div>
				</div>
				<div class="btn-form-cover">
					<button  type="submit" class="btn"><span>submit comment</span></button>
				</div>
			</form>
			<div id="message"></div>
		</div>
	</section>
	<!--================= S-CONTACTS END =================-->