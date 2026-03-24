<?php

namespace App\Http\Controllers;

class MovieController extends Controller
{
    public $movies = [
        [
            'id' => 0,
            'title' => 'Il Padrino',
            'year' => 1972,
        ],
        [
            'id' => 1,
            'title' => 'Interstellar',
            'year' => 2014,
        ],
        [
            'id' => 2,
            'title' => 'Inception',
            'year' => 2010,
        ],
    ];

    public function movieList()
    {
        return view('movies.list', [
            'movies' => $this->movies,
        ]);
    }

    public function movieDetail($id)
    {
        if (!isset($this->movies[$id])) {
            return 'Film non trovato';
        }

        return view('movies.detail', [
            'movie' => $this->movies[$id],
        ]);
    }
}
