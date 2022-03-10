<?php 

    //Nie mogę na remotemysql.com utworzyć drygi raz bazy, bo kurwa ankieta nie działa.
    //Formularz nie wprowadzał danych, bo AutoIncement na kolumnie atenee_id się nie włączyło.
    //Hak tylko uda mi się utworzyć bazę, przekopiuję ją, i wtedy w niej w phpmyASdmin utworzę AIinc
    $host = 'localhost';
    //$host = 'remotemysql.com';
    $db = 'attendance';
    //$db = 'mSw471Q5Sf';
    $user = 'root';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try {
        $pdo = new PDO($dsn, $user);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // echo "Hello Database";
        //przechwytuje nasz error i zapisuje do zmiennej $e 
    } catch(PDOException $e) {
        //throw - zatrzymuje wykonywanie funkcji i wyświetla error za pomocą funkcji getMessage
        echo "<h1 class='text-danger'>No datbase found</h1>";
        throw new PDOException($e->getMessage());

    }

    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($pdo);
    $user = new user($pdo);

    $user->insertUser("admin","password");

?>
