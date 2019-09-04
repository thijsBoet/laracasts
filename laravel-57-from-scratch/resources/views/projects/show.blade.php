@extends('layout')

@section('title', '{{ $project->title }}')

@section('content')

  <h1>{{ $project->title }}</h1>

  <h3 class="text-lead">{{ $project->description }}</h3>

  <div class="mt-3">
    <form method="GET" action="/projects/{{$project->id}}/edit" id="inline">
      <button type="submit" class="btn btn-dark btn-sm">Edit</button>
    </form>

    <form method="POST" action="/projects/{{$project->id}}" id="inline">
      @method('DELETE')
      @csrf
      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
    </form>
  </div>

  @if ($project->tasks->count())
    <hr>
      @foreach($project->tasks as $task)
        <form method="POST" action="/tasks/{{ $task->id }}">
          @method('PATCH')
          @csrf
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <input name="completed" type="checkbox" aria-label="Checkbox for following task" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
              </div>
            </div>
            <div class="form-control {{ $task->completed ? 'is-complete' : '' }}" aria-label="Task">{{ $task->description }}</div>
          </div>
        </form>
      @endforeach
    <hr>
  @endif

  <form method="POST" action="/projects/{{ $project->id }}/tasks">
  @method('POST')
  @csrf

  @include('errors')

    <div class="form-row align-items-center">
      <div class="form-group col-sm-auto my-1">
        <label class="sr-only" for="description">Task</label>
        <input name="description" type="text" class="form-control form-control-sm" id="add" placeholder="Task">
      </div>
      <div class="form-group col-sm-auto  my-1">
        <button type="submit" class="btn btn-success btn-sm">Add +</button>
      </div>
    </div>
  </form>

@endsection