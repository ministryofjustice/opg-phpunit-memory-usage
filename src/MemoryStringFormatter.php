<?php

declare(strict_types=1);

namespace MinistryOfJustice\PHPUnit;

class MemoryStringFormatter
{
    public static function roundToStandardUnits(int $bytes): string
    {
        $unit = ['B','KB','MB','GB'];

        $magnitude = floor(log($bytes, 1024));
        $value = round($bytes / pow(1024, $magnitude), 2);

        return $value . ' ' . $unit[$magnitude];
    }
}
