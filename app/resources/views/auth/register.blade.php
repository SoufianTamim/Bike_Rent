




<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="container">
        @csrf
        <header>Register</header>

        
        <div class="input-field">
            {{-- <x-input-label for="fullname" :value="__('Full Name')" /> --}}
            <x-text-input id="fullname" class="input" type="text" name="fullname" :value="old('fullname')" required autofocus autocomplete="fullname" placeholder="Full Name" />
            <x-input-error :messages="$errors->get('fullname')" />
        </div>
        <div class="input-field">
            {{-- <x-input-label for="cin" :value="__('C.I.N')" /> --}}
            <x-text-input id="cin" class="input" type="text" name="cin" :value="old('cin')" required autocomplete="username" placeholder="C.I.N" />
            <x-input-error :messages="$errors->get('cin')" />
        </div>
        <div class="input-field">
            {{-- <x-input-label for="email" :value="__('Email')" /> --}}
            <x-text-input id="email" class="input" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email" />
            <x-input-error :messages="$errors->get('email')" />
        </div>
        <div class="input-field">
            <x-text-input id="phone" class="input" type="phone" name="phone" :value="old('phone')" required autocomplete="username" placeholder="Phone" />
            <x-input-error :messages="$errors->get('phone')" />
        </div>
        <div class="input-field">
            <x-text-input id="address" class="input" type="text" name="address" :value="old('address')" required autocomplete="username" placeholder="Address" />
            <x-input-error :messages="$errors->get('address')" />
        </div>
        <div class="input-field">
            <x-text-input id="birthdate" class="input" type="date" name="birthdate" :value="old('birthdate')" required autocomplete="username" placeholder="Birthdate" />
            <x-input-error :messages="$errors->get('birthdate')" />
        </div>
        {{--  ??   =================    add two input at a line  --}}
        <div class="input-field">
            <x-text-input id="profile_picture" class="input" type="file" name="profile_picture" :value="old('profile_picture')" required autocomplete="username" placeholder="Profile Picture" />
            <x-input-error :messages="$errors->get('profile_picture')" />
        </div>
        <div class="input-field">
            <x-select-input id="gender" class="input" name="gender" :options="['male' => 'Male', 'female' => 'Female']" required autocomplete="username" placeholder="Gender" />
            <x-input-error :messages="$errors->get('gender')" />
        </div>
        
         <!-- Password -->
         <div class="input-field">
            {{-- <x-input-label for="password" :value="__('Password')" /> --}}
            <x-text-input id="password" class="input"   type="password"  name="password"  required placeholder="Password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="input-field">
            {{-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> --}}
            <x-text-input id="password_confirmation" class="input" type="password"   name="password_confirmation" required placeholder="Confirm Password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="top">
            <span><a href="{{ route('login') }}">Already have an account?</a></span>
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="submit">
                {{ __('Register') }}
            </x-primary-button>
        </div>

    </form>
</x-guest-layout>
