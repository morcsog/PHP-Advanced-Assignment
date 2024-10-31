<?php

declare(strict_types=1);

require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . '/../src/Utils.php';

use App\IteratorExample\SortedArrayIterator;
use App\ExceptionExample\InvalidNumberException;
use App\Utils;

$arrOne = [456, 123, true];
$arrTwo = [500, 123, "I am a string!", 678];
$arrThree = [300, 123.67];
$arrFour = [65, 34, 78];

function printArraySorted(array $arr): void
{
    echo 'Printing sorted array: <br>';
    try {
        $sortedArr = new SortedArrayIterator($arr);
        Utils\printWithForeach($sortedArr);
        echo '<br>';
    } catch (InvalidNumberException $iArgEx) {
        echo 'Unable to print out array: ' . $iArgEx->getMessage();
    } finally {
        echo '<br>Finished printing<br><br>';
    }
}
printArraySorted($arrOne);
printArraySorted($arrTwo);
printArraySorted($arrThree);
printArraySorted($arrFour);
