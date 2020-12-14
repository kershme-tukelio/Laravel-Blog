@extends('layouts.app')

@section('title', 'Create post')

@section('content')
<form method="POST" action="/posts">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Write here: </label>
        <textarea class="form-control" id="content" name="content"></textarea>
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="is_published" name="is_published" value="1">
      <label class="form-check-label" for="is_published">Publish immediately</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection