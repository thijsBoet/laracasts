@extends('layout')

@section('title', 'Create Project')

@section('content')

  <h1>Create a new Project</h1>

  <form method="POST" action="/projects/edit">
    {{ csrf_field() }}
    <div class="form-group">
      <input type="text" class="form-control" name="title" placeholder="Project Title">
    </div>
    <div class="form-group">
      <textarea name="description" placeholder="Project Description" cols="30" rows="10" class="form-control"></textarea>
    </div>
      <button type="submit" class="btn btn-block btn-outline-secondary">Create Project</button>
  </form>

@endsection