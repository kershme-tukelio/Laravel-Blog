@extends('layouts.app')

@section('title', 'Add tags')

@section('content')

<form method="POST" action="/tags/create">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Add tag: </label>
        <input class="form-control @error('name') is-invalid @enderror" id="name" name="name">
        @include('partials.error-message', ['field' => 'name'])
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection