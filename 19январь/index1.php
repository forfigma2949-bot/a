<?php
$price = 1500;
$shipping = 200;
$name = "Автомат АК47";
echo "Название товара: " . $name . "<br>";
echo "Стоимость товара: " . $price . " руб.<br>";
echo "Стоимость с доставкой: " . ($price + $shipping) . " руб.<br>";
?>

<?php
$salary_vasya = 25000;
$salary_petya = 30000;
$vasya_next_year = $salary_vasya + ($salary_vasya * 0.20);
$petya_next_year = $salary_petya + ($salary_petya * 0.15);
echo "Зарплата Васи в следующем году: " . $vasya_next_year . " руб.<br>";
echo "Зарплата Пети в следующем году: " . $petya_next_year . " руб.<br>";
?>

<?php
$total_shares = 1000;
$john_shares = 100;
$stolerman_shares = 150;
$ivan_shares = 235;
$john_percent = ($john_shares / $total_shares) * 100;
$stolerman_percent = ($stolerman_shares / $total_shares) * 100;
$ivan_percent = ($ivan_shares / $total_shares) * 100;
echo "Джон владеет " . $john_percent . "% акций<br>";
echo "Столерман владеет " . $stolerman_percent . "% акций<br>";
echo "Иван владеет " . $ivan_percent . "% акций<br>";
$sold_shares = $john_shares + $stolerman_shares + $ivan_shares;
$unsold_shares = $total_shares - $sold_shares;
echo "Продано акций: " . $sold_shares . "<br>";
echo "Осталось непроданных акций: " . $unsold_shares . "<br>";
?>
