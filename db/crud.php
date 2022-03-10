<?php 
    class crud{
        //prive database object
        private $db;

        //constructor to initialize private variable to the datebase connection
        function __construct($conn){
            $this->db = $conn;
        }
        //publiczna funkcja, która wstawia rekordy do bazy
        public function insertAttendees($fname, $lname, $dob, $email, $phone, $speciality, $pass){
            try {
                    $sql = "INSERT INTO `attende`(`firstname`, `lastname`, `dob`, `email`, `phone`, `speciality_id`, `password`) 
                                    VALUES (:fname,:lname,:dob,:email,:phone,:speciality,:pass)";

                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':phone',$phone);
                $stmt->bindparam(':speciality',$speciality);
                $stmt->bindparam(':pass',$pass);
                //execute statmant
                $stmt->execute();
                return true;


            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }






        public function edditAttendees($id, $fname, $lname, $dob, $email, $phone, $speciality, $pass){
            try{
                $sql = "UPDATE `attende` SET 
                `firstname`=:fname,
                `lastname`=:lname,
                `dob`=:dob,
                `email`=:email,
                `phone`=:phone,
                `speciality_id`=:speciality,
                `password`=:pass
            WHERE `id`=:id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id',$id);
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':phone',$phone);
                $stmt->bindparam(':speciality',$speciality);
                $stmt->bindparam(':pass',$pass);
                //execute statmant
                $stmt->execute();
                return true;

            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        
        }

        public function getAttendees(){
            try{
                $sql = "SELECT * FROM `attende` as a inner join `specialities` as s 
                on a.speciality_id = s.speciality_id order by `id`";
                $result = $this->db->query($sql);
                return $result;

            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }


        public function getAttendeesDetails($id){
        try{
            $sql = "SELECT * FROM `attende` as a inner join `specialities` as s 
            on a.speciality_id = s.speciality_id where `id` = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
            }
        }

        public function deleteAttendees($id){
            try{
                $sql = "DELETE FROM `attende` WHERE `id`=:id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                return true;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;

            }
    
        }
            
        public function getSpecialities(){
            $sql = "SELECT * FROM `specialities`";
            $result = $this->db->query($sql);
            return $result;
        }


    public function lastID(){
        try{
          $sql = "SELECT max(`id`) as `id` FROM `attende`";
          $stmt = $this->db->prepare($sql);      
          $stmt->execute();
          $result = $stmt->fetch();
          return $result;
  
        }catch (PDOException $e) {
          echo $e->getMessage();
          return false;
      }
      }

    public function uploadFile($ftp_connection, $remote_server_dir, $file_name){
        ftp_pasv($ftp_connection, true);
        for($i = 0; $i < count($_FILES['userfile']['name']); $i++) {
            $filep=$_FILES['userfile']['tmp_name'][$i];
            //echo "filep to: " . $filep."<br>";
            $name=$_FILES['userfile']['name'][$i]; 
            $upload = ftp_put($ftp_connection, $remote_server_dir.'/'.$file_name.".jpg", $filep, FTP_BINARY);
            $num = $i+1;
            //echo $num.") Przesłałeś plik: $name <br>";
        }
        echo "<br> Uploaded successfull!";
        //echo "Szo to: ". count(array_filter($_FILES['file']['name']));
        return $upload;
    }



}
?>
