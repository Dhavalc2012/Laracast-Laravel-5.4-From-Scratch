<?php

namespace App\Http\Controllers;
use App\User;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function create()
    {
        return view('registration.create');
   }

    public function store()
    {
//Validate the user
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed'
        ]);

        //Create and save the user
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);
        //Sign them in.
        auth()->login($user);
        //And redirect them to some page.
       return redirect()->home();
   }
}
