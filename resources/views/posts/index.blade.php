@extends('layouts.app')

@section('title', 'Posts')

@section('content')
<h1>Posts</h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{route('posts.single', ['id' => $post->id])}}">{{$post->title}}</a>
            </li>
        @endforeach
    </ul>
@endsection