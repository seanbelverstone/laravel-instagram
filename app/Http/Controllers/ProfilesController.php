<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::find($user);
        // Can also write it as \App\User::find($user) if not importing


        return view('home', [
            'user' => $user
        ]);
    }
}
