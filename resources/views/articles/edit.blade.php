@extends('layouts.app')
@section('content')

<section class="row">
<div class="col-12">
<h1>Modifica tu articulo n. {{$article->id}}</h1>
</div>
<div class="col-12 col-md-6 offset-md-3">
<form action="{{route('articles.update',$article)}}" method="POST">
@csrf
@method("PUT")
  <div class="mb-3">
    <label for="exampleInputTitle" class="form-label">New Title</label>
    <input type="text" class="form-control" id="exampleInputText" aria-describedby="textHelp" name="title" value="{{$article->title}}" >
    <div id="textHelp" class="form-text">write here you title</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">New Content</label>
    <textarea name="content" id="" cols="30" rows="10" class="form-control">{{$article->content}}</textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</section>

@endsection