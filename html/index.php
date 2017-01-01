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
       <?php include 'footer.php'; ?> 
    </body>
</html> 