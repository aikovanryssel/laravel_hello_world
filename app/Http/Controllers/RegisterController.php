<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
       return view('register.create');
    }
    public function store()
    {
        //return request()->all();
        $attributes=request()->validate([
            'name' => ['required','max:255'],
            'username' => ['required','min:3','max:255','unique:users,username'],
            'email' => ['required','email','max:255','unique:users,email'],
            'password' => ['required','min:7','max:255'],
        ]);
        // $attributes['password']=bcrypt($attributes['password']);--> niet meer nodig met dank aan de User model mutader->(getPasswordAttribute)
        $user=User::create( $attributes);
        // auth()->login($user);
        Auth::login($user);
        return redirect('/')->with('success','Your account has been created.');
    }
    //
}
