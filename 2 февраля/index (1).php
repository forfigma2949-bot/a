2.7
<?php
$str = 'a bc def ghij';
$words = explode(' ', $str);
$result = [];
foreach ($words as $word) {
    if (strlen($word) <= 3) {
        $result[] = strtoupper($word);
    } else {
        $result[] = $word;
    }
}
echo implode(' ', $result) . "<br>"; 
?>

<?php
$char = 'A';
if (ctype_upper($char)) {
    echo "Верхний регистр<br>";
} elseif (ctype_lower($char)) {
    echo "Нижний регистр<br>";
} else {
    echo "Не буква<br>";
}
?>

<?php
$number = 123789;
$result = '';
foreach (str_split((string)$number) as $digit) {
    if ($digit % 2 == 0) { 
        $result .= $digit;
    }
}
echo $result . "<br>"; 
?>

3.1
<?php
$num = 12345;
$d = str_split((string)$num);
$r = true;
for ($i = 1; $i < count($d); $i++) {
    if ($d[$i] <= $d[$i-1]) $r = false;
}
echo $r ? "Да" : "Нет";
echo "<br>";
?>

<?php
$arr = [1, '', 2, 3, '', 5];
$arr = array_filter($arr);
print_r($arr);
echo "<br>";
?>

<?php
$arr = [[2,1,4,3,5], [3,5,2,4,1], [4,3,1,5,2]];
foreach ($arr as &$a) sort($a);
print_r($arr);
echo "<br>";
?>

<?php
$arr1 = [1, 2, 3];
$arr2 = [1, 2, 3, 4, 5];
$len = min(count($arr1), count($arr2));
$arr1 = array_slice($arr1, 0, $len);
$arr2 = array_slice($arr2, 0, $len);
print_r($arr1);
echo "<br>";
print_r($arr2);
echo "<br>";
?>

3.3
<?php
$words = ['a', 'ab', 'abc', 'abcd', 'abcde', 'xy'];
$result = array_filter($words, fn($word) => strlen($word) <= 3);
print_r($result);
echo "<br>";
?>

<?php
$num = 1357;
$digits = str_split((string)$num);
$allOdd = true;
foreach ($digits as $d) {
    if ($d % 2 == 0) {
        $allOdd = false;
        break;
    }
}
echo $allOdd ? "Все цифры нечётные" : "Есть чётные цифры";
echo "<br>";
?>

<?php
$word = 'abcba';
$isPalindrome = $word === strrev($word);
echo $isPalindrome ? "Палиндром" : "Не палиндром";
echo "<br>";
?>

<?php
$arr = [
    [[11, 12, 13], [14, 15, 16], [17, 17, 19]],
    [[21, 22, 23], [24, 25, 26], [27, 27, 29]],
    [[31, 32, 33], [34, 35, 36], [37, 37, 39]]
];
$sum = 0;
foreach ($arr as $sub1) {
    foreach ($sub1 as $sub2) {
        foreach ($sub2 as $num) {
            $sum += $num;
        }
    }
}
echo "Сумма: " . $sum;
echo "<br>";
?>

