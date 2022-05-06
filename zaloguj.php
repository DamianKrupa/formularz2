<?php
session_start();
$title = 'zaloguj';
require_once 'includes/header.php'; 
require_once 'db/conn.php';
require_once 'functions.php';


//Ustaw status zalogowania na NIEzalogowany
$_SESSION['logged_status'] = 0;

//Sprawdz czy istnieja dane z formularza logowania.
if(isset($_POST['login_id'])){
  //Jesli tak, przechwyc je:
  $login_id = $_POST['login_id'];
  $password = $_POST['password'];
  //Encje html. 
  $login_id = htmlentities($login_id, ENT_QUOTES, "UTF-8");
  $password = htmlentities($password, ENT_QUOTES, "UTF-8");


  $user_exists = $crud->getAttendeesDetails($login_id);
}else{
  //Jesli nie, to musza pochodzic z formularza rejestracji. Przechwyc nowe id:
  $user_exists = $crud->getAttendeesDetails($_SESSION['id_new']);
};



//Jesli user jest nowy, czyli przyszedl tu z rejestracji a nie z logowania:
if($_SESSION['new_user'] == 1){
  logIn($user_exists['firstname'], $user_exists['lastname'], $user_exists['id']);
}else{
  true;
};


//Sprawdzam po id, czy user jest w bazie.
if($user_exists != NULL){
    if($user_exists['password'] == $password){
      logIn($user_exists['firstname'], $user_exists['lastname'], $user_exists['id']);
    }else{
      echo '<div class="alert alert-danger" role="alert">
      Podany nieprawidowe haslo.</div>';
      header("Location: indexLog.php");
    }
}else{
    echo '<div class="alert alert-danger" role="alert">
    Nie ma takiego uzytkownika.</div>
    <a href="index.php" class="btn btn-info">Registration</a>';
    
    
}





require_once 'includes/footer.php'; 
?>