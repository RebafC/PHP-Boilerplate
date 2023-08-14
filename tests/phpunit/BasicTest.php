<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

class BasicTest extends TestCase
{
    protected function setUp(): void
    {
    }

    /** @test */
    public function basic(): void
    {
        $this->assertEquals(true, false, 'what else did you expect?');
    }
}
