<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class HomeController extends Controller
{
    public function home() {

        $movies = Movie::all();
        return view('pages.home', compact('movies'));

    }
    public function show($id){
        $movie = Movie::findOrFail($id);
        
        //dd($id, $movie); mi fa vedere tutte le informazioni 
        
        return view('pages.show', compact('movie'));
    }
}
