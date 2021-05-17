//1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;
Ноль можно считать положительным числом.

<?php

$a = rand(-100,100);
$b = rand(-100,100);

if ($a >= 0 && $b >= 0) {
    echo $a - $b;
}

if ($a < 0 && $b < 0) {
    echo $a * $b;
}

if ($a >= 0 && $b < 0 || $a < 0 && $b >= 0) {
    echo $a + $b;
}


//2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15. При желании сделайте это задание через рекурсию.

<?php

$a = rand(0,15);

switch ($a) {
    case 0:
        echo 0;
        break;
    case 1:
        echo 1;
        break;
    case 2:
        echo 2;
        break;
    case 3:
        echo 3;
        break;
    case 4:
        echo 4;
        break;
    case 5:
        echo 5;
        break;
    case 6:
        echo 6;
        break;
    case 7:
        echo 7;
        break;
    case 8:
        echo 8;
        break;
    case 9:
        echo 9;
        break;
    case 10:
        echo 10;
        break;
    case 11:
        echo 11;
        break;
    case 12:
        echo 12;
        break;
    case 13:
        echo 13;
        break;
    case 14:
        echo 14;
        break;
    case 15:
        echo 15;
        break;
}


//3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return. В делении проверьте деление на 0 и верните текст ошибки.

<?php

function sum($a, $b){
    return $a + $b;
}
echo sum(5, 3);


function diff($a, $b){
    return $a - $b;
}
echo diff(10, 3);


function multiply($a, $b){
    return $a * $b;
}
echo multiply(4, 3);


function div($a, $b){
    if ($b == 0)
        return "Ошибка! На ноль делить нельзя";
    else 
        return $a / $b;
}
echo div(8, 0);


//4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

<?php

function mathOperation($arg1, $arg2, $operation) {
	switch ($operation) {
		case "sum": 
			return $arg1 + $arg2;
		case "diff":
			return $arg1 - $arg2;
		case "multiply":
			return $arg1 * $arg2; 
		case "div":
			if ($arg2 == 0)
                return "Ошибка! На ноль делить нельзя";
                    else 
                return $arg1 / $arg2;
		}
	}
echo mathOperation(10, 2, sum);



//6. *С помощью рекурсии организовать функцию возведения числа в степень.
//Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

<?php

function power($val, $pow) {
    if ($pow == 1) return $val;
    return $val * pow($val, $pow - 1);
}

echo power(5, 2);


//7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
//22 часа 15 минут
//21 час 43 минуты

<?php

function myTime($hour, $minute) {
    $resulth = ($hour <= 10) ? $hour % 10 : $hour % 20;
    switch ($resulth) {
        case 1:
            echo "$hour час";
            break;
        case 2:
        case 3:
        case 4:
            echo "$hour часа";
            break;
        default:
            echo "$hour часов";
            break;
    }
    $resultm = ($minute <= 10) ? $minute % 10 : $minute % 60;
    switch ($resultm) {
        case 1:
            return "$minute минута";
            break;
        case 2:
        case 3:
        case 4:
            return "$minute минуты";
            break;
        default:
            return "$minute минут";
            break;
    }
}
$hour = rand(0, 24);
$minute = rand(0, 59);
echo myTime($hour, $minute);