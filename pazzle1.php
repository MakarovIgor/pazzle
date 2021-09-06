<?php
//Создать функцию even_to_zero(int $number) Которая цифры на четных ПОЗИЦИЯХ занулит.
// Например, из 12345 получается число 10305.
// Внимание! Важна позиция цифры, а не значение.
assert(even_to_zero(12345) == 10305);

function even_to_zero(int $number): int
{
    return (int)implode(array_map(function ($num, $index) {
        return ($index % 2 === 0) ? $num : 0;
    }, str_split($number), array_keys(str_split($number))));
}

//Создать функцию is_palindrome(string $word) которая выведет true если строка является палиндромом
//(читается одинаково в зад и вперед, например: шалаш) и иначе false.
// Внимание! Обязательно включите в проверки русские слова "шалаш" и "такси".
assert(is_palindrom("kayak") == true);
assert(is_palindrom("шалаш") == true);

function is_palindrom(string $word): bool
{
    return $word == strrev(join('', array_reverse(str_split($word))));
}

//Написать функцию array_double, которая принимает на вход массив чисел,
// например [1,2,3] и возвращает массив, в котором все числа умножены на 2, например [2, 4, 6]
assert(array_double([1, 4, 3]) == [2, 8, 6]);

function array_double(array $intArray): array
{
    return array_map(fn($number) => $number * 2,
        $intArray
    );
}

//Написать функцию only_odd, которая принимает массив [1, 2, 3] и возвращает массив только нечетных [1, 3]
assert(only_odd([1, 2, 3, 3]) == [1, 3, 3]);

function only_odd(array $intArray): array
{
    return array_values(array_filter($intArray, fn($number) => $number & 1
    ));
}