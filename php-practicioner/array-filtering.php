<?php

class Post
{
  public $title;

  public $author;

  public $published;

  public function __construct($title, $author, $published)
  {
    $this->title = $title;
    $this->author = $author;
    $this->published = $published;   
  }
}

$posts = [
  new Post('My first post', 'MB', true),
  new Post('My second post', 'MB', true),
  new Post('My third post', 'AR', true),
  new Post('My fourth post', 'JG', false)
];

$unpublishedPost = array_filter($posts, function($posts){
  return ! $posts->published;
});

$publishedPost = array_filter($posts, function($posts){
  return $posts->published;
});

$titleArray = array_map(function($posts){
  return ['title' => $posts->title];
},$posts);

$titles = array_column($posts, 'title');
?>

<pre>
<?= var_dump($unpublishedPost, $publishedPost, $titleArray, $titles); ?>
</pre>