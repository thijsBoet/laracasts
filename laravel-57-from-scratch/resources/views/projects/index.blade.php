@extends('layout')

@section('title', 'Projects')

@section('content')

  <h1>Projects</h1>

  <ol>
    <hr>
    @foreach($projects as $project)
      <li>{{ $project->title }}</li>
      <span>{{ $project->description }}</span>
      <hr>
    @endforeach
  </ol>

@endsection