<?php
/*
 * @lc app=leetcode id=242 lang=php
 * @lcpr version=21909
 *
 * [242] Valid Anagram
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        if(strlen($s) != strlen($t))
            return false;
        $s_count = [];
        $t_count = [];
        for ($i = 0; $i < strlen($s); $i++) {
            $s_count[$s[$i]]++;
        }
        for ($i = 0; $i < strlen($t); $i++) {
            $t_count[$t[$i]]++;
        }
        return $s_count == $t_count;
    }
}
// @lc code=end



/*
// @lcpr case=start
// "anagram"\n"nagaram"\n
// @lcpr case=end

// @lcpr case=start
// "rat"\n"car"\n
// @lcpr case=end

 */

