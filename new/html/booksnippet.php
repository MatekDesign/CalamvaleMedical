<!-- All CSS for this should be placed in the site.css file please :D -->

<div class="bookappointment" id="bookappointment">
	<div class="vertical-align">
	    <div class="card book-content">
			<div>
			    <script data-he-id="16444" data-he-width="500px" width="500px" src="https://healthengine.com.au/webplugin/appointments.js"></script>
			    <button class="btn btn-danger book-button" type="submit" onClick="document.getElementById('bookappointment').style.display = 'none';">Close</button>
		    <div>
		</div>
	</div>
</div>
<script>
	function headerButtonClicked() {
		document.getElementById('bookappointment').style.display = 'block';
	}
	/*
		function headerButtonClicked() {
		$( '#myModal' ).modal( 'toggle' );
	}
	*/
</script>