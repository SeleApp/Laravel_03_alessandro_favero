<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ArticleController extends Controller
{
    /**
     * Catalogo articoli esposto alle viste.
     */
    public array $articles = [
        [
            'id' => 1,
            'title' => 'Primo articolo',
            'subtitle' => 'Sottotitolo del primo articolo',
            'content' => 'Contenuto completo del primo articolo.'
        ],
        [
            'id' => 2,
            'title' => 'Secondo articolo',
            'subtitle' => 'Sottotitolo del secondo articolo',
            'content' => 'Contenuto completo del secondo articolo.'
        ],
        [
            'id' => 3,
            'title' => 'Terzo articolo',
            'subtitle' => 'Sottotitolo del terzo articolo',
            'content' => 'Contenuto completo del terzo articolo.'
        ],
    ];

    public function homepage(): View
    {
        return view('home');
    }

    public function index(): View
    {
        return view('articles.index', [
            'articles' => $this->articles,
        ]);
    }

    public function show(int $id): View
    {
        foreach ($this->articles as $article) {
            if ($article['id'] === $id) {
                return view('articles.show', [
                    'article' => $article,
                ]);
            }
        }

        abort(404);
    }
}
