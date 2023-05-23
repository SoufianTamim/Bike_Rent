{{-- ========================================================================================= --}}
{{-- ========================= EVERYTHIN CONTAINES THE INCLUDE IS  =========================== --}}
{{-- ========================= IN THE LAYOUT IN THE RESSOURCES  ============================== --}}
{{-- =================================== DIRECTORY =========================================== --}}
{{-- ========================================================================================= --}}
@include('layout.header')
@include('layout.Title')
<section class="py-5 my-5">
    <div class="container">
        <div class="bg-white shadow rounded-lg d-block d-sm-flex">
            <div class="profile-tab-nav border-right">
                <div class="p-4">
                    {{-- ================================== profile picture ==================================== --}}
                    <div class="img-circle text-center mb-3">
                        @if (auth()->check() && auth()->user()->profile_picture !== null )
                            <img src="{{ asset('' . Auth::user()->profile_picture) }}" alt="Profile Picture">
                        @else
                            <img src="{{ asset('img/user1.png') }}" alt="{{ auth()->user()->fullname }} profile picture" class="shadow" >
                        @endif
                    </div>
                    {{-- ================================== Full user name  ==================================== --}}
                    <h4 class="text-center">
                        @if (auth()->check())
                            {{ auth()->user()->fullname }}
                        @endif
                    </h4>
                    {{-- ================================== side nav links  ==================================== --}}
                </div>
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
                        <i class="fa fa-home text-center mr-1"></i>
                        Account
                    </a>
                    <a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
                        <i class="fa fa-key text-center mr-1"></i>
                        Password
                    </a>
                    {{-- <a class="nav-link" id="rentals-tab" data-toggle="pill" href="#rentals" role="tab" aria-controls="rentals" aria-selected="false">
                        <i class="fa fa-user text-center mr-1"></i>
                        Rentals
                    </a> --}}
                    {{-- <a class="nav-link" id="application-tab" data-toggle="pill" href="#application" role="tab" aria-controls="application" aria-selected="false">
							<i class="fa fa-tv text-center mr-1"></i> 
							Application
						</a> --}}
                    <a class="nav-link" id="notification-tab" data-toggle="pill" href="#notification" role="tab" aria-controls="notification" aria-selected="false">
                        <i class="fa fa-user text-center mr-1"></i>
                        Rentals
                    </a>
                    <form method="POST" action="{{ route('logout') }}" id="form">
                        @csrf
                        <a :href="route('logout')" class="nav-link logout " data-toggle="pill" id="notification-tab" onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="fa fa-sign-out text-center mr-1"></i>
                            Log Out
                        </a>
                    </form>
                </div>
            </div>
            <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
                {{-- ================================== update profile infos ================================= --}}
                @include('profile.partials.update-profile-information-form')
                {{-- ================================== update password   ==================================== --}}
                @include('profile.partials.update-password-form')
                {{-- ================================== rentals of user  ===================================== --}}
                {{-- @include('profile.partials.rental-user') --}}
                {{-- ================================== notifications of user  =============================== --}}
                @include('profile.partials.notifs-user')
            </div>
        </div>
    </div>
</section>
{{-- ================================== footer   ============================================= --}}
@include('layout.footer')
