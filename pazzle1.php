<?php

assert(even_to_zero(12345) == 10305);

function even_to_zero(int $number): int
{
    $numbers = str_split($number);
    for ($i = 0; $i < count($numbers); $i++) {
        if ($i % 2) {
            $numbers[$i] = 0;
        }
    }
    return (int)implode($numbers);

    /*    var_dump((int)implode(array_map(function ($num, $index) {
            var_dump($index, $num);
            return ($index % 2) ? $index : 0;
        }, str_split($number), array_keys(str_split($number)))));*/
}


assert(is_palindrom("kayak") == true);
assert(is_palindrom("шалаш") == true);

function is_palindrom(string $word): string
{
    return $word == strrev(join('', array_reverse(str_split($word))));
}


assert(array_double([1, 2, 3]) == [2, 4, 6]);

function array_double(array $intArray): array
{
    return array_map(fn($number) => $number * 2,
        $intArray
    );
}


assert(only_odd([1, 2, 3]) == [1, 3]);

function only_odd(array $intArray): array
{
    return array_values(array_filter($intArray, fn($number) => $number & 1
    ));
}