@extends('layouts.app')
@section('content')

<section class="row">
    <div class="col-12 ">
        <h1 class="titulo text-center">Nuevo articulo</h1>
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
            <div class="mb-3">
                <label for="exampleInputText" class="form-label">Content</label>
                <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <section class="row">
                <div class="col-md-6 ">
                    @foreach($tags as $tag)
                    <div class="list-group">
                        <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="{{$tag->id}}" name="tags[]">
                            {{$tag->name}}
                        </label>
                        @endforeach

                        <input class="form-check-input me-1" type="checkbox" value="">
                        Fourth checkbox
                        </label>
                        <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="">
                            Fifth checkbox
                        </label>
                    </div>
                </div>
    </section>
    <div class="col-6 col-md-6 justify-content-space-around">
        <button class="btn btn-outline-success text-dark my-5" type="submit">Submit</button>
        <button class="btn btn-outline-success text-dark my-5" type="submit">Delete</button>
    </div>

    </form>
    </div>


    @endsection
