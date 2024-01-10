<?php
session_start();


?>
<!DOCTYPE html>


<html>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/57361961c17a21421351b454/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
	<head>
		<!--Favicon<!-->
			<link rel="icon" href="images/faviconIbtihaj.png" sizes="16x16">
		<!--End of Favicon<!-->
		<title>Login</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href="http://fonts.googleapis.com/css?family=Ropa+Sans" rel="stylesheet" type="text/css">
		<style>
		input[type=text],input[type=password] {
width:99.5%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
font-family:raleway
}
input[type=submit] {
width:100%;
background-color:#3391E7;
color:#fff;
border:2px solid #FFCB00;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px
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
					<a href="index.php"><img src="images/lololo.png" title="logo" /></a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="doctors1.php">doctors</a></li>
						<li><a href="services.php">services</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="contact.html">contact</a></li>
						<li class="active"><a href="Login.php">login</a></li>
						<li><a href="appointment3.html">Aplogin</a></li>
                        
                       
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
					<div class="contact_info"> </div>
      			
				</div>				
				<div class="col span_2_of_3">
				<div class="contact-form">
				  	<h2>Login</h2>
					    <form method="post" action="login2.php">
					    	<div>
					    	  <span><label>Username</label></span>
						    	<span><input type="text" name="USERNAME" value=""></span>
<?php
$_SESSION["USERNAME"] ;
?>
						    </div>
						    
					      <div>
						     	<span><label>Password</label></span>
						    	<span><input id="password" name="PASSWORD" placeholder="**********" type="password"></span>
						    </div>
						<div>
	   		  <span><input type="submit" name="submit" value="Login"></span>
						  </div>
                          
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
						<li><a href="doctors1.php">doctors</a></li>
						<li><a href="about.php">About</a></li>
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