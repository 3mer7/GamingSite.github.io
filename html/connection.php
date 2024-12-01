<?php 

$host = "localhost";
$user = "root";
$pass = "";
$database = "user_info";
$conn = new mysqli($host , $user , $pass , $database);

if($conn ->connect_error) {

    echo "Could't connect to the Database";

}

