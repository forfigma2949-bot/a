<?php
    if (isset($_POST['user_text'])) {
        $text = htmlspecialchars($_POST['user_text']);
        echo "<p>Вы написали: $text</p>";
    }
?>

<?php
    $num1 = (float)$_POST['num1'];
    $num2 = (float)$_POST['num2'];
    $sum = $num1 + $num2;
    echo "<p>Сумма равна: $sum</p>";
?>

<?php
    $name = htmlspecialchars($_POST['name']);
    $birth_year = (int)$_POST['birth_year'];
    $gender = $_POST['gender'];
    $current_year = date('Y');
    $age = $current_year - $birth_year;

    if ($gender == 'male') {
        echo "<p>Уважаемый $name, привет! Вам $age лет.</p>";
    } else {
        echo "<p>Уважаемая $name, привет! Вам $age лет.</p>";
    }
?>
