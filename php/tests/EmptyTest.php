<?php

use PHPUnit\Framework\TestCase;

final class EmptyTest extends TestCase
{
    public function testGreetsWithName(): void
    {
        $this->assertSame('Hello, Alice!', '');
    }
}
