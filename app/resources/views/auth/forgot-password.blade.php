<x-guest-layout >

    <div class="d-flex flex-column w-100">
    <div>
        <h2>Forgot your password ?</h2>
        <p>Don't worry! We'll help you reset it.</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="" :status="session('status')" />
    <form method="POST" action="{{ route('password.email') }}" class="container">
        @csrf

        <!-- Email Address -->
        <div class="input-field w-75">
            <x-text-input id="email" class="input" type="email" name="email" :value="old('email')" required autofocus placeholder="Email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

       

        <div class="input-field w-75">
            <x-primary-button class="submit" id="submit">
            Email Password Reset Link
            </x-primary-button>
        </div>
         <div class="">
            <span><a href="{{ route('login') }}">Remember Password ?</a></span>
        </div>
    </form>
    </div>
</x-guest-layout>
