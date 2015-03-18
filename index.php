<?php 
	define("HTTP_PATH", $_SERVER['SERVER_NAME']);
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NIMO & co</title>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
</head>
<body>

<div id="page-wrapper">
	<div class="container top-navigation">
	 	<div class="row">
	 		<ul class="main-menu">
		 		<li class="abc nopadding-l"><a href="#">HOME</a></li>
		 		<li class="abc"><a href="#">ABOUT</a></li>
		 		<li class="abc"><a href="#">PRODUCTS</a></li>
		 		<li class="abc"><a href="/"><img id="logo" src="images/logo.jpg" height="25px" width="auto" alt="Nimo & co"></a>
		 		<li class="abc"><a href="#">CLIENTS</a></li>
		 		<li class="abc"><a href="#">NEWS</a></li>
		 		<li class="abc"><a href="#">CONTACT</a></li>
	 		</ul>
	 	</div>
	</div>

	<div class="container-fluid padding-t-30">
		<div class="row">
			<div id="slider">
				<div class="main-slider">
					<div class="slide-desc"><p>Lorem ipsum dolor sit amet</p><button class="slide-button">More details</button></div>
					<div class="slide-image"></div>
					<!-- <div class="col-xs-1"></div>
					<ul class="rslides">
					  <li><img src="images/slides/slide01.jpg" alt="" title=""><p class="slider-desc">A STUNNING SPECIAL EDITION FROM <span style="color: 3883bd; font-weight: 700">Fulkrum</span></p></li>
					  <li><img src="images/slides/slide02.jpg" alt="" title=""><p class="slider-desc">A STUNNING SPECIAL EDITION FROM <span style="color: 3883bd; font-weight: 700">Fulkrum</span></p></li>
					  <li><img src="images/slides/slide03.jpg" alt="" title=""><p class="slider-desc">A STUNNING SPECIAL EDITION FROM <span style="color: 3883bd; font-weight: 700">Fulkrum</span></p></li>
					</ul>
					<div class="col-xs-1"></div> -->
				</div>
			</div>
			
		</div>
	</div>
	<div class="container-fluid showcase">
		<h4 class="showcase-title">OUR COLLECTION</h1>
		<div class="row">
			<div class="col-xs-6">
				<div class="showcase-box" id="office-chairs">
					<a href="#" target="_self">
						<div id="office-title" class="inline-box"><div id="office-bottom-title">OFFICE CHAIRS</div></div>
						<img id="office-pic" class="inline-box" src="images/office_chairs.jpg" width="100%" height="auto" alt="office_chairs" title="office_chairs">
					</a>
				</div>
			</div>
			<div class="col-xs-3 nopadding-r">
				<div class="showcase-box" id="chubb-safes">
					<a href="#" target="_self">
					<img src="images/chubb_safes.jpg" width="100%" height="auto" alt="chubb_safes" title="chubb_safes" title="">
					<div id="chubb-safes-title">CHUBB SAFES</div>
					</a>
				</div>
			</div>
			<div class="col-xs-3 nopadding-l">
				<div class="showcase-box" id="hansteel-furniture">
					<a href="#" target="_blank">
						<img src="images/hansteel_furniture.jpg" width="100%" height="auto" alt="hansteel-furniture" title="hansteel-furniture" title="">
						<div id="hansteel-furniture-title">HANSTEEL FURNITURE</div>
					</a>
					<a href="#"><div id="showcase-more">MORE</div></a>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid promotions">
		<a href="#" target="_self">
			<div id="promo-banner">
				<img src="images/promo.png" alt="sample promo" title="sample promo" width="">
				<div id="promo-content">
					<div id="promo-title">DELPHI SEATING EXCELLENCE</div>
					<div id="promo-desc">50% OFF ON THIS JANUARY</div>
				</div>
			</div>
		</a>
	</div>
	<div class="container-fluid main-content">
		<div class="row">
			<div class="col-xs-6">
				<h3 class="content-heading">ABOUT THE STORE HEADING</h3>
				<p class="content-detail">We offer a full furniture installation service on all our products from our in-house team of experienced fitters. Delivery is free. We offer a full furniture installation service on all our products from our in-house team of experienced fitters. Delivery is free.</p>
			</div>
			<div class="col-xs-6">
				<h3 class="content-heading">LATEST NEWS</h3>
				<p class="content-detail"><a href="#">Winter is nearly here and the Mountain Collective prices are about to go up! Grab details and the ultimate season pass here...</a></p>
				<p class="content-date">01 Oct 2015</p>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="container-fluid footer">
			<div class="row">
				<ul class="col-xs-2">
					<li class="footer-title"><a href="#">BRANDS</a></li>
					<li class="footer-desc"><a href="#">Barcelona</a></li>
					<li class="footer-desc"><a href="#">Velo</a></li>
					<li class="footer-desc"><a href="#">Delphi</a></li>
					<li class="footer-desc"><a href="#">Fulkrum</a></li>
					<li class="footer-desc"><a href="#">Wau</a></li>
				</ul>
				<ul class="col-xs-2">
					<li class="footer-title"><a href="#">PRODUCTS</a></li>
					<li class="footer-desc"><a href="#">Chairs</a></li>
					<li class="footer-desc"><a href="#">Safes</a></li>
					<li class="footer-desc"><a href="#">Furnitures</a></li>
					<li class="footer-desc"><a href="#">Locks</a></li>
					<li class="footer-desc"><a href="#">Tables</a></li>
				</ul>
				<ul class="col-xs-2">
					<li class="footer-title"><a href="#">LEGAL</a></li>
					<li class="footer-desc"><a href="#">Privacy Policy</a></li>
					<li class="footer-desc"><a href="#">Terms and Conditions</a></li>
					<li class="footer-desc"><a href="#">Cancellations</a></li>
					<li class="footer-desc"><a href="#">Order Process</a></li>
				</ul>
				<div class="col-xs-6" id="copyrights">
					<div class="footer-title">&nbsp;</div>
					<p class="footer-desc">Copyright &copy; NIMO & CO 2015</p>
					<p class="footer-desc">Build By : <a href="#" target="_blank">Pyxle</a></p>
					<div class="footer-desc footer-icons">
						<a href="#" target="_blank"><img class="footer-icon" src="images/fb.png" alt="facebook" title="facebook" id="fb-icon"></a>
						<a href="#" target="_blank"><img class="footer-icon" src="images/twitter.png" alt="twitter" title="twitter" id="twitter-icon"></a>
						<a href="#" target="_blank"><img class="footer-icon" src="images/instagram.png" alt="instagram" title="instagram" id="instagram-icon"></a>
						<a href="#" target="_blank"><img class="footer-icon" src="images/gplus.png" alt="google plus" title="google plus" id="gplus-icon"></a>
						<a href="#" target="_blank"><img class="footer-icon" src="images/pinterest.png" alt="pinterest" title="pinterest" id="pinterest-icon"></a>
						<a href="#" target="_blank"><img class="footer-icon" src="images/linkedin.png" alt="linkedin" title="linkedin" id="linkedin-icon"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/responsiveslides.min.js"></script>
<script>

$(function() {
  $(".rslides").responsiveSlides({
		auto: true,             // Boolean: Animate automatically, true or false
		speed: 500,            // Integer: Speed of the transition, in milliseconds
		timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
		pager: false,           // Boolean: Show pager, true or false
		nav: true,             // Boolean: Show navigation, true or false
		random: false,          // Boolean: Randomize the order of the slides, true or false
		pause: false,           // Boolean: Pause on hover, true or false
		pauseControls: true,    // Boolean: Pause when hovering controls, true or false
		prevText: "Previous",   // String: Text for the "previous" button
		nextText: "Next",       // String: Text for the "next" button
		maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
		navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
		manualControls: "",     // Selector: Declare custom pager navigation
		namespace: "rslides",   // String: Change the default namespace used
		before: function(){},   // Function: Before callback
		after: function(){}     // Function: After callback
	});

});

</script>
</html>