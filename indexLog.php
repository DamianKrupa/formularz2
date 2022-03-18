
<?php 


    $title = 'indexLog';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    session_start();

    //Tutaj powinien byc warunek ze jesli zalogowany jest user to nie moze przyjsc do
     //sprwdza, czy zmienna 'submit' istnieje na tej stroenie
     if(isset($_SESSION['id'])){
        header("Location: view.php?id=".$_SESSION['id']);
     }else{
        echo ' 
        <h1 class="text-center">LOG IN</h1>
    
        <form method="POST" action="zaloguj.php" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="login_id" class="form-label">ID</label>
                <input required type="number" class="form-control" id="login_id" name="login_id">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input required type="password" class="form-control" id="password" name="password">
            </div>
    
            <button type="submit" name="submit" class="btn btn-primary btn-block">Log in</button>
        </form>
    
    <br>';
     };
       
     
?>
    
<?php 
    require_once 'includes/footer.php'; 
?>