<?php 
include 'Database.php';

class Hospital extends Database{

    function register($username,$password){
        $sql = "INSERT INTO login(username,password)VALUES('$username','$password')";
        $result = $this->conn->query($sql);

        if($result == TRUE){
            echo "<div class = 'alert alert-success mt-3 text-center'>REGISTERED SUCCESSFULLY</div>";
        }else{
            echo "<div class = 'alert alert-danger mt-3 text-center'>REGISTRATION FAILED</div>";
        }

    }
    function login($username, $password){
        $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
        $result = $this->conn->query($sql);

        if($result->num_rows == 1){
            $row = $result->fetch_assoc();
            if($row['status'] == 'E'){
                $_SESSION['id'] = $row['login_id']; //this variable session will last[expire/deleted] for 30mins-1hr;
                $_SESSION['uname'] = $row['username']; //this variable session will last[expire/deleted] for 30mins-1hr;
               
                header('location:patient_list.php');
                
            }else{
                header('location:admin.php');
            } 
            
        
        }else{
            echo "wrong username and password";
        }

    }

    function add_patient($fullname,$age,$contact,$bdate,$healthcare){
        $sql = "INSERT INTO patients(patient_fullname,patient_age,patient_contact,patient_bdate,patient_healthcare)VALUES('$fullname','$age','$contact','$bdate','$healthcare')";
        $result = $this->conn->query($sql);

        if($result == TRUE){
            header('location:patient_list.php');
        }else{
            echo "error adding new patient";
        }
    }
    function display_patient(){
        $sql = "SELECT * FROM patients";
        $result = $this->conn->query($sql);

        if($result->num_rows > 0){
            $container = array();
            while($row = $result->fetch_assoc()){
                $container[] = $row;
            }
            return $container;
        }else{
            return FALSE;
        }
    }
    function display_one_patient($id){
        $sql = "SELECT * FROM patients WHERE patient_id = '$id'";
        $result = $this->conn->query($sql);

        if($result->num_rows == 1){
            return $result->fetch_assoc();
        }else{
            echo "NO DATA RETRIEVED";
        }

    }
    function delete_patient($id){
        $sql = "DELETE FROM patients WHERE patient_id = '$id'";
        $result = $this->conn->query($sql);

        if($result == TRUE){
            header('location:patient_list.php');
        }else{
            echo "ERROR DELETING PATIENT";
        }

    }
    function update_patient($fullname,$age,$contact,$bdate,$healthcare,$id){
        $sql = "UPDATE patients SET patient_fullname='$fullname',patient_age='$age',patient_contact='$contact',patient_bdate='$bdate',patient_healthcare='$healthcare' WHERE patient_id = '$id'";
        $result = $this->conn->query($sql);

      
        if($result == TRUE){
            header('location:patient_list.php');
        }else{
           die('error: '.$this->conn->error);
        }
    }
    function add_reserve($date,$username){
        $sql = "INSERT INTO reserve_lesson(reserve_date,user_name)VALUES('$date','$username')";
        $result = $this->conn->query($sql);

        if($result == true){
           echo "reserve successfully";
        }else{
            die("error: ".$this->conn->error);
        }
    }
    function get_reservations($date){
        $sql = "select * from reserve_lesson where reserve_date = '$date'";
        $result = $this->conn->query($sql);

        if($result->num_rows > 0 ){
            $container = array();
            while($row = $result->fetch_assoc()){
                $container[] = $row;
            }
            return $container;
        }else{
            return false;
        }
    }
}


?>
