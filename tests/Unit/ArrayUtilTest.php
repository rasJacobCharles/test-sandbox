<?php

declare(strict_types=1);

namespace Tests\Unit;

require 'src/Utility/ArrayUtility.php';

use App\Utility\ArrayUtility;
use PHPUnit\Framework\TestCase;

class ArrayUtilTest extends TestCase
{
    public function testSuccessFlatArray(): void
    {
        $arrayToFlatten = [1, 2, [3, 4, [5, 6, 7], 8], 9];
        $result = ArrayUtility::flatten($arrayToFlatten);
        $this->assertTrue(is_array($result));
        $this->assertSame([1, 2, 3, 4, 5, 6, 7, 8, 9], $result);
    }
}
