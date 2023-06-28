<?php
/*
 * @lc app=leetcode id=454 lang=php
 * @lcpr version=21909
 *
 * [454] 4Sum II
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @param Integer[] $nums3
     * @param Integer[] $nums4
     * @return Integer
     */
    function fourSumCount($nums1, $nums2, $nums3, $nums4) {
        $table = [];
        foreach ($nums1 as $value1) {
            foreach($nums2 as $value2){
                $table[$value1 + $value2] ++;
            }
        }
        $count = 0;
        foreach($nums3 as $value3){
            foreach($nums4 as $value4){
                if(isset($table[0-$value3-$value4])){
                    $count += $table[0-$value3-$value4];
                }
            }
        }
        return $count;
    }
}
// @lc code=end



/*
// @lcpr case=start
// [1,2]\n[-2,-1]\n[-1,2]\n[0,2]\n
// @lcpr case=end

// @lcpr case=start
// [0]\n[0]\n[0]\n[0]\n
// @lcpr case=end

 */

