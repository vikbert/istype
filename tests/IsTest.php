<?php

namespace Vikbert\Tests;

use PHPUnit\Framework\TestCase;
use Vikbert\Is;

class IsTest extends TestCase
{
    public function testIsString(): void
    {
        $this->assertTrue(Is::string('abc'));
        $this->assertFalse(Is::string(123));
    }
}

