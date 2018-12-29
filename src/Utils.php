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
 * @return bool|string
 */
function string_between($string, $start, $end)
{
    $result = false;

    if ($start === $end && substr_count($string, $start) < 2)
        return $result;

    if (strlen($string) > 1 && string_contains($string, $start) && string_contains($string, $end))
    {
        $ini = strpos($string, $start) + strlen($start);
        $string = substr($string, $ini);

        if (!string_contains($string, $end))
            return $result;

        $len = strpos($string, $end);
        $s = substr($string, 0, $len);

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
function strings_between($string, $start, $end, $empty_strings = true)
{
    $result = [];

    if ($start === $end && substr_count($string, $start) < 2)
        return $result;

    while (strlen($string) > 1 && string_contains($string, $start) && string_contains($string, $end))
    {
        $ini = strpos($string, $start) + strlen($start);
        $string = substr($string, $ini);

        if (!string_contains($string, $end))
            return $result;

        $len = strpos($string, $end);
        $s = substr($string, 0, $len);

        if ($s !== "" || $empty_strings)
            $result[] = $s;
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