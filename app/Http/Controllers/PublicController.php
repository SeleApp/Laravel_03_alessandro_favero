<?php

namespace App\Http\Controllers;

class PublicController extends Controller
{
    public $users = [
        [
            'id' => 0,
            'name' => 'Mario Rossi',
            'role' => 'Sviluppatore',
        ],
        [
            'id' => 1,
            'name' => 'Luca Bianchi',
            'role' => 'Designer',
        ],
        [
            'id' => 2,
            'name' => 'Giulia Verdi',
            'role' => 'Project Manager',
        ],
    ];

    public function onePage()
    {
        return view('public.home');
    }

    public function aboutUs()
    {
        return view('public.about-us', [
            'users' => $this->users,
        ]);
    }

    public function aboutUsDetail($id)
    {
        if (!isset($this->users[$id])) {
            return 'Utente non trovato';
        }

        return view('public.about-us-detail', [
            'user' => $this->users[$id],
        ]);
    }
}
