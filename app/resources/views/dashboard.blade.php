{{-- ========================================================================================= --}}
{{-- ========================= EVERYTHIN CONTAINES THE INCLUDE IS  =========================== --}}
{{-- ========================= IN THE LAYOUT IN THE RESSOURCES  ============================== --}}
{{-- =================================== DIRECTORY =========================================== --}}
{{-- ========================================================================================= --}}

@include('layout.header')
@include('layout.dash_title')
	<section class="py-5 my-5">
		<div class="container">
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
							@if (auth()->check() && auth()->user()->profile_picture)

								<img src={{"file:///Applications/XAMPP/xamppfiles/htdocs/cc/Bike_Rent/app/storage/app/public/profile_pictures/about-2.jpg" }} alt="Profile Picture">
	
							{{-- <img src="{{ asset(auth()->user()->profile_picture_url) }}" alt="{{ auth()->user()->fullname }} profile picture" class="shadow"> --}}
							@else
								<img src="{{asset('img/user.png')}}" alt="{{ auth()->user()->fullname }} profile picture" class="shadow">
							@endif

						</div>
						<h4 class="text-center">
							@if (auth()->check())
								{{ auth()->user()->fullname }}
							@endif
						</h4>

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
						<a class="nav-link" id="security-tab" data-toggle="pill" href="#security" role="tab" aria-controls="security" aria-selected="false">
							<i class="fa fa-user text-center mr-1"></i> 
							Security
						</a>
						<a class="nav-link" id="application-tab" data-toggle="pill" href="#application" role="tab" aria-controls="application" aria-selected="false">
							<i class="fa fa-tv text-center mr-1"></i> 
							Application
						</a>
						<a class="nav-link" id="notification-tab" data-toggle="pill" href="#notification" role="tab" aria-controls="notification" aria-selected="false">
							<i class="fa fa-bell text-center mr-1"></i> 
							Notification
						</a>
						<form method="POST" action="{{ route('logout') }}">
							@csrf
							<x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
								{{ __('Log Out') }}
							</x-responsive-nav-link>
						</form>
					</div>
				</div>
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">





					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<h3 class="mb-4">Account Settings</h3>
						<form method="post" action="{{ route('profile.update') }}">
							@csrf
      						@method('patch')
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Full name </label>
								  	<input type="text" class="form-control" value="@if (auth()->check()){{ auth()->user()->fullname}} @endif" readonly>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>C.I.N</label>
								  	<input type="text" class="form-control" value="@if (auth()->check()){{ auth()->user()->cin}} @endif" readonly>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Birthdate</label>
								  	<input type="text" class="form-control" readonly value="@if (auth()->check()){{ auth()->user()->birthdate}} @endif">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								<x-input-label for="address" :value="__('Address')" />
								<x-text-input id="address" name="address" type="text" class="form-control" :value="auth()->user()->address" required autofocus autocomplete="address" />
								<x-input-error :messages="$errors->get('address')" />
							</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<x-input-label for="email" :value="__('Email')" />
									<x-text-input id="email" name="email" type="email" class="form-control" :value="auth()->user()->email" required autocomplete="username" />
									<x-input-error :messages="$errors->get('email')" />
										@php
										$user = auth()->user();
									@endphp
									@if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
										<div>
											<p class="text-sm mt-2 text-gray-800">
												'Your email address is unverified.'

												<button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
													Click here to re-send the verification email.
												</button>
											</p>

											@if (session('status') === 'verification-link-sent')
												<p class="mt-2 font-medium text-sm text-green-600">
													A new verification link has been sent to your email address.
												</p>
											@endif
										</div>
									@endif
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<x-input-label for="phone" :value="__('phone')" />
									<x-text-input id="phone" name="phone" type="text" class="form-control" :value="auth()->user()->phone" required autofocus autocomplete="phone" />
									<x-input-error :messages="$errors->get('phone')" />
								</div>
							</div>
						</div>
						<div>
							<div class="flex items-center gap-4">
							<x-primary-button>{{ __('Save') }}</x-primary-button>

							@if (session('status') === 'profile-updated')
								<p
									x-data="{ show: true }"
									x-show="show"
									x-transition
									x-init="setTimeout(() => show = false, 2000)"
									class="text-sm text-gray-600"
								>{{ __('Saved.') }}</p>
							@endif
						</div>
							<button class="btn" type="submit" ><span>Update</span></button>
							<button class="btn"><span>Cancel</span></button>
						</div>
						</form>
					</div>


					
					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
						<h3 class="mb-4">Password Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Old password</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>New password</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Confirm new password</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
						</div>
						<div>
							<button class="btn " type="submit"><span>Update</span> </button>
							<button class="btn"><span>Cancel</span></button>
						</div>
					</div>



					
					<div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
						<h3 class="mb-4">Security Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Login</label>
								  	<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Two-factor auth</label>
								  	<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="recovery">
										<label class="form-check-label" for="recovery">
										Recovery
										</label>
									</div>
								</div>
							</div>
						</div>
						<div>
							<button class="btn " type="submit"><span>Update</span> </button>
							<button class="btn"><span>Cancel</span></button>
						</div>
					</div>
					<div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">
						<h3 class="mb-4">Application Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="app-check">
										<label class="form-check-label" for="app-check">
										App check
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="defaultCheck2" >
										<label class="form-check-label" for="defaultCheck2">
										Lorem ipsum dolor sit.
										</label>
									</div>
								</div>
							</div>
						</div>
						<div>
							<button class="btn" type="submit"><span>Update</span> </button>
							<button class="btn"><span>Cancel</span></button>
						</div>
					</div>
					<div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab">
						<h3 class="mb-4">Notification Settings</h3>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="notification1">
								<label class="form-check-label" for="notification1">
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum accusantium accusamus, neque cupiditate quis
								</label>
							</div>
						</div>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="notification2" >
								<label class="form-check-label" for="notification2">
									hic nesciunt repellat perferendis voluptatum totam porro eligendi.
								</label>
							</div>
						</div>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="notification3" >
								<label class="form-check-label" for="notification3">
									commodi fugiat molestiae tempora corporis. Sed dignissimos suscipit
								</label>
							</div>
						</div>
						<div>
							<button class="btn" type="submit"><span>Update</span> </button>
							<button class="btn"><span>Cancel</span></button>
						</div>
					</div>
























				</div>
			</div>
		</div>
	</section>


@include('layout.footer')