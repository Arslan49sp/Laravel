<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


class SessionController extends Controller
{
    public function destroy(){
        auth()->logout();
        return redirect('/')->with('success', 'Goodbye!');
    }

    public function store(){
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        //attempt to authenticate and login the user
        //based on provided credentials
        if (auth()->attempt($attributes)){
            session()->regenerate(); //to save from session fixation attack.
            //redirect with a success flash message
            return redirect('/')->with('success', 'Welcome back!');
        }

        //auth failed
        throw ValidationException::withMessages([
            'email' => 'Your provided credentials could not be verified.'
        ]);
    }

    public function create(){
        return view('sessions.create');
    }
}
