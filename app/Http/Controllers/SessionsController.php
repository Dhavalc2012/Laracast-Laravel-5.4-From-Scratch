<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except(['destroy']);
    }
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        //Attempt to authenticate user

        //If not redirec back
        if(! auth()->attempt(request(['email','password']))){
            return back()->withErrors([
                'message' => 'Please Check Your Credentials And Try Again'
            ]);
        }
return redirect()->home();
        //If so sign them in

        //Redirect them to home page

        
    }
    
    public function destroy()
    {
        auth()->logout();
        return redirect()->home();
    }
}
