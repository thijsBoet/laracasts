<?php

$book = ['The Title', 'Joe Johnson'];

// Old way
list($title, $author) = $book;

// New way
[$title, $author] = $book;
var_dump($title, $author);

$film = ['title' => 'the Matrix', 'author' => 'Wachowski brothers'];

// New way
['title' => $title, 'author' => $author] = $film;
var_dump($title, $author);

$books = [
  ['title' => 'The Martian', 'author' => 'Andy Weir'],
  ['title' => 'Harry Potter', 'author' => 'JK Rowling']
];

foreach ($books as ['title' => $title, 'author' => $author]){
  var_dump($title, $author);
}