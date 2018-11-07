@extends('layouts.app')
@section('content')

    <h1>Blog Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $i)
            <div class="card">    
                <div class=""><a href='/posts/{{$i->id}}'>{{ $i->title }}</div>
                <small>created at: {{ $i->created_at }},
                 written by: {{$i->user->name}}</small>             
            </div>
        @endforeach
        {{$posts->links()}}<!-- pagination: can be found in PostsController -->
    @else
        <P>no posts found</p>
    @endif

@endsection