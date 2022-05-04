<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesListing extends Controller
{
    public function list() {
        $myMovies = Movie::orderBy('date','asc')
        ->get();
        
        $data = [
        'movie' => $myMovies
        ];

    return view('moviesListing' , $data);
    }
}

?>
