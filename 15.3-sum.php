<?php
/*
 * @lc app=leetcode id=15 lang=php
 * @lcpr version=21909
 *
 * [15] 3Sum
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        //version 1
        // $result = array();
        // sort($nums);
        // $length = count($nums);


        // for ($i = 0; $i < $length - 2; $i++) {
        //     if ($nums[$i] > 0) {
        //         return $result;
        //     }
        //     if ($i > 0 && $nums[$i] == $nums[$i - 1]) {
        //         continue;
        //     }
            
        //     for ($j = $i + 1; $j < $length - 1; $j++) {
        //         if ($j > $i + 1 && $nums[$j] == $nums[$j - 1]) {
        //             continue;
        //         }
                
        //         for ($k = $j + 1; $k < $length; $k++) {
        //             if ($k > $j + 1 && $nums[$k] == $nums[$k - 1]) {
        //                 continue;
        //             }
                    
        //             if ($nums[$i] + $nums[$j] + $nums[$k] == 0) {
        //                 $result[] = array($nums[$i], $nums[$j], $nums[$k]);
        //             }
        //         }
        //     }
        // }
        
        // return $result;

        //version 2
        $result = [];
        $length = count($nums);
        sort($nums);
        for ($i = 0; $i < $length; $i++) {
            if ($nums[$i] > 0) {
                return $result;
            }

            if ($i > 0 && $nums[$i] == $nums[$i - 1]) {
                continue;
            }

            $left = $i + 1;
            $right = $length - 1;
            while ($left < $right) {
                $sum = $nums[$i] + $nums[$left] + $nums[$right];
                if ($sum < 0) {
                    $left++;
                }
                else if ($sum > 0) {
                    $right--;
                }
                else {
                    $result[] = [$nums[$i], $nums[$left], $nums[$right]];
                    while ($left < $right && $nums[$left] == $nums[$left + 1]) $left++;
                    while ($left < $right && $nums[$right] == $nums[$right - 1]) $right--;
                    $left++;
                    $right--;
                }
            }
        }
        return $result;
    }
}
// @lc code=end



/*
// @lcpr case=start
// [-1,0,1,2,-1,-4]\n
// @lcpr case=end

// @lcpr case=start
// [0,1,1]\n
// @lcpr case=end

// @lcpr case=start
// [0,0,0]\n
// @lcpr case=end

 */

