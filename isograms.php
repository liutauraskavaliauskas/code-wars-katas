<?php

/**
 * An isogram is a word that has no repeating letters, consecutive or non-consecutive.
 * Implement a function that determines whether a string that contains only letters is an isogram.
 * Assume the empty string is an isogram. Ignore letter case.
 *
 * https://www.codewars.com/kata/54ba84be607a92aa900000f1
 */

function isIsogram(string $string): bool
{
    if (empty($string)) {
        return true;
    }

    $letters = str_split(strtolower($string));

    return !(count($letters) > count(array_unique($letters)));
}
