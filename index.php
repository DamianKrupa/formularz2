
<?php 

    $title = 'index';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    $results = $crud->getSpecialities();


    if(isset($_SESSION['id'])){
        header("Location: view.php?id=".$_SESSION['id']);
        exit();
     }else{
       true;
     };

     ?>


<h1 style="color: blue;" class='text-center'>Registration for IT conferance</h1>


<p id="parametr" class="copyme">Jabadu!</p>
    <div class="box">move around  this box</div>
    <button id="button"> Przydus mnie </button>
    <div class="popup-wrapper">
    <div class="popup">    
        <div class="popup-close">X</div>
            <div class="popup-content">
                <h2>Jestem koniuszym, czy kasztelanem?</h2>
                <p>To pytanie zawazy na na Twoim zyciu.</p>
                <a href="https://pl.wikipedia.org/wiki/Koniuszy">Zobacz odpowiedz.</a>
            </div>
        </div>
    </div>


    <form class="signup-form" id="signup-form">
        <div class="mb-3">
            <input class="form-control" type="text" id="username" name="user_name" placeholder="username">
            <input class="form-control" type="submit" value="submit">
        <div class="feedback"></div>
        </div>
    </form>
    

<br>
<br>
<br>
<br>


<?php





?>








<!-- Powyzej trening JS -->


    <form method="post" action="success.php" enctype="multipart/form-data" name="formularz">
        <div class="mb-3">
            <label for="firstname" class="form-label">Firstname</label>
            <input required type="text" class="form-control" id="firstname" name="firstname">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last name</label>
            <input required type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input required type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="password_confirm" class="form-label">Repeat Password</label>
            <input required type="password" class="form-control" id="password_confirm" name="password_confirm">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date of birth</label>
            <input required type="text" class="form-control" id="dob" name="dob">
        </div>
        <div class="mb-3">
            <label for="speciality" class="form-label">Area of Expertise</label>
            <select class="form-select" id="speciality" name="speciality">
               <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo $r['speciality_id']; ?>"> <?php echo $r['name'];  ?> </option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone number</label>
            <input type="number" class="form-control" id="phone" name="phone">
            <div id="phoneHelp" class="form-text">We'll never share your phone number with anyone else.</div>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="terms" name="terms">
            <label class="form-check-label" for="exampleCheck1">I have read the terms and conditions</label>
        </div>
        <div class="g-recaptcha" data-sitekey="6Lc21PoeAAAAAHkqVDWHs0bpGPtHZavupp4TtWKs"></div>
        <br></br>
        <input type="file" name="userfile[]" class="files" multiple />
        <br></br>
        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
    </form>

<br>
    
<?php 


    require_once 'includes/footer.php'; 
?>


<script>
      document.addEventListener("DOMContentLoaded", function(){
      var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
      var popoverList = popoverTriggerList.map(function(element){
        return new bootstrap.Popover(element);
        });
      });
  </script>
