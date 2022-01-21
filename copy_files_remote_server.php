<?php 

require_once 'config.php';
require_once 'functions.php';
//Dzięki temu można uplodować dowolną ilość plików:
require_once '.htaccess';

//FTP connections

$ftp_connection = ftp_connect($ftp_host) or die("Couldn't connect to $ftp_host"); 
// try to login
if (ftp_login($ftp_connection, $ftp_user, $ftp_pass)) {
    echo "Connected as $ftp_user@$ftp_host\n" ."<br>";
} else {
    echo "Couldn't connect as $ftp_user\n";
}

$remote_server_dir = '/formularz/bla/';
// DK_uploadFile($ftp_connection, $remote_server_dir);

$cv_photo = new FTP_sendfile();
$cv_photo->DK_uploadFile2($ftp_connection, $remote_server_dir);











