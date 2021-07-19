<?php
// Напишите функцию three_devided_range(int $max, int $min): array,
// которая формирует убывающий массив от $max и до $min из чисел,
// которые делятся на 3 без отстатка. В тестах проверьте что первый,
// последний и любой некрайний элемент списка действительно делятся на 3

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

// Напишите функцию count_even(array $arr): int,
// которая считает количество четных чисел в массиве.
// В массиве [1, 2, 3] - только 1 четный элемент.
assert(count_even([1, 2, 3, 4]) == 2);
function count_even(array $array): int
{
    return count(array_filter($array, fn($number) => $number % 2 == 0));
}

// Напишите функцию min_even(array $arr): int,
// Найдите наименьший четный(по значению) элемент массива.
// В массиве [1, 2, 3, 4] - 2 наименьший четный элемент.
assert(min_even([1, 3, 3, 4, 5, 6]) == 4);
function min_even(array $array): int
{
    return min(array_filter($array, fn($number) => $number % 2 == 0));
}

// Напишите функцию min_sum_elements(array $arr): array,
// которая возвращает два соседних элемента, сумма которых минимальна.
// В массиве [1, 2, 3, 4] это элементы [1, 2].

assert(min_sum_elements([1, 3, 2, 1, 5, 6]) == [2, 1]);
function min_sum_elements(array $array): array
{
    $min = 0;
    $returnArray = [];
    for ($i = 1; $i < count($array); $i++) {
        $first = $array[$i];
        $second = $array[$i - 1];
        $res = $first + $second;
        if ($min == 0) {
            $min = $res;
            $returnArray[1] = $first;
            $returnArray[0] = $second;
        } else {
            if ($res < $min) {
                $returnArray[1] = $first;
                $returnArray[0] = $second;
            }
        }
    }
    return $returnArray;
}