@extends('layout')

@section('title', 'Create project')

@section('content')

<form method="POST" action="/projects" >
  {{ method_field('POST') }}
  @csrf
  <div class="form-group">
    <input type="text" name="title" placeholder="Project title" class="form-control">
  </div>
  <div class="form-group">
    <textarea name="description" placeholder="Project description" rows="3" class="form-control"></textarea>
  </div>
  <div>
    <button class="btn btn-block btn-primary" type="submit">Create Project</button>
  </div>
</form>

@endsection('content')