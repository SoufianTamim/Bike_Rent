<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
    <h3 class="mb-4">Account Settings</h3>
    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Full name </label>
                    <input type="text" class="form-control" value="@if (auth()->check()) {{ auth()->user()->fullname }} @endif" readonly>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>C.I.N</label>
                    <input type="text" class="form-control" value="@if (auth()->check()) {{ auth()->user()->cin }} @endif" readonly>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Birthdate</label>
                    <input type="text" class="form-control" readonly value="@if (auth()->check()) {{ auth()->user()->birthdate }} @endif">
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
                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
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
            @if (session('status') === 'profile-updated')
                <div class="popup">
                    <header>
                        <span>Profile Updated</span>
                        <div class="close"><i class="uil uil-times"></i></div>
                    </header>
                    <div class="content">
                        <p>Your profile has been updated.</p>
                        <button x-on:click="show = false">OK</button>
                    </div>
                </div>
            @endif
            <x-primary-button class="btn"><span>Update</span></x-primary-button>
        </div>
    </form>
</div>
