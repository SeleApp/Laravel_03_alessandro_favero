<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ArticleController extends Controller
{
    /**
     * Catalogo articoli caricato da config/blog.php.
     * Rendendolo attributo pubblico della classe, è accessibile
     * a tutti i metodi senza duplicare il dato nelle singole funzioni.
     */
    public array $articles;

    public function __construct()
    {
        $this->articles = config('blog.articles');
    }

    /**
     * Mostra la homepage con gli ultimi 3 articoli in evidenza.
     */
    public function homepage(): View
    {
        $featured = array_slice($this->articles, 0, 3);

        return view('home', [
            'featured' => $featured,
        ]);
    }

    /**
     * Mostra l'elenco completo di tutti gli articoli.
     */
    public function index(): View
    {
        return view('articles.index', [
            'articles' => $this->articles,
        ]);
    }

    /**
     * Mostra la pagina di dettaglio di un singolo articolo,
     * identificato tramite slug (es. /articoli/costata-alla-fiorentina).
     */
    public function show(string $slug): View
    {
        foreach ($this->articles as $article) {
            if ($article['slug'] === $slug) {
                return view('articles.show', [
                    'article' => $article,
                ]);
            }
        }

        abort(404);
    }
}
