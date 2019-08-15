<?php

declare(strict_types=1);

namespace App\Utility;

use RecursiveArrayIterator;
use RecursiveIteratorIterator;

final class ArrayUtility
{
    public static function flatten(array $arrayToFlatten): array
    {
         return iterator_to_array(
                 new RecursiveIteratorIterator(new RecursiveArrayIterator($arrayToFlatten)),
                 false
         );
    }
}
