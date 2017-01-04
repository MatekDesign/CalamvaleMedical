<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <?php include 'resources.php'; ?>
    <style>
#map {
	height: 200px;
	margin-bottom: 10px;
}

</style>
    <title>Calamvale Medical Center</title>
    </head>
    <body>
    <?php include 'navbar.php'; ?>
    <div class="header">
      <div class="header-vertical-align"> <span class="header-title">HIGH QUALITY, DEPENDABLE HEALTHCARE FOR THE ENTIRE FAMILY</span> <span class="header-sub-title">Come in for a checkup today</span>
        <form>
          <button class="header-button" type="submit">BOOK AN APPOINTMENT</button>
        </form>
      </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div id="map" ></div>
          
          </div>
        </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script src="resources/js/index.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKpizFlgH-vwYio016p65LWhX3lIjwEgk&callback=initMap" async defer></script>
</body>
</html>
