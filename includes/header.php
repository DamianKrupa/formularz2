<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/site.css" type="text/css">

    <title>Attendance - <?php echo $title ?> </title>
    <!-- ReCaptcha -->
    <script src="https://www.google.com/recaptcha/api.js"></script>
    

  </head>
  <body>
    
    <div class='container'>
    <nav class="navbar navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href=<?php echo "view.php?id=".$_SESSION['id']; ?>>
          <?php 
            if(isset($_SESSION['id'])){
              echo $_SESSION['username'] . " " . $_SESSION['surname'] . " " . "(".$_SESSION['id'].")";
            }else{
             echo "Niezalogowany";
              //echo '<img src="images/user.jpg" class="card-img-top" alt="...">';
            }
          ?>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href=<?php echo "view.php?id=".$user_exists['id']; ?>> <span class="sr-only">Home</span> </a>
            <a class="nav-link" href="viewrecords.php">View Attendance</a>
            <?php
              if(isset($_SESSION['id'])){
                echo '<a class="nav-link" style="color:red" href="wyloguj.php">Log out</a>';
              }else{
                echo '<a class="nav-link" style="color:red" href="indexLog.php">Log in</a>';
              }
            ?>
          </div>
        </div>
      </div>
    </nav>
<br/>