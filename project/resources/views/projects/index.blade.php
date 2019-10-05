@extends('layout')



@section('content')

@include('inc.navbar')

<div class="jumbotron mt-3">
<h1 class="mb-4">
  Projects
</h1>

<ul>
  @foreach($projects as $project)
    <li class="lead">
      <a href="/projects/{{ $project->id }}">
        {{ $project->title }}
      </a>
    </li>
  @endforeach
</ul>
</div>

@endsection('content')