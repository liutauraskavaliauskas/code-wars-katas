<?php

/**
 * The rgb function is incomplete. Complete it so that passing in RGB decimal values will result in a hexadecimal
 * representation being returned. Valid decimal values for RGB are 0 - 255.
 * Any values that fall out of that range must be rounded to the closest valid value.
 * Note: Your answer should always be 6 characters long, the shorthand with 3 will not work here.
 *
 * https://www.codewars.com/kata/513e08acc600c94f01000001
 */

function rgb(int $r, int $g, int $b): string
{
    $r = roundValue($r);
    $g = roundValue($g);
    $b = roundValue($b);

    return getHex($r) . getHex($g) . getHex($b);
}

function roundValue(int $value): int
{
    if ($value > 255) {
        return 255;
    }

    if ($value < 0) {
        return 0;
    }

    return $value;
}

function getHex(int $value): string
{
    $value = dechex($value);

    if (strlen($value) < 2) {
        $value = sprintf('0%s', $value);
    }

    return strtoupper($value);
}
