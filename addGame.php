<?php
include "include/Connect.php";
include './upload.php'; //vid icon 
$btn=false;
$UPname= '';  
$Desc='';
$Pic='';
$Video='';
$Type='';
$vURL='';

if(isset($_GET['update'])){
    $btn=true;
    $SQL="SELECT  * FROM game WHERE GameID='".$_GET['id']."' ;";
    $Resultt= mysqli_query( $Connect, $SQL);

    while($row= mysqli_fetch_assoc($Resultt)){
        $UPname= $row["Name"];  
        $Desc=$row["Description"];
        $Pic=$row["Picture"];
        $Video=$row['StoryVideo'];
        $Type=$row['Type'];
        $vURL=$row['VideoURL'];
    }
}

session_start();
$n='';
 if(isset($_SESSION["nameo"])){
    $n=$_SESSION["nameo"];
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
		
		<title><?php if($btn){echo 'Update ' ;} else{ echo 'Add ' ;}?>Game</title>
		
		<!-- Bootstrap core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
		
		<!-- Additional CSS Files -->
		<link rel="stylesheet" href="assets/css/fontawesome.css">
		<link rel="stylesheet" href="assets/css/templatemo-digimedia-v1.css">
		<link rel="stylesheet" href="assets/css/animated.css">
		<link rel="stylesheet" href="assets/css/owl.css">
		
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
							<a href="Admin.php?n=<?php echo $n ;?>" class="logo" id="OB">
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
								<li class="scroll-to-section"><a href="Admin.php?in=y&n=<?php echo $n ;?>#top" class="active">Home</a></li>
								<li class="scroll-to-section"><a href="Admin.php?in=y&n=<?php echo $n ;?>#about">Statics</a></li>
								<li class="scroll-to-section"><a href="Admin.php?in=y&n=<?php echo $n ;?>#free-quote">Tools</a></li>
								<li class="scroll-to-section"><a href="Admin.php?in=y&n=<?php echo $n ;?>#portfolio">You Games</a></li>
								<li class="scroll-to-section"><a href="Games list.php?in=y&n=<?php echo $n ;?>">Games</a></li>
								<li class="scroll-to-section"><a href="Admin.php?in=y&n=<?php echo $n ;?>#contact">Contact</a></li>
								<li class="scroll-to-section"><div class="border-first-button"><a href="LogOut.php">Log out</a></div></li> 
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
		
		
		<br><br><br>
		
		<div id="contact" class="contact-us section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
							<h6><?php if($btn){echo 'Update ' ;} else{ echo 'Add ' ;}?>Game</h6>
							<h4><?php if($btn){echo 'Update game in ' ;} else{ echo 'Add game to ' ;}?><em>Gamino</em></h4>
							<div class="line-dec"></div>
						</div>
					</div>
					<div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                                            
						<form enctype="multipart/form-data" id="contact" action="" method="POST">
							<div id="box" class="row">
								<div class="fill-form">
									<div id="row" class="row">
                                                                            <div class="col-lg-12">
										<fieldset>
											<div> 
                                                                                        <?php
                                                                                            if($statusMsg){
                                                                                        ?>
                                                                                                <p id='Success' style="margin-bottom: 50px;"><?php echo $statusMsg?></p> 
                                                                                        <?php 
                                                                                            } 
                                                                                        ?>
                                                                                        </div>
										</fieldset>
                                                                            </div>
                                                                            <br>
                                                                            <br>
                                                                            <div class="col-lg-4" > <!-- style="right: 53%;" -->
                                                                                <label id="PicLabel" for="pic" > 
                                                                                    <div id="photo" class="info-post">
                                                                                        <div class="icon">
                                                                                            <img src="assets/images/upload pic.png" alt="">
                                                                                            <input class="file" id="pic" type="file" value="<?php echo $Pic ?>" name="photo" >
                                                                                            <a >Picture</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </label>
                                                                                <br> <br>
                                                                                <label id="VideoLabel" for="video" >
                                                                                    <div class="info-post">
                                                                                        <div class="icon">
                                                                                            <img src="assets/images/video.png" alt="">
                                                                                            <input class="file" id="video" type="file" value="<?php echo $Video; ?>" name="video"  >
                                                                                            <a >Game Trailer</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
									</div>
									<div class="col-lg-6">
                                                                            <fieldset>
                                                                                <p style="position: relative; right: 100%; font-size: 10.9px;">If there's not video file then please put the URL</p>
                                                                                <input  style="background-color: white; margin-top: 0px;" type="text" name="GameStory" placeholder="The game story URL" value="<?php echo $vURL ?>" autocomplete="on">
                                                                            </fieldset>
										
                                                                            <fieldset>
                                                                                <input  style="background-color: white;" id="name" type="text" name="GName" placeholder="Name" value="<?php echo $UPname ?>" autocomplete="on" required>
                                                                            </fieldset>
										
                                                                            <fieldset>
                                                                                <input  style="background-color: white; " type="text" name="GameType" placeholder="Type of the game" value="<?php echo $Type ?>" autocomplete="on" required>
                                                                            </fieldset>
									</div>
									<div class="col-lg-6">
										<fieldset>
											<textarea name="message" style="width: 9000px; background-color: white;" type="text" class="form-control"rows="100" id="message" placeholder="The Description of the game" required=""><?php echo $Desc ?></textarea>  
										</fieldset>
									</div>
									<div class="col-lg-12">
										<fieldset>
                                                                                        <button type="submit" name="<?php if($btn){echo 'update' ;} else{ echo 'submit' ;}?>" id="AddButton" class="main-button "><?php if($btn){echo 'Update' ;} else{ echo 'Add' ;}?></button> 
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
			
			<style>
				
				footer .social_icon, 
				footer .menu {
				position: relative;
				display: flex;
				justify-content: center;
				align-items: center;
				margin: 10px 0;
				flex-wrap: wrap;
				}
				
				footer .social_icon li,
				footer .menu li {
				list-style: none;
				}
				
				footer .social_icon li a {
				font-size: 2em;
				color: white;
				margin: 0 10px;
				display: inline-block;
				transition: 0.5s;
				}
				
				.social .twi,
				.social_icon .twi {
				width: 50px;
				height: 50px;
				}
				
				.social_icon img,
				.social img {
				width: 40px;
				height: 40px;
				}
				
				footer .social_icon li a:hover {
				transform: translateY(-10px);
				}
				
				footer .menu li a {
				font-size: 1.3em;
				color: white;
				margin: 0 10px;
				display: inline-block;
				text-decoration: none;
				opacity: 1;
				}
				
				footer .menu li a:hover {
				opacity: 0.80;
				}
				
				footer p {
				text-align: center;
				color: white;
				margin-top: 15px;
				margin-bottom: 10px;
				font-size: 0.9em;
				margin-left: 40px;
				}
				
				
				/* --------------------------*/ 
				footer {
				background-image: url(assets2/images/footer-bg.jpg);
				background-position: center center;
				background-repeat: no-repeat;
				background-size: cover;
				margin-top: 130px;
				position: relative;
				width: 100%;
				min-height: 100px;
				padding: 20px 50px;
				display: flex;
				justify-content: center;
				align-items: center;
				flex-direction: column;
				}
				
				footer p {
				text-align: center;
				margin: 20px 0px;
				color: #fff;
				text-align: center;
				color: white;
				margin-top: 15px;
				margin-bottom: 10px;
				font-size: 0.9em;
				margin-left: 40px;
				}
				
				footer p a {
				color: #fff;
				transition: all .5s;
				}
				
			</style>
		</footer>
		
		
		<!-- Scripts -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="assets/js/owl-carousel.js"></script>
		<script src="assets/js/animation.js"></script>
		<script src="assets/js/imagesloaded.js"></script>
		<script src="assets/js/custom.js"></script>
                    
	</body>
</html>																																										