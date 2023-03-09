<?php  
include "include/Connect.php";
if (!isset($_GET['id'])) {
	header('Location: index.php');
}
$id = $_GET['id'];
$sql="SELECT * FROM game where GameID = $id;";
$result=$Connect->query($sql); 
if ($result->num_rows > 0){
   $row=mysqli_fetch_assoc($result);
}
else{
   header('Location: index.php');
}

$sql2="SELECT * FROM review where GameID = $id;";
$result2=$Connect->query($sql2); 
$result3=$Connect->query($sql2);
$row2=mysqli_fetch_assoc($result2);
 

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
		
		<title>Gamnio</title>
		
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
							if(isset($_GET['in']) || $n){
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
		
		<div id="blog" class="blog">
			<div class="container">
				<div class="row">
					
					<div class="col-lg-12 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" >
						<div class="blog-post" >
							<div class="thumb">
								<a><img id="srcID" src="<?php echo $row['Picture'] ?>" alt="" ></a>
							</div>
							<div class="down-content">
								<span class="category"><?php echo $row['Type']; ?></span>
								<span class="date"><?php echo $row['AddTime']; ?></span>
								<a ><h4 id="h4ID"><?php echo $row['Name']; ?></h4></a>
								<p><?php echo $row['Description']?></p>
								<!--span class="author"><img src="assets2/images/author-post.jpg" alt="">By: Andrea Mentuzi</span-->
							</div>
						</div>
					</div>
					
					<div id="contact" class="contact-us section">
						<div class="container">
							<div class="row">
								<div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
									<div class="section-heading">
										<h6> </h6>
										<h4><em>Game Trailer </em></h4>
										<div class="line-dec"></div>
									</div>
								</div> 
								<div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
									<form id="contact" action="" method="post">
										<div class="row">
											<div class="col-lg-12">
												<div class="fill-form" style="height: 75vh; padding: 0px 0px 0px 0px;">
													<div class="row" id="StoryVid" style="width: 90%;height: 90%; margin: 80px auto;">
                                                                                                            <?php if(!$row['StoryVideo']&& !$row['VideoURL']){ ?>
                                                                                                             <fieldset style="position: relative; text-align: center; margin: auto;"> There is no game story video for this Game! </fieldset>   
                                                                                                            <?php
                                                                                                            }else{
                                                                                                            ?>
                                                                                                            <iframe src="<?php if($row['VideoURL']){echo $row['VideoURL'];} else if($row['StoryVideo']){echo $row['StoryVideo'];} ?>" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write;
														encrypted-media; gyroscope; picture-in-picture" style="position: relative; height: auto;" allowfullscreen></iframe> 
                                                                                                            <?php } ?>
                                                                                                        </div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					
					
					
					<!--  ********************************* -->
					
					
					<div id="contact" class="contact-us section">
						<div class="container">
							<div class="row">
								<div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
									<div class="section-heading">
										<h6> </h6>
										<h4><em>Reviews</em></h4>   <!--?php echo mysqli_num_rows( $result2 ); ?-->
										<div class="line-dec"></div>
									</div>
								</div> 
								<div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
									<form id="contact" action="" method="post">
										<div class="row">
											
											<div class="col-lg-7">
												<div class="col-12 pb-4" style="margin-top: 75px;">
													<!-- <h4 style="font-style: normal; color: #726ae3;margin: 30px auto;">Comments</h4> -->
                                                                                                        <?php if($row2['revNum'] == 0){ ?>
                                                                                                            <h4 style="padding-top: 25%;"> There is no reviews yet!</h4>  
                                                                                                            <br>
                                                                                                            <p style="text-align: center;"> Be the first one and post your review.. </p>   
                                                                                                            <?php
                                                                                                            }else{
                                                                                                                if ($result3->num_rows > 0){
                                                                                                                    while ($row3=mysqli_fetch_assoc($result3)){
                                                                                                            ?>
													<div class="comment mt-4 text-justify float-left" style="text-align: left; padding-left: 30px;"> <img src="assets/images/author-post.jpg" alt="" class="rounded-circle" width="40" height="40" style="width: 40px; display: inline-block;">
														<h4 style="display: inline;margin-left: 10px;"><?php echo $row3['ReviewerName'] ?></h4> <span>- <?php echo $row3['date'] ?></span> <br>
														<p style="text-align: left;padding-left: 55px;"> <?php echo $row3['Content'] ?></p>
													</div>
                                                                                                        <?php
                                                                                                                    }
                                                                                                                }
                                                                                                            }?>
													
												</div>
											</div>
											<div class="col-lg-5">
												<div class="fill-form">
													<div class="row">
														
														<div class="col-lg-12">
															<fieldset>
																<input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
															</fieldset>
															<fieldset>
																<input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
															</fieldset>
															
														</div>
														<div class="col-lg-12">
															<fieldset>
																<textarea name="message" type="text" class="form-control" id="message" placeholder="Your review" required=""></textarea>  
															</fieldset>
														</div>
														<div class="col-lg-12">
															<fieldset>
																<button type="submit" name="submit-btn" id="form-submit" class="main-button ">Post your review</button>
															</fieldset>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
                                                                    <?php 
                                                                        if (isset($_POST["submit-btn"])) {
                                                                            $name=$_POST["name"];
                                                                            $email=$_POST["email"];
                                                                            $message=$_POST["message"];
                                                                            $message=str_replace("'","''",$message);
                                                                            $revNum=mysqli_num_rows($result2);
                                                                            $revNum++;
                                                                            $date=date("d F Y");
                                                                            $sqlIN = "INSERT INTO review (GameID, revNum, ReviewerName, email, date, Content) VALUES ('$id','$revNum','$name','$email','$date','$message');";
                                                                            
                                                                            if (mysqli_query($Connect, $sqlIN)) {
                                                                                $sql5="UPDATE review SET revNum=$revNum WHERE GameID=$id;";
                                                                                $result5=$Connect->query($sql5);
                                                                                header('Location:game post.php?id='.$id);
                                                                                exit;
                                                                            }
                                                                        }
                                                                    ?>
								</div>
							</div>
						</div>
					</div>
					
					
					
					<div class="col-lg-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" >
						
						<div class="blog-posts" style="padding-top: 40px;">
							<div class="row">
								<div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
									<div class="section-heading">
										<h6> </h6>
										<h4><em>More Posts</em></h4>
										<div class="line-dec"></div>
									</div>
								</div>
                                                            <?php
                                                            $type=$row['Type'];
                                                            $sql8="SELECT * FROM game where Type = '$type' AND GameID <>$id LIMIT 3;";
                                                            $result8=$Connect->query($sql8);
                                                            if ($result8->num_rows > 0){
                                                                while ($row8 = mysqli_fetch_assoc($result8)){
                                                                 ?>
                                                                <div class="col-lg-12" style="padding: 12px;">
									<div class="post-item">
										<div class="thumb">
											<a href="game post.php<?php echo'?id='.$row8['GameID'] ?>"><img src="<?php echo $row8['Picture'] ?>" alt="" style="height: 230px; width: 230px;"></a>
										</div>
										<div class="right-content">
											<span class="category"><?php echo $row8['Type']?></span>
											<span class="date"><?php echo $row8['AddTime']?></span>
											<a><h4><?php echo $row8['Name']?></h4></a>
											<p style="max-height: 60px;text-overflow: ellipsis; word-wrap: break-word; overflow: hidden;"><?php echo $row8['Description']?></p>
										</div>
									</div>
								</div>
                                                                <?php   
                                                                }
                                                            }
                                                            if($result8->num_rows < 3){
                                                                    $lim=mysqli_num_rows( $result8 );
                                                                    $lim = 3 - $lim;
                                                                    $sql9="SELECT * FROM game where GameID <>$id AND Type<>'$type' ORDER BY RAND() LIMIT $lim;";
                                                                    $result9=$Connect->query($sql9);
                                                                    while($row9 = mysqli_fetch_assoc($result9)){ ?>
                                                                      <div class="col-lg-12" style="padding: 12px;">
									<div class="post-item">
                                                                            <div class="thumb">
                                                                                <a href="game post.php<?php echo'?id='.$row9['GameID'] ?>"><img src="<?php echo $row9['Picture'] ?>" alt="" style="height: 230px; width: 230px;"></a>
                                                                            </div>
                                                                            <div class="right-content">
                                                                                <span class="category"><?php echo $row9['Type']?></span>
                                                                                <span class="date"><?php echo $row9['AddTime']?></span>
                                                                                <a><h4><?php echo $row9['Name']?></h4></a>
                                                                                <p style="max-height: 60px;text-overflow: ellipsis; word-wrap: break-word; overflow: hidden;"><?php echo $row9['Description']?></p>
                                                                            </div>
									</div>
								</div> 
                                                                <?php
                                                                    }
                                                                }
                                                           ?>
								
							</div>
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
			
        </body>
</html>																						