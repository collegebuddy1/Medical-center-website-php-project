<?php

$host='localhost';
$user='burhanim_burhani';
$pass='champu5221';
$db='burhanim_bmc';
$con=mysqli_connect($host,$user,$pass,$db);




$NAME=$_POST['name1'];
$USERNAME=$_POST['user-name'];
$PASSWORD=$_POST['pass-word'];


 $dup ="SELECT USERNAME FROM signup WHERE USERNAME='$USERNAME'";
$result = mysqli_query($con, $dup);
        if(mysqli_num_rows($result) >0){
            header("location: signup2.html");
}
else{
$q="insert into signup (NAME,USERNAME,PASSWORD)
VALUES('$NAME','$USERNAME','$PASSWORD')";
$r=mysqli_query($con,$q);
}
if ($r)
{
	
	 header("location: signup3.html");
}


?>