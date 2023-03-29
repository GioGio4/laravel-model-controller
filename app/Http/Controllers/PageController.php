<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function movieslist()
    {
        $movies = Movie::orderBy('vote', 'DESC')->get();
        // dd($movies);
        return view('homepage', compact('movies'));
    }
}
