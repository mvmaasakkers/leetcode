<?php

namespace Leetcode;

class Solution0001
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        foreach ($nums as $i => $num) {
            foreach ($nums as $j => $num2) {
                if ($i !== $j && $num + $num2 === $target) {
                    return [$i, $j];
                }
            }
        }
    }
}