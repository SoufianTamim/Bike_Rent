@include('layout.header')
@include('layout.Title')

<section class="s-our-team">
    <div class="container">
        <h1>Thank you for your Booking</h1>
    </div>
</section>

<section class="s-subscribe" style="background-image: url({{asset('/img/bg-subscribe.jpg')}});">
    <span class="mask"></span>
    <div class="container">
        <img class="wow fadeInRightBlur rx-lazy rx-lazy_item" data-wow-duration=".8s" data-wow-delay=".3s"
            src="assets/img/subscribe-img.png" data-src="assets/img/subscribe-img.png" alt="img"
            style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.3s; animation-name: fadeInRightBlur;">
        <div class="subscribe-left">
            <h2 class="title"><span>Your Bike Unlock Code is</span></h2>
            <h3 class="title">{{$bookings[0]->code}}</h3>
            <h5 class="title"><span>We have sended the code by email</span></h5>
            <a href="/" class="btn color-w"><span>Return Home</span></a>
            {{-- <button type="button" class="btn  btn-yellow color-w"><span>Print PDF</span></button> --}}
        </div>
    </div>
</section>





@include('layout.footer')
