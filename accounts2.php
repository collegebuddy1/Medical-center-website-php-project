<?php
if (isset($_POST['submit'])) {
if (empty($_POST['date']) || empty($_POST['DOCNAME'])|| empty($_POST['patname']) || empty($_POST['diag']) || empty($_POST['payment']) ) {
 header("location: signup4.html");
}
else
{
$host='localhost';
$user='burhanim_burhani';
$pass='champu5221';
$db='burhanim_bmc';
$con=mysqli_connect($host,$user,$pass,$db);


$date=$_POST['date'];
$doctorname=$_POST['DOCNAME'];
$diagnoses=$_POST['diag'];
$phonenumber=$_POST['phonenumber'];
$address=$_POST['address'];
$patientname=$_POST['patname'];
$payment=$_POST['payment'];


$q="insert into accounts (DOCTORSNAME,PATIENTNAME,phonenumber,address,DIAGNOSES,PAYMENT,DATE)
VALUES('$doctorname','$patientname','$phonenumber','$address','$diagnoses','$payment','$date')";
$r=mysqli_query($con,$q);

if ($r)
{
 header("location: accounts.php");
}
else
{
	header("location: signup4.html");
}
}
}

?>