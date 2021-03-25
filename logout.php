<?php 
include 'hospital_data.php';

session_destroy(); // delete all session

header('location:login.php');

?>