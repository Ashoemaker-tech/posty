<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function __construct() {
        $this->middleware(['guest']);
    }

    public function index() {
        return view('auth.register');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' =>'required|email|max:255',
            'password' => 'required|confirmed',
        ]);

        $formFields['password']= bcrypt($formFields['password']);

        // store the user
        User::create($formFields);
        // sign the user in
        auth()->attempt($request->only('email', 'password'));
        // redirect 
        return redirect()->route('dashboard');

    }
}
