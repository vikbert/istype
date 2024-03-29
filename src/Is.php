<?php

declare(strict_types = 1);

namespace Vikbert;

use Throwable;

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

    /**
     * @param mixed $value
     */
    public static function double($value): bool
    {
        return is_double($value);
    }

    /**
     * @param mixed $value
     */
    public static function float($value): bool
    {
        return is_double($value);
    }

    /**
     * @param mixed $value
     */
    public static function int($value): bool
    {
        return is_int($value);
    }

    /**
     * @param mixed $value
     */
    public static function integer($value): bool
    {
        return is_int($value);
    }

    /**
     * @param mixed $value
     */
    public static function numeric($value): bool
    {
        return is_numeric($value);
    }

    /**
     * @param mixed $value
     */
    public static function object($value): bool
    {
        return is_object($value);
    }

    /**
     * @param mixed $value
     */
    public static function scalar($value): bool
    {
        return is_scalar($value);
    }

    /**
     * @param mixed $value
     */
    public static function array($value): bool
    {
        return is_array($value);
    }

    /**
     * @param mixed $value
     */
    public static function callable($value): bool
    {
        return is_callable($value);
    }

    /**
     * @param mixed $value
     */
    public static function countable($value): bool
    {
        return is_countable($value);
    }

    /**
     * @param mixed $value
     */
    public static function iterable($value): bool
    {
        return is_iterable($value);
    }

    /**
     * @param mixed $value
     */
    public static function email($value): bool
    {
        return false !== filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    /**
     * @param mixed $value
     */
    public static function url($value): bool
    {
        return false !== filter_var($value, FILTER_VALIDATE_URL);
    }

    public static function https(string $value): bool
    {
        $url = parse_url($value);

        return strtolower($url['scheme']) == 'https';
    }

    public static function http(string $value): bool
    {
        $url = parse_url($value);

        return strtolower($url['scheme']) == 'http';
    }

    public static function file(string $fileName): bool
    {
        return is_file($fileName);
    }

    /**
     * Determine if the target value is an image file
     *
     * @param mixed $fileName
     */
    public static function image(string $fileName): bool
    {
        return @is_array(getimagesize($fileName));
    }

    public static function pdf(string $fileName): bool
    {
        $mimes = mime_content_type($fileName);

        return $mimes && strtolower($mimes) === 'application/pdf';
    }

    public static function json(string $jsonContent): bool
    {
        json_decode($jsonContent);

        return json_last_error() === JSON_ERROR_NONE;
    }

    public static function xml(string $xmlContent): bool
    {
        try {
            simplexml_load_string($xmlContent);
        } catch (Throwable $exception) {
            return false;
        }

        return true;
    }

    public static function ip(string $value): bool
    {
        return false !== filter_var($value, FILTER_VALIDATE_IP);
    }
}
