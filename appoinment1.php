<?php
if (isset($_POST['submit'])) {
if ( empty($_POST['name'])|| empty($_POST['date'])  ) {
 header("location: signup4.html");
}
else
{
$host='localhost';
$user='burhanim_burhani';
$pass='champu5221';
$db='burhanim_bmc';
$con=mysqli_connect($host,$user,$pass,$db);


$drname=$_POST['drname'];
$name=$_POST['name'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$date=$_POST['date'];
$center=$_POST['center'];



$q="insert into appoinment (drname,fullname,phonenumber,email,date,center)
VALUES('$drname','$name','$email','$phonenumber','$date','$center')";
$r=mysqli_query($con,$q);

if ($r)
{
 header("location: signup3.html");
}

}
}
?>