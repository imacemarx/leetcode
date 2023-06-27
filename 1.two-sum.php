<?
/*
 * @lc app=leetcode id=1 lang=php
 * @lcpr version=21909
 *
 * [1] Two Sum
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $table = [];
        foreach($nums as $key => $num){
            if(isset($table[($target - $num)])){
                return [$table[($target - $num)],$key];
            }else{
                $table[$num] = $key;
            }
        }
        return [];
    }
}
// @lc code=end



/*
// @lcpr case=start
// [2,7,11,15]\n9\n
// @lcpr case=end

// @lcpr case=start
// [3,2,4]\n6\n
// @lcpr case=end

// @lcpr case=start
// [3,3]\n6\n
// @lcpr case=end

 */

