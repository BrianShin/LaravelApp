@extends('layouts.app')
@section('content')

<h1>{{ $title }}</h1>
@if( count($services) > 0)
    @foreach($services as $i)
        <ul>
            <li>{{$i}}</li>
        </ul>
    @endforeach
@endif

@endsection