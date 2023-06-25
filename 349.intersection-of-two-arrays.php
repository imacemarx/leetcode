<?php
/*
 * @lc app=leetcode id=349 lang=php
 * @lcpr version=21909
 *
 * [349] Intersection of Two Arrays
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersection($nums1, $nums2) {
        // me
        // $count = [];
        // $output = [];
        // foreach ($nums1 as $value) {
        //     $count[$value] = 1;
        // }
        // foreach ($nums2 as $value){
        //     if(isset($count[$value])){
        //         $output[] = $value;
        //         unset($count[$value]);
        //     }
        // }
        // return $output;

        //chatgpt
        $nums1Count = array_count_values($nums1);
        $output = [];

        foreach ($nums2 as $value) {
            if (isset($nums1Count[$value]) && $nums1Count[$value] > 0) {
                $output[] = $value;
                unset($nums1Count[$value]);
            }
        }

        return $output;

    }
}
// @lc code=end



/*
// @lcpr case=start
// [1,2,2,1]\n[2,2]\n
// @lcpr case=end

// @lcpr case=start
// [4,9,5]\n[9,4,9,8,4]\n
// @lcpr case=end

 */

