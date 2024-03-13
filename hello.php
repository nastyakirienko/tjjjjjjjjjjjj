<?php
$number1 = 10; // Замените на ваше первое число
$number2 = 5;  // Замените на ваше второе число
$operator = '+';  // Замените на ваш оператор (+, -, *, /)

switch ($operator) {
    case '+':
        $result = $number1 + $number2;
        echo "Результат сложения: " . $result;
        break;
    case '-':
        $result = $number1 - $number2;
        echo "Результат вычитания: " . $result;
        break;
    case '*':
        $result = $number1 * $number2;
        echo "Результат умножения: " . $result;
        break;
    case '/':
        if($number2 != 0) {
            $result = $number1 / $number2;
            echo "Результат деления: " . $result;
        } else {
            echo "Деление на ноль невозможно!";
        }
        break;
    default:
        echo "Неверный оператор!";
}
?>



