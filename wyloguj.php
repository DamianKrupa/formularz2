<?php
session_start();
$title = 'wyloguj';
require_once 'includes/header.php'; 
require_once 'db/conn.php';
require_once 'functions.php';




//Tutaj powinien byc warunek ze jesli zalogowany jest user to nie moze przyjsc do
//sprwdza, czy zmienna 'submit' istnieje na tej stroenie
    if(isset($_SESSION['id'])){
        session_destroy();
        header("Location: indexLog.php");
    }else{
        header("Location: indexLog.php");
    };






require_once 'includes/footer.php'; 
?>