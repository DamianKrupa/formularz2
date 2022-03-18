<?php 
    session_start();
    $title = 'view';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
   
   
    if($_SESSION['logged_status'] != 1){
        echo "Nie zalogowany";
        include "includes/errormessage.php";
        exit();
    }else{
        //echo "Zalogowany jako " . $_SESSION['username'];
    }
    
        
    //Gert attendee by id
    if(!isset($_GET['id'])){
        include "includes/errormessage.php";
    
    } else {
        $id = $_GET['id'];
        $result = $crud->getAttendeesDetails($id);
    

?>


<div class="card" style="width: 18rem;">
    <img src=<?php echo "images/".$result['id'].".jpg"; ?> class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?php echo $result['firstname'] ." ". $result['lastname']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $result['name']; ?></h6>
        <p class="card-text">Date of birth: <?php echo $result['dob']; ?></p>
        <p class="card-text">E-mail: <?php echo $result['email']; ?></p>
        <p class="card-text">Phone number: <?php echo $result['phone']; ?></p>
        <p class="card-text">Password: 
            <?php
                if($result['id'] == $_SESSION['id']){
                    echo $result['password'];
                }else{
                    for ($i = 1; $i <= strlen($result['password']); $i++){
                        echo "*";
                    }
                }
            ?>
        </p>
        
    </div>
</div> 
    <a href="viewrecords.php" class="btn btn-info">Back to list</a></td> 
    <?php
        if($result['id'] == $_SESSION['id']){
           echo '<a href="edit.php?id='.$result['id'].'"'.'class="btn btn-warning">Edit</a></td>';
           echo '<a href="delete.php?id='.$result['id'].'"'.'class="btn btn-danger">Delete</a></td>';
        };
    ?>
<?php } ?>



<br>
<br>


<?php 
    session_abort();
    require_once 'includes/footer.php'; 
?>