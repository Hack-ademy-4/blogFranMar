@extends('layouts.app')
@section('content')
<section class="row">

<h1>Registrate a este puto blog</h1>


    <div class="col-12 col-md-6 offset-md-3">
        <form action="{{route('register')}}" method="POST">
        @csrf
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="exampleInputtext" aria-describedby="nameHelp" name="name">
                <div id="nameHelp" class="form-text">We'll never share your full name with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputtext" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>
@endsection
