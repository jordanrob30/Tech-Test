<?php

namespace App\DesignPatterns;

class BubbleSort implements SortStrategy
{
    public function __construct(
        private array $data
    ){}

    public function sort(): array
    {
        $size = count($this->data)-1;
        for ($i=0; $i<$size; $i++) {
            for ($j=0; $j<$size-$i; $j++) {
                $k = $j+1;
                if ($this->data[$k] < $this->data[$j]) {
                    // Swap elements at indices: $j, $k
                    list($this->data[$j], $this->data[$k]) = array($this->data[$k], $this->data[$j]);
                }
            }
        }
        return $this->data;
    }
}
