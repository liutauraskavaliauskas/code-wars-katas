<?php

/**
 * Your task is to make a function that can take any non-negative integer as an argument
 * and return it with its digits in descending order.
 * Essentially, rearrange the digits to create the highest possible number.
 *
 * https://www.codewars.com/kata/5467e4d82edf8bbf40000155
 */

function descendingOrder(int $n): int {
    if ($n < 10) {
        return $n;
    }

    $numbers = str_split($n);
    rsort($numbers);

    return (int)implode('', $numbers);
}
