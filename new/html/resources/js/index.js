$(document).ready(function () {
	onScaleChange();
});
$(window).resize(function () {
	onScaleChange();
});

function onScaleChange() {
	if (screen.width < 991) {
		$('.navbartop .book.max').addClass('d-none');
		$('.navbartop .book.min').removeClass('d-none');
	}
	else {
		$('.navbartop .book.max').removeClass('d-none');
		$('.navbartop .book.min').addClass('d-none');
	}
	if (screen.width < 540) {
		$('.navbartop .email').addClass('d-none');
	}
	else {
		$('.navbartop .email').removeClass('d-none');
	}
}