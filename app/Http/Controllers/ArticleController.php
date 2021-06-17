<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function store(Request $request)

    {
    //validacion
    $requestValidated = $request->validate([
        'title'=>'required',
        'content'=>'required'
    ]);
    // verificado si estoy autentificado

    if (!$user = Auth::user())
    return redirect()->route ('home');

    //guardar articulo de usuario conectado
    $user->articles()->create($requestValidated);
    return redirect()->route('articles.index');


    }

}


