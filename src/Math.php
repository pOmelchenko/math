<?php

namespace POmelchenko;

/**
 * Class Math
 * @package POmelchenko
 */
class Math
{
    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    public static function add(int $a, int $b): int
    {
        return $a + $b;
    }

    /**
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function addLarge(string $a, string $b): string
    {
        return "$a + $b";
    }
}
