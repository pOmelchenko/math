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
        $arrA = array_reverse(str_split($a));
        $arrB = array_reverse(str_split($b));
        $res = [];

        if (count($arrA) <= count($arrB)) {
            $longest = $arrB;
            $shortest = $arrA;
        } else {
            $longest = $arrA;
            $shortest = $arrB;
        }

        $subres = [];
        foreach ($longest as $key => $value) {
            $subres = array_reverse(
                str_split(
                    $value + ($shortest[$key] ?? 0) + ($subres[1] ?? 0)
                )
            );

            $res[] = $subres[0];
        }

        return implode('', array_reverse($res));
    }
}
