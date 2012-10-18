var IE6 = (navigator.userAgent.indexOf("MSIE 6")>=0) ? true : false;
if(IE6){

	$(function(){
		
		$("<div>")
			.css({
				'position': 'absolute',
				'top': '0px',
				'left': '0px',
				backgroundColor: 'black',
				'opacity': '0.75',
				'width': '100%',
				'height': $(window).height(),
				zIndex: 5000
			})
			.appendTo("body");
			
		$("<div><p><br /><strong>Sorry! This page doesn't support Internet Explorer 6.</strong><br /><br />If you'd like to view our content please <a href='http://getfirefox.org'>upgrade your browser</a></p>")
			.css({
				backgroundColor: 'lightblue',
				'top': '50%',
				'left': '50%',
				marginLeft: -210,
				marginTop: -100,
				width: 410,
				padding: 20,
				height: 200,
				'position': 'absolute',
				zIndex: 6000
			})
			.appendTo("body");
	});		
}