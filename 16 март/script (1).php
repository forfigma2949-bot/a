<?php
if (isset($_POST['text'])) {
    $text = htmlspecialchars($_POST['text']);
    echo "<h3>задание «Эхо»:</h3>";
    echo "Вы написали: $text<br><br>";
}


if (isset($_POST['num1']) && isset($_POST['num2'])) {
    $num1 = (float)$_POST['num1'];
    $num2 = (float)$_POST['num2'];
    echo "<h3>задание «Сложение»:</h3>";
    echo "Сумма равна: " . ($num1 + $num2) . "<br><br>";
}


if (isset($_POST['name']) && isset($_POST['year']) && isset($_POST['gender'])) {
    $name = htmlspecialchars($_POST['name']);
    $year = (int)$_POST['year'];
    $gender = $_POST['gender'];
    $currentYear = date('Y');
    $age = $currentYear - $year;
    
    $greeting = ($gender == 'male') ? 'Уважаемый' : 'Уважаемая';
    echo "<h3>задание «Анкета»:</h3>";
    echo "$greeting $name! Вам $age лет.<br><br>";
}

$rates = [
    'USD' => 0.011,
    'EUR' => 0.0095,
    'CNY' => 0.078
];

if (isset($_POST['amount']) && isset($_POST['currency'])) {
    $amount = (float)$_POST['amount'];
    $currency = $_POST['currency'];
    
    if ($amount > 0 && isset($rates[$currency])) {
        $result = $amount * $rates[$currency];
        echo "<h3>задание «Конвертер»:</h3>";
        echo "$amount руб. = $result $currency<br><br>";
    } else {
        echo "<h3>Ошибка в задании «Конвертер»:</h3>";
        echo "Сумма должна быть больше 0 или выбрана неверная валюта.<br><br>";
    }
}

if (isset($_POST['color'])) {
    $color = $_POST['color'];
    echo '<style>body { background-color: ' . $color . '; }</style>';
    echo "<h3>задание «Цвет настроения»:</h3>";
    echo "Фон изменён на $color.<br><br>";
}

if (isset($_POST['password'])) {
    $password = $_POST['password'];
    
    if ($password === 'Админ') {
        echo "<h3>задание «Секретное слово»:</h3>";
        echo 'Добро пожаловать в систему!<br><br>';
    } else {
        echo "<h3>задание «Секретное слово»:</h3>";
        echo 'Доступ запрещён<br><br>';
    }
}

?>