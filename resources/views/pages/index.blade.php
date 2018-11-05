@extends('layouts.app')
@section('content')

<div class='jumbotron text-center'>
    <h1>{{ $title }}</h1>
    <p> this is the start of a blog or something using laravel </p>
    <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> 
    <a class="btn btn-primary btn-lg" href="/register" role="button">Signup</a>
</div>

@endsection