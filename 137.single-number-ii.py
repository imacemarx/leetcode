#
# @lc app=leetcode id=137 lang=python3
# @lcpr version=21909
#
# [137] Single Number II
#

# @lc code=start
class Solution:
    def singleNumber(self, nums: List[int]) -> int:
        from collections import Counter
        return Counter(nums).most_common()[-1][0]
        
# @lc code=end



#
# @lcpr case=start
# [2,2,3,2]\n
# @lcpr case=end

# @lcpr case=start
# [0,1,0,1,0,1,99]\n
# @lcpr case=end

#

