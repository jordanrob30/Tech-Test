<?php

namespace App\DesignPatterns;

class BookFactory
{
    public static function create(string $name, string $author){
        return new Book($name, $author);
    }
}
