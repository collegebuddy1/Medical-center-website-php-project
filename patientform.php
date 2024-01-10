<?php
if (isset($_POST['submit'])) {
if (empty($_POST['pid']) || empty($_POST['name'])|| empty($_POST['diag'])) {
 header("location: signup4.html");
}
else
{
$host='localhost';
$user='burhanim_burhani';
$pass='champu5221';
$db='burhanim_bmc';
$con=mysqli_connect($host,$user,$pass,$db);

if ($con)
{
echo "connected successfully";
}
$name=$_POST['name'];

$gender=$_POST['gender'];
$diagnose=$_POST['diag'];

$patientid=$_POST['pid'];
$contact=$_POST['Pnumber'];


$q="insert into patient (patientid,name,gender,contact,diagnose)
VALUES('$patientid','$name','$gender','$contact','$diagnose')";
$r=mysqli_query($con,$q);

if ($r)
{
 header("location: signup3.html");
}
else{
	header("location: signup4.html");
}
}
}

?>