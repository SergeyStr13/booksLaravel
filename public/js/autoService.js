$(document).ready(function () {

	var button =  $('.container button.countF');
	var span =  $('.container button.countF span.badge');
	var valueSpan = +span.text();
	button.click(function () {
		var value = ++valueSpan;
		console.log(span);
		console.log(value);
		span.text(value);
	});
});

