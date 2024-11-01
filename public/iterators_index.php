<?php

declare(strict_types=1);

require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . '/../src/Utils.php'; // I literally spent 1,5-2 hours with debugging this, but I couldn't find out why I need to include this directly, and why can't use autoload on this...

use App\IteratorExample\SortedArrayIterator;
use App\utils;

$rndArr = utils\generateRandomNumbers(5);
echo 'Testing ARRAY iteration: <br>';
utils\printWithForeach($rndArr);
echo '<br>';

$sai = new SortedArrayIterator($rndArr);
echo 'Testing ITERATOR iteration: <br>';
utils\printWithForeach($sai);
echo '<br>';
utils\printIterator($sai);
