@extends('layouts.app')
@section('content')

<section class="row">
    <div class="col-12">
        <h1>{{$article->title}}</h1>
        <small>Creado por: {{$article->user->name}}</small>
    </div>
</section>
<section class="row">
    <div class="col-12 col-md-4">
        @foreach
        <div class="card">
            <img src="http://lorempixel.com/400/400/?q={{rand(1,1000000000)}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$article->title}}</h5>
                <p class="card-text">{{$article->content}}</p>
                @if($article->isAuthUserAuthor())
                <a href="{{route('articles.edit',$article)}}" class="btn btn-warning">Edit</a>
                @endif
                <form action="{{route('articles.edit',$article)}}" method="POST"></form>
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
            </div>
        </div>
        @endforeach
    </div>
   
</section>
@endsection