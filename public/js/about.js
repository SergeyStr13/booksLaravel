$(document).ready(function () {
	$('.header').height($(window).height());
});

$(".navbar a").click(function(e){
	e.preventDefault();
	//$("body,html").animate({
	//	scrollTop:$("#" + $(this).data('value')).offset().top
	//},1000);
	return false;
});