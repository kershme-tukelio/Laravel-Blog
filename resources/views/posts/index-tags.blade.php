@extends('layouts.app')

@section('title', 'Tags')

@section('content')

<h1>Tags list</h1>
    <ul>
        @foreach($tags as $tag)
            <li>
                {{$tag->name}}
            </li>
        @endforeach
    </ul>

@endsection