<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="container" enctype="multipart/form-data">
        {{-- 
        ==========================================================================
        ==========================================================================
        ======================== Register form with CSRF==========================
        ==========================================================================
        ==========================================================================
        --}}
        {{-- 
        ==========================================================================
        ===== CSRF Stands for cross site request forgary that ====================
        ===== protects the form from malicious activities ========================
        ==========================================================================
        --}}
        @csrf
        <header>Register</header>
        <div class="flex-row">
        {{-- fullname --}}
        <div class="input-field w-25">
            <x-text-input id="fullname" class="input" type="text" name="fullname" :value="old('fullname')" required autofocus  placeholder="Full Name" />
            <x-input-error :messages="$errors->get('fullname')" />
        </div>
        {{-- C.I.N --}}
        <div class="input-field w-25">
            <x-text-input id="cin" class="input" type="text" name="cin" :value="old('cin')" required  placeholder="C.I.N" />
            <x-input-error :messages="$errors->get('cin')" />
        </div>
        </div>
        <div class="flex-row">
        {{-- Email --}}
        <div class="input-field w-25">
            <x-text-input id="email" class="input" type="email" name="email" :value="old('email')" required  placeholder="Email" />
            <x-input-error :messages="$errors->get('email')" />
        </div>
        {{-- phone number --}}
        <div class="input-field w-25">
            <x-text-input id="phone" class="input" type="phone" name="phone" :value="old('phone')" required  placeholder="Phone" />
            <x-input-error :messages="$errors->get('phone')" />
        </div>
        </div>
        
        <div class="flex-row">
        {{-- address --}}
        <div class="input-field w-25">
            <x-text-input id="address" class="input" type="text" name="address" :value="old('address')" required  placeholder="Address" />
            <x-input-error :messages="$errors->get('address')" />
        </div>
        {{-- birthdate --}}
        <div class="input-field w-25">
            <x-text-input id="birthdate" class="input" type="date" name="birthdate" :value="old('birthdate')"   type="text" placeholder="Birth Date"
                    onfocus="(this.type='date')" />
            <x-input-error :messages="$errors->get('birthdate')" />
        </div>
        </div>
        <div class="flex-row">
         <!-- gender -->
        <div class="input-field w-25">
            <x-select-input id="gender" class="input" name="gender" :options="['male' => 'Male', 'female' => 'Female']" required  placeholder="Gender" />
            <x-input-error :messages="$errors->get('gender')" />
        </div>
        {{-- profile picture  --}}
        <div class="input-field w-25">
                <input type="file" name="profile_picture" class="input">
                {{-- <x-text-input id="profile_picture" class="input" type="file" placeholder="Add profile picture" name="profile_picture" :value="old('profile_picture')"   placeholder="Profile Picture" /> --}}
            <x-input-error :messages="$errors->get('profile_picture')" />
        </div> 
        </div>
         <!-- Password -->
         <div class="input-field">
            <x-text-input id="password" class="input"   type="password"  name="password"  required placeholder="Password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <!-- Confirm Password -->
        <div class="input-field">
            <x-text-input id="password_confirmation" class="input" type="password"   name="password_confirmation" required placeholder="Confirm Password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        {{-- login link  --}}
        <div class="top">
            <span><a href="{{ route('login') }}">Already have an account?</a></span>
        </div>
        {{-- submit form button --}}
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="submit">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
