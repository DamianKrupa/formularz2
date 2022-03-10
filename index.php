
<?php 
    $title = 'index';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
     

    $results = $crud->getSpecialities();



?>
    
    <h1 class='text-center'>Registration for IT conferance</h1>

    <form method="post" action="success.php" enctype="multipart/form-data">
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
            <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1" name="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
        </div>

         
        <input type="file" name="userfile[]" class="files" multiple />
        <!-- <input type="submit" class="btn btn-info" name="submit" value="Upload files" ></button>  -->
        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
    </form>

<br>
    
<?php 
    require_once 'includes/footer.php'; 
?>