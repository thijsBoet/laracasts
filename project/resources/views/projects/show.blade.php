@extends('layout')


@section('content')
  <h6 class="display-4">{{ $project->title }}</h6>
  
  <p class="lead">{{ $project->description }}</p>

  <p>
    <a href="/projects/{{ $project->id }}/edit">Edit</a>
  </p>
@endsection