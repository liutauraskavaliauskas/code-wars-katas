<?php

/**
 * https://www.codewars.com/kata/5ce399e0047a45001c853c2b
 */

function partsSums(array $ls): array
{
    $result[] = $sum = array_sum($ls);

    foreach ($ls as $value) {
        $sum -= $value;
        $result[] = $sum;
    }

    return $result;
}