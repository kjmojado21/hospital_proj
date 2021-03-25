<?php 
session_start(); // save a data inside your machine[laptop]

class Database{
    private $servername = 'localhost';
    private $username = 'root';
    private $password ='';
    private $database_name = 'hospital_db';
    public $conn;

    function __construct() // predefined function->created by the creatos of PHP[purpose: automatically runs if the file is being called or being used]
    {
        $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->database_name);

        if($this->conn == TRUE){
            return $this->conn;
        }else{
            return FALSE;
        }
    }
}





?>