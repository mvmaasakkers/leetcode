<?php


namespace Leetcode;


class Solution0005
{
    private string $result = '';

    /**
     * @param String $s
     * @return String
     */
    public function longestPalindrome(string $s): string
    {
        $len = strlen($s);

        if ($len === 0) {
            return "";
        }

        for ($i = 0; $i < $len; $i++) {
            $this->expandAroundCenter($s, $i, $i);
            $this->expandAroundCenter($s, $i, $i + 1);
        }

        return $this->result;
    }

    /**
     * @param string $s
     * @param int $left
     * @param int $right
     */
    private function expandAroundCenter(string $s, int $left, int $right): string
    {
        $len = strlen($s);
        $result = '';

        while ($left >= 0 && $right < $len && $s[$left] === $s[$right]) {
            $palindrome = substr($s, $left, $right - $left + 1);
            $n = strlen($palindrome);
            if ($n > 0 && $n > strlen($result)) {
                $result = $palindrome;
            }
            $left--;
            $right++;
        }

        if (strlen($result) > strlen($this->result)) {
            $this->result = $result;
        }

        return $result;
    }

}