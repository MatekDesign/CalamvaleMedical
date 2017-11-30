<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<?php include_once 'parts/resources.php'; ?>
  	<script src="js/map.js"></script>
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
	<?php include 'parts/navbar.php'; ?>
	<?php include 'parts/booksnippet.php'; ?>

	<!-- Header -->
	<div class="header">
		<div class="header-vertical-align">
			<center>
				<span class="header-title">CLINIC INFORMATION</span>
			</center>
		</div>
	</div>
	<br>

	<div class="content-1">
		<div class="container">
			<div id="accordion" role="tablist">
				<div class="card">
					<div class="card-header" role="tab" id="heading1" data-toggle="collapse" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
						<h5 class="mb-0">
							New Patient Registration
						</h5>
					</div>
					<div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="heading1" data-parent="#accordion">
						<div class="card-body">
							Instructions for new patients:
							<ul>
								<li>Make an appointment by telephone (3272 5155).</li>
							
								<li>You may wish to download and print the new patient form (<a href="http://get.adobe.com/reader">Adobe Reader</a> required).</li>
							
								<li>You can then complete the form and either fax back to 3272 5110 or bring with you at the time of your appointment. This will save your time at the first consultation.</li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="card">
					<div class="card-header" role="tab" id="heading2" class="collapsed" data-toggle="collapse" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
						<h5 class="mb-0">
						 	Appointments
						</h5>
					</div>
					<div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2" data-parent="#accordion">
						<div class="card-body">
							Please telephone to book your appointment on 3272 5155. Appointments are preferred as they minimise your waiting time and ensure that you see the doctor of your choice at a time convenient for you. Emergencies will be seen at any time. Patients are seen in the following order:
							<br>
							
							<ol>
								<li>Emergencies</li>
								<li>Patients with appointments</li>
								<li>Patients without appointments</li>
							</ol>
							
							Appointments are booked at 15 minute intervals.
							<br><br>
							Sometimes a long appointment may be necessary; for example if you wish to discuss more than one issue or require an insurance medical. Please advise the receptionist of this when making your appointment. It is important to make separate appointments for each patient. Adding extra family members to a single appointment causes delays to other patients. You may phone the practice before your appointment to check whether your doctor is running on time. As a courtesy to you, if the Doctor is running significantly behind, we will endeavour to contact you to let you know the wait time, or to allow you to rebook your appointment.
						</div>
					</div>
				</div>
				
				<div class="card">
					<div class="card-header" role="tab" id="heading3" class="collapsed" data-toggle="collapse" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
						<h5 class="mb-0">
							Delays
						</h5>
					</div>
					<div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3" data-parent="#accordion">
						<div class="card-body">
							Our aim is to see our patients on time. We realise that you often have other time obligations. If we are running late, then it may well be the result of an emergency and we appreciate your patience in this situation.
							<br><br>
							We ask, that when booking your appointment, consider what issues you wish to discuss with your Doctor, and book a longer consultation if necessary. Our reception staff will be able to advise you on this.
							<br><br>
							If your consultation time has run out, please let the Doctor know you have further problems you wish to discuss, and you will book a future appointment.
							<br><br>
							Please book an individual appointment for each family member needing to be seen. This will help the Doctor run to time and avoid delays for other patients. This will also allow the Doctor to give each individual the time they deserve rather than being rushed.
						</div>
					</div>
				</div>
				
				<div class="card">
					<div class="card-header" role="tab" id="heading4" class="collapsed" data-toggle="collapse" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
						<h5 class="mb-0">
							Missed Appointments
						</h5>
					</div>
					<div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordion">
						<div class="card-body">
							If a booked appointment is not attended by you and insufficient or no notice is provided to the practice, the practice may charge a cancellation fee of $30 per appointment. Please note that this fee is a private fee and is not refundable under Medicare. If more than one appointments are not attended without notifying the practice, you may not be able to rebook until you have settled your account. Please be considerate of fellow patients and the Doctor's and staff of the practice. This policy is intended to facilitate on time appointments for all of our patients.
						</div>
					</div>
				</div>
				
				<div class="card">
					<div class="card-header" role="tab" id="heading5" class="collapsed" data-toggle="collapse" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
						<h5 class="mb-0">
							Prescriptions
						</h5>
					</div>
					<div id="collapse5" class="collapse" role="tabpanel" aria-labelledby="heading5" data-parent="#accordion">
						<div class="card-body">
							We prefer that you request sufficient prescriptions until your next appointment date. However, at the discretion of your Doctor, and depending on your medical condition, a prescription may be able to be provided without an appointment. A non-Medicare fee of $20.00 applies for this service. 24 hours notice is advisable.
						</div>
					</div>
				</div>
				
				<div class="card">
					<div class="card-header" role="tab" id="heading6" class="collapsed" data-toggle="collapse" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
						<h5 class="mb-0">
							Referrals
						</h5>
					</div>
					<div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="heading6" data-parent="#accordion">
						<div class="card-body">
							The Doctors at our practice prefer to see you to check on the ongoing need for you to see your specialist and update the specialist about your progress, so an appointment is generally necessary for renewal of referrals. In some circumstances at your doctor’s discretion, a referral may be able to be provided without an appointment. A non-Medicare fee of $20.00 applies for this service.
							<br><br>
							Referral to a new specialist doctor always requires a consultation with your doctor. Referrals cannot be backdated.
						</div>
					</div>
				</div>
				
				<div class="card">
					<div class="card-header" role="tab" id="heading7" class="collapsed" data-toggle="collapse" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
						<h5 class="mb-0">
							Telephone Access
						</h5>
					</div>
					<div id="collapse7" class="collapse" role="tabpanel" aria-labelledby="heading7" data-parent="#accordion">
						<div class="card-body">
							For routine matters, the doctor may be able to take your phone call between 1.00pm and 2.00pm. If the doctor is busy, they may need to return your call at a later time. We request that general inquires or for routine test results, please phone after 12 noon weekdays only.
						</div>
					</div>
				</div>
				
				<div class="card">
					<div class="card-header" role="tab" id="heading8" class="collapsed" data-toggle="collapse" href="#collapse8" aria-expanded="false" aria-controls="collapse8">
						<h5 class="mb-0">
						Confidentiality – Privacy Policy
						</h5>
					</div>
					<div id="collapse8" class="collapse" role="tabpanel" aria-labelledby="heading8" data-parent="#accordion">
						<div class="card-body">
							This is and Australian Privacy Principles Compliant Practice
							<br><br>
							Our policy details:
							<br>
							<ul>
							<li>The kinds of information the Practice collects and holds</li>
							<li>How the Practice collects, holds and uses personal information</li>
							<li>How you may access your personal information</li>
							<li>How you may complain if a breach of the Australian Privacy Principles occurs</li>
							<li>Whether the Practice engages with overseas recipients</li>
							<br>
							<li><i>If you wish to receive a copy of the Privacy Policy please speak with one of our friendly staff</i></li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="card">
					<div class="card-header" role="tab" id="heading9" class="collapsed" data-toggle="collapse" href="#collapse9" aria-expanded="false" aria-controls="collapse9">
						<h5 class="mb-0">
							Consultation Fees
						</h5>
					</div>
					<div id="collapse9" class="collapse" role="tabpanel" aria-labelledby="heading9" data-parent="#accordion">
						<div class="card-body">
							Children of school age and Pension Card holders are bulk billed within normal hours.
							<br><br>
							‘Out of hours’ is regarded as after 5.00pm weekdays, Saturdays and Public holidays.
							<br><br>
							Health Care Card holders are charged at a concessional rate.
							<br><br>
							We charge a private fee for most other consultations.
							<br><br>
							Some doctors may charge a concessional rate for pensioners.
							<br><br>
							Fees must be paid in full at the time of consultation. We accept cash, EFTPOS and credit cards.
							<br><br>
							<ul>
								<li>A private fee for a standard consultation is $72.00 with a $37.05 rebate from Medicare (you are out of pocket $34.95), for concession cardholders the fee for a standard consultation is $64.00 with a $37.05 rebate (out of pocket $26.95). We are happy to lodge your Medicare claim form for you.</li>
								<li>A private fee is charged for prescriptions and repeat specialist referral letters prepared by the doctor outside of a consultation.</li>
								<li>Workers’ compensation consultations may be billed to WorkCover, however in most circumstances we ask for payment at time of consultation. You will be reimbursed by WorkCover if they accept your claim. The cost for this is $78.00. You may also be charged a facility fee which will also be reimbursed by WorkCover if your claim is accepted.</li>
								<li>Longer consultations are charged at higher rates, but we endeavour to keep your out of pocket expenses at or about the same rate for shorter consultations.</li>
								<li>We charge a private fee for most consultations, and for most procedures and medicals.</li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="card">
					<div class="card-header" role="tab" id="heading10" class="collapsed" data-toggle="collapse" href="#collapse10" aria-expanded="false" aria-controls="collapse10">
						<h5 class="mb-0">
							Recall Systems
						</h5>
					</div>
					<div id="collapse10" class="collapse" role="tabpanel" aria-labelledby="heading10" data-parent="#accordion">
						<div class="card-body">
							Unless you request otherwise, we may place you on a recall list for preventive health checks, such as Pap Smears, Diabetes and Heart Disease care, annual ‘Health Assessments’ for the over 75's, and other advisable checks.
							<br><br>
							You may be contacted by phone, mail, email or SMS, unless you advise us otherwise.
						</div>
					</div>
				</div>
				
				<div class="card">
					<div class="card-header" role="tab" id="heading11" class="collapsed" data-toggle="collapse" href="#collapse11" aria-expanded="false" aria-controls="collapse11">
						<h5 class="mb-0">
							Out of Practice Visits
						</h5>
					</div>
					<div id="collapse11" class="collapse" role="tabpanel" aria-labelledby="heading11" data-parent="#accordion">
						<div class="card-body">
							These visits are available to practice patients who live in the local area and who are too sick to come to the practice, but do not, in the Doctor’s opinion, require hospital assessment. Requests are best made before 9am. Visits may be done at lunchtime or after hours. Home visits are not bulk billed.
						</div>
					</div>
				</div>
				
				<div class="card">
					<div class="card-header" role="tab" id="heading12" class="collapsed" data-toggle="collapse" href="#collapse12" aria-expanded="false" aria-controls="collapse12">
						<h5 class="mb-0">
							Test Results
						</h5>
					</div>
					<div id="collapse12" class="collapse" role="tabpanel" aria-labelledby="heading12" data-parent="#accordion">
						<div class="card-body">
							A consultation with the doctor is generally required to receive and discuss pathology/blood test results, and plan any further management. If agreed with your doctor during the consultation when tests are ordered, results of routine tests may be available over the telephone.
						</div>
					</div>
				</div>
				
				<div class="card">
					<div class="card-header" role="tab" id="heading13" class="collapsed" data-toggle="collapse" href="#collapse13" aria-expanded="false" aria-controls="collapse13">
						<h5 class="mb-0">
							Commitment to Postgraduate Education
						</h5>
					</div>
					<div id="collapse13" class="collapse" role="tabpanel" aria-labelledby="heading13" data-parent="#accordion">
						<div class="card-body">
							We are an accredited postgraduate training practice with the Royal Australian College of General Practitioners. Dr Cafferky is an accredited General Practice Supervisor. At times, the practice hosts doctors who are Registrars in the General Practice Education Training Program. They are fully qualified and experienced doctors who are undertaking further study to gain qualifications in the specialty of General Practice.
							<br><br>
							From time to time, the practice also hosts medical students on General Practice placement.
						</div>
					</div>
				</div>
				
				<div class="card">
					<div class="card-header" role="tab" id="heading14" class="collapsed" data-toggle="collapse" href="#collapse14" aria-expanded="false" aria-controls="collapse14">
						<h5 class="mb-0">
							Patient Feedback
						</h5>
					</div>
					<div id="collapse14" class="collapse" role="tabpanel" aria-labelledby="heading14" data-parent="#accordion">
						<div class="card-body">
							From time to time, this practice invites patients to complete a questionnaire on their views of the practice and how we could improve. These surveys are confidential. If you are unhappy with any aspect of the care you receive, please feel free to discuss this with your doctor or the Practice Manager. If we are unable to resolve the issue, you may wish to contact:
							<br><br>
							QLD Health Ombudsman, ph: 133 646 or <a href="http://www.oho.qld.gov.au/">www.oho.qld.gov.au</a>
							<br><br>
							We strive to deliver the highest standard of family health care in a friendly supportive environment. We welcome your feedback to continually improve our services.
						</div>
					</div>
				</div>
				
				<div class="card">
					<div class="card-header" role="tab" id="heading15" class="collapsed" data-toggle="collapse" href="#collapse15" aria-expanded="false" aria-controls="collapse15">
						<h5 class="mb-0">
							Nursing Staff
						</h5>
					</div>
					<div id="collapse15" class="collapse" role="tabpanel" aria-labelledby="heading15" data-parent="#accordion">
						<div class="card-body">
							Our team of nurses provide high level professional care and support in all areas of general practice. Our nurses hold high level qualifications, and are trained in areas of prevention for chronic diseases such as diabetes and asthma. Nurse led clinics offer you a range of support and advice that links in well with the care your doctor wishes you to have. Phone to talk to one of our nurses regarding services they provide today.
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="col-md-12 ml-3 ml-auto mr-auto">
				<h2>Location</h2>
				<div id="map"></div>
			</div>
		</div>
	</div>
	<br>
	<?php include_once 'parts/footer.php'; ?>
</body>

</html>