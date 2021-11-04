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

    public function testIsBool(): void
    {
        $this->assertTrue(Is::bool(true));
        $this->assertTrue(Is::bool(false));
    }

    public function testIsDouble(): void
    {
        $this->assertTrue(Is::double(123.12));
        $this->assertFalse(Is::double(123));
        $this->assertFalse(Is::double(false));
    }

    public function testIsInt(): void
    {
        $this->assertTrue(Is::int(123));
        $this->assertFalse(Is::int(false));
    }
}

