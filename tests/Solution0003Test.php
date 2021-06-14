<?php


use Leetcode\Solution0003;
use PHPUnit\Framework\TestCase;

class Solution0003Test extends TestCase
{

    public function testLengthOfLongestSubstring()
    {
        $cases = [
            [
                "input" => "abcabcbb",
                "expected" => 3,
            ],
            [
                "input" => "bbbbb",
                "expected" => 1,
            ],
            [
                "input" => "pwwkew",
                "expected" => 3,
            ],
            [
                "input" => "aab",
                "expected" => 2,
            ],
            [
                "input" => " ",
                "expected" => 1,
            ],
            [
                "input" => "ohomm",
                "expected" => 3,
            ],
            [
                "input" => "jbpnbwwd",
                "expected" => 4,
            ],
        ];


        foreach ($cases as $case) {
            $s = new Solution0003();
            self::assertSame($case['expected'], $s->lengthOfLongestSubstring($case['input']));
        }
    }
}
