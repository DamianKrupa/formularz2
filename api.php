<?php
require_once 'includes/header.php';
require_once 'db/conn.php';
require_once 'db/crud.php';


$josndata = '{
   "student":{ "name":"Harry", 
   "country":"United State", 
   "ContactNo":2545454 }
  }';  
  
  // Database connection
  //$conn = new mysqli('localhost', 'username', 'password', 'databasename');
  
  // Insert data Query
  // $sql = "INSERT INTO student_table ( name, jsondata )
  // VALUES ('Harry', '$josndata')";

  // insertJSON('Damian', 'Polska', 663938898);

  insertJSON($name, $country, $contact);

  
  if ($conn->query($sql) === TRUE) {
    echo "Insert your JSON record successfully";
  } 


  require_once 'includes/footer.php'; 
  ?>

