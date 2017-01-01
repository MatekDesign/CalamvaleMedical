<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <?php include 'resources.php'; ?>
        
        <title>Calamvale Medical Center</title>
    </head>
    <body>
        <div>
            <ul class="topnav">
                <li style="float: right;"><a class="active" href="#home">CONTACT US</a></li>
                <li style="float: right;"><a class="active" href="#home">OUR TEAM</a></li>
                <li style="float: right;"><a href="#news">SERVICE</a></li>
                <li style="float: right;"><a href="#contact">INFORMATION</a></li>
                <li style="float: right;"><a href="#about">HOME</a></li>
                <li class="icon" style="float: right;">
                    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
                </li>
            </ul>
            <script>
                function myFunction() {
                    document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
                }
            </script> 
        </div>
        <div class="header">
            <div class="header-vertical-align">
                <span class="header-title">HIGH QUALITY, DEPENDABLE HEALTHCARE FOR THE ENTIRE FAMILY</span>
                <span class="header-sub-title">Come in for a checkup today</span>
                <form>
                    <button class="header-button" type="submit">BOOK AN APPOINTMENT</button>
                </form>
            </div>
        </div>    
        <br>
        <div class="container" style="padding: 50px 50px 50px 50px">
            <div class="row">
                <h3>Lorem Ipsum</h3>
                <div class="col-md-4">
                    <img src="resources/img/person1.jpg" style="border-radius: 360px; width: 250px">
                </div>
                <div class="col-md-8">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam accumsan iaculis urna. Nulla vitae risus risus. Morbi accumsan vitae ipsum id auctor. Aenean laoreet accumsan enim, at lacinia nulla sodales ac. Aenean sit amet varius justo. Ut elit nunc, rhoncus at mollis in, finibus varius purus. Curabitur vehicula massa sed maximus fringilla.

Mauris vel auctor sem. In sed hendrerit mi. Nunc in nisi et quam malesuada rutrum non quis sapien. Duis massa orci, mollis eget ipsum id, tempor imperdiet felis. Aliquam fringilla felis odio, eget egestas nulla vehicula sed. Donec sit amet risus vulputate, faucibus tellus venenatis, laoreet ipsum. Suspendisse potenti. Donec viverra, purus interdum convallis porttitor, enim est sagittis turpis, at ultricies sem enim sit amet ante. Praesent eget sem vestibulum, sagittis justo quis, blandit neque. Aenean eget dolor finibus, consectetur massa sodales, facilisis diam. Donec non nisl at sapien tincidunt aliquet.
                </div>
            </div>
            <br>
            <div class="row">
                <h3>Lorem Ipsum</h3>
                <div class="col-md-8">
                    <div style="height: 250px; vertical-align: ">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam accumsan iaculis urna. Nulla vitae risus risus. Morbi accumsan vitae ipsum id auctor. Aenean laoreet accumsan enim, at lacinia nulla sodales ac. Aenean sit amet varius justo. Ut elit nunc, rhoncus at mollis in, finibus varius purus. Curabitur vehicula massa sed maximus fringilla.

Mauris vel auctor sem. In sed hendrerit mi. Nunc in nisi et quam malesuada rutrum non quis sapien. Duis massa orci, mollis eget ipsum id, tempor imperdiet felis. Aliquam fringilla felis odio, eget egestas nulla vehicula sed. Donec sit amet risus vulputate, faucibus tellus venenatis, laoreet ipsum. Suspendisse potenti. Donec viverra, purus interdum convallis porttitor, enim est sagittis turpis, at ultricies sem enim sit amet ante. Praesent eget sem vestibulum, sagittis justo quis, blandit neque. Aenean eget dolor finibus, consectetur massa sodales, facilisis diam. Donec non nisl at sapien tincidunt aliquet.
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="resources/img/person2.png" style="border-radius: 360px;width: 250px;">
                </div>
            </div>
        </div>
        <br>
       <?php include 'footer.php'; ?> 
    </body>
</html>