@extends('layout')

@section('content')

<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
    @forelse($articles as $article)
			<div class="title">
				<h2>
          <a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a>
        </h2>
      </div>

      <p>
        <img src="images/banner.jpg" alt="" class="image image-full">
      </p>

      <p>{{ $article->excerpt }}</p>

    @empty
      <p>No relevant articles yet.</p>
    @endforeach
		</div>
	</div>
</div>
@endsection