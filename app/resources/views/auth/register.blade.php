<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Full Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('full')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="cin" :value="__('C.I.N')" />
            <x-text-input id="cin" class="block mt-1 w-full" type="text" name="cin" :value="old('cin')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('cin')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="Address" :value="__('Address')" />
            <x-text-input id="Address" class="block mt-1 w-full" type="text" name="address" :value="old('Address')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('Address')" class="mt-2" />
        </div>

         <!-- Email Address -->
         <div class="mt-4">
            <x-input-label for="birthdate" :value="__('birthdate')" />
            <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
        </div>

         <!-- Email Address -->
         <div class="mt-4">
            <x-input-label for="profile_pic" :value="__('profile picture')" />
            <x-text-input id="profile_pic" class="block mt-1 w-full" type="file" name="profile_picture" :value="old('profile_pic')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('profile_pic')" class="mt-2" />

           
        </div>

         <!-- Email Address -->
         <div class="mt-4">
            <x-input-label for="gender" :value="__('Gender')" />
            {{-- <x-text-input id="gender" class="block mt-1 w-full" type="text" name="gender" :value="old('gender')" required autocomplete="username" /> --}}
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                <select id="gender"  class="block mt-1 w-full" name="gender" :value="old('gender')" >
                    <option value="" selected disabled><-- select your gender --></option>
                    <option value="male">male</option>
                    <option value="female">female</option>
                    <option value="other">other</option>
                </select>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"   type="password"  name="password"  required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"   name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>

    </form>
</x-guest-layout>
