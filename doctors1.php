<!DOCTYPE HTML>
<html>
	<head>
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
		<!--Favicon<!-->
			<link rel="icon" href="images/faviconIbtihaj.png" sizes="16x16">
		<!--End of Favicon<!-->
		
		<title>DOCTORS</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="viewport" content="width=320, initial-scale=0.75, minimum-scale=0.75, maximum-scale=1.0">
        <link rel="icon" type="image/png" href="img/favicon.png" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="css/main.css" rel="stylesheet" type="text/css" />
        
        
        <script type="text/javascript" src='js/jquery-1.8.2.min.js'></script>
        <!--[if lt IE 9]>
            <link href="css/ie8.css" rel="stylesheet" type="text/css" />
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
          <![endif]-->
        <script type="text/javascript" src='js/bootstrap.js'></script>
        <script type="text/javascript" src='js/jquery.placeholder.min.js'></script>
        <script type="text/javascript" src='js/main.js'></script>
       
		<style>
		h1 {
    
    font-family: verdana;
    
}
h3 {
color: #3391E7;
    
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
						<li class="active" ><a href="doctors1.php">Doctor</a></li>
						<li><a href="services.php">services</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="contact.html">contact</a></li>
						<li><a href="Login.php">login</a></li>
						
					</ul>					
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		    <div class="clear"> </div>
		   <div class="wrap">
 <div class="image-slider">
						<!-- Slideshow 1 -->
					    <ul class="rslides" id="slider1">
					     
						    <li><img src="img/WP_20160507_13_00_13_Rich (4).jpg" alt=""></li>
					     
					    </ul>
						 <!-- Slideshow 2 -->
					</div>
        <section id="main" class="normalPage">
            <section class="row center">
                <section class="span25 main-wrapper">
                    
                    <div class="cornerShadow left"></div>
                    <div class="cornerShadow right"></div>
                    <section class="content span16">
                        <section class="top">
                            <h3>MANAGING DIRECTORS</h3>
                            
                        </section>
                        
						 <ul class="doctors list">
                            <li>
                                <figure>
                                    <img src="img/DSC02013.JPG" alt="" />
                                    <div class="overlay"></div>
                                </figure>
                                <div class="info">
                                    <h1>DR HAKIMUDDIN </h1>
                                    <h3>M.B.B.S (Pb) R.M.P</h3>
									<h3>D.T.M & H LONDON </h3>
									
                                   
                                </div>
                            </li>
							
							 <li>
                                <figure>
                                    <img src="img/WP_20160507_13_00_13_Rich (3).jpg" alt="" />
                                    <div class="overlay"></div>
                                </figure>
                                <div class="info">
                                    <h1>DR SHABBAR HAKIMUDDIN</h1>
                                   <h3>M.B.B.S (Pb) R.M.P</h3>
								   <h3>M.C.P.S FAMILY MEDICINE</h3>
								   <h2>+923335115199</h2>
								   <h1>TIMINGS</h1>
								   <h3>2:00 to 8:00 PM</h3>
                                   
                                </div>
                            </li>
							 <li>
                                <figure>
                                    <img src="img/IMG-20160507-WA0001.jpg" alt="" />
                                    <div class="overlay"></div>
                                </figure>
                                <div class="info">
                                    <h1>DR SHABBIR HAKIMUDDIN</h1>
                                     <h3>M.B.B.S (Pb) R.M.P</h3>
								   <h3>M.C.P.S RADIOLOGY</h3>
                                   <h2>+923215070092</h2>
								   <h1>TIMINGS</h1>
								   <h3>10:00 AM to 1:00 PM & 9:00 to 11:00 PM</h3>
                                   
                                </div>
                            </li>
							<h3> OTHER DOCTORS </h3>
						<?php



$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$specialization=$_POST['Spcl'];
$timings=$_POST['timing'];
$docid=$_POST['DOCID'];
$contact=$_POST['Pnumber'];
$d='DOCTORS NAME';
$c='CONTACT';
$e='EMAIL';
$s='SPECIALIZATION';
$t='TIMINGS';


// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$host='localhost';
$user='burhanim_burhani';
$pass='champu5221';
$db='burhanim_bmc';
$con=mysqli_connect($host,$user,$pass,$db);

$query = "select * from doctors";



$result = mysqli_query($con, $query);
if($row = mysqli_fetch_row($result)>0)
{
	mysqli_data_seek($result,0);
	
 
	
while($row = mysqli_fetch_assoc($result)) {


 echo "<li>";
                              
                                 echo' <div class= "info">';
								 
                                   echo' <h1>'.$row["name"]. '</h1>';
								    
								   echo' <h2>'.$row["specialization"]. '</h2>';
								    echo' <h2>'.$c. '</h2>';
                                     echo' <h3>'.$row["contact"]. '</h3>';
									 
									  
									   echo' <h2>'.$t. '</h2>';
									   echo' <h3>'.$row["timings"]. '</h3>';
                                   
                                echo'</div>';
                           echo" </li> " ;
}

}
else 
{
echo "DOCTOR DETAILS NOT ADDED";

}
mysqli_close($con); // Closing Connection


?>
						
						
						
						
                           
                        </ul>
                        
                        
                        
                    </section>
                    <aside class="span8">
                        
                       
                       
                              <section class="span8 infoBox">
                            <h1>Medical Services</h1>
                            <ul>
                                <li><a href="services.php" title="X-RAY"><i class="bullet"></i> X-RAY</a></li>
                                <li><a href="services.php" title="ULTRASOUND"><i class="bullet"></i> ULTRASOUND</a></li>
                                <li><a href="services.php" title="ENDOSCOPY"><i class="bullet"></i> ENDOSCOPY</a></li>
                                <li><a href="services.php" title="OPERATION THEATER"><i class="bullet"></i>OPERATION THEATER </a></li>
                                <li><a href="services.php" title="E.C.G"><i class="bullet"></i> E.C.G</a></li>
                                <li><a href="services.php" title="LABORATORY"><i class="bullet"></i> LABORATORY</a></li>
                                <li><a href="services.php" title="PHYSIOTHERAPY"><i class="bullet"></i> PHYSIOTHERAPY</a></li>
                            </ul>
                            <a href="services.php" title="More" class="more">More Services <i></i></a>
                        </section>
                       
                      
                    </aside>
                  
                 
                </section>
            </section>
        </section>
		   </div>
		   <div class="clear"> </div>
		   <div class="footer">
		   	 <div class="wrap">
		   	<div class="footer-left">
		   			<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="services.php">services</a></li>
						<li><a href="doctors1.php">Doctors</a></li>
						<li><a href="contact.html">contact</a></li>
					</ul>
		   	</div>
		   	<div class="footer-right">
		   		<p>BMC | Design By ALI & IBTIHAJ</a></p>
		   	</div>
		   	<div class="clear"> </div>
		   </div>
		   </div>
		<!--end-wrap-->
	</body>
</html>