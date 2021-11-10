<?php

declare(strict_types = 1);

namespace Vikbert;

final class Is
{
    /**
     * @param mixed $value
     */
    public static function string($value): bool
    {
        return is_string($value);
    }

    /**
     * @param mixed $value
     */
    public static function bool($value): bool
    {
        return is_bool($value);
    }

    public static function double($value): bool
    {
        return is_double($value);
    }

    public static function float($value): bool
    {
        return is_double($value);
    }

    public static function int($value): bool
    {
        return is_int($value);
    }

    public static function integer($value): bool
    {
        return is_int($value);
    }

    public static function numeric($value): bool
    {
        return is_numeric($value);
    }

    public static function object($value): bool
    {
        return is_object($value);
    }

    public static function scalar($value): bool
    {
        return is_scalar($value);
    }

    public static function array($value): bool
    {
        return is_array($value);
    }

    /**
     * is_array
     * empty
     * callable
     * countable
     * iterable
     * email
     * url
     * http
     * https
     * file
     * image
     * pdf
     * json
     * xml
     */
}
