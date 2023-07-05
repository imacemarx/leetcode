<?php
/*
 * @lc app=leetcode id=137 lang=php
 * @lcpr version=21909
 *
 * [137] Single Number II
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        foreach(array_count_values($nums) as $key => $value){
            if($value == 1) return $key;
        }
        
    }
}
// @lc code=end



/*
// @lcpr case=start
// [2,2,3,2]\n
// @lcpr case=end

// @lcpr case=start
// [0,1,0,1,0,1,99]\n
// @lcpr case=end

 */

