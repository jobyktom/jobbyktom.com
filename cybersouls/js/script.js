$(document).ready(function() {
	$(".tooltips").hover(
		function() { $(this).contents("#spanTxt:last-child").css({ display: "block" }); },
		function() { $(this).contents("#spanTxt:last-child").css({ display: "none" }); }
	);
	$(".tooltips").mousemove(function(e) {
		var mousex = e.pageX + 10;
		var mousey = e.pageY + 5;
		$(this).contents("#spanTxt:last-child").css({  top: mousey, left: mousex });
	});
});