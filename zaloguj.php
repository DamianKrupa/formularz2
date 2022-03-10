<?php
$title = 'zaloguj';

require_once 'includes/header.php'; 
require_once 'db/conn.php';

$login_id = $_POST['login_id'];
$password = $_POST['password'];
//echo "Widze " . $login_id . " a takze " . $password;

//Sprawdzam po id, czy user jest w bazie.
$user_exists = $crud->getAttendeesDetails($login_id);


if($user_exists != NULL){
    if($user_exists['password'] == $password){
      $logged_status = 1;
      header("Location: view.php?id=".$user_exists['id']);
    }else{
      header("Location: indexLog.php");
    }
}else{
    echo "Nie ma takiego uzytkownika.";
}






















require_once 'includes/footer.php'; 
?>