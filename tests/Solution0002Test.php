<?php

use Leetcode\Library\ListNode;
use Leetcode\Solution0002;
use PHPUnit\Framework\TestCase;

class Solution0002Test extends TestCase
{
    public function testTwoSum()
    {
        $cases = [
            [
                "l1" => new ListNode(2, new ListNode(4, new ListNode(3))),
                "l2" => new ListNode(5, new ListNode(6, new ListNode(4))),
                "expected" => new ListNode(7, new ListNode(0, new ListNode(8))),
            ],
        ];

        foreach ($cases as $case) {
            $s = new Solution0002();
            self::assertEquals($case['expected'], $s->addTwoNumbers($case['l1'], $case['l2']));
        }
    }
}
