# String Utils for php

## List of available functions

1) [string_starts_with](#string_starts_with)
2) [string_ends_with](#string_ends_with)
3) [string_between](#string_between)
4) [strings_between](#strings_between)
5) [string_contains](#string_contains)

### string_starts_with

#### Description

Returns true if the $haystack string starts with the $needle string.

#### Definition

string_starts_with($haystack, $needle)

Where:
1) $haystack is the string to look into
2) $needle is the string to check if the $haystack starts with

#### Usage

``` php
$string = "Hello World";

echo "Starts with Hello? " . string_starts_with($string, "Hello");
echo PHP_EOL;
echo "Starts with World? " . string_starts_with($string, "World");
```

This will print:

``` sh
Starts with Hello? true
Starts with World? false
```

### string_ends_with

#### Description

Returns true if the $haystack string ends with the $needle string.

#### Definition

string_ends_with($haystack, $needle)

Where:
1) $haystack is the string to look into
2) $needle is the string to check if the $haystack starts with

#### Usage

``` php
$string = "Hello World";

echo "Ends with Hello? " . string_ends_with($string, "Hello");
echo PHP_EOL;
echo "Ends with World? " . string_ends_with($string, "World");
```

This will print:

``` sh
Ends with Hello? false
Ends with World? true
```

### string_between

#### Description

Returns the first occurrence of the string between the $start and $end string from $string. False if nothing is found.

#### Definition

string_between($string, $start, $end, $empty_string = false)

Where:
1) $string is the string to look into
2) $start is the left string to search
3) $end is the right string to search
4) $empty_string determines whether return empty strings or not

#### Usage

``` php
$string_1 = "|Hello|World|";
$string_2 = "||";

echo "String 1: " . string_between($string_1, "|", "|");
echo PHP_EOL;
echo "String 2 with $empty_string false: " . string_between($string_2, "|", "|");
echo PHP_EOL;
echo "String 2 with $empty_string true: " . string_between($string_2, "|", "|", true);
```

This will print:

``` sh
String 1: Hello
String 2: false
String 2: 
```

### strings_between

#### Description

Returns the strings between the $start and $end string from $string. Empty array if nothing is found.

#### Definition

strings_between($string, $start, $end, $empty_strings = false)

Where:
1) $string is the string to look into
2) $start is the left string to search
3) $end is the right string to search
4) $empty_strings determines whether return empty strings or not

#### Usage

``` php
$string = "|Hello|World||";

echo "With $empty_strings false:" . PHP_EOL;
print_r(strings_between($string, "|", "|"));
echo PHP_EOL;
echo "With $empty_strings true:" . PHP_EOL;
print_r(strings_between($string, "|", "|", true));
```

This will print:

``` sh
With $empty_strings false:
Array ( [0] => Hello [1] => World )

With $empty_strings true:
Array ( [0] => Hello [1] => World [2] => )
```

### string_contains

#### Description

True or false whether the string $needle is contained in the string $haystack or not.

#### Definition

string_contains($haystack, $needle)

Where:
1) $haystack is the string to look into
2) $needle is the string to check if the $haystack contains

#### Usage

``` php
$string = "Hello";

echo "Contains Hello? " . string_contains($string, "Hello");
echo PHP_EOL;
echo "Contains World? " . string_contains($string, "World");
```

This will print:

``` sh
Contains Hello? true
Contains World? false
```

## More utilities coming