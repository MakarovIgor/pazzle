<?php

//Написать рекурсивную функцию sumn рассчета суммы 1 + 2 + 3 + ... + n.
assert(sumn(3) == 6);
assert(sumn(5) == 15);
assert(sumn(7) == 28);
assert(sumn(0) == 0);

function sumn(int $number): int
{
    if ($number == 0) {
        return 0;
    } else if ($number == 1) {
        return 1;
    } else {
        return $number + sumn($number - 1);
    }
}

//Написать функцию create_min_max_validator(int $min, int $max)
// которая возвращает функцию принимающую один аргумент,
// функция проверяет входит ли аргумент в диапазон от $min до $max включительно.
$validator = create_min_max_validator(20, 30);
assert(!$validator(3));
assert($validator(20));
assert($validator(30));
assert($validator(25));

function create_min_max_validator(int $min, int $max)
{
    if ($min >= $max) {
        throw new Exception("min cannot be more or equals than max");
    }

    return fn(int $number) => $number >= $min && $number <= $max;
}

//Написать функцию add_item($arr, $item), которая ничего не возвращает,
// но при этом добавляет в конец массива $arr элемент $item
$arr = [];
add_item($arr, "s");
add_item($arr, "d");
assert(count($arr) == 2);
function add_item(array &$array, $item)
{
    array_push($array, $item);
}