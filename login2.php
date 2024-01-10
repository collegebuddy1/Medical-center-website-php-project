<?php
session_start(); 

$error=''; 
if (isset($_POST['submit'])) {
if (empty($_POST['USERNAME']) || empty($_POST['PASSWORD'])) {
 header("location: signup2.html");
}
else
{
$username=$_POST['USERNAME'];
$password=$_POST['PASSWORD'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$host='localhost';
$user='burhanim_burhani';
$pass='champu5221';
$db='burhanim_bmc';
$con=mysqli_connect($host,$user,$pass,$db);

$query = "select * from signup where PASSWORD='$password' AND USERNAME='$username'";

$_SESSION["USERNAME"]="$username" ;

$result = mysqli_query($con, $query);
if($row = mysqli_fetch_row($result)== true)
{

header("location: loginprofile.php"); // Redirecting To Other Page
}
else 
{
 header("location: signup2.html");

}
mysqli_close($con); // Closing Connection
}
}
?>