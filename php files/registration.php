<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../m-css/reg.css">
    <title>Регистрация</title>
</head>
<body>
        <!-- Форма регистрации -->
        <form action="../inc/signup.php" class="autorisation" method="post">
            <label class="full_name">ФИО</label>
            <input type="text" name="full_name" placeholder="Введите свое полное имя:">

            <label class="pochta">Почта</label>
            <input type="email" name="email" placeholder="Введите адрес почты:">

            <label class="login">Логин</label>
            <input type="text" name="login" placeholder="Введите логин:">

            <label class="pass">Пароль</label>
            <input type="text" name="password" placeholder="Введите пароль:">

            <label class="pass_repeat">Повтор пароля</label>
            <input type="text" name="password_confirm" placeholder="Повторно введите пароль:">

            <button class="btn" type="submit">Создать аккаунт</button>
            <p>
                Проблемы со входом? - <a href="../php files/help.php">Помощь</a>
            </p>
            <?php 
                if (isset($_SESSION['message'])) {
                     echo '<p class="msg"> '.$_SESSION['message']. '</p>';
                } 
                unset($_SESSION['message']);
            ?>
        </form>
</body>
</html>