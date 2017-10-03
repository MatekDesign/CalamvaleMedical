<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <?php include_once 'resources.php'; ?>
    <script src="resources/js/index.js"></script>
    <link href="resources/header2.css" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKpizFlgH-vwYio016p65LWhX3lIjwEgk&callback=initMap" async defer></script>
        
    <style>
        #map {
            height: 350px;
            margin-bottom: 10px;
        }
        #service1 {display: none;}
        #service2 {display: none;}
        #service3 {display: none;}
        #service4 {display: none;}
        #service5 {display: none;}
        #service6 {display: none;}
        #service7 {display: none;}
        #service8 {display: none;}
    </style>
    <title>Calamvale Medical Center</title>
    </head>
    <body>
    <?php include 'navbar.php'; ?>

    <!-- Header -->
    <div class="header">
      <div class="header-vertical-align"> 
          <center>
          <span class="header-title">OUR SERVICES</span>
          </center>
      </div>
    </div>
    <br>

    <div class="content-1">
        <div class="container">
            <h2>Our Services</h2>

            We welcome you to our practice, where we provide a full range of family medical care. It is our aim to provide the highest standard of health care. All consultations and medical records are strictly confidential.
            <br>
            <br>

            Doctors at our practice are on the Vocational Register of General Practitioners. This means that we have a commitment to general practice and to continuing medical education. We are committed to providing comprehensive care to all individuals and families in our community.
            <br>
            <br>

            Our practice is fully accredited with AGPAL and operates to standards as determined by the Royal Australian College of General Practitioners (RACGP).
            <br>
            <br>

            Our services include:
            <br>
            <br>

            <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" onClick="UpdateText('service1')">Minor Surgery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onClick="UpdateText('service2')">Maternity Care and Family Planning</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onClick="UpdateText('service3')">Baby Growth and Maternity Advice</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onClick="UpdateText('service4')">Immunisation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onClick="UpdateText('service5')">Travel Health and Vaccination Service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onClick="UpdateText('service6')">Counselling</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onClick="UpdateText('service7')">Skin Checks</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onClick="UpdateText('service8')">Medicals</a>
            </li>

            </ul>

            <br>
            <div id="service1">
                <h3>Minor Surgery</h3>
                Minor surgery including suturing of lacerations and treatment of minor fractures are carried out in the practice. All surgical equipment is either disposable or sterilized by autoclave.
            </div>
            <div id="service2">
                We provide family planning advice, pap smears, maternity care and participate in shared antenatal care with the major maternity hospitals. We liaise closely with your Private Obstetrician throughout your pregnancy to provide optimal care for you and your baby.
            </div>
            <div id="service3">
                The doctors can advise on baby care matters and infant problems with feeding, growth and development etc.
            </div>
            <div id="service4">
                We give the full range of immunisations for infants and children. The Health Department provides most immunisations free of charge to the practice.

                With notice, we can supply 'catch-up' doses of all immunisations normally given at school

                We have experienced Nursing staff who are able to give your child their immunizations, once your Doctor has completed the consultation. Please ask reception staff at the time of booking your appointment when the most suitable time to book is.
            </div>
            <div id="service5">
                Immunisations and advice for travellers to most overseas destinations can be provided. An appointment at least 6 weeks before your trip is advisable.
            </div>
            <div id="service6">
                Several doctors have a special interest in counselling.

                Please advise when booking an appointment that you will need a longer consultation.
            </div>
            <div id="service7">
                Complete skin checks can be performed by all doctors. Some minor lesions can be removed at our surgery, or you can be referred on to a Specialist for ongoing care.
            </div>
            <div id="service8">
                Pre-employment, driving licence and insurance reports can be performed, as can comprehensive medical checks.

                Please ask our reception staff about the costs of these medicals, and please advise at the time of booking your appointment that it is for a medical, so that the appropriate length of appointment can be given.

                Remember to fill out all the relevant information of the forms prior to seeing the Doctor.
            </div>
        </div>
    </div> 

    <br>

    <?php include_once 'footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
	<script src="https://v4-alpha.getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script>
        function UpdateText(element) {
            document.getElementById("service1").style.display = "none";
            document.getElementById("service2").style.display = "none";
            document.getElementById("service3").style.display = "none";
            document.getElementById("service4").style.display = "none";
            document.getElementById("service5").style.display = "none";
            document.getElementById("service6").style.display = "none";
            document.getElementById("service7").style.display = "none";
            document.getElementById("service8").style.display = "none";

            document.getElementById(element).style.display = "block";
        }
    </script>
</body>
</html>
