<?php

/**
 * Returns true if the $haystack string starts with the $needle string.
 * @param string $haystack
 * @param string $needle
 * @return bool
 */
function string_starts_with($haystack, $needle)
{
    $length = strlen($needle);
    return (substr($haystack, 0, $length) === $needle);
}

/**
 * Returns true if the $haystack string ends with the $needle string.
 * @param string $haystack
 * @param string $needle
 * @return string bool
 */
function string_ends_with($haystack, $needle)
{
    $length = strlen($needle);
    return $length == 0 || (substr($haystack, -$length) === $needle);
}

/**
 * Returns the first occurrence of the string between the $start and $end string from $string.
 * False if nothing is found.
 * @param string $string
 * @param string $start
 * @param string $end
 * @param bool $empty_string
 * @return bool|string
 */
function string_between($string, $start, $end, $empty_string = false)
{
    $result = false;

    $string = ' ' . $string;
    $ini = strpos($string, $start);

    if ($ini != 0)
    {
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;

        $s = substr($string, $ini, $len);

        if ($s !== "" || $empty_string)
            $result = $s;
    }

    return $result;
}

/**
 * Returns the strings between the $start and $end string from $string. Empty array if nothing is found.
 * @param string $string
 * @param string $start
 * @param string $end
 * @param bool $empty_strings
 * @return array
 */
function strings_between($string, $start, $end, $empty_strings = false)
{
    $result = [];

    $ini = strpos($string, $start);

    while ($ini !== false && strlen($string) > 1)
    {
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;

        $s = substr($string, $ini, $len);

        if ($s !== "" || $empty_strings)
            $result[] = $s;

        $string = substr($string, $len + $ini, strlen($string) - $len - $ini);

        $ini = strpos($string, $start);
    }

    return $result;
}

/**
 * True or false whether the string $find is contained in the string $where or not.
 * @param string $haystack
 * @param string $needle
 * @return bool
 */
function string_contains($haystack, $needle)
{
    return strpos($haystack, $needle) !== false;
}