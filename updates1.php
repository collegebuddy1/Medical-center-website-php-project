<?php

$host='localhost';
$user='burhanim_burhani';
$pass='champu5221';
$db='burhanim_bmc';
$con=mysqli_connect($host,$user,$pass,$db);

$heading=$_POST['heading'];
$para=$_POST['paragraph'];
$date=$_POST['date'];
$id=$_POST['updateid'];


$q="insert into updates (updateid,heading,paragraph,date)
VALUES('$id','$heading','$para','$date')";
$r=mysqli_query($con,$q);

if ($r)
{
 header("location: signup3.html");
}


?>