<?php 
//require( 'datatables.net-dt' )();

error_reporting(1);
    $dbDetails = array(
        'host' => 'localhost',
        'user' => 'root',
        //'pass' => 'qxvqxv1991',
        'db' => 'attendance',
    );

$table = 'attende';
$primaryKey = 'id';
$columns = array(
    array('db' => 'id', 'dt' => 0),
    array('db' => 'firstname', 'dt' => 1),
    array('db' => 'lastname', 'dt' => 2),
    array('db' => 'dob', 'dt' => 3),
    array('db' => 'email', 'dt' => 4),
    array('db' => 'phone', 'dt' => 5),
    array(
        'db' => 'speciality_id', 
        'dt' => 6,
        'formatter' => function($d,$row){
            return date('js M Y', strtotime($d));
        }
    ),
    array(
        'db' => 'password', 
        'dt' => 7,
        'formatter' => function($d,$row){
            return ($d == 1)?'Active':'Inactive';
        }
    )
);


$table2 = 'specjalizacje_widok';
$primaryKey2 = 'id';
$columns2 = array(
    array('db' => 'id', 'dt' => 0),
    array('db' => 'firstname', 'dt' => 1),
    array('db' => 'name', 'dt' => 2),
    
);

require 'ssp.class.php';

echo json_encode(
    SSP::simple($_GET, $dbDetails, $table2, $primaryKey2,$columns2)
);

?>

