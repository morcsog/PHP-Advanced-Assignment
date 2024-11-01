<?php

declare(strict_types=1);

require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . '/../src/Utils.php';

use App\Utils;
use App\IteratorExample\SortedArrayIterator;

echo 'Testing array FILTER: <br>';
$arr = [123, "I am a string!", false, 42, 56.52, 101, 99];

$sai = SortedArrayIterator::withPositiveIntegersOnly($arr);
Utils\printWithForeach($sai);
