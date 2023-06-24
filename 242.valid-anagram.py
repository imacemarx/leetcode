#
# @lc app=leetcode id=242 lang=python3
# @lcpr version=21909
#
# [242] Valid Anagram
#

# @lc code=start
class Solution:
    def isAnagram(self, s: str, t: str) -> bool:
        from collections import Counter
        s_count = Counter(s)
        t_count = Counter(t)
        return s_count == t_count
# @lc code=end



#
# @lcpr case=start
# "anagram"\n"nagaram"\n
# @lcpr case=end

# @lcpr case=start
# "rat"\n"car"\n
# @lcpr case=end

#

