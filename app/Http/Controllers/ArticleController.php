<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//CRud
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
    //crUD
    public function edit(Article $article)
    {
       return view("articles.edit",compact('article')); 
       
    }
    public function update(Request $request, Article $article)
    {
        // verificado si estoy autentificado

    if (!$user = Auth::user())
    return redirect()->route ('home');

   

    if ($article->user_id != $user->id)
    return redirect()->route ('home');

     //validacion
     $requestValidated = $request->validate([
        'title'=>'required',
        'content'=>'required'
    ]);

    $article->update($requestValidated);

    return redirect()->route('articles.show',$article);

    }

}


