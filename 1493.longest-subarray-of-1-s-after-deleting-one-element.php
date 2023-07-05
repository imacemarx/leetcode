<?php
/*
 * @lc app=leetcode id=1493 lang=php
 * @lcpr version=21909
 *
 * [1493] Longest Subarray of 1's After Deleting One Element
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function longestSubarray($nums) {
        $zeroCount = $longesWindow = $start = 0;
        foreach ($nums as $right => $value) {
            $zeroCount += $value == 0;
            while ($zeroCount > 1){
                $zeroCount -= $nums[$start] == 0;
                $start ++;
            }
            $longesWindow = max($longesWindow, $right-$start+1);
        }
        return $longesWindow-1;
    }
}
// @lc code=end



/*
// @lcpr case=start
// [1,1,0,1]\n
// @lcpr case=end

// @lcpr case=start
// [0,1,1,1,0,1,1,0,1]\n
// @lcpr case=end

// @lcpr case=start
// [1,1,1]\n
// @lcpr case=end

 */

