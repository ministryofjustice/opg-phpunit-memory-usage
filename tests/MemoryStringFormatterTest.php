<?php

declare(strict_types=1);

namespace MinistryOfJustice\PHPUnit\Tests;

use MinistryOfJustice\PHPUnit\MemoryStringFormatter;
use PHPUnit\Framework\TestCase;

class MemoryStringFormatterTest extends TestCase
{
    /**
     * @dataProvider memoryProvider
     */
    public function test_roundToStandardUnits(string $expectedValue, int $bytes): void
    {
        $this->assertEquals($expectedValue, MemoryStringFormatter::roundToStandardUnits($bytes));
    }

    public static function memoryProvider(): array
    {
        return [
            '1 Byte' => ['1 B', 1],
            'Maximum Bytes' => ['1023 B', 1023],
            '1 Kilobyte' => ['1 KB', 1024],
            'Maximum Kilobytes' => ['1024 KB', 1048575],
            '1 Megabyte' => ['1 MB', 1048576],
            'Maximum Megabytes' => ['1024 MB', 1073741823],
            '1 Gigabyte' => ['1 GB', 1073741824],
            '1024 Gigabytes' => ['1024 GB', 1099511627775],
        ];
    }
}
