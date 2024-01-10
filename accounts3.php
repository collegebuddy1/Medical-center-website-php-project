<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Login</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href="http://fonts.googleapis.com/css?family=Ropa+Sans" rel="stylesheet" type="text/css">
        <style>
			
			  

table, td {
    border: 2px solid black;
	border-collapse: collapse;
	
}
 th{
    border: 2px solid black;
	border-collapse: collapse;
	background-color:#3391E7;
}

			  
	    </style>
	</head>
	<body>
		<!--start-wrap-->
		
			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
					<a href="index.html"><img src="images/lololo.png" title="logo" alt="Home" /></a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="services.html">services</a></li>
						<li><a href="contact.html">contact</a></li>
                        <li class="active"><a href="Login.html"><?php echo   $_SESSION["USERNAME"] ; ?></a></li>
                        <li><a href="logout.php">logout</a></li>
					</ul>					
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		    <div class="clear"> </div>
		   <div class="wrap">
		   	<div class="contact">
		   	<div class="section group">				
				<div class="col span_1_of_3">
				 
				</div>				
				<div class="col span_2_of_3">
                	<div id="ADDDOC">
                    <h2>Account Details</h2>
                    <br><br>
                    	<!DOCTYPE HTML> 


<?php



if (isset($_POST['submit'])) {
 
echo "Username or Password is invalid";
}



$date=$_POST['date'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$host='localhost';
$user='burhanim_burhani';
$pass='champu5221';
$db='burhanim_bmc';
$con=mysqli_connect($host,$user,$pass,$db);

$query = "select * from accounts where DATE='$date'";



$result = mysqli_query($con, $query);
if($row = mysqli_fetch_row($result)>0)
{
	mysqli_data_seek($result,0);
	echo"
  <table  style=width:100% >
  <tr>
    <th>Patient-id</th>
    <th>Doctors-Name</th>
    <th>Patients-Name</th>
	<th>Phone-Number</th>
	<th>Address</th>
    <th>Diagnoses</th>
	<th>Payment</th>
	<th>Date</th>
	
  </tr>";
	
while($row = mysqli_fetch_assoc($result)) {

echo "<tr><td>".$row["patientid"]."</td><td>".$row["DOCTORSNAME"]."</td><td>".$row["PATIENTNAME"]."</td><td>".$row["phonenumber"]."</td><td>".$row["address"]."</td><td>".$row["DIAGNOSES"]."</td><td>".$row["PAYMENT"]."</td><td>".$row["DATE"]."</td></tr>";


   
}
echo "</table>";
}
else 
{
echo"DATE NOT WRITTEN CORRECTLY";

}
mysqli_close($con); // Closing Connection


?>
<br>
<br>
<br>
<br>
 <a href="loginprofile.php"><h3>BACK TO LOGIN PAGE<h3></a>

                    </div>
  				</div>				
			  </div>
			  	 <div class="clear"> </div>
	</div>
	<div class="clear"> </div>
			</div>
	      <div class="clear"> </div>
		   <div class="footer">
		   	 <div class="wrap">
		   	<div class="footer-left">
		   			<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="services.html">services</a></li>
						<li><a href="contact.html">contact</a></li>
                        <li><a href="Login.html">Login</a></li>
					</ul>
		   	</div>
		   	<div class="footer-right">
		   		<p>Medicare | Design By <a href="http://w3layouts.com/">W3Layouts</a></p>
		   	</div>
		   	<div class="clear"> </div>
		   </div>
		   </div>
		<!--end-wrap-->
	</body>
</html>

