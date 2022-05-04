<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class moviesListing extends Controller
{
    public function list() {
        $myMovies = Movie::where('title')
        ->orderBy('date' , 'asc')
        ->get();
        $data = [
        'movie' => $myMovies
        ];
    return view('moviesListing' , $data);
    }
}

?>
