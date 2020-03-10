<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\create;
use App\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
	public function index()
	{
		return view('registro');
	}

	public function create(RegisterRequest $request) {

		$user = $request->all();
        $user['password'] = bcrypt($user['password']);
        User::create($user);

		return redirect()->route('movie.index');
	}
}
