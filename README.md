# PHP Recursive Function Bug: Unexpected Empty Array

This repository demonstrates a subtle bug in a PHP recursive function designed to flatten a nested array. The function works correctly for shallowly nested arrays but fails to produce the expected output when dealing with deeply nested structures.  The root cause is a nuanced interaction of array merging and recursion.  The solution provided addresses this issue.

## Setup

Clone this repository and run `bug.php` to observe the unexpected behavior. Then, examine `bugSolution.php` for the corrected implementation.

## Bug Report

The original `processData` function (in `bug.php`) exhibits this problematic behavior primarily when encountering empty arrays within the deeper levels of the nested structure. The `array_merge` function does not add empty arrays to the final array as expected, leading to an incomplete or empty result.