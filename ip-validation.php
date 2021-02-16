<?php

/**
 * Write an algorithm that will identify valid IPv4 addresses in dot-decimal format.
 * IPs should be considered valid if they consist of four octets, with values between 0 and 255, inclusive.
 * Input to the function is guaranteed to be a single string.
 *
 * https://www.codewars.com/kata/515decfd9dcfc23bb6000006
 */

function isValidIP(string $str): bool
{
    return (bool)preg_match(
        '/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/',
        $str
    );
}
