<?php 
// database connection
$host="localhost";
$user="root";
$pass="";
$db="register_login";

$conn= new mysqli($host,$user,$pass,$db);

// throw an error msg when connection isn't established or connected 
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>
