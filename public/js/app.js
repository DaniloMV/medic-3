$(function() {
	console.log('ready!');
	$('.collapse').collapse();
	$(".clickable-row").click(function() { window.document.location = $(this).data("href"); });

	

});