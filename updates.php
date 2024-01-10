<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>UPDATES</title>
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
						<li><a href="doctors1.php">Doctors</a></li>
						<li><a href="about.php">About</a></li>
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
				  <table >
                  <tr>
                  	<td>doctor management</td>
                    <td style="background-color:#FFFFFF; color: rgba(135,135,135,1.00)"><a href ="loginprofile1.php">Add doctor</a></td>
                    <td style="background-color:#FFFFFF; color: rgba(135,135,135,1.00)"><a href ="deletedoctor.php">Delete Doctor</td>
                    
                    
             		
                    <td>patient record</td>
                    <td style="background-color:#FFFFFF; color: rgba(135,135,135,1.00)"><a href ="loginprofile2.php">Add Patient</td>
                    <td style="background-color:#FFFFFF; color: rgba(135,135,135,1.00)">Find Patient</td>
                    <td style="background-color:#FFFFFF; color: rgba(135,135,135,1.00)">Delete Patient</td>
                    
                    <td>Finance Record</td>
                    <td style="background-color:#FFFFFF; color: rgba(135,135,135,1.00)"><a href ="accounts.php"> Add Account Details</td>
                    <td style="background-color:#FFFFFF; color: rgba(135,135,135,1.00)"><a href =" expense.php">Add Expense Details</td>
                     <td style="background-color:#FFFFFF; color: rgba(135,135,135,1.00)"><a href ="accounts1.php">  Account Details</td>
                    <td style="background-color:#FFFFFF; color: rgba(135,135,135,1.00)"><a href =" seeexpense.php"> Expense Details</td>
					 <td style="background-color:#FFFFFF; color: rgba(135,135,135,1.00)"><a href =" todayrevenue1.php">  Earnings</td>
                    <td>UPDATES </td>
                    <td style="background-color:#FFFFFF; color: rgba(135,135,135,1.00)"><a href ="updates.php"> Add Update Details</td>
					<td style="background-color:#FFFFFF; color: rgba(135,135,135,1.00)"><a href ="deleteupdates.php"> DELETE Details</td>
                  </tr>
                  </table>
				</div>				
				<div class="col span_2_of_3">
                	
<form method="post" action="updates1.php"> 
 update ID:<br> <input type="text" name="updateid">
   <span class="error">* </span>
  <br><br>
   Heading:<br> <input type="text" name="heading">
   <span class="error">* </span>
  <br><br>
   Paragraph: <br><input type="text" name="paragraph">
   <span class="error">* </span>
   <br><br>  
   Date: <br> <input type="text" name="date">
   <br><br>
   <input type="submit"  > 
</form>




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
						<li><a href="doctors1.php">Doctors</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="services.php">services</a></li>
						
                        <li><a href="Login.php">Login</a></li>
					</ul>
		   	</div>
		   	<div class="footer-right">
		   		<p>BMC | Design By Ali & Ibtihaj</p>
		   	</div>
		   	<div class="clear"> </div>
		   </div>
		   </div>
		<!--end-wrap-->
	</body>
</html>

