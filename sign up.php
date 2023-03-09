<?php  

include "include/Connect.php";

$SQL="SELECT * FROM game ;";
$Result= mysqli_query( $Connect, $SQL);

session_start();
if(isset($_SESSION["isAdmin"])){
   header('Location:Admin.php'.$_SESSION["nameo"]);
}
?> 
<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
		
		<title>game list</title>
		
		<!-- Bootstrap core CSS -->
		<link href="vendor2/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
		
		<!-- Additional CSS Files -->
		<link rel="stylesheet" href="assets2/css/fontawesome.css">
		<link rel="stylesheet" href="assets2/css/templatemo-digimedia-v1.css">
		<link rel="stylesheet" href="assets2/css/animated.css">
		<link rel="stylesheet" href="assets2/css/owl.css">
                
                <style>
			.formTxt1{
			position:relative;
			right:350px;
			}
			.formTxt3{
			/*position:relative;*/
			right:210px;
			text-align:center;
			font-size:100%;
			font-weight: bold;
			}
			.formTxt4{
			position:relative;
			right:330px;
			
			}
			.formTxt2{
			position:relative;
			top:70%;
			left:35%;
			right:65%;
			bottom:30%;
			}
			input{
			background-color:white;
			}
			#Form1{
			position: relative;
			right: 40px;
			color: #fa65b1;
			font-size: 30px;
			}
			#S1 {
			position: relative;
			right: 600px;
			top: 20px;
			font-size: 15px;
			
			}
			#labelsign{
			
			display: none;
			}
			#sign{
			position: relative;
			top:30px;
			right: 400px;
			
			}
		</style>
	</head>
	
	<body>
		
		<!-- ***** Preloader Start ***** -->
		<div id="js-preloader" class="js-preloader">
			<div class="preloader-inner">
				<span class="dot"></span>
				<div class="dots">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
		<!-- ***** Preloader End ***** -->
		
		<!-- ***** Header Area Start ***** -->
		<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<nav class="main-nav">
							<!-- ***** Logo Start ***** -->
							<a href="index.php" class="logo" id="OB">
								<img src="assets/images/logo-v1.png" alt="">
							</a>
							<style>
								#OB {
								width: 200px;
								height: 100px;
								object-fit: none;
								object-position: center top;
								} 
							</style> 
							<!-- ***** Logo End ***** -->
							
							<!-- ***** Menu Start ***** -->
							<ul class="nav">
								<li class="scroll-to-section"><a href="index.php#top" class="active">Home</a></li>
								<li class="scroll-to-section"><a href="index.php#about">About</a></li>
								<li class="scroll-to-section"><a href="index.php#services">Services</a></li>
								<li class="scroll-to-section"><a href="index.php#blog">Recent Games</a></li>
								<li class="scroll-to-section"><a href="Games list.php">Games</a></li>
								<li class="scroll-to-section"><a href="index.php#contact">Contact</a></li> 
								<li class="scroll-to-section"><div class="border-first-button"><a href="log in.php">log in</a></div></li> 
							</ul>
							
							<a class='menu-trigger'>
								<span>Menu</span>
							</a>
							<!-- ***** Menu End ***** -->
						</nav>
					</div>
				</div>
			</div>
		</header>
		<!-- ***** Header Area End ***** -->
		
		
		<div style="height: 100vh;">
			<br><br><br>
			
			<div id="contact" class="contact-us section">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 offset-lg-3">
							<div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
								<h6>Sign up</h6>
								<h4>Welcame to <em>Gamino</em></h4>
								<div class="line-dec"></div>
							</div>
						</div>
						
						<div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                                                    <form id="contact" style=" width: 50%; margin: auto;" onsubmit='return false;' > <!-- onsubmit="moveToUserPage();return false;" -->
								<div id="box" class="row">
									<div class="fill-form">
										<div class="col-lg-12" style="margin: auto;">
											<fieldset>
												<div class="formTxt3"><label id="Form1" for="name" style="background-color: white; left: 1vw;">Please fill in the information</label></div>
												<br>
                                                                                                <p id='Success'></p>
                                                                                                <br>
                                                                                                <div class="formTxt1"></div>
												<input id="uname" type="nameu" name="nameu"  placeholder="Your first name" autocomplete="on" pattern="[A-Za-z]{3,}$" title="At least 3 letters only" required>
											<br>
												<div class="formTxt1"></div>
												<input id="name" type="name" name="name"  placeholder="Username" autocomplete="on" pattern="[A-Za-z]{3,}$" title="At least 3 letters only" required>
											<br>
												<div class="formTxt1"></div>
												<input id="email" type="email" name="email"  placeholder="Email" autocomplete="on" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>  
											<br>
												<div class="formTxt4"></div>
												<input id="password" type="password"  id="password" placeholder="Password" autocomplete="on"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
												title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required>  
											</fieldset>
										</div>
										<div class="col-lg-12">
											<fieldset>
												<button type="submit"  id="form-submit" class="main-button ">SignUp</button>
											</fieldset>
											
										</div>
									</div>
								</div>
                                                        </form>
                                                </div>
                                        </div>
				</div>
			</div>
			
                    <footer>
			<ul class="social_icon">
				<li><a href="https://www.instagram.com/" target="_blank"><img src="assets2/images/instagram.png" alt="instagram"></a></li>
				<li><a href="https://www.whatsapp.com/" target="_blank"><img src="assets2/images/whatsapp.png" alt="whatsapp"></a></li>
				<li><a href="https://twitter.com/home" target="_blank"><img class="twi" src="assets2/images/twitter.png" alt="twitter"></a></li>
			</ul>
			
			<p style="padding-right: 50px;">©2022 Gamino | Some Rights Reserved</p>
                    </footer>
			
			
			<!-- Scripts -->
			<script src="vendor/jquery/jquery.min.js"></script>
			<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/owl-carousel.js"></script>
			<script src="assets/js/animation.js"></script>
			<script src="assets/js/imagesloaded.js"></script>
			<script src="assets/js/custom.js"></script>
                        <script>
                    $('#form-submit').on("click", function () {
                        LOGname = $('#name').val();
                        LOGuname = $('#uname').val();
                        LOGpass = $('#password').val();
                        signEmail = $('#email').val();
                        $('#Success').html("");
                        
                        if(!empty(LOGname) && !empty(LOGuname) && !empty(LOGpass) && !empty(signEmail)){
                            $.post("contact.php", {Sname: LOGname, SnameU: LOGuname, Spass: LOGpass, Semail: signEmail}, 
                            function(data){
                                LOGname = $('#name').val('');
                                LOGpass = $('#password').val('');
                                signEmail = $('#email').val('');
                                if(data === 'Something went wrong'){
                                    $("#Success").show();
                                    $('#Success').append(data);
                                }
                                else{
                                    $("#Success").show();
                                    $('#Success').append(data);
                                    location.href="Admin.php?n="+LOGuname;  
                                }
                            });
                        }
                    });
                </script>

        </body>
</html>												

	
		