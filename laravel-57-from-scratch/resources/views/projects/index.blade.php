@extends('layout')

@section('title', 'Projects')

@section('content')

  <h1>Projects</h1>

  <ul>
    <hr>
    @foreach($projects as $project)
      <li class="bullet">
        <a href="/projects/{{ $project->id }}">
          {{ $project->title }}
        </a>
      </li>
      <span>{{ $project->description }}</span>
      <br>

      <div class="mt-1">
        <form method="GET" action="/projects/{{$project->id}}/edit" id="inline">
          <button type="submit" class="btn btn-dark btn-sm">Edit</button>
        </form>

        <form method="POST" action="/projects/{{$project->id}}" id="inline">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
      </div>

      <hr>
    @endforeach
  </ul>

@endsection