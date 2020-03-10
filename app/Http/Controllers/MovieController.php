<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index() {
    	$movies = Movie::get()->take(4);
    	return view('home', compact('movies'));
    }

    public function show($id) {
    	$movie = Movie::find($id);
    	return view('movie', compact('movie'));	
    }

    public function search(Request $request) {
    	$name = $request->get('name');

    	$movie = Movie::where('name', 'like', "%$name%")->first();

    	if (is_null($movie)) {
    		return redirect()->to('/');
    	}

    	return view('movie', compact('movie'));    	
    }
}
