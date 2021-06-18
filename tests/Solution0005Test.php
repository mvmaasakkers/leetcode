<?php


use Leetcode\Solution0005;
use PHPUnit\Framework\TestCase;

class Solution0005Test extends TestCase
{
    public function testLengthOfLongestSubstring()
    {
        $cases = [
            [
                "input" => "babad",
                "expected" => "bab",
            ],
            [
                "input" => "cbbd",
                "expected" => "bb",
            ],
            [
                "input" => "a",
                "expected" => "a",
            ],
            [
                "input" => "ac",
                "expected" => "a",
            ],
            [
                "input" => "abcdbbfcba",
                "expected" => "bb",
            ],
            [
                "input" => "civilwartestingwhetherthatnaptionoranynartionsoconceivedandsodedicatedcanlongendureWeareqmetonagreatbattlefiemldoftzhatwarWehavecometodedicpateaportionofthatfieldasafinalrestingplaceforthosewhoheregavetheirlivesthatthatnationmightliveItisaltogetherfangandproperthatweshoulddothisButinalargersensewecannotdedicatewecannotconsecratewecannothallowthisgroundThebravelmenlivinganddeadwhostruggledherehaveconsecrateditfaraboveourpoorponwertoaddordetractTgheworldadswfilllittlenotlenorlongrememberwhatwesayherebutitcanneverforgetwhattheydidhereItisforusthelivingrathertobededicatedheretotheulnfinishedworkwhichtheywhofoughtherehavethusfarsonoblyadvancedItisratherforustobeherededicatedtothegreattdafskremainingbeforeusthatfromthesehonoreddeadwetakeincreaseddevotiontothatcauseforwhichtheygavethelastpfullmeasureofdevotionthatweherehighlyresolvethatthesedeadshallnothavediedinvainthatthisnationunsderGodshallhaveanewbirthoffreedomandthatgovernmentofthepeoplebythepeopleforthepeopleshallnotperishfromtheearth",
                "expected" => "ranynar",
            ],

        ];


        foreach ($cases as $case) {
            $s = new Solution0005();
            self::assertSame($case['expected'], $s->longestPalindrome($case['input']));
        }
    }
}