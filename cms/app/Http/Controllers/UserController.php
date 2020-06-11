<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index')->with('users', User::all());
    }

    public function edit()
    {
        return view('users.edit')->with('user', auth()->user());
    }

    public function makeAdmin(User $user)
    {
        $user->role = 'admin';
        $user->save();

        return redirect()->back()->with('status', 'Make user as admin.');
    }
}
