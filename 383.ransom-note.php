<?php
/*
 * @lc app=leetcode id=383 lang=php
 * @lcpr version=21909
 *
 * [383] Ransom Note
 */

// @lc code=start
class Solution {

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine) {
        $table = count_chars($magazine,1);
        foreach (str_split($ransomNote) as $char) {
            if(!isset($table[ord($char)]) || --$table[ord($char)] < 0){
                return false;
            }
        }
        
        return true;
    }
}
// @lc code=end



/*
// @lcpr case=start
// "a"\n"b"\n
// @lcpr case=end

// @lcpr case=start
// "aa"\n"ab"\n
// @lcpr case=end

// @lcpr case=start
// "aa"\n"aab"\n
// @lcpr case=end

 */
