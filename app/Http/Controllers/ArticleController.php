<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view ('articles.index', compact('articles'));
    }

    public function show(Article $article)
    {
        $articles = Article::all();
        return view ('articles.show', compact('article'));
    }


    public function create()
    {
    return view ('articles.create');
    }



}


