@extends('layout')

@section('title', 'Create Project')

@section('content')

  <h1>Create a new Project</h1>

  @include('errors')

  <form method="POST" action="/projects">
    @method('POST')
    @csrf
    <div class="form-group">
      <input type="text" class="form-control" name="title" placeholder="Project Title" value="{{ old('title') }}">
    </div>
    <div class="form-group">
      <textarea name="description" placeholder="Project Description" cols="30" rows="10" class="form-control">{{ old('description') }}</textarea>
    </div>
    <button type="submit" class="btn btn-block btn-dark">Create Project +</button>
  </form>

@endsection