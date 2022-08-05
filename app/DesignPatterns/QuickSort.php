<?php

namespace App\DesignPatterns;

class QuickSort implements SortStrategy
{
    public function __construct(
        private array $data
    ){}

    public function sort(): array
    {
        sort($this->data);
        return $this->data;
    }
}
