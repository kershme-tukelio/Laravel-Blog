@extends('layouts.app')

@section('title', 'Add tags')

@section('content')

<form method="POST" action="/tags/store">
    @csrf
    <div class="mb-3">
        <label for="content" class="form-label">Add tag: </label>
        <input class="form-control @error('content') is-invalid @enderror" id="content" name="content">
        @include('partials.error-message', ['field' => 'content'])
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection