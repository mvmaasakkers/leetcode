<?php


namespace Leetcode;


class Solution0003
{
    /**
     * @param String $s
     * @return Integer
     */
    public function lengthOfLongestSubstring(string $s): int
    {
        $startPos = 0;
        $maxLen = 0;
        $len = strlen($s);
        $found = [];
        while ($startPos < $len) {
            for ($i = $startPos; $i < $len; $i++) {

                if (!in_array($s[$i], $found, true)) {
                    $found[] = $s[$i];

                    if (count($found) > $maxLen) {
                        $maxLen = count($found);
                    }
                } else {
                    $found = [];
                    break;
                }
            }
            $startPos++;
        }

        return $maxLen;
    }
}