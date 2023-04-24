        @if (auth()->check())
            <p>Logged in as: {{ auth()->user()->email}}</p>
        @endif

{{-- <div class="img-circle text-center mb-3">
							<img src="{{ asset(Auth::user()->profile_picture) }}" alt="profile picture" class="shadow">
						</div>
						<h4 class="text-center">
                            @if (auth()->check())
                                {{ auth()->user()->fullname}}
                            @endif
                        </h4> --}}
@include('layout.header')
@include('layout.slider')
@include('layout.filter')
@include('layout.bike_parts')
@include('layout.advantages')
@include('layout.clients')
@include('layout.feedback')
{{-- @include('layout.banner') --}}
@include('layout.footer')