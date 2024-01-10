<?php
session_start(); 


if (isset($_POST['submit'])) {
 
echo "Username or Password is invalid";
}

$updateid=$_POST['docid'];


// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$host='localhost';
$user='burhanim_burhani';
$pass='champu5221';
$db='burhanim_bmc';
$con=mysqli_connect($host,$user,$pass,$db);

$query = "DELETE FROM doctors WHERE docid='$updateid'";



$result = mysqli_query($con, $query);

if ($result) {
     header("location: signup3.html");
} else {
    echo "Error deleting record: " . $conn->error;
}


mysqli_close($con); // Closing Connection


?>


