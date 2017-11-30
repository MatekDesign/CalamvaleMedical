$(document).ready(function () {
	onScaleChangeIndex();
});
$(window).resize(function () {
	onScaleChangeIndex();
});

function onScaleChangeIndex() {
	if (window.innerWidth < 767) {
		$('.content-4 #2').addClass('d-none');
	}
	else {
		$('.content-4 #2').removeClass('d-none');
	}
}