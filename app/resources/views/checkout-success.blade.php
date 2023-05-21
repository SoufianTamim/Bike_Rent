@include('layout.header')
@include('layout.Title')

<section  class="s-our-team" >
    	{{-- <span class="mask"></span> --}}
        <div class="container">
            <h1>Thank you for your Time</h1>
        </div>

</section>

<section class="s-subscribe" style="background-image: url({{asset('/img/bg-subscribe.jpg')}});">
		<span class="mask"></span>
		<div class="container">
			<div class="subscribe-left">
				<h2 class="title"><span>Your code to unlock the bike is</span></h2>
				<h3 class="title">{{$bookings[0]->code}}</h3>
					<button type="button" class="btn  btn-yellow color-w"><span>Print PDF</span></button>
                    <a href='/' class="btn color-w"><span>Return Home</span></a>
			</div>
			<img class="wow fadeInRightBlur rx-lazy rx-lazy_item" data-wow-duration=".8s" data-wow-delay=".3s" src="assets/img/subscribe-img.png" data-src="assets/img/subscribe-img.png" alt="img" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.3s; animation-name: fadeInRightBlur;">
		</div>
	</section>




@include('layout.footer')
