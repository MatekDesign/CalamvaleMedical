<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<?php include_once 'resources.php'; ?>
	<link href="resources/contactus.css?<?php echo time(); ?>" rel="stylesheet">        

	<title>Calamvale Medical Centre</title>
</head>

<body>
	<?php include 'navbar.php'; ?>
	<?php include 'booksnippet.php'; ?>
	
	<!-- Header -->
	<div class="header">
		<div class="header-vertical-align">
			<center>
				<span class="header-title">Contact Us</span>
			</center>
		</div>
	</div>
	<br>

	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-md-6 col-xs-12" >
				<div class="contact-header">Location</div>
				<div class="contact-body">
					Calamvale Village Shopping Centre<br>
					Cnr Kameruka Street & Beaudesert Road<br>
					Calamvale  4116
				</div>
			</div>
			<div class="col-xl-3 col-md-6 col-xs-12" >
				<div class="contact-header">General Contact</div>
				<div class="contact-body">
					Phone: <a href="tel:07 3272 5155">(07) 3272 5155</a><br>
					Fax: <a href="tel:07 3272 5110">(07) 3272 5110</a><br>
					Email: <a href="mailto:info@calamvalemedical.com.au">info@calamvalemedical.com.au</a><br>
				</div>
			</div>
			<div class="col-xl-6 col-lg-12" >
				<div id="map"></div>
			</div>
		</div>
	</div>
	
	<br>
	<?php include_once 'footer.php'; ?>
	<script src="resources/js/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKpizFlgH-vwYio016p65LWhX3lIjwEgk&callback=initMap" async defer></script>
</body>

</html>