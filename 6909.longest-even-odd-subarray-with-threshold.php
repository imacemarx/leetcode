<?php
class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $threshold
     * @return Integer
     */
    function longestAlternatingSubarray($nums, $threshold) {
        $table = [];
        $count = count($nums);

        for ($i=0 ; $i < $count; $i++ ) { 
            if($nums[$i] <= $threshold && $nums[$i] % 2 == 0){
                $table[$i]++;
                for ($j=(int)$i; $j < $count; $j++) { 
                    if(isset($nums[$j+1]) && $nums[$j] % 2 != $nums[$j+1] % 2 && $nums[$j+1] <= $threshold){
                        $table[$i]++;
                    }else{
                        break;
                    }
                }
            }
        }
        // var_dump($table);
        $output = 0;
        foreach($table as $value){
            $output = max($output,$value);
        }
        return $output;
    }
}
echo (new Solution())->longestAlternatingSubarray([3,2,5,4],5);
echo (new Solution())->longestAlternatingSubarray([2,3,4,5],4);
echo (new Solution())->longestAlternatingSubarray([2,10,5],7);


