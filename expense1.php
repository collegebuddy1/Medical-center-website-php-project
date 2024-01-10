<?php

$host='localhost';
$user='burhanim_burhani';
$pass='champu5221';
$db='burhanim_bmc';
$con=mysqli_connect($host,$user,$pass,$db);


$date=$_POST['date'];
$expense=$_POST['expname'];
$price=$_POST['expprice'];



$q="insert into expense (DATE,EXPENSE,PRICE)
VALUES('$date','$expense','$price')";
$r=mysqli_query($con,$q);

if ($r)
{
 header("location: expense.php");
}


?>