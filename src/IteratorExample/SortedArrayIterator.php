<?php

declare(strict_types=1);

namespace App\IteratorExample;

use Exception;
use App\ExceptionExample\InvalidNumberException;
use Throwable;

class SortedArrayIterator implements \Iterator
{
    public function __construct(public array $arr)
    {
        if(count($arr) <= 0){
            throw new Exception('You gave an empty array.');
        }
        foreach($arr as $item){
            if($item <= 0 || !is_int($item)){
                throw new InvalidNumberException($item);                
            }
        }
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
