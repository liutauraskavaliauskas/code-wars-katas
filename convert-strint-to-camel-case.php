<?php

/**
 * Complete the method/function so that it converts dash/underscore delimited words into camel casing.
 * The first word within the output should be capitalized only if the original word was capitalized
 * (known as Upper Camel Case, also often referred to as Pascal case).
 *
 * https://www.codewars.com/kata/517abf86da9663f1d2000003
 */

function toCamelCase(string $str): string
{
    $splittedWords = preg_split('/[-_]/', $str);

    $words = [];

    if (isset($splittedWords[0])) {
        if (strcasecmp(ucfirst($splittedWords[0]), $splittedWords[0]) === false) {
            $words[] = ucfirst($splittedWords[0]);
        } else {
            $words[] = $splittedWords[0];
        }

        unset($splittedWords[0]);
    }

    $splittedWords = array_map(
        static function (string $word): string {
            return ucfirst($word);
        },
        $splittedWords
    );

    $words = array_merge($words, $splittedWords);

    return implode('', $words);
}