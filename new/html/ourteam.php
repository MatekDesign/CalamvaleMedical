<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<?php include_once 'parts/resources.php'; ?>
	<link href="css/ourteam.css?<?php echo time(); ?>" rel="stylesheet">        

	<title>Calamvale Medical Centre</title>
</head>

<body>
	<?php include 'parts/navbar.php'; ?>
	
	<!-- Header -->
	<div class="header">
		<div class="header-vertical-align">
			<center>
				<span class="header-title">OUR TEAM</span>
			</center>
		</div>
	</div>
	<br>

	<div class="container">
		<div class="row" id="doctorslist">
			
		</div>
	</div>
	<?php include_once 'parts/footer.php'; ?>
	<script src="js/ourteam.js?<?php echo time(); ?>"></script>
</body>
</html>