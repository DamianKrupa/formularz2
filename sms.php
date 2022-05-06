
<?php 


    $title = 'sms';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    $test = 1;

    if($test == 1){
        echo '<h1 class="text-center">LOG IN</h1>
        
        <form method="POST" action="zaloguj.php" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="login_id" class="form-label">Wprowadz otrzymany kod SMS:</label>
                <input required type="number" class="form-control" id="sms_code" name="sms_code">
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block">Potwierdz</button>
            <button type="submit" name="submit" class="btn btn-primary btn-block">Wyslij nowy kod</button>
        </form>';
    }else{
        echo '    
        <h1 class="text-center">LOG IN</h1>
    
        <form method="POST" action="zaloguj.php" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="login_id" class="form-label">Cos nie teges:</label>
                <input required type="number" class="form-control" id="sms_code" name="sms_code">
            </div>
            <div class="mb-3">
                <label for="login_id" class="form-label">Wprowadz swoje ID:</label>
                <input required type="number" class="form-control" id="sms_code" name="sms_code">
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block">Potwierdz</button>
            <button type="submit" name="submit" class="btn btn-primary btn-block">Wyslij nowy kod</button>
        </form>';
    }
     
?>


<br>
    
<?php 
    require_once 'includes/footer.php'; 
?>