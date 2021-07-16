<?php
assert(three_devide_range(9, 0) == [9, 6, 3, 0]);

function three_devide_range(int $max, int $min): array
{
    if ($min >= $max) {
        throw new Exception("min cannot be more or equals than max");
    }

    return array_values(array_filter(
            array_reverse(range($min, $max)),
            fn($number) => $number % 3 == 0)
    );
}


assert(count_even([1, 2, 3, 4]) == 2);
function count_even(array $array): int
{
    return count(array_filter($array, fn($number) => $number % 2 == 0));
}


assert(min_even([1, 3, 3, 4, 5, 6]) == 4);
function min_even(array $array): int
{
    return min(array_filter($array, fn($number) => $number % 2 == 0));
}
/*
assert(min_sum_elements([1,3,3,4,5,6]) == 4);
function min_sum_elements(array $array): array
{

    //array_filter($array, fn($number) => $number % 2 == 0)
    for($array)
    return min($array);
}*/