<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store() 
    {
        var_dump(request()->all());

        $attributes = request()->validate([
            'name' => ['required', 'max:255', 'min:3'],
            'username' => ['required', 'max:255', 'unique:users,username', 'min:3'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'min:8', 'max:255']
        ]);

        auth()->login(
            User::create($attributes)
        );

        return redirect('/');
    }
}
