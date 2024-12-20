<?php 

$connect = new mysqli('localhost','root','','guests_book');
if (!$connect) {
    die("Error connect to DB");
}