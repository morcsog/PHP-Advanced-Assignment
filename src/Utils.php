<?php

declare(strict_types=1);

namespace App\utils;

use Iterator;

function generateRandomNumbers(int $length): array
{
    $result = [];
    for ($i = 0; $i < $length; $i++) {
        $result[] = rand(0, 999);
    }
    return $result;
}

function printWithForeach(iterable $arg): void
{
    echo 'Iterating over a(n) ' . gettype($arg) . ' with foreach.';
    foreach ($arg as $value) {
        echo '<br>' . $value;
    }
    echo '<br>';
}

function printIterator(Iterator $itr): void
{
    echo 'Iterating over an iterator with object methods. <br>';
    $itr->rewind();

    while ($itr->valid()) {
        echo $itr->current();
        $itr->next();
        echo '<br>';
    }
}

function randomNumbersWithGenerator(int $length): \Generator
{
    for ($i = 0; $i < $length; $i++) {
        rand(0, 999);
        yield;
    }
}

function printMemoryUsage(): void
{
    echo 'Current memory usage: ' . number_format(memory_get_usage(true) / 1000, 2, '.', ' ') . ' KB <br>';
}
