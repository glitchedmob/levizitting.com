declare var $;

$(document).ready(() => {
	$(".button-collapse").sideNav();
	$('.modal').modal();
	$('.carousel').carousel({
		fullWidth: true,
		indicators: true
	});
});