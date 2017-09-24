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
    <title>Calamvale Medical Center</title>
    </head>
    <body>
    <?php include 'navbar.php'; ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" style="height: 86vh;width: 100;background-image: url('resources/img/background-man.jpeg'); background-position: center center;background-size: cover; background-repeat: no-repeat;">
                <div class="carousel-caption d-none d-md-block" style="text-align: left;bottom: 10vh; background-color: rgba(0,0,0,0.6); padding: 20px 20px 20px 20px;max-width: 70vh">
                    <h3>Depenable health care and memes</h3>
                    <p>Pepe will come to your house at midnight tonight</p>
                    <button class="header-button" type="submit">BOOK AN APPOINTMENT</button>
                </div>
            </div>
            <div class="carousel-item" style="height: 86vh;width: 86;background-image: url('resources/img/skeleton.jpg'); background-position: center center;background-size: cover; background-repeat: no-repeat;">
                <div class="carousel-caption d-none d-md-block" style="text-align: left;bottom: 10vh; background-color: rgba(0,0,0,0.6); padding: 20px 20px 20px 20px; width: 65vh;">
                    <h3>nd memes</h3>
                    <p>Pepe will house at midnight tonight</p>
                    <button class="header-button" type="submit">BOOK AN APPOINTMENT</button>
                </div>
            </div>
            <div class="carousel-item" style="height: 86vh;width: 100;background-image: url('resources/img/background-hospital.jpeg'); background-position: center center;background-size: cover; background-repeat: no-repeat;">
                <div class="carousel-caption d-none d-md-block" style="text-align: left;bottom: 10vh; background-color: rgba(0,0,0,0.6); padding: 20px 20px 20px 20px; width: 65vh;">
                    <h3>Depenable h and memes</h3>
                    <p>Pepe will comdnight tonight</p>
                    <button class="header-button" type="submit">BOOK AN APPOINTMENT</button>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
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
    <div class="content-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
