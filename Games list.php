<?php  

include "include/Connect.php";

$SQL="SELECT GameID, Name, Picture FROM game ;";
$Result= mysqli_query( $Connect, $SQL);

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
		
		<title>game list</title>
		
		<!-- Bootstrap core CSS -->
		<link href="vendor2/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
		
		<!-- Additional CSS Files -->
		<link rel="stylesheet" href="assets2/css/fontawesome.css">
		<link rel="stylesheet" href="assets2/css/templatemo-digimedia-v1.css">
		<link rel="stylesheet" href="assets2/css/animated.css">
		<link rel="stylesheet" href="assets2/css/owl.css">
		
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
                                                        <?php
							if(isset($_GET['update']) || isset($_GET['in']) || $n){
                                                        ?>
                                                        <ul class="nav">
								<li class="scroll-to-section"><a href="Admin.php?in=y&n=<?php echo $n ;?>#top" class="active">Home</a></li>
								<li class="scroll-to-section"><a href="Admin.php?in=y&n=<?php echo $n ;?>#about">Statics</a></li>
								<li class="scroll-to-section"><a href="Admin.php?in=y&n=<?php echo $n ;?>#free-quote">Tools</a></li>
								<li class="scroll-to-section"><a href="Admin.php?in=y&n=<?php echo $n ;?>#portfolio">You Games</a></li>
								<li class="scroll-to-section"><a href="Games list.php?in=y&n=<?php echo $n ;?>">Games</a></li>
								<li class="scroll-to-section"><a href="Admin.php?in=y&n=<?php echo $n ;?>#contact">Contact</a></li>
								<li class="scroll-to-section"><div class="border-first-button"><a href="LogOut.php">Log out</a></div></li> 
							</ul>
                                                        <?php
                                                        }
                                                        else{
                                                        ?>
                                                        
                                                        <ul class="nav">
								<li class="scroll-to-section"><a href="index.php#top" class="active">Home</a></li>
								<li class="scroll-to-section"><a href="index.php#about">About</a></li>
								<li class="scroll-to-section"><a href="index.php#services">Services</a></li>
								<li class="scroll-to-section"><a href="index.php#blog">Recent Games</a></li>
								<li class="scroll-to-section"><a href="Games list.php">Games</a></li>
								<li class="scroll-to-section"><a href="index.php#contact">Contact</a></li> 
								<li class="scroll-to-section"><div class="border-first-button"><a href="log in.php">log in</a></div></li> 
							</ul>
							<?php
                                                        }
                                                        ?>
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
		
		<div class="intro-banner">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 style="color: #8267e2;">THE GAMES LIST</h1>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="demos" id="demos">
			<div class="container">
				<div class="row">
                                    <?php
                                    if(isset($_GET['search'])){ 
                                        $Gname = $_GET['name'];
                                        $SGname = str_replace(" ","' or '",$Gname);
                                        $Gname = str_replace(" ","%' OR Name LIKE '%",$Gname);
                                        $SQL55="SELECT GameID, Name, Picture FROM game WHERE Name LIKE '%$Gname%';";
                                        $Result55= mysqli_query( $Connect, $SQL55);
                                        if ($Result55->num_rows > 0){
                                            echo"<h5 style=\"margin-bottom: 100px;width: 100vw; color: #9e9e9e; right: 90%;margin-left: 5vw;\" >you're looking for games containe '".$SGname."'</h5>";
                                            while($row55=mysqli_fetch_assoc($Result55)){
                                                $linkS = 'game post.php?id='.$row55['GameID'];
                                    ?>
                                        <div class="col-lg-4">
                                            <div class="demo-item" style="margin-bottom: 30px;">
                                                <a href="<?php echo $linkS ;?>"><img src="<?php echo $row55['Picture'] ?>" alt="" style="width: 295.984px; height: 295.984px;"></a>
                                                <h4 style="margin-top: 15px;width: 295.984px; color: #ac6fe1;"><?php echo $row55['Name'] ?></h4>
                                            </div>
                                        </div>
                                    <?php
                                            }
                                        }
                                        else{?>
                                            <div class="col-lg-12">
                                            <div class="demo-item" style="margin-bottom: 30px;">
                                                <h3 style="color: #9e9e9e; text-align: center; padding: 20px;">There is no such game</h3><!--border: solid #9e9e9e;-->
                                            </div>
                                        </div>
                                    <?php
                                        }
                                    }
                                    else{
                                        if ($Result->num_rows > 0){
                                            while($row=mysqli_fetch_assoc($Result)){
                                        ?>
                                            <div class="col-lg-4">
                                                    <div class="demo-item" style="margin-bottom: 30px;">
                                                        <?php
                                                        $link = '';
                                                        if(isset($_GET['update'])){
                                                            $link = 'addGame.php?update=yes&id='.$row['GameID'];
                                                        }
                                                        elseif(isset($_GET['in'])){
                                                            $link = 'game post.php?in=yes&id='.$row['GameID'];
                                                        }
                                                        else{
                                                            $link = 'game post.php?id='.$row['GameID'];
                                                        }
                                                        ?>
                                                            <a href="<?php echo$link ;?>"><img src="<?php echo $row['Picture'] ?>" alt="" style="width: 295.984px; height: 295.984px;"></a>
                                                            <h4 style="margin-top: 15px;width: 295.984px; color: #ac6fe1;"><?php echo $row['Name'] ?></h4>
                                                    </div>
                                            </div>
                                    <?php
                                            }
                                        }
                                    }
                                    ?>
					
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
		
	</body>
	
</html>
