1.1
<?php
$number = -5;
if ($number < 0) {
    echo "Число отрицательное<br>";
} else {
    echo "Число не отрицательное<br>";
}
?>

<?php
$string = "Привет, мир!"; 
echo "Длина строки: " . strlen($string) . "<br>";
?>



<?php
$number = 8; 
if ($number % 2 == 0) {
    echo "Число чётное<br>";
} else {
    echo "Число нечётное<br>";
}
?>

<?php
$word1 = "яблоко"; 
$word2 = "янтарь"; 
if ($word1[0] == $word2[0]) {
    echo "Первые буквы совпадают<br>";
} else {
    echo "Первые буквы не совпадают<br>";
}
?>

1.3

<?php
$string = "программирование";
if (strlen($string) > 1) {
    echo $string[strlen($string) - 2] . "<br>";
} else {
    echo "Мало символов<br>";
}
?>

<?php
$a = 15;
$b = 3;
if ($a % $b == 0) {
    echo "Делится<br>";
} else {
    echo "Не делится<br>";
}
?>

1.8
<?php
$arr = range(1, 10);
print_r($arr);
echo "<br>";
?>

<?php
$even = range(2, 100, 2);
print_r($even);
echo "<br>";
?>

<?php
$fractions = [1.456, 2.125, 3.32, 4.1, 5.34];
foreach ($fractions as $num) {
    echo round($num, 1) . " ";
}
echo "<br>";
?>

1.9
<?php
$arr = ["http://site.com", "ftp://files.com", "http://test.ru"];
$result = array_filter($arr, fn($s) => str_starts_with($s, "http://"));
print_r($result);
echo "<br>";
?>

<?php
$arr = ["page.html", "index.php", "about.html"];
$result = array_filter($arr, fn($s) => str_ends_with($s, ".html"));
print_r($result);
echo "<br>";
?>

<?php
$arr = [10, 25, 50, 100];
$arr = array_map(fn($n) => $n * 1.1, $arr);
print_r($arr);
echo "<br>";
?>

1.10
<?php
$arr = [];
for ($i = 0; $i < 10; $i++) {
    $arr[] = rand(1, 100);
}
print_r($arr);
echo "<br>";
?>

<?php
$number = 12345;
$str = (string)$number;
for ($i = strlen($str) - 1; $i >= 0; $i--) {
    echo $str[$i] . " ";
}
echo "<br>";
?>

<?php
$arr = [1, 2, 3, 4, 5, 6];
for ($i = 0; $i < count($arr); $i += 2) {
    echo "[" . $arr[$i] . ", " . $arr[$i + 1] . "]<br>";
}
?>

<?php
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$result = array_merge($arr1, $arr2);
print_r($result);
echo "<br>";
?>

2.3
<?php
$word1 = "кот";
$word2 = "тигр";
if ($word1[strlen($word1) - 1] == $word2[0]) {
    echo "Совпадает<br>";
} else {
    echo "Не совпадает<br>";
}
?>

<?php
$str = "102030405";
$position = -1;
$count = 0;
for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] == '0') {
        $count++;
        if ($count == 3) {
            $position = $i + 1; // позиция с 1, а не с 0
            break;
        }
    }
}
echo "Позиция третьего нуля: " . ($position == -1 ? "не найден" : $position) . "<br>";
?>

<?php
$numbersStr = '12,34,56';
$numbers = explode(',', $numbersStr);
$sum = 0;
foreach ($numbers as $num) {
    $sum += (int)$num;
}
echo "Сумма: " . $sum . "<br>";
?>

<?php
$date = '2025-12-31';
list($year, $month, $day) = explode('-', $date);
$result = [
    'year'  => $year,
    'month' => $month,
    'day'   => $day
];
print_r($result);
echo "<br>";
?>

2.4
<?php
$str = "abc123def";
for ($i = 0; $i < strlen($str); $i++) {
    if (ctype_digit($str[$i])) {
        echo "Позиция первой цифры: " . ($i + 1) . "<br>";
        break;
    }
}
?>

<?php
$obj = ['a' => 1, 'b' => 2, 'c' => 3];
$keys = array_keys($obj);
$values = array_values($obj);
print_r($keys);
print_r($values);
echo "<br>";
?>

<?php
$num = 123456;
$count = 0;
foreach (str_split((string)$num) as $d) {
    $count += $d % 2 == 0 ? 1 : 0;
}
echo "Чётных цифр: " . $count . "<br>";
?>

<?php
$str = 'abcde';
$result = '';
for ($i = 0; $i < strlen($str); $i++) {
    $result .= $i % 2 == 0 ? strtoupper($str[$i]) : $str[$i];
}
echo $result . "<br>"; 
?>

<?php
$str = 'aaa bbb ccc';
echo ucwords($str) . "<br>"; 
?>

2.5
<?php
$str = '023m0df0dfg0';
$positions = [];
for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] == '0') {
        $positions[] = $i + 1;
    }
}
print_r($positions);
echo "<br>";
?>

<?php
$str = 'abcdefg';
$result = '';
for ($i = 0; $i < strlen($str); $i++) {
    if (($i + 1) % 3 != 0) { 
        $result .= $str[$i];
    }
}
echo $result . "<br>";
?>

<?php
$arr = [1, 2, 3, 4, 5, 6];
$evenSum = 0;
$oddSum = 0;

for ($i = 0; $i < count($arr); $i++) {
    if ($i % 2 == 0) {
        $evenSum += $arr[$i]; 
    } else {
        $oddSum += $arr[$i]; 
    }
}
$result = $evenSum / $oddSum;
echo "Результат: " . $result . "<br>";
?>
