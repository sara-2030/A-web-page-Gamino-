<?php  
include "include/Connect.php";
 $sql3="SELECT * FROM review;";
 $result3=$Connect->query($sql3);
         
 $sql4="SELECT * FROM game;";
 $result4=$Connect->query($sql4);
 
 session_start();
 if(!isset($_SESSION["isAdmin"])){
    header('Location:index.php');
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
		<style>
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
							<a href="Admin.php?n=<?php echo $_SESSION["nameo"] ;?>" class="logo" id="OB">
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
								<li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
								<li class="scroll-to-section"><a href="#about">Statics</a></li>
								<li class="scroll-to-section"><a href="#free-quote">Tools</a></li>
								<li class="scroll-to-section"><a href="#portfolio">Your Games</a></li>
								<li class="scroll-to-section"><a href="Games list.php?in=y">Games</a></li>
								<li class="scroll-to-section"><a href="#contact">Contact</a></li>
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
		
		<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
			<div class="container">
				<div class="row">
                    <!-- <h2 style="z-index: 100; font-weight: 250;">Welcome Amanda!</h2>
						<br>
					<br> -->
					<div class="col-lg-12">
						<div class="row"> 
							<div class="col-lg-6 align-self-center">
								<div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
									<div class="row">
                                        
										<div class="col-lg-12">
                                            
											<h6>Gamnio</h6>
                                                                                        <h2>Welcome <?php if(isset($_GET['n'])){ echo $_GET['n'] ;}?></h2>
											<h4>Go kill it!!</h4>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
									<img src="assets/images/slider-dec.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="about" class="about section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-6">
								<div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
									<img src="assets2/images/about-dec.png" alt="">
								</div>
							</div>
							<div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
								<div class="about-right-content">
									<div class="section-heading">
										<h6>Your Statics</h6>
										<h4>Something <em>New?</em></h4>
										<div class="line-dec"></div>
									</div>
									<p>keep an eye on your games and thier reviews.</p>
									<div class="row">
										<div class="col-lg-4 col-sm-4">
											<div class="skill-item first-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
												<div class="progress" data-percentage="90">
													<span class="progress-left">
														<span class="progress-bar"></span>
													</span>
													<span class="progress-right">
														<span class="progress-bar"></span>
													</span>
													<div class="progress-value">
														<div>
															<?php echo mysqli_num_rows( $result4 ); ?><br>
															<span>Games</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="col-lg-4 col-sm-4">
											<div class="skill-item third-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
												<div class="progress" data-percentage="80">
													<span class="progress-left">
														<span class="progress-bar"></span>
													</span>
													<span class="progress-right">
														<span class="progress-bar"></span>
													</span>
													<div class="progress-value">
														<div>
															<?php 
                                                                                                                        $revCount=0;
                                                                                                                        $sqlconut="SELECT DISTINCT GameID, revNum from review ;";
                                                                                                                        $resultcount=$Connect->query($sqlconut);
                                                                                                                        while($rowCount = mysqli_fetch_assoc($resultcount)){
                                                                                                                          $revCount += $rowCount['revNum'] ; 
                                                                                                                        }
                                                                                                                        echo $revCount; ?><br>
															<span>Review</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<div id="free-quote" class="free-quote">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 offset-lg-4">
						<div class="section-heading  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
							<h6>Choose a service</h6>
							<h4></h4>
							<div class="AdminServices">
								<div> <a href="DeleteList.php">  <img src="assets2/images/delete-vr.png" alt="">   </a> Delete</div>
								<div> <a href="Games list.php?update=up&in=y" >  <img src="assets2/images/update-vr.png" alt="">   </a> Update</div>
								<div> <a href="addGame.php">  <img src="assets2/images/add-vr.png" alt="">   </a> Add</div>
							</div>
							<style>
								.AdminServices {
								display: grid;
								gap: 1rem;
								grid-auto-flow: column;
								margin: 0 0 1rem 0;
								color: white;
								font-size: 30px;
								}
								
								.AdminServices > div {
								height: 100px;
								min-width: 10px;
								}
							</style>
							
							<!-- > <div class="line-dec"></div> -->
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
	
	
	<div id="portfolio" class="our-portfolio section">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
						<h6></h6>
						<h4>your games' <em>List</em></h4>
						<div class="line-dec"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                        <div class="row">
                                <div class="col-lg-12">
                                        <div class="loop owl-carousel">
                                            <?php
                                                if ($result4->num_rows > 0){
                                                    while ($row2 = mysqli_fetch_assoc($result4)){
                                                ?>
                                                <div class="item">
                                                        <div class="portfolio-item">
                                                                <div class="thumb" style="height: 0; padding-bottom: 100%;">
                                                                    <a href="game post.php<?php echo'?id='.$row2['GameID'].'&in=y' ?>"><img src="<?php echo $row2['Picture'] ?>" alt="" style="object-position: center;height: 100%;width: 100%;top: 0; bottom: 0; left: 0; right: 0;position: absolute;"></a>
                                                                </div>
                                                                <div class="down-content">
                                                                        <h4><?php echo $row2['Name'] ?></h4>
                                                                        <span>
                                                                            <?php echo $row2['Type'];?>
                                                                        </span>

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
		
		<div id="blog" class="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
						<div class="section-heading">
							<h6>Recent News</h6>
							<h4>Our New Games' <em>Posts</em></h4>
							<div class="line-dec"></div>
						</div>
					</div>
                                        <?php
                                            $sql="SELECT * FROM game ORDER BY GameID DESC LIMIT 4;";
                                            $result=$Connect->query($sql);
                                            if ($result->num_rows > 0){
                                                $first = true;
                                              while ($row = mysqli_fetch_assoc($result)){
                                                 if($first){
                                       ?>
					<div class="col-lg-6 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
						<div class="blog-post">
							<div class="thumb">
								<a href="game post.php<?php echo'?id='.$row['GameID'].'&in=y' ?>"><img src="<?php echo $row['Picture'] ?>" alt="" ></a>
							</div>
							<div class="down-content">
								<span class="category"><?php echo $row['Type'] ?></span>
								<span class="date"><?php echo $row['AddTime'] ?></span>
								<a ><h4><?php echo $row['Name'] ?></h4></a>
								<p style="max-height: 120px;text-overflow: ellipsis; word-wrap: break-word; overflow: hidden;"><?php echo $row['Description']?></p>
								<span class="author"><img src="" alt=""></span>
								<div class="border-first-button"><a href="game post.php<?php echo'?id='.$row['GameID'].'&in=y' ?>">See Post</a></div>
							</div>
						</div>
					</div>
                                        
					<div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
						<div class="blog-posts">
							<div class="row">
                                                            <?php
                                                                $first = false;
                                                                 }
                                                                 else{
                                                              ?>
								<div class="col-lg-12">
									<div class="post-item">
										<div class="thumb" style="margin-bottom: 30px;">
											<a href="game post.php<?php echo'?id='.$row['GameID'].'&in=y'?>"><img src="<?php echo $row['Picture']?>" alt="" style="height: 230px; width: 230px;" ></a>
										</div>
										<div class="right-content">
											<span class="category"><?php echo $row['Type']?></span>
											<span class="date"><?php echo $row['AddTime'] ?></span>
											<a><h4><?php echo $row['Name'] ?></h4></a>
											<p style="max-height: 60px;text-overflow: ellipsis; word-wrap: break-word; overflow: hidden;"><?php echo $row['Description']?></p>
										</div>
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
				</div>
			</div>
		</div>  
			
                
                
                
		<div id="contact" class="contact-us section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
							<h6>Contact Us</h6>
							<h4>Get In Touch With Us <em>Now</em></h4>
                                                        <div class="line-dec"></div>
						</div>
					</div>
					<div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                                            <form id="contact">
							<div class="row">
								<div class="col-lg-12">
									<div class="contact-dec">
										<img src="assets2/images/contact-dec.png" alt="">
									</div>
								</div>
								<div class="col-lg-5">
									<div id="map">
										<iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="386px" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
								</div>
								<div class="col-lg-7">
									<div class="fill-form">
                                                                            <p id='Success'></p>
										<div class="row">
											<div class="col-lg-4">
												<div class="info-post">
													<div class="icon">
														<img src="assets2/images/phone-icon.png" alt="">
														<a>0110200340</a>
													</div>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="info-post">
													<div class="icon">
														<img src="assets2/images/email-icon.png" alt="">
														<a>our@email.com</a>
													</div>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="info-post">
													<div class="icon">
														<img src="assets2/images/location-icon.png" alt="">
														<a>256 Riyadh</a>
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</form>
						<!--form id="contact" method="post">
							<div class="row">
								<div class="col-lg-12">
									<div class="contact-dec">
										<img src="assets2/images/contact-dec.png" alt="">
									</div>
								</div>
								<div class="col-lg-5">
									<div id="map">
										<iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
								</div>
								<div class="col-lg-7">
									<div class="fill-form">
                                                                            <p id='Success'></p>
										<div class="row">
											<div class="col-lg-4">
												<div class="info-post">
													<div class="icon">
														<img src="assets2/images/phone-icon.png" alt="">
														<a>0110200340</a>
													</div>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="info-post">
													<div class="icon">
														<img src="assets2/images/email-icon.png" alt="">
														<a>our@email.com</a>
													</div>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="info-post">
													<div class="icon">
														<img src="assets2/images/location-icon.png" alt="">
														<a>256 Riyadh</a>
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<fieldset>
													<input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
												</fieldset>
												<fieldset>
													<input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
												</fieldset>
												<fieldset>
													<input type="subject" name="subject" id="subject" placeholder="Subject" autocomplete="on">
												</fieldset>
											</div>
											<div class="col-lg-6">
												<fieldset>
													<textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
												</fieldset>
											</div>
											<div class="col-lg-12">
												<fieldset>
                                                                                                    <button  type="button" id="form-submit"  class="main-button ">Send Message Now</button> <!-- type="submit" -->
												</fieldset>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form-->
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
		<script src="vendor2/jquery/jquery.min.js"></script>
		<script src="vendor2/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="assets2/js/owl-carousel.js"></script>
		<script src="assets2/js/animation.js"></script>
		<script src="assets2/js/imagesloaded.js"></script>
		<script src="assets2/js/custom.js"></script>
		<script>
                    /*
                $('#form-submit').on("click", function () {
                    $('#Success').html("");
                    msg = $('#message').val();
                    sub = $('#subject').val();
                    ConEmail = $('#email').val();
                    ConName = $('#name').val();
                    $.get("contact.php", {massg: msg, subj: sub, ContEmail: ConEmail, ContName: ConName}, 
                    function(data){                    
                        msg = $('#message').val('');
                        sub = $('#subject').val('');
                        ConEmail = $('#email').val('');
                        ConName = $('#name').val('');
                        $("#Success").show();
                        $('#Success').append(data);
                        setInterval('$("#Success").hide()', 5000);
                    });
                });
                
                $('#search-btn').on("click", function () {
                    name = $('#web').val();
                    name = name.trim();
                    location.href="Games list.php?search=y&in=y&name="+name;
                });*/
        </script>
	</body>
</html>																																																																																																																																																																																																																																										