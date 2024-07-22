<?php

require_once 'Book.php';

class Decorator implements Book
{
    public $title;
    public $author;
    public $contents;
    public $Ebook;

    public function __construct(Ebook $Ebook)
    {
        $this->Ebook = $Ebook;
    }

    public function getTitle(): string
    {
        return $this->Ebook->title;
    }

    public function getAuthor(): string
    {
        return $this->Ebook->author;
    }

    public function getContents(): string
    {
        return $this->contents;
    }
}