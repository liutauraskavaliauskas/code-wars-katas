<?php

/**
 * https://www.codewars.com/kata/55466989aeecab5aac00003e/train/php
 */

function sqInRect(int $length, int $width): ?array
{
    if ($length === $width) {
        return null;
    }

    $squares = [];

    while ($width > 0) {
        if ($length > $width) {
            $squares[] = $width;
            $length -= $width;
        } else {
            $squares[] = $length;
            $width -= $length;
        }
    }

    return $squares;
}
