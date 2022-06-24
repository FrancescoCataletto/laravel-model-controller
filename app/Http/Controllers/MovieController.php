<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;


class MovieController extends Controller
{
    public function index(){
        $movies =  Movie::all();
        
        return view('home', compact('movies'));
    }

    public function alphabet(){
        $movies = Movie::orderBy('title', 'asc')->get();

        return view('alphabet', compact('movies'));
    }

    public function wallUp(){
        $movies = Movie::where('date', '<', '1989-11-09')->orderBy('date', 'asc')->get();

        return view('wallUp', compact('movies'));
    }

    public function wallDown(){
        $movies = Movie::where('date', '>', '1989-11-09')->orderBy('date', 'asc')->get();

        return view('wallDown', compact('movies'));
    }
}
