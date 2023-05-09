<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::paginate(15);
        return view('user.user',['users' => $users]);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function banUser($id)
    {
        // Retrieve the user that we want to ban
        // $user = User::find($id);
        $user = User::where('user_id', $id)->first();


        // Update the user's status to indicate that they are banned
        $user->status = 'banned';
        
        $user->save();

        // Redirect the user to a page indicating that they have been banned
        return redirect('/user');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
