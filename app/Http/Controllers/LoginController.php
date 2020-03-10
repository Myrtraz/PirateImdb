<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function user() {
    	return view('login');
    }

    public function admin() {
    	return view('loginAdmin');
    }


    public function login(LoginRequest $request) {
    	$credentials = $request->only('email', 'password');

        if (! Auth::attempt($credentials)) {
            return back()->withErrors(['Invalid Credentials']);
        }

        return redirect()->to('/admin');
    }

    public function logout() {
       // Auth::logout();
       // return redirect()->to('/');
    }
}
