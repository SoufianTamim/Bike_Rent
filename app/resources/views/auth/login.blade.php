<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status :status="session('status')" />
    <form method="POST" action="{{ route('login') }}" class="container">
        @csrf
        <div id="login">
            <span class="dont"><a href="{{ route('register') }}">Don't have an account?</a></span>
            <h4 class="dont">Login</h4>
        </div>

        <div class="input-field">
            <x-text-input id="login" class="input" type="text" name="login" :value="old('login')" required autofocus placeholder="Email / Phone / Full Name" />
            <x-input-error :messages="$errors->get('login')" />
        </div>

        <div class="input-field">
            <x-text-input id="password" class="input" type="password" :value="old('password')" name="password" placeholder="Password" required />
            <x-input-error :messages="$errors->get('password')" />
        </div>

        <div class="input-field">
            <x-primary-button class="btn btn-login"  type="submit">
                <span>Log in</span>
            </x-primary-button>
        </div>
        
        <div class="flex-row between">
            <div class="one">
                <input id="remember_me" type="checkbox" name="remember">
                <label for="remember_me">{{ __('Remember me') }}</label>
            </div>
            <div class="two ">
                @if (Route::has('password.request'))
                    <label>
                        <a href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    </label>
                @endif
            </div>
        </div>
    </form>
</x-guest-layout>
