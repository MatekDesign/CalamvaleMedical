$(document).ready(function () {
	onScaleChangeNavbar();
	$(".navbar-brand").addClass("collapsed"); //Fix retarted DOM loading order
	
	$(".navbar-toggler").click(function() {
		setTimeout(function() {
			onScaleChangeNavbar();
		}, 1); // 1ms for next tick so click event propergated
	});
});
$(window).resize(function () {
	onScaleChangeNavbar();
});

function onScaleChangeNavbar() {
	if (window.innerWidth < 991) {
		$('.navbartop .book.max').addClass('d-none');
		$('.navbartop .book.min').removeClass('d-none');
	}
	else {
		$('.navbartop .book.max').removeClass('d-none');
		$('.navbartop .book.min').addClass('d-none');
	}
	if (window.innerWidth < 540) {
		$('.navbartop .email').addClass('d-none');
	}
	else {
		$('.navbartop .email').removeClass('d-none');
	}
	
	if($(".navbar-toggler").hasClass("collapsed")) {
		setTimeout(function() {
			$(".navbar-brand").addClass("collapsed");
		}, 250);	
	}
   else {
		$(".navbar-brand").removeClass("collapsed");
	}
}