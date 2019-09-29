@extends('layout')

@section('title', 'Edit project')

@section('content')

<form method="POST" action="/projects/{{ $project->id }}">
  {{ method_field('PATCH') }}
  @csrf
  <div class="form-group">
    <label for="Title">Title</label>
    <input type="text" class="form-control" id="Title" aria-describedby="Project Title" placeholder="Title" value="{{ $project->title }}">
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="description" rows="3">{{ $project->description }}</textarea>
  </div>

  <div>
    <button type="submit" class="btn btn-primary btn-block">Update</button>
  </div>
</form>

@endsection('content')