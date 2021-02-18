<?php

/**
 * The input is a string str of digits.
 * Cut the string into chunks (a chunk here is a substring of the initial string)
 * of size sz (ignore the last chunk if its size is less than sz).
 * If a chunk represents an integer such as the sum of the cubes of its digits is divisible by 2,
 * reverse that chunk; otherwise rotate it to the left by one position.
 * Put together these modified chunks and return the result as a string.
 * If
 * sz is <= 0 or if str is empty return ""
 * sz is greater (>) than the length of str it is impossible to take a chunk of size sz hence return "".
 *
 * https://www.codewars.com/kata/56b5afb4ed1f6d5fb0000991
 */

function revRot(string $string, int $size): string
{
    if ($size <= 0 || empty($string) || $size > strlen($string)) {
        return '';
    }

    $modifiedString = '';
    $chunks = str_split($string, $size);

    foreach($chunks as $chunk) {
        if (strlen($chunk) < $size) {
            continue;
        }

        $sum = 0;

        foreach (str_split($chunk) as $number) {
            $sum += $number ** 3;
        }

        if (($sum % 2) === 0) {
            $modifiedString .= strrev($chunk);
        } else {
            $modifiedString .= substr($chunk, 1) . substr($chunk, 0, 1);
        }
    }

    return $modifiedString;
}
