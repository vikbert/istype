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

    public static function callable($value): bool
    {
        return is_callable($value);
    }

    public static function countable($value): bool
    {
        return is_countable($value);
    }

    public static function iterable($value): bool
    {
        return is_iterable($value);
    }

    public static function email($value): bool
    {
        return false !== filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public static function url($value): bool
    {
        return false !== filter_var($value, FILTER_VALIDATE_URL);
    }

    public static function https($value): bool
    {
        $url = parse_url($value);

        return strtolower($url['scheme']) == 'https';
    }

    public static function http($value): bool
    {
        $url = parse_url($value);

        return strtolower($url['scheme']) == 'http';
    }

    public static function file($value): bool
    {
        return is_file($value);
    }

    /**
     * file
     * image
     * pdf
     * json
     * xml
     */
}
