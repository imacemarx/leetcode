<?php
/*
 * @lc app=leetcode id=859 lang=php
 * @lcpr version=21909
 *
 * [859] Buddy Strings
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @param String $goal
     * @return Boolean
     */
    function buddyStrings($s, $goal) {
        if(strlen($s) != strlen($goal)) return false;
        if($s == $goal){
            foreach(count_chars($s,1) as $value){
                if($value>1) return true;
            }
            return false;
        } 
        $goal_arr = str_split($goal);
        $s_arr = str_split($s);
        $swap=[];
        foreach ($s_arr as $index => $char) {
            if(count($swap) > 2) return false;
            if($char == $goal_arr[$index]) continue;
            $swap[]=$index; 
        }
        $temp = $s_arr[$swap[0]];
        $s_arr[$swap[0]] = $s_arr[$swap[1]];    
        $s_arr[$swap[1]] = $temp;
        return $s_arr == $goal_arr;

    }
}
// @lc code=end



/*
// @lcpr case=start
// "ab"\n"ba"\n
// @lcpr case=end

// @lcpr case=start
// "ab"\n"ab"\n
// @lcpr case=end

// @lcpr case=start
// "aa"\n"aa"\n
// @lcpr case=end

 */

