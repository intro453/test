<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function cars($id)
    {
        $user = User::findOrFail($id);
        $cars = $user->cars; // hasMany

        return view('users.cars', compact('user', 'cars'));
    }
}
