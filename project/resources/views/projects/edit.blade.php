@extends('layout')

@section('title', 'Edit project')

@section('content')

<form method="POST" action="/projects/{{ $project->id }}">
  @method('PATCH')
  @csrf
  <div class="form-group">
    <label for="Title">Title</label>
    <input name="title" type="text" class="form-control" id="Title" aria-describedby="Project Title" placeholder="Title" value="{{ $project->title }}" required>
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" class="form-control" id="description" rows="3" required>{{ $project->description }}</textarea>
  </div>

  <div>
    <button type="submit" class="btn btn-primary float-left">Update</button>
  </div>
</form>

<form method="POST" action="/projects/{{ $project->id }}">
  @method('DELETE')
  @csrf
  <button type="submit" class="btn btn-danger float-right">Delete</button>
</form>

@endsection('content')