<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'fullname'  => ['required', 'string', 'max:255'],
            'cin'   => ['required', 'string', 'max:50', 'unique:'.User::class],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'phone'     => ['required', 'string', 'max:255',  'unique:'.User::class],
            'address'  => ['required', 'string', 'max:255'],
            'birthdate' => ['required', 'string', 'date_format:Y-m-d', 'max:50'],
            'gender' => ['required', 'string'],
            'profile_picture' => ['nullable', 'image', 'max:255'],
            'password'  => ['required', 'confirmed', 'min:8', Rules\Password::defaults()],
        ]);
    
        $profile_picture = null;
    
        if ($request->hasFile('profile_picture')) {
            $validated = $request->validate([
                'profile_picture' => 'required|image|max:2048',
            ]);
            $profile_picture = $request->file('profile_picture')->store('public/profile_pictures');
            $profile_picture = str_replace('public/', 'storage/', $profile_picture);
        }
    
        $user = User::create([
            'fullname' => $request->fullname,
            'cin'  => $request->cin,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'birthdate' => $request->birthdate,
            'gender' => $request->gender,
            'profile_picture' => $profile_picture,
            'password' => Hash::make($request->password),
        ]);
    
        Auth::login($user);
    
        return redirect(RouteServiceProvider::HOME);
    }
}
