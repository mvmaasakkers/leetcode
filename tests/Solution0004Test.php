<?php


use Leetcode\Solution0004;
use PHPUnit\Framework\TestCase;

class Solution0004Test extends TestCase
{
    public function testLengthOfLongestSubstring()
    {
        $cases = [
            [
                "input1" => [1,3],
                "input2" => [2],
                "expected" => 2.0,
            ],
            [
                "input1" => [1,2],
                "input2" => [3,4],
                "expected" => 2.5,
            ],
            [
                "input1" => [0,0],
                "input2" => [0,0],
                "expected" => 0.0,
            ],
            [
                "input1" => [],
                "input2" => [1],
                "expected" => 1.0,
            ],
            [
                "input1" => [2],
                "input2" => [],
                "expected" => 2.0,
            ],
            [
                "input1" => [],
                "input2" => [],
                "expected" => 0.0,
            ],
        ];


        foreach ($cases as $case) {
            $s = new Solution0004();
            self::assertSame($case['expected'], $s->findMedianSortedArrays($case['input1'], $case['input2']));
        }
    }
}