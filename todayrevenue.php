<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>EARNINGS</title>
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
					<a href="index.php"><img src="images/lololo.png" title="logo" alt="Home" /></a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="doctors1.php">doctors</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="services.php">services</a></li>
						
                        <li class="active"><a href="Login.php"><?php echo   $_SESSION["USERNAME"] ; ?></a></li>
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





$query1="select DIAGNOSES , PAYMENT from accounts where DATE='$date'";

$result = mysqli_query($con, $query1);

if($row = mysqli_fetch_row($result)>0 )
{
	mysqli_data_seek($result,0);
	
	echo"
  <table  style=width:100% >
  <tr>
    <th>Diagnoses</th>
    <th>Payment</th>
   
	
  </tr>";
	
while($row = mysqli_fetch_assoc($result)  ) {

echo "<tr><td>".$row["DIAGNOSES"]."</td><td>".$row["PAYMENT"]."</td></tr>";


   
}

echo "</table>";
}
else 
{
 header("location: signup2.html");

}
$query2="select EXPENSE , PRICE from expense where DATE='$date'";

$result2 = mysqli_query($con, $query2);

if($row = mysqli_fetch_row($result2)>0 )
{
	mysqli_data_seek($result2,0);
	
	echo"
  <table  style=width:100% >
  <tr>
    <th>Expense</th>
    <th>Price</th>
   
	
  </tr>";
	
while($row = mysqli_fetch_assoc($result2)  ) {

echo "<tr><td>".$row["EXPENSE"]."</td><td>".$row["PRICE"]."</td></tr>";


   
}
echo "</table>";
}
else 
{
 header("location: signup2.html");

}

$sql = "select sum(PRICE) from expense where DATE='$date' ";
$q1 = mysqli_query($con,$sql);
$row = mysqli_fetch_array($q1);

echo '<h4> TOTAL EXPENSE OF THE DAY</h4> ' . $row[0];



$sql = "select sum(PAYMENT) from accounts where DATE='$date'";
$q = mysqli_query($con,$sql);
$row1 = mysqli_fetch_array($q);


echo '<h4> TOTAL EARNINGS OF THE DAY</h4> ' . $row1[0];


$revenue=$row1[0]-$row[0];
if($revenue<0)
{
echo '<h4> YOU ARE IN LOSS</h4> ' . $revenue;	
}
else
{
	echo '<h4> YOU ARE IN PROFIT</h4> ' . $revenue;
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
						<li><a href="index.php">Home</a></li>
						<li><a href="doctors1.php">doctors</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="services.php">services</a></li>
						
                        <li><a href="Login.php">Login</a></li>
					</ul>
		   	</div>
		   	<div class="footer-right">
		   		<p>BMC | Design By Ali & Ibtihaj</a></p>
		   	</div>
		   	<div class="clear"> </div>
		   </div>
		   </div>
		<!--end-wrap-->
	</body>
</html>

