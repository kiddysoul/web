<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../m-css/reg.css">
    <title>Авторизация</title>
</head>
<body>
    <div class="form1">
        <form class="autorisation" action="../inc/signin.php" method="post">
            <label >Логин</label>
            <input type="text" name="login" placeholder="Введите логин:">
            <label >Пароль</label>
            <input type="text" name="password" placeholder="Введите пароль:">
            <button class="btn" type="submit">Войти</button>
            <p>
                У вас нет аккаунта? - <a href="registration.php">Зарегистрируйтесь!</a>
            </p>
            <?php 
                if (isset($_SESSION['message'])) {
                     echo '<p class="msg"> '.$_SESSION['message']. '</p>';
                } 
                unset($_SESSION['message']);
            ?>
        </form>
    </div>
</body>
</html>