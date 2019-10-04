@extends('layout')


@section('content')
  <h6 class="display-4">{{ $project->title }}</h6>
  
  <p class="lead">{{ $project->description }}</p>

  <p>
    <a href="/projects/{{ $project->id }}/edit">Edit</a>
  </p>

  @if($project->tasks->count())
    <div>
      @foreach($project->tasks as $task)
        <div>
          <form method="POST" action="/tasks/{{ $task->id }}">
            @method('PATCH')
            @csrf
            <div class="form-check">
                <input class="form-check-input" onChange="this.form.submit()" name="completed" type="checkbox" id="completed" {{ $task->completed ? 'checked' : '' }}>
                <label class="form-check-label {{ $task->completed ? 'is-complete' : '' }}" for="completed">
                  {{ $task->description }}
                </label>
            </div>
          </form>
        </div>
      @endforeach
    </div>
  @endif 
  

@endsection