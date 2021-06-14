<?php

namespace Leetcode;

use Leetcode\Library\ListNode;

class Solution0002
{
    public int $carry = 0;

    /**
     * @param ListNode|null $l1
     * @param ListNode|null $l2
     * @return ListNode
     */
    public function addTwoNumbers(?ListNode $l1, ?ListNode $l2): ?ListNode
    {
        if (!is_null($l1) || !is_null($l2) || $this->carry >= 1) {
            $v1 = $l1->val ?? 0;
            $v2 = $l2->val ?? 0;

            $n1 = $l1->next ?? null;
            $n2 = $l2->next ?? null;

            $sum = $v1 + $v2 + $this->carry;
            $this->carry = $sum / 10;

            $result = new ListNode($sum % 10);
            $result->next = $this->addTwoNumbers($n1, $n2);
        }

        return $result ?? null;

    }
}