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

    public function testIsUrl(): void
    {
        $this->assertTrue(Is::url('http://localhost'));
        $this->assertTrue(Is::url('http://localhost.com'));
        $this->assertTrue(Is::url('ftp://localhost.com'));

        $this->assertFalse(Is::url('://localhost.com'));
        $this->assertFalse(Is::url('http:/localhost.com'));
        $this->assertFalse(Is::url('http://.com'));
    }

    public function testIsHttps(): void
    {
        $this->assertTrue(Is::https('https://localhost'));
        $this->assertFalse(Is::https('http://localhost.com'));
    }

    public function testIsHttp(): void
    {
        $this->assertTrue(Is::http('http://localhost'));
        $this->assertFalse(Is::http('https://localhost.com'));
    }

    public function testIsFile(): void
    {
        $this->assertTrue(Is::file(__DIR__ . '/foo.txt'));
        $this->assertFalse(Is::file(__DIR__ . '/bar.txt'));
    }

    public function testIsImage(): void
    {
        $this->assertTrue(Is::image(__DIR__ . '/bar.jpeg'));
        $this->assertFalse(Is::image(__DIR__ . '/foo.txt'));
    }

    public function testIsPdf(): void
    {
        $this->assertTrue(Is::pdf(__DIR__ . '/foo.pdf'));
        $this->assertFalse(Is::pdf(__DIR__ . '/foo.txt'));
    }

    public function testIsJson(): void
    {
        $this->assertTrue(Is::json('[]'));
        $this->assertTrue(Is::json('{}'));
        $this->assertTrue(Is::json('{"1": 1}'));
        
        $this->assertFalse(Is::json('{1: 1}'));
    }

}

