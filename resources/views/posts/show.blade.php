@extends('layouts.app')

@section('title', $post->title)

@section('content')
<h1>{{$post->title}}</h1>
    <p>
        {{$post->content}}
    </p>
    <h3>Comments</h3>
    @foreach ($post->comments as $comment)
        <p>{{$comment->content}}</p>
    @endforeach
<hr/>

@if(Session::has('message'))
<div>
    {{session('message')}}
</div>
@endif

<form method="POST" action="{{route('comments.store', ['post' => $post->id])}}">
    @csrf
    <div class="mb-3">
        <label for="content" class="form-label">Comment: </label>
        <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content"></textarea>
        @include('partials.error-message', ['field' => 'content'])
        <input type="checkbox" name="age_check">
        <label for="age.check">I am 18 or older</label>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection