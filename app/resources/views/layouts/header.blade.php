<header class="header">
    <div class="logo">
    <a href="#"> Dashboard </a>
    </div>
    <div class="header-icons">
        <div class="account">
            <img src="{{auth()->user()->profile_picture}}" alt="">
            <h4>{{auth()->user()->fullname}}</h4>
        </div>
    </div>
</header>      