@extends('layouts.app')
@section('content')

<section class="row">
    <div class="col-12">
        <h1>todos los articulos</h1>

    </div>
</section>
<section class="row">
    @foreach($articles as $article)
    <div class="col-12 col-md-4">
        <div class="card">
            <img src="http://lorempixel.com/400/400/?q={{rand(1,1000000000)}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$article->title}}</h5>
                <p class="card-text">{{$article->content}}</p>
                <div>
                    @foreach($article->tags as $tag)
                        
                        <a href="#"># {{$tag->name}}</a>
                    @endforeach
                
                </div>
                <a href="{{route('articles.show',$article)}}" class="btn btn-primary">Leer Mas</a>
            </div>
        </div>
    </div>
    @endforeach
</section>
@endsection
