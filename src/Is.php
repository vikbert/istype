<?php

declare(strict_types = 1);

namespace Vikbert;

final class Is
{
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
}
