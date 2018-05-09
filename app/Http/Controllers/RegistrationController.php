<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegistrationRequest;
use App\Mail\Welcome;
use App\User;
use Illuminate\Support\Facades\Mail;

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

    public function store(RegistrationRequest $request)
    {
//Validate the user
  /*      $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed'
        ]);*/

        //Create and save the user
       /* $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);
        //Sign them in.
        auth()->login($user);
        \Mail::to($user)->send(new Welcome($user));*/
        //And redirect them to some page.

        $request->persist();
       return redirect()->home();
   }
}
