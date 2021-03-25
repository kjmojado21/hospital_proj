<?php 
include 'classes/Hospital.php';
$hospitalObj = new Hospital;


if(isset($_POST['register'])){
    $username = $_POST['uname'];
    $password = $_POST['pword'];

    $hospitalObj->register($username,$password);

}elseif(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hospitalObj->login($username,$password);

}elseif(isset($_POST['save_patient'])){
    $p_healthcare = $_POST['healthcare'];
    $p_fullname = $_POST['fullname'];
    $p_age = $_POST['age'];
    $p_contact = $_POST['contact'];
    $p_bdate = $_POST['bdate'];

    $hospitalObj->add_patient($p_fullname,$p_age,$p_contact,$p_bdate,$p_healthcare);

}elseif(isset($_POST['update_patient'])){
    $p_healthcare = $_POST['healthcare'];
    $p_fullname = $_POST['fullname'];
    $p_age = $_POST['age'];
    $p_contact = $_POST['contact'];
    $p_bdate = $_POST['bdate'];
    $id = $_POST['id'];


}elseif(isset($_POST['reserve'])){
    $reserve_date = $_POST['r_date'];
    $uname = $_POST['username'];

    $hospitalObj->add_reserve($reserve_date,$uname);
}


?>