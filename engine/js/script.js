/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){
//DISABLE RIGHT MENU
	$(this).bind("contextmenu", function(e) {
//			e.preventDefault();
		});
	$('#slideshowHolder #img2,#img3,#img4').css({"display":"none"});
	//$(this).parent().children(".topCancelLink").css({"display":"inline-block"});
	$('.jimgMenu ul').kwicks({max: 310, duration: 300, easing: 'easeOutQuad'});
	$('#c5t_body').siblings().css('display','none');
	
//	var d=new Date();
//	var bgImg = d.getDay();
//	$("body").css('background-color', bgImg+'.jpg');

	
});

$(function(){
		$('#contact').contactable({
	 		subject: 'A Feeback Message'
	 	});
});