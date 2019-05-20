<?php

use PHPUnit\Framework\TestCase;
use POmelchenko\Math;

class MathTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     * @param $a
     * @param $b
     * @param $expected
     */
    public function testAdd($a, $b, $expected): void
    {
        $this->assertEquals($expected, Math::add($a, $b));
    }

    /**
     * @return array
     */
    public function additionProvider(): array
    {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 2],
        ];
    }

    /**
     * @dataProvider additionLargeProvider
     * @param $a
     * @param $b
     * @param $expected
     */
    public function testAddLarge($a, $b, $expected): void
    {
        $this->assertEquals($expected, Math::addLarge($a, $b));
    }

    /**
     * @return array
     */
    public function additionLargeProvider(): array
    {
        return [
            [0, 0, '0 + 0'],
            [0, 1, '0 + 1'],
            [1, 0, '1 + 0'],
            [1, 1, '1 + 1'],
        ];
    }
}
