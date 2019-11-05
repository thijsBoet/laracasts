@extends('layout')

@section('content')

<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
    @foreach($articles as $article)
			<div class="title">
				<h2>
          <a href="/articles/{{ $article->id }}">{{ $article->title }}</a>
        </h2>
      </div>

      <p>
        <img src="images/banner.jpg" alt="" class="image image-full">
      </p>

      <p>{{ $article->excerpt }}</p>
    @endforeach
		</div>
	</div>
</div>
@endsection