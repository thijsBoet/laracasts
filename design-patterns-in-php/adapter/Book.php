<?php

## 	An Addapter allows you to translate one interface for use with another
#	Like a travel adapter for a UK power socket

require 'vendor/autoload.php';

use Acme\Book;

class Person {
	public function read($book)
	{
		$book->open();
		$book->turnPage();
	}
}

(new Person)->read(new Book);

?>