@extends('layouts.app')
@section('content')

<section class="row">
<div class="col-12">
<h1>nuevo articulo</h1>
</div>
<div class="col-12 col-md-6 offset-md-3">
<form action="{{route('articles.store')}}" method="POST">
@csrf
  <div class="mb-3">
    <label for="exampleInputTitle" class="form-label">Title</label>
    <input type="text" class="form-control" id="exampleInputText" aria-describedby="textHelp" name="title">
    <div id="textHelp" class="form-text">write here you title</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Content</label>
    <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</section>

@endsection