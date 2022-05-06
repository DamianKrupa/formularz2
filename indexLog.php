

<?php 


    $title = 'indexLog';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    session_start();

    echo 'ile to ' . strlen('Załoga wykonała próbne podejście do lądowania do tzw. wysokości podjęcia decyzji[25]. Zezwalając załodze na wykonanie trzeciego zakrętu kręgu nadlotniskowego, kontroler poinformował, aby na wysokości decyzji być gotowym do odejścia na drugi krąg[25]. Według oficjalnych źródeł rosyjskich podana przez kontrolera wysokość decyzji wynosiła 100 m[25][27], według zeznań części świadków, niezgodnie z procedurą, 50 m[28][29].');


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


