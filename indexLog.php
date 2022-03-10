
<?php 
    $title = 'indexLog';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
     


?>
    
    <h1 class='text-center'>LOG IN</h1>

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

<br>
    
<?php 
    require_once 'includes/footer.php'; 
?>