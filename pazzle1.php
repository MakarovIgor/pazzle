<?php

assert(even_to_zero(12345) == 10305);

function even_to_zero(int $number)
{
    return (int)implode(array_map(function ($number) {
        return ($number % 2) ? $number : 0;
    }, str_split($number)));
}


assert(is_palindrom("kayak") == true);

function is_palindrom(string $word)
{
    return $word == strrev($word);
}


assert(array_double([1, 2, 3]) == [2, 4, 6]);

function array_double(array $intArray): array
{
    return array_map(function ($number) {
        return $number * 2;
    }, $intArray);
}


assert(only_odd([1, 2, 3]) == [1, 3]);

function only_odd(array $intArray): array
{
    return array_values(array_filter($intArray, function ($number) {
        return $number & 1;
    }));
}