<?php include('header1.php') ?>
<?php 

  if (!isset($_SESSION['username'])) {
 	
  	header('location: index.php');
  } 
?>

	<!-- ****************************** Banner ************************** -->


	<section id="banner" >
		<section class="container">
			<a class="slidedown wow animated zoomIn" data-wow-delay="2s" href="#features"><i class="ion-ios-download-outline"></i></a>
			<section class="row">
				<div class="col-md-6">
					<div class="headings">
						<h1 class="wow animated fadeInDown">WELCOME</h1>
						<p class="wow animated fadeInLeft">If you want to Store your Records, You are at the Right Place! keep Updating!!!</p>
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-5">
								<div>
									<a href="loggedin.php" class="polo-btn store wow animated bounceInUp">VIEW PROFILE</a>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-5">
								<div>
									<a href="index.php?logout='1'" class="polo-btn store wow animated bounceInUp"> LOG OUT</a>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-10">
								<div>
									<a href="home.php#subscribe" class="polo-btn store wow animated bounceInUp"> Find Records</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			<!--	<div class="col-md-6 hidden-xs hidden-sm">
					<div class="hand-container">
					<img class="iphone-hand img_res wow animated bounceInUp" data-wow-duration="1.2s" src="assets/img/iphone_hand.png"></img>
					<div class="clearfix"></div>
					</div>
				</div> -->
			</section>
		</section>
	</section>

	<!-- ****************************** Features Section ************************** -->

	<section id="features" class="block">
		<section class="container">
			<section class="row">
				<div class="title-box"><h1 class="block-title wow animated rollIn">
				<span class="bb-top-left"></span>
				<span class="bb-bottom-left"></span>
				Features
				<span class="bb-top-right"></span>
				<span class="bb-bottom-right"></span>
				</h1></div>
			</section>
			
			<section class="row">
				<div class="col-sm-6 col-md-4">
					<div class="feature-box wow animated flipInX" data-wow-delay="0.3s">
						<i class="ion-ios-settings" style="color:#9b59b6;"></i>
						<h2>Can Upload Easily</h2>
						<p></p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="feature-box wow animated flipInX" data-wow-delay="0.3s">
						<i class="ion-ios-locked-outline" style="color:#d35400;"></i>
						<h2>Secured Database</h2>
						<p></p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="feature-box wow animated flipInX" data-wow-delay="0.3s">
						<i class="ion-nuclear" style="color:#00ceb8;"></i>
						<h2>Firewall</h2>
						<p></p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="feature-box wow animated flipInX" data-wow-delay="0.6s">
						<i class="ion-ios-browsers-outline" style="color:#c0392b;"></i>
						<h2>HD Widgets</h2>
						<p></p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="feature-box wow animated flipInX" data-wow-delay="0.6s">
						<i class="ion-ios-loop" style="color:#27ae60;"></i>
						<h2>Data Sync</h2>
						<p></p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="feature-box wow animated flipInX" data-wow-delay="0.6s">
						<i class="ion-ios-glasses" style="color:#2c3e50;"></i>
						<h2>Customize</h2>
						<p></p>
					</div>
				</div>
			</section>
			<div class="clearfix"></div>
		</section>
	</section>

	
	<!-- ****************************** Team Section ************************** -->

	<section id="team" class="block">
		<section class="container">
			<section class="row">
				<div class="col-md-12">
					<div class="title-box">
						<h1 class="block-title wow animated rollIn">
							<span class="bb-top-left"></span>
							<span class="bb-bottom-left"></span>
							Development Team
							<span class="bb-top-right"></span>
							<span class="bb-bottom-right"></span>
						</h1>
					</div>
				</div>
			</section>
			<section class="row">
				<section class="col-md-3 col-sm-6">
					<div class="team-member wow animated fadeIn" data-wow-delay=="0.3s">
						<img src="assets/img/pic-1.jpg" class="img_res team-pic">
						<h2 class="wow animated fadeInDown" data-wow-delay=="0.7s">Saikat Adhurya</h2>
						<p class="wow animated fadeIn" data-wow-delay=="0.7s">Studying in UIT,BU. Information Technology Branch. Chief Developer.</p>
						<ul class="team-social">
							<li class="wow animated fadeInLeft facebook"><a href="https://www.facebook.com/saikat.adhurya.0101" target="_blank"><i class="ion-social-facebook"></i></a></li>
							<li class="wow animated fadeInLeft linkedin"><a href="#"><i class="ion-social-linkedin"></i></a></li>
							<li class="wow animated fadeInRight googleplus"><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
							<li class="wow animated fadeInRight github"><a href="https://github.com/Saikatadhurya" target="_blank"><i class="ion-social-github"></i></a></li>
						</ul>
					</div>
				</section>
				<section class="col-md-3 col-sm-6">
					<div class="team-member wow animated fadeIn" data-wow-delay=="0.3s">
						
					</div>
				</section>
				<section class="col-md-3 col-sm-6">
					<div class="team-member wow animated fadeIn" data-wow-delay=="0.3s">
						<img src="assets/img/pic-2.jpg" class="img_res team-pic">
						<h2 class="wow animated fadeInDown" data-wow-delay=="0.7s">Nishant Kumar</h2>
						<p class="wow animated fadeIn" data-wow-delay=="0.7s">Studying in UIT,BU. Information Technology Branch, Developer</p>
						<ul class="team-social">
							<li class="wow animated fadeInLeft facebook"><a href="https://www.facebook.com/nsk930" target="_blank"><i class="ion-social-facebook"></i></a></li>
							<li class="wow animated fadeInLeft linkedin"><a href="#"><i class="ion-social-linkedin"></i></a></li>
							<li class="wow animated fadeInRight googleplus"><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
							<li class="wow animated fadeInRight github"><a href="#"><i class="ion-social-github"></i></a></li>
						</ul>
					</div>
				</section>
				<section class="col-md-3 col-sm-6">
					<div class="team-member wow animated fadeIn" data-wow-delay=="0.3s">
						
					</div>
				</section>
				
			</section>
		</section>
	</section>

	
	<!-- ****************************** Subscribe Section ************************** -->

	<section id="subscribe">
		<section class="container">
			<section class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<p class="susbcribe-text">
					<strong>Here you can search the records by Unique ID.</strong><br> Type the Unique ID for searching respective records below !!!</p>
				</div>
			</section>
		</section>
		<section class="container subscribe-wrap">
			<section class="row">
				<div class="col-sm-12">
					<div class="row">
						<form role="form" method="post" action="search1.php">
							<div class="col-xs-10">
								<div class="form-group">
									<input type="text" name="searchterm" class="form-control" id="exampleInputEmail1" placeholder="Enter Unique ID" required>
								</div>
							</div>
							<div class="col-xs-2">
								<button type="submit" class="btn-custom" name="submit">
								<i class="ion-ios-arrow-thin-right"></i>
								</button>
							</div>
						</form>
					</div>
				</div>
			</section>
		</section>
	</section>
	<!-- ****************************** Contact Section ************************** -->

	<section id="contact">
			<section class="container contact-wrap">
				<section class="row">
					<div class="title-box"><h1 class="block-title wow animated rollIn">
					<span class="bb-top-left"></span>
					<span class="bb-bottom-left"></span>
					Contact Us
					<span class="bb-top-right"></span>
					<span class="bb-bottom-right"></span>
					</h1></div>
				</section>
			</section>
			<section class="address">
				<div class="container">
					<div class="col-sm-12">
						<ul class="address-list">
							<li><i class="ion-ios-location" style="background-color: rgb(255, 102, 0);"></i> <span>UIT BU <br>BURDWAN, WEST BENGAL - 713206</span></li>
							<li><i class="ion-ios-telephone" style="background-color: #63cfea;"></i> <span>+91 9093222094 </span></li>
							<li><i class="ion-email" style="background-color: #6ecba9;"></i> <span>nsk930@gmail.com</span></li>
							<li><i class="ion-earth" style="background-color: #ff6969;"></i> <span>www.srks.com</span></li>
						</ul>
					</div>
				</div>
			</section>
			<section class="mailbox">
				<div class="container">
					<div class="col-sm-12">
						<form name="sentMessage" id="contactForm" novalidate>
	                        <div class="row">
	                            <div class="col-md-6">
	                                <div class="form-group">
	                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
	                                    <p class="help-block text-danger"></p>
	                                </div>
	                                <div class="form-group">
	                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
	                                    <p class="help-block text-danger"></p>
	                                </div>
	                                <div class="form-group">
	                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
	                                    <p class="help-block text-danger"></p>
	                                </div>
	                            </div>
	                            <div class="col-md-6">
	                                <div class="form-group">
	                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
	                                    <p class="help-block text-danger"></p>
	                                    <div id="success"></div>
		                                <button type="submit" class="polo-btn contact-submit"><i class="ion-paper-airplane"></i></button>
	                                </div>
	                            </div>
	                        </div>
	                    </form>
					</div>
				</div>
			</section>
			<div class="clearfix"></div>
		</section>
<?php include('footer1.php') ?>
