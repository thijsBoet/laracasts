@extends('layout')

@section('title', 'Edit Project')

@section('content')

  <h1>Edit Project</h1>

  @if($errors->any())
    <div class="alert alert-danger" role="alert">
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </div>
  @endif
  
  <form method="POST" action="/projects/{{ $project->id }}">
    @method('PATCH')
    @csrf

    <div class="form-group">
      <input type="text" class="form-control" name="title" placeholder="Project Title" value="{{ $project->title }}">
    </div>
    <div class="form-group">
      <textarea name="description" placeholder="Project Description" cols="30" rows="10" class="form-control">{{ $project->description }}</textarea>
    </div>
      <button type="submit" class="btn btn-block btn-dark">Update Project</button>
  </form>

@endsection