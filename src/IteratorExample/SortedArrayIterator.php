<?php

declare(strict_types=1);

namespace App\IteratorExample;

class SortedArrayIterator implements \Iterator
{
    public function __construct(public array $arr)
    {
        sort($this->arr);
    }
    public function current(): mixed
    {
        return current($this->arr);
    }
    public function next(): void
    {
        next($this->arr);
    }
    public function key(): int
    {
        return key($this->arr);
    }
    public function valid(): bool
    {
        return key($this->arr) !== null;
    }
    public function rewind(): void
    {
        reset($this->arr);
    }
}
