<?php


use Leetcode\Solution0006;
use PHPUnit\Framework\TestCase;

class Solution0006Test extends TestCase
{
    public function testConvert()
    {
        $cases = [
            [
                "input" => "PAYPALISHIRING",
                "numRows" => 3,
                "expected" => "PAHNAPLSIIGYIR",
            ],
            [
                "input" => "PAYPALISHIRING",
                "numRows" => 4,
                "expected" => "PINALSIGYAHRPI",
            ],
            [
                "input" => "A",
                "numRows" => 1,
                "expected" => "A",
            ],
        ];

        foreach ($cases as $case) {
            $s = new Solution0006();
            self::assertSame($case['expected'], $s->convert($case['input'], $case['numRows']));
        }
    }
}