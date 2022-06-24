<?php 
$host = 'ribat_db';
$username = 'ribat';
$pass = 'ribat'; 

$conn = new mysqli($host,$username,$pass);
if($conn -> connect_error){
    die("connection failed: ". $conn->connect_error);
} else {
    echo "connection to mysql server succesfully";
}

?>