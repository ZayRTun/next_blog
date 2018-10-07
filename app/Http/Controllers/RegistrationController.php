<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\Welcome;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        // Validate the form
        $this->validate(request(), [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        // Create and save user
        $user = User::create(
        	request(['name', 'email', 'password'])
        );

        // Once user create, sign them in
        auth()->login($user);

        \Mail::to($user)->send(new Welcome($user));

        // Redirect to the home page
        return redirect()->home();
    }
}
