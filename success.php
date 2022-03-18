<?php 
    $title = 'success';
    require_once 'includes/header.php';
    require_once 'db/conn.php'; 


    require_once 'config.php';
    require_once 'functions.php';
    session_start();
  

    //sprwdza, czy zmienna 'submit' istnieje na tej stroenie
    if(isset($_POST['submit'])){
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $speciality = $_POST['speciality'];


        //PHP Logo
        $pass = $_POST['password'];
        //Wywołaj funkcję i śledź, czy została wykonana czy nie
        $isSuccess = $crud->insertAttendees($fname, $lname, $dob, $email, $phone, $speciality, $pass);

    };


    if($isSuccess){
        include "includes/successmessage.php";
    }
    else{
        include "includes/errormessage.php";
    }

    
    $id_last = $crud->lastID();
    $id_last = $id_last['id'];
    
    //ustawiam sobie status nowego usera
    

    $ftp_connection = ftp_connect($ftp_host) or die("Couldn't connect to $ftp_host"); 
    // try to login, tutaj by tez podany pass $ftp_pass
    if (ftp_login($ftp_connection, $ftp_user, $ftp_pass)) {
        echo "Connected as $ftp_user@$ftp_host\n" ."<br>";
    } else {
        echo "Couldn't connect as $ftp_user\n";
    }
    
    $remote_server_dir = 'formularz2/images';   
    $crud->uploadFile($ftp_connection, $remote_server_dir, $id_last);

?>

    <div class="card" style="width: 18rem;">
        <img src=<?php echo $id_last.".jpg" ?> class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $_POST['firstname'] ." ". $_POST['lastname']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $_POST['speciality']; ?></h6>
            <p class="card-text">Date of birth: <?php echo $_POST['dob']; ?></p>
            <p class="card-text">E-mail: <?php echo $_POST['email']; ?></p>
            <p class="card-text">Phone number: <?php echo $_POST['phone']; ?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div> 

<?php 
    $_SESSION['new_user'] = 1;
    $_SESSION['id_new'] = $id_last;
    echo $_SESSION['id_new'];
    header("Location: zaloguj.php");
    require_once 'includes/footer.php'; 
?>