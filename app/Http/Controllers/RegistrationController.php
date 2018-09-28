<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

        // Once user create, sign them in
        auth()->login($user);

        // Redirect to the home page
        return redirect()->home();
    }
}
