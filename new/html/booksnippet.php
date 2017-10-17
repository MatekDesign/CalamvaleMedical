<!-- All CSS for this should be placed in the site.css file please :D -->

<div class="bookappointment" id="bookappointment">
	<div class="vertical-align">
		<div class="card book-content">
			<script data-he-id="16444" data-he-button="true" data-he-img="HE_BOOKNOW_1.png" src="https://healthengine.com.au/webplugin/appointments.js"></script>
			or<br> Call <a href="tel:07 3272 5155">(07) 3272 5155</a><br>
			<button class="btn btn-danger book-button" type="submit" onClick="document.getElementById('bookappointment').style.display = 'none';">Close</button>
		</div>
	</div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
			
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<script>
	function headerButtonClicked() {
		$( '#myModal' ).modal( 'toggle' );
	}
</script>