<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function destroy()
    {
        $name=Auth::user()->name;
        Auth::logout();
        return redirect('/')->with('success',"Goodbye {{$name}}!");
    }
    public function store()
    {
        $attributes=request()->validate([
            'email' => ['required','email','max:255','exists:users,email'],
            'password' => ['required','min:7','max:255'],
        ]);
        if(!Auth::attempt($attributes)){
            throw ValidationException::withMessages([
                'email'=>'There was a problem :/'
            ]);  
        }
        session()->regenerate();
            $name=Auth::user()->name;
            return redirect('/')->with('success',"Welcome back {{$name}}!");
        // return back()
        // ->withInput()
        // ->withErrors(['email'=>'There was a problem :/']);
        
        
    }
    public function create()
    {
        return view('sessoins.create');
    }
    //
}
