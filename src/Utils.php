<?php

declare(strict_types=1);

namespace App\Utils;

use Iterator;

function generateRandomNumbers(int $length): array
{
    $rtrnArr = [];
    if (!isset($length)) {
        return [
            'Error:' => 'You did not provide a lenght.'
        ];
    }
    for ($i = 0; $i < $length; $i++) {
        array_push($rtrnArr, rand(0, 900));
    }
    return $rtrnArr;
}

function printWithForeach(iterable $arg): void
{
    echo 'Iterating over a(n) ' . gettype($arg) . ' with foreach.';
    foreach ($arg as $value) {
        echo '<br>' . $value;
    }
    echo '<br>';
}

function printIterator(Iterator $itr)
{
    echo 'Iterating over an iterator with object methods. <br>';
    $itr->rewind();
    while ($itr->valid()) {
        echo $itr->current();
        $itr->next();
        echo '<br>';
    }
}
