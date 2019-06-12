<?php

namespace Tests;

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
            ['0', '0', '0'],
            ['0', '1', '1'],
            ['10', '1', '11'],
            ['11', '1', '12'],
            [
                '246546545646549875613616516574987654654654654564654654654654654657878984654327549815184946532754615',
                '877495823945730457203475273465678236459623945629387465283746592345872673645293874652938746574329345764',
                '877742370491377007079088889982253224114278600283952119938401247000530552629948202202753931520862100379',
            ]
        ];
    }
}
