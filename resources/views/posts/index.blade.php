@extends('layouts.app')
@section('content')

    <h1>Blog Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $i)
            <div class="card">    
                <div class=""><a href='/posts/{{$i->id}}'>{{ $i->title }}</div>
                <div class="">{{ $i->created_at }}</div>             
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <P>no posts found</p>
    @endif

@endsection