<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',['except'=>'destroy']);
    }

    public function create(){

            return view('sessions.create');
    }

    public function destroy(){

            auth()->logout();

            return redirect('/');
    }

    public function store(){

        //Attempt to auth the user
        if(!auth()->attempt(request(['email','password']))){
            return back()->withErrors([
                'message'=>'Please check your password and email and try again.'
            ]);
        }
        return redirect('/');

    }
}
