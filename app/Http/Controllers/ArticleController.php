<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    /**
     * lijst laten zien op scherm georderd
     */
    public function index()
    {
        return view('articles.index', [
            'articles' => Article::orderBy('published_at', 'desc')->get()
        ]);
    }

    /**
     * redirect naar de create pagina
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * laat de voledige lijst zien van de articles
     */
    public function show(Article $article)
    {
        return view('articles.show', [
            'article' => $article,
        ]);
    }
}
