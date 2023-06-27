<?
/*
 * @lc app=leetcode id=202 lang=php
 * @lcpr version=21909
 *
 * [202] Happy Number
 */

// @lc code=start
class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n) {
        $table = [];
        while($n!=1 && !isset($table[$n])){
            $table[$n] = 1;
            $n = $this->getNextNum($n);
        }
        return $n == 1;
    }

    function getNextNum($n){
        $sum = 0;
        while($n >0){
            $sum += ($n % 10) * ($n % 10);
            $n = floor($n / 10);
        }
        return $sum;
    }
}
// @lc code=end



/*
// @lcpr case=start
// 19\n
// @lcpr case=end

// @lcpr case=start
// 2\n
// @lcpr case=end

 */

