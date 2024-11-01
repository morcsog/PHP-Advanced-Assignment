<?php

declare(strict_types=1);

namespace App\IteratorExample;

use Exception;
use App\ExceptionExample\InvalidNumberException;
use Throwable;

final class SortedArrayIterator implements \Iterator
{
    public function __construct(private array $arr)
    {
        foreach ($arr as $item) {
            if ($item <= 0 || !is_int($item)) {
                throw new InvalidNumberException($item);
            }
        }
        sort($this->arr);
    }

    public function current(): int
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

    public static function withPositiveIntegersOnly(array $arr): SortedArrayIterator
    {
        return new SortedArrayIterator(array_filter($arr, fn ($v) => is_int($v) && $v > 0));
    }

}
