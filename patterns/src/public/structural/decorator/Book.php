<?php

interface Book
{

    public function getTitle(): string;

    public function getAuthor(): string;

    public function getContents(): string;
}