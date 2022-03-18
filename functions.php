<?php

require_once 'db/conn.php';
session_start();

function pre_r($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";

}

function clean_scandir($dir){
    return array_values(array_diff(scandir($dir), array('..', '.')));
}


function clean_ftp_nlist($ftp_connection, $server_dir){
    $files_on_server = ftp_nlist($ftp_connection, $server_dir);
    return array_values(array_diff($files_on_server, array('.', '..')));
}



function upload_files($ftp_connection, $local_dir, $remote_server_dir){
    // $local_dir = '/home/dkrupa/Obrazy/';
    // $remote_server_dir = '/formularz/bla/';
    $files = clean_scandir($local_dir);

    for($i=0;$i<count($files);$i++){
        $files_on_server = clean_ftp_nlist($ftp_connection, $remote_server_dir);
        //pre_r($files_on_server);die;
        if(!in_array("$files[$i]", $files_on_server)){
            //upload files to remote FTP server
            if (ftp_put($ftp_connection, "$remote_server_dir/$files[$i]","$local_dir/$files[$i]", FTP_BINARY)){
                echo "Successfully uploaded $files[$i]"."<br>";
            }else{
                echo "There was a problem while uploading $files[$i]"."<br>";
            }
        }else{
            echo "$remote_server_dir/$files[$i] exists"."<br>";
        }
        
    }
    $files_on_server = clean_ftp_nlist($ftp_connection, $remote_server_dir);
    ftp_close($ftp_connection);
    return $files_on_server;

}


function DK_uploadFile($ftp_connection, $remote_server_dir){
        ftp_pasv($ftp_connection, true);
       for($i = 0; $i < count($_FILES['userfile']['name']); $i++) {
        $filep=$_FILES['userfile']['tmp_name'][$i];
        $name=$_FILES['userfile']['name'][$i]; 
        $upload = ftp_put($ftp_connection, $remote_server_dir.'/'.$name, $filep, FTP_BINARY);
        $num = $i+1;
        echo $num.") $name <br>";
    }
    echo "<br> Uploaded successfull!";
    echo "Szo to: ". count(array_filter($_FILES['file']['name']));
    return $upload;
    
}

function logIN($firstname, $lastname, $id){
    // $_SESSION['logged_status'] = 1;
    // $_SESSION['username'] = $user_exists['firstname'];
    // $_SESSION['surname'] = $user_exists['lastname'];
    // $_SESSION['id'] = $user_exists['id'];
    // header("Location: view.php?id=".$user_exists['id']);
    
    $_SESSION['logged_status'] = 1;
    $_SESSION['username'] = $firstname;
    $_SESSION['surname'] = $lastname;
    $_SESSION['id'] = $id;
    header("Location: view.php?id=".$id);
}


class FTP_sendfile{
    //FTP Host settings

    public function DK_uploadFile2($ftp_connection, $remote_server_dir){
        ftp_pasv($ftp_connection, true);
        for($i = 0; $i < count($_FILES['userfile']['name']); $i++) {
         $filep=$_FILES['userfile']['tmp_name'][$i];
         $name=$_FILES['userfile']['name'][$i]; 

         $upload = ftp_put($ftp_connection, $remote_server_dir.'/'.$name, $filep, FTP_BINARY);
         $num = $i+1;
         echo $num.") $name <br>";
     }
     echo "<br> Uploaded successfull!";
     echo "Szo to: ". count(array_filter($_FILES['file']['name']));
     return $upload;
     
 }
 
}





