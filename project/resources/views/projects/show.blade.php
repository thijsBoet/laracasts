@extends('layout')

@section('content')

@include('inc.navbar')

<div class="jumbotron mt-3">
  <h1>{{ $project->title }}</h1>
  <p class="lead">{{ $project->description }}</p>
  <a class="btn btn-primary" href="/projects/{{ $project->id }}/edit" role="button">Edit »</a>
  <hr>
  @if($project->tasks->count())
    <div>
      @foreach($project->tasks as $task)
        <div>
          <form method="POST" action="/tasks/{{ $task->id }}">
            @method('PATCH')
            @csrf
            <div class="form-check">
                <input class="form-check-input" onChange="this.form.submit()" name="completed" type="checkbox" {{ $task->completed ? 'checked' : '' }}>
                <label class="form-check-label {{ $task->completed ? 'is-complete' : '' }}" for="completed">
                  {{ $task->description }}
                </label>
            </div>
          </form>
        </div>
      @endforeach
    </div>
  @endif
  <form method="POST" action="/projects/{{ $project->id }}/task" >
    @method('POST')
    @csrf
    @include('errors')
    <div class="form-group">
      <input type="text" name="description" placeholder="Project task" class="form-control" value="{{ old('description') }}">
    </div>
    <div>
      <button class="btn btn-success" type="submit">Add Task +</button>
    </div>
  </form>
</div>
@endsection