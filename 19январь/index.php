<?php
$numbers = [1, 2, 3, 4, 5];
$sum = 0;
foreach ($numbers as $number) {
    $sum += $number;
}
echo "Сумма элементов: " . $sum . "<br>";
?>

<?php
$numbers = [3, 7, 2, 9, 1, 5];
$max = $numbers[0];
foreach ($numbers as $number) {
    if ($number > $max) {
        $max = $number;
    }
}
echo "Максимальный элемент: " . $max . "<br>";
?>

<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8];
$even_count = 0;
foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        $even_count++;
    }
}
echo "Количество чётных элементов: " . $even_count . "<br>";
?>

<?php
$numbers = [10, 20, 30, 40, 50];
$sum = 0;
$count = count($numbers);
foreach ($numbers as $number) {
    $sum += $number;
}
$average = $sum / $count;
echo "Среднее арифметическое: " . $average . "<br>";
?>

<?php
$numbers = [-5, 3, -2, 8, -1, 0, 4];
foreach ($numbers as &$number) {
    if ($number < 0) {
        $number = 0;
    }
}
echo "Массив после замены: " . implode(", ", $numbers) . "<br>";
?>

<?php
$array = ['a', 'b', 'c', 'd', 'e'];
for ($i = count($array) - 1; $i >= 0; $i--) {
    echo $array[$i] . " ";
}
echo "<br>";
?>

<?php
$array = [10, 25, 30, 45, 50];
$x = 30;
$found = false;
foreach ($array as $index => $value) {
    if ($value == $x) {
        echo "Элемент найден, индекс: " . $index . "<br>";
        $found = true;
        break;
    }
}
if (!$found) {
    echo "Элемент не найден<br>";
}
?>

<?php
$numbers = [10, 20, 30, 40, 50];
$sum = 0;
$count = count($numbers);
foreach ($numbers as $number) {
    $sum += $number;
}
$average = $sum / $count;
$greater_count = 0;
foreach ($numbers as $number) {
    if ($number > $average) {
        $greater_count++;
    }
}
echo "Среднее арифметическое: " . $average . "<br>";
echo "Элементов больше среднего: " . $greater_count . "<br>";
?>

<?php
$strings = ["кот", "собака", "жираф", "слон", "бегемот", "тигр"];
foreach ($strings as $string) {
    if (strlen($string) > 5) {
        echo $string . "<br>";
    }
}
?>

<?php
$numbers = range(1, 10);
echo "Таблица умножения:<br>";
foreach ($numbers as $i) {
    foreach ($numbers as $j) {
        echo $i . " × " . $j . " = " . ($i * $j) . "<br>";
    }
    echo "<br>";
}
?>

