<?php


namespace Leetcode;


class Solution0006
{
    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert(string $s, int $numRows)
    {
        $len = strlen($s);
        $rows = [];
        $row = 0;
        $down = true;
        for ($i = 0; $i < $len; $i++) {
            if ($row === $numRows) {
                $down = false;
            } elseif ($row === 1) {
                $down = true;
            }

            if ($down) {
                $row++;
            } else {
                $row--;
            }

            $rows[$row][] = $s[$i];
        }

        $value = '';
        foreach ($rows as $row) {
            $value .= implode('', $row);
        }

        return $value;
    }
}