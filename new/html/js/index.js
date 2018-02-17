$(document).ready(function () {
	onScaleChangeIndex();
	setInterval(function() {
		onScaleChangeIndex();
		onScaleChangeNavbar();
	}, 250);

	//anti stone age web tech
	$(".carousel-item").each(function(i) {
		$(this).css("background-image", $(this).data("lazy-style"));
	})
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
