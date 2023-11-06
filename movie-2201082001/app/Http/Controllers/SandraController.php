<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class SandraController extends Controller
{

    public function index(){
        $movies = Movie::all();
        return view('homepage', compact('movies'));
    }

    public function detail($id){
        $movie = Movie::find($id);
        return view('detail', compact('movie'));
    }
    public function watchlist(){

        $watchlist = [
            [
                'judul' => 'Immortal Samsara',
                'tahun' => 2022,
                'sinopsis' => 'Sinopsis Film 1',
                'rating' => 8.5,
            ],
            [
                'judul' => 'Hidden Love',
                'tahun' => 2023,
                'sinopsis' => 'Sinopsis Film 2',
                'rating' => 9.0, // Contoh peringkat film
            ],
            // Tambahkan film-film lain yang ada di watchlist
        ];

        return view('watchlist', compact('watchlist'));
    }


}
