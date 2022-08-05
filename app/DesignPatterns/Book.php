<?php

namespace App\DesignPatterns;

class Book
{
    public function __construct(
        private string $name,
        private string $author,
        private ?int   $currentPage = 0
    ){}

    public function getBookInformation() {
        return $this->name . ' by ' . $this->author;
    }

    public function turnPage()
    {
        $this->currentPage++;
        return $this;
    }

    public function getPage(){
        return $this->currentPage;
    }
}
