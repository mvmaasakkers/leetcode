<?php


namespace Leetcode;


class Solution0004
{
    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    public function findMedianSortedArrays(array $nums1, array $nums2): float
    {
        $m = array_merge($nums1, $nums2);
        sort($m);

        if (count($m) === 0) {
            return 0;
        }

        if (count($m) === 1) {
            return $m[0];
        }

        if (count($m) % 2 === 0) { // even
            $i = count($m) / 2;

            return ($m[$i - 1] + $m[$i]) / 2;
        }

        return $m[floor(count($m) / 2)];
    }
}