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
			td{
				font-family: 'Ropa Sans', sans-serif;
				background-color:#3391E7;
				color: #fff;
				text-transform: uppercase;
				padding: 10px;
				display: block;
			  }
			  .error {color: #FF0000;}
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
				  <table >
                  <tr>
                  	<td>Appointments</td>
                    <td style="background-color:#FFFFFF; color: rgba(135,135,135,1.00)"><a href ="appointment4.php">Patient Appointments</a></td>
                   
                  </tr>
                  </table>
				</div>				
				<div class="col span_2_of_3">
                	

<h2>WELCOME LOGIN USER<h2>
<?php echo   $_SESSION["USERNAME"] ; ?>

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
						<li><a href="about.php">About</a></li>
						<li><a href="services.php">services</a></li>
						<li><a href="contact.html">contact</a></li>
                        <li><a href="Login.html">Login</a></li>
					</ul>
		   	</div>
		   	<div class="footer-right">
		   		<p>BMC | Design By ALI AND IBTIHAJ</a></p>
		   	</div>
		   	<div class="clear"> </div>
		   </div>
		   </div>
		<!--end-wrap-->
	</body>
</html>

