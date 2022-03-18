<?php 
    session_start();
    $title = 'view_records';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';

    if($_SESSION['logged_status'] != 1){
        echo "Nie zalogowany";
        include "includes/errormessage.php";
        exit();
    }else{
        echo "Zalogowany";
    }

    $results = $crud->getAttendees();
?>


<table class='table'>
    <tr>
        <th>#</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Speciality</th>
        <th>Actions</th>
    </tr>
    <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td> <?php echo $r['id'];  ?> </td>
            <td><?php echo $r['firstname']; ?> </td>
            <td> <?php echo $r['lastname'];  ?></td>
            <td><?php echo $r['name'];  ?> </td>
                <td><a href="view.php?id=<?php echo $r['id'];  ?>" class="btn btn-primary">View</a></td>
                <td><a href="edit.php?id=<?php echo $r['id'];  ?>" class="btn btn-warning">Edit</a></td>
                <td><a onclick="return confirm('Are you sure you want to delete?')" href="delete.php?id=<?php echo $r['id'];  ?>" class="btn btn-danger">Delete</a></td>
        </tr>
    <?php } ?>
</table>




<br>
<br>


<?php 
    require_once 'includes/footer.php'; 
?>