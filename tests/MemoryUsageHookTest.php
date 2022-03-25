<?php

declare(strict_types=1);

namespace MOJ\PHPUnit\Tests;

use PHPUnit\Framework\TestCase;

class MemoryUsageHookTest extends TestCase
{
    private string $uselessData;

    public function test_under_memory_usage_threshold(): void
    {
        $this->assertTrue(true);
    }

    public function test_exceed_memory_usage_threshold(): void
    {
        $this->uselessData = '';

        for($i = 0; $i < 200000; $i++) {
            $this->uselessData .= $i;
        }

        $this->assertTrue(true);
    }
}
