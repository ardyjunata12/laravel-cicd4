<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $all = User::all()->toArray();

        return view('users', ['all' => $all]);
    }
}
