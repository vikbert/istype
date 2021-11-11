<?php

namespace Vikbert\Tests;

use PHPUnit\Framework\TestCase;
use stdClass;
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

    public function testIsInteger(): void
    {
        $this->assertTrue(Is::integer(123));
        $this->assertFalse(Is::integer(false));
    }

    public function testIsNumeric(): void
    {
        $this->assertTrue(Is::numeric(123));
        $this->assertFalse(Is::numeric(false));
    }

    public function testIsObject(): void
    {
        $this->assertTrue(Is::object(new stdClass()));
        $this->assertFalse(Is::object(123));
        $this->assertFalse(Is::object(null));
        $this->assertFalse(Is::object(true));
    }

    public function testIsScalar(): void
    {
        $this->assertTrue(Is::scalar(123));
        $this->assertTrue(Is::scalar(true));
        $this->assertFalse(Is::scalar(null));
        $this->assertFalse(Is::scalar([]));
    }

    public function testIsArray(): void
    {
        $this->assertTrue(Is::array([]));
        $this->assertFalse(Is::array(123));
    }

    public function testIsEmail(): void
    {
        $this->assertTrue(Is::email('xun.zhou@mail.schwarz'));
        $this->assertFalse(Is::email('xun.zhou@mail'));
        $this->assertFalse(Is::email('@mail.schwarz'));
    }

}

