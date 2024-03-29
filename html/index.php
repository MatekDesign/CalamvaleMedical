<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <?php include 'resources.php'; ?>
    <link href="resources/index.css" rel="stylesheet">
    <script src="resources/js/index.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKpizFlgH-vwYio016p65LWhX3lIjwEgk&callback=initMap" async defer></script>
        
    <style>
#map {
	height: 350px;
	margin-bottom: 10px;
}

</style>
    <title>Calamvale Medical Centre</title>
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
    <div class="content-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <img src="resources/img/person.png">
                    <div class="content-1-header">Friendly Staff</div>
                    <div class="content-1-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum mauris sit amet gravida efficitur. Fusce in est lacus. Nulla facilisi. Cum sociis natoque penatibus et magnis dis parturient montes.
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="resources/img/doc.png">
                    <div class="content-1-header">Experienced</div>
                    <div class="content-1-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum mauris sit amet gravida efficitur. Fusce in est lacus. Nulla facilisi. Cum sociis natoque penatibus et magnis dis parturient montes.
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="resources/img/doc.png">
                    <div class="content-1-header" >Friendly Staff</div>
                    <div class="content-1-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum mauris sit amet gravida efficitur. Fusce in est lacus. Nulla facilisi. Cum sociis natoque penatibus et magnis dis parturient montes.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="content-2">
        <div class="vertical-align">
            <div class="conainer-fluid">
                <div class="row">
                    <div class="col-md-3">
                         <div class="content-2-big-text-1">368</div>
                         <div class="content-2-small-text-1">people go for monthly checkups</div>
                    </div>
                    <div class="col-md-3">
                         <div class="content-2-big-text-1">368</div>
                         <div class="content-2-small-text-1">people go for monthly checkups</div>
                    </div>
                    <div class="col-md-3">
                         <div class="content-2-big-text-1">368</div>
                         <div class="content-2-small-text-1">people go for monthly checkups</div>
                    </div>
                    <div class="col-md-3">
                         <div class="content-2-big-text-1">368</div>
                         <div class="content-2-small-text-1">people go for monthly checkups</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="content-3-img">
                            <img src="resources/img/placeholder.png">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content-3-innner-text">
                            <div class="content-3-big-text">Meet our team</div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id venenatis nibh. In hac habitasse platea dictumst. Donec nec felis at nulla rutrum scelerisque at sit amet mi. Duis sit amet dolor non eros condimentum tincidunt eget sed lectus. 
                            <br>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id venenatis nibh. In hac habitasse platea dictumst. Donec nec felis at nulla rutrum scelerisque at sit amet mi. Duis sit amet dolor non eros condimentum tincidunt eget sed lectus. 
                            <br>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id venenatis nibh. In hac habitasse platea dictumst. Donec nec felis at nulla rutrum scelerisque at sit amet mi. Duis sit amet dolor non eros condimentum tincidunt eget sed lectus. 
                            <br>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id venenatis nibh. In hac habitasse platea dictumst. Donec nec felis at nulla rutrum scelerisque at sit amet mi. Duis sit amet dolor non eros condimentum tincidunt eget sed lectus. 
                            <br>
                            <br>
                            <form>
                                <button class="content-3-button" type="submit">READ MORE</button>
                            </form>                 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8" id="1">
                    <div id="map"></div>
                </div>
                <div class="col-md-3" id="2">
                    <div class="content-4-inner-text">
                        <div class="content-4-header-1">Locate Us</div>
                        <div class="content-4-text-1">
                            <b>Address:</b>
                            <br>
                            23 Fortitude Valley,<br>Aspley, Brisbane<br>QLD, 4034
                            <br>
                            <br>
                            <b>Phone:</b> (07) 4562 8952
                            <br>
                            <br>
                            <b>Fax:</b> (07) 1256 8753
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
