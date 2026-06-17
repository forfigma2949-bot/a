<?php
$name = htmlspecialchars($_POST['name'] ?? '');
$email = htmlspecialchars($_POST['email'] ?? '');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Профиль</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="profile">
            <div class="avatar"><?= mb_substr($name, 0, 1, 'UTF-8') ?></div>
            <h2><?= $name ?></h2>
            <p><?= $email ?></p>
            <a href="register.php">Назад</a>
        </div>
    </div>
</body>
</html>
