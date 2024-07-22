<?php

require_once 'Book.php';
require_once 'Decorator.php';
require_once 'Ebook.php';
require_once 'ConcreteDecorator.php';



$myBook = new Ebook("php patterns", "uncle bob", "this is a great book about patterns");

$decoratedBook = new ConcreteDecorator($myBook);
$decoratedBook->getAuthor();