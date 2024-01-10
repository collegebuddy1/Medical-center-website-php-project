<?php
if (isset($_POST['submit'])) {
if (empty($_POST['DOCID']) || empty($_POST['name'])|| empty($_POST['Spcl']) || empty($_POST['Pnumber']) ) {
 header("location: signup4.html");
}
else
{
$host='localhost';
$user='burhanim_burhani';
$pass='champu5221';
$db='burhanim_bmc';
$con=mysqli_connect($host,$user,$pass,$db);


$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$specialization=$_POST['Spcl'];
$timings=$_POST['timing'];
$docid=$_POST['DOCID'];
$contact=$_POST['Pnumber'];
$image=$_POST['image'];


$q="insert into doctors (docid,name,gender,email,contact,specialization,timings,Pic)
VALUES('$docid','$name','$gender','$email','$contact','$specialization','$timings','$image')";
$r=mysqli_query($con,$q);

if ($r)
{
 header("location: loginprofile1.php");
}
else
{
	 header("location: signup4.html");
}
	
}
}
?>