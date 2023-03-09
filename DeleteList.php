<?php  
include "include/Connect.php";
$SQL="SELECT GameID , Name ,Type , Description , Picture FROM game ;";
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
                <style>
                    .DeleteLabel{
                    position: absolute;

                    left: 85%;
                    bottom: 2%;
                    z-index: 6;
                    padding: 5px;
                    border-radius: 100px;
                    }

                    #Success{
                       text-align: center;
                      color: #3c763d;
                      background-color: #dff0d8;
                      display: none;
                      border-color: #d6e9c6;
                      padding: 15px;
                      margin-bottom: 20px;
                      border: 1px solid transparent;
                      border-radius: 4px; 
                      position: relative;
                      left: 15%;
                      width: 70%;
                    }
                </style>
                
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script>
              $(function () {
                    $('div.DeleteLabel').click(function () {
                //$(function del(linkDel) {
                    name = $(this).attr("data-name");
                    ID = $(this).attr("data-id");
                    con = confirm('Are you sure you want to delete '+ name +'?');

                    if(con){
                         query="id="+ID+"&Name="+name;
                         $.ajax({
                            type: "GET",
                            url : "delete.php",
                            data : query,
                            success : function (data) {
                                $("#Success").show();
                                $('#Success').append(data);
                                window.location.href= "DeleteList.php#OB";
                                setInterval('location.reload()', 3000);
                            }
                        });
                    }
                });
                });
                //});
                </script>
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
		                                                             
		<div class="intro-banner">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 style="color: #8267e2;">THE GAMES LIST</h1>
                                                <p id='Success'></p>  
                                                      
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="demos" id="demos">
			<div class="container">
				<div class="row">
                                    <?php
                                    if ($Result->num_rows > 0){
                                      while($row = mysqli_fetch_assoc($Result) ){
                                          ?>
                                          <div class="col-lg-4">
                                                  <div class="demo-item" style="margin-bottom: 30px;">
                                                      <div id="item2" class="item">
                                                          <div class="portfolio-item">
                                                              <div class="thumb">
                                                                  <img height='400' width='200' src='<?php echo $row['Picture']?>' alt=''> 
                                                              </div>
                                                              <div class="down-content">
                                                                  <h4><?php echo $row["Name"]?></h4>
                                                                  <span><?php echo $row['Type']?></span>
                                                                  <div class='DeleteLabel'  data-name="<?php echo $row["Name"]?>" data-id="<?php echo $row["GameID"]?>"> 
                                                                      <img height='30' width='30' src='assets/images/trash.png'>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                          </div>
                                   <?php
                                      }
                                    }
                                    else{?>
                                        <div class="col-lg-12">
                                            <h4> There is no games yet!</h4>  <br>
                                            <p style="text-align: center;"> Add a new game you can add it from here <a href="addGame.php">Add Game</a> .</p>
                                        </div>
                                    <?php
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
