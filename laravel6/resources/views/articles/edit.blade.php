@extends('layout')

@section('head')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
@endsection

@section('content')

<div id="wrapper">
	<div id="page" class="container">
    <h1 class="heading has-text-weight-bold is-size-4">Update Article</h1>
    @include('errors')
    <form action="/articles/{{ $article->id }}" method="POST">
      @csrf
      @method('PUT')
      <div class="field">
        <label for="title" class="label">Title</label>

        <div class="control">
        <input 
            type="text" 
            class="input" 
            name="title" 
            id="title" 
            value="{{ $article->title }}"
            required>
        </div>
      </div>

      <div class="field">
        <label for="excerpt" class="label">Excerpt</label>

        <div class="control">
        <textarea 
            name="excerpt" 
            id="excerpt" 
            class="textarea" 
            required>{{ $article->excerpt }}</textarea>
        </div>
      </div>

      <div class="field">
        <label for="body" class="label">Body</label>

        <div class="control">
          <textarea 
              name="body" 
              id="body" 
              class="textarea" 
              required>{{ $article->body }}</textarea>
        </div>
      </div>

      <div class="field is-grouped">
        <div class="control">
          <button class="button is-link">Update</button>
        </div>
      </div>
    </form>

	</div>
</div>
@endsection