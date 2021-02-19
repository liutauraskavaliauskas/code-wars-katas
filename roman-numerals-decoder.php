<?php

/**
 * Create a function that takes a Roman numeral as its argument and returns its value as a numeric decimal integer.
 * You don't need to validate the form of the Roman numeral.
 * Modern Roman numerals are written by expressing each decimal digit of the number to be encoded separately,
 * starting with the leftmost digit and skipping any 0s. So 1990 is rendered "MCMXC" (1000 = M, 900 = CM, 90 = XC)
 * and 2008 is rendered "MMVIII" (2000 = MM, 8 = VIII). The Roman numeral for 1666, "MDCLXVI",
 * uses each letter in descending order.
 *
 * https://www.codewars.com/kata/51b6249c4612257ac0000005
 */

function solution(string $roman): int
{
    $romanToNumericMap = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    ];

    $romanNumerals = str_split($roman);

    $number = 0;
    $skip = false;

    foreach ($romanNumerals as $key => $numeral) {
        if ($skip) {
            $skip = false;
            continue;
        }

        $nextNumeral = $roman[$key + 1] ?? null;

        $firstNumeric = $romanToNumericMap[$numeral] ?? null;
        $secondNumeric = $romanToNumericMap[$nextNumeral] ?? null;

        if ($secondNumeric === null) {
            $number += $firstNumeric;
            break;
        }

        if ($firstNumeric < $secondNumeric) {
            $number += $secondNumeric - $firstNumeric;
            $skip = true;
        } else {
            $number += $firstNumeric;
        }
    }

    return $number;
}
