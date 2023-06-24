<?php
/*
 * @lc app=leetcode id=1002 lang=php
 * @lcpr version=21909
 *
 * [1002] Find Common Characters
 */

// @lc code=start
class Solution {

    /**
     * @param String[] $words
     * @return String[]
     */
    function commonChars($words) {
        // me
        // $keys = range('a', 'z');
        // $first_word_count = array_fill_keys($keys, 0);
        // for ($i=0; $i <strlen($words[0]); $i++) { 
        //     $first_word_count[substr($words[0],$i,1)]++;
        // }

        // for ($i=1; $i <count($words) ; $i++) { 
        //     $other_word_count = array_fill_keys($keys, 0);  
        //     for ($j=0; $j <strlen($words[$i]); $j++) { 
        //         $other_word_count[substr($words[$i],$j,1)]++;
        //     }
        //     foreach($first_word_count as $key => $value){
        //         $first_word_count[$key] = min($first_word_count[$key],$other_word_count[$key]);
        //     }
        // }

        // $output = [];
        // foreach ($first_word_count as $key=> $value){
        //     if($value > 0){
        //         for ($i=0; $i < $value; $i++) { 
        //             $output[] = $key;
        //         }
        //     }
                
        // }
        // return $output;

        //chatgpt
        $keys = range('a', 'z');
        $wordCount = array_fill_keys($keys, 0);

        # 用第一个字符串给hash初始化
        foreach (str_split($words[0]) as $char) {
            $wordCount[$char]++;
        }
        unset($words[0]);

        foreach ($words as $word) {
            $otherWordCount = array_fill_keys($keys, 0);
            
            foreach (str_split($word) as $char) {
                $otherWordCount[$char]++;
            }

            // 更新hash，保证hash里统计26个字符在所有字符串里出现的最小次数
            foreach ($wordCount as $key => $value) {
                $wordCount[$key] = min($wordCount[$key], $otherWordCount[$key]);
            }
        }

        $output = [];
        foreach ($wordCount as $key => $value) {
            for ($i = 0; $i < $value; $i++) {
                $output[] = $key;
            }
        }

        return $output;
    }
}
// @lc code=end



/*
// @lcpr case=start
// ["bella","label","roller"]\n
// @lcpr case=end

// @lcpr case=start
// ["cool","lock","cook"]\n
// @lcpr case=end

 */

