@extends('layout')

@section('title', 'Projects')

@section('content')

<ul>
  @foreach($projects as $project)
    <li>
      <a href="/projects/{{ $project->id }}">
        {{ $project->title }}
      </a>
    </li>
  @endforeach
</ul>

@endsection('content')