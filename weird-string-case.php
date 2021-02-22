<?php

/**
 * Write a function toWeirdCase (weirdcase in Ruby) that accepts a string,
 * and returns the same string with all even indexed characters in each word upper cased,
 * and all odd indexed characters in each word lower cased. The indexing just explained is zero based,
 * so the zero-ith index is even, therefore that character should be upper cased.
 * The passed in string will only consist of alphabetical characters and spaces(' ').
 * Spaces will only be present if there are multiple words. Words will be separated by a single space(' ').
 *
 * https://www.codewars.com/kata/52b757663a95b11b3d00062d
 */

function toWeirdCase(string $string): string
{
    $weirdCaseWords = [];
    $words = explode(' ', $string);

    foreach ($words as $word) {
        $weirdCaseWord = '';

        foreach (str_split($word) as $index => $char) {
            if (($index % 2) === 0) {
                $char = strtoupper($char);
            } else {
                $char = strtolower($char);
            }

            $weirdCaseWord .= $char;
        }
        $weirdCaseWords[] = $weirdCaseWord;
    }

    return implode(' ', $weirdCaseWords);
}
