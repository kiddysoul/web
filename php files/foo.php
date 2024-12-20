<?php
$file = 'book.txt';
$date = date('d.m.Y H:i');
// $name = isset($_POST['name']) ? $_POST['name'] : '';
$name = $_SESSION['log'];
$text = isset($_POST['txt']) ? strip_tags(trim($_POST['txt'])) : '';
$text = str_replace("\n", "", $text);

if (!empty($name) && !empty($text)) {
    $f = fopen($file, "a");
    fputs($f, '<div class="badge">' . $name . ' ' . $date . '</div><br>
            <div class="alert alert-success mt-3">' . $text . '</div><br>');
    fclose($f); 
    $random = time();
    header("Location: http://{$_SERVER['SERVER_NAME']}{$_SERVER['SCRIPT_NAME']}?$random#form");
    exit;
}

$arr = @file($file);
if (!is_array($arr)) $arr = [];
?>