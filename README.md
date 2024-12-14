# PHP Loose Comparison Pitfall: NaN Comparison

This repository demonstrates a common pitfall in PHP related to loose comparison (==) and NaN (Not a Number) values.  Loose comparison can lead to unexpected behavior, especially when dealing with NaN.

## The Problem

PHP's loose comparison operator (==) does not behave as expected when comparing NaN.  NaN is never equal to itself, even using loose comparison, resulting in unexpected results.  The provided `bug.php` file illustrates this problem. 

## The Solution

The solution involves using the `Object.is()` method, which provides a strict comparison and correctly handles NaN.  This method correctly distinguishes NaN from other values. The solution is provided in `bugSolution.php`

## How to Run

1. Clone this repository.
2. Run the `bug.php` and `bugSolution.php` files using a PHP interpreter to see the difference in outputs.