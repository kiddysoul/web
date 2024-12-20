<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $_SESSION['log'] = $login;
    $sql = "SELECT * FROM `users` WHERE login = '$login' AND 
    password = '$password'"; 
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        header("Location:../Эверест.html");
    } else {
        $_SESSION['message'] = "Неверные логин или пароль";
        header('Location: ../php files/autorisation.php');
    }
    $connect->close();

?>