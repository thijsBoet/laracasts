@extends('layout')

@section('title', 'Projects')

@section('content')

@foreach($projects as $project)
    <li>{{ $project->title }}</li>
  @endforeach

@endsection('content')