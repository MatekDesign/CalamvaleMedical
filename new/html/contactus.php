<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<?php include_once 'parts/resources.php'; ?>
	<link href="css/contactus.css?<?php echo time(); ?>" rel="stylesheet">        

	<title>Calamvale Medical Centre</title>
</head>

<body>
	<?php include 'parts/navbar.php'; ?>
	<?php include 'parts/booksnippet.php'; ?>
	
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
			<div class="col-xl-6 col-lg-12" >
				<div class="row no-gutters">
					<div class="col-md-6 col-xs-12" >
						<div class="contact-header">Location</div>
						<div class="contact-body">
							Calamvale Village Shopping Centre<br>
							Cnr Kameruka Street & Beaudesert Road<br>
							Calamvale  4116
						</div>
					</div>
					<div class="col-md-6 col-xs-12" >
						<div class="contact-header">General Contact</div>
						<div class="contact-body">
							Phone: <a href="tel:07 3272 5155">(07) 3272 5155</a><br>
							Fax: <a href="tel:07 3272 5110">(07) 3272 5110</a><br>
							Email: <a href="mailto:info@calamvalemedical.com.au">info@calamvalemedical.com.au</a><br>
						</div>
					</div>
					<div class="col-xs-12" >
						<div class="contact-header">Emergancy Contact</div>
						<div class="contact-body">
							Our after hours service will attend patients of this practice for any after hours emergencies when our doctors are not available. The phone number is 13 74 25.
							<br><br>
							We recommend that you subscribe to the Family Care Friendly Society, for a small annual fee. The Friendly Society is a not-for-profit group that has organised for its members to be bulk billed for after-hours home visits. You can subscribe to the Society at our reception desk.
							<br><br>
							Alternatively you may attend a hospital "Accident and Emergency" Department seen below.
						</div>
					</div>
					<div class="col-xs-12 contact-medicaldiv" >
						<div class="contact-header">Public Hospitals</div>
						<div class="contact-body">
							Logan Hospital, Armstrong Road, Meadowbrook  <a href="tel:07 3299 8899">(07) 3299 8899</a><br>
							QEII Hospital, Kessels Road, Coopers Plains  <a href="tel:07 3275 6111">(07) 3275 6111</a><br>
							Lady Cilento Children's Hospital, Stanley Street, South Brisbane  <a href="tel:07 3068 1111">(07) 3068 1111</a><br>
							Mater Adult Hospital, Raymond Terrace, South Brisbane  <a href="tel:07 3163 1918">(07) 3163 1918</a><br>
							Princess Alexandra Hospital, Ipswich Road, Woolloongabba  <a href="tel:07 3176 2111">(07) 3176 2111</a><br>
						</div>
					</div>
					<div class="col-xs-12 contact-medicaldiv" >
						<div class="contact-header">Private Hospital</div>
						<div class="contact-body">
							Mater Private Hospital, 301 Vulture Street, South Brisbane  <a href="tel:07 3163 1111">(07) 3163 1111</a><br>
							Sunnybank Private Hospital, McCullough Street, Sunnybank  <a href="tel:07 3344 9444">(07) 3344 9444</a><br>
							Greenslopes Private Hospital, Newdegate Street, Greenslopes  <a href="tel:07 3394 7111">(07) 3394 7111</a><br>
							Greenslopes Private Hospital, Newdegate Street, Greenslopes  <a href="tel:07 3394 7111">(07) 3394 7111</a><br>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-12" >
				<div id="map"></div>
			</div>
		</div>
	</div>
	<?php include_once 'parts/footer.php'; ?>
	<script src="js/map.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKpizFlgH-vwYio016p65LWhX3lIjwEgk&callback=initMap" async defer></script>
</body>
</html>