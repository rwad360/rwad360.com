/*
**		scroll to top button 
**		VER 1.0
**
*/
	var scrollButton = $("#scroll-top");
	$(window).scroll(function()
	{
		$(this).scrollTop() >= 100 ? scrollButton.show(): scrollButton.hide();
	});
	
	scrollButton.click(function()
	{
		$("html,body").animate({scrollTop:0},1000);
	});
	
/*
**		dynamic clock
**		VER 1.0
**
*/

function showTime(){
	'use strict';
	var now = new Date(),
		hours = now.getHours(),
		minutes = now.getMinutes(),
		seconds = now.getSeconds(),
		en = 'ص';
	
	if(hours > 12){
		en = 'م';
	}
	
	if(hours > 12){
		hours = hours - 12;
	}
	
	if(hours == 12){
		hours = 0;
	}
	
	if(hours < 10){
		hours = '0' + hours;
	}
	
	if(minutes < 10){
		minutes = '0' + minutes;
	}
	
	if(seconds < 10){
		seconds = '0' + seconds;
	}
	
	document.getElementById('clock').innerHTML = hours + ':' + minutes + ':' + seconds + ' ' + en;

}

window.onload = function () {
	'use strict';
	
	setInterval(showTime, 500);
};	


/*
**		myCarousel setup
**		VER 1.0
**
*/

$(document).ready(function(){
	
    // Activate Carousel with 10 sec per slide
    $("#myCarousel").carousel({interval: 100000}); 
   
});

/*
**		fitText setup
**		VER 1.0
**		To make our heading responsive
**		add fitHeading class to activate
**		
*/

$(function(){
	
    'use strict';
	
	jQuery(".fitHeading").fitText(2.1);
   
});

/*
**		contact form validation setup
**		VER 1.0
**
*/

$(function() {
		'use strict';
		
		var userError = true,
			emailError= true,
			cellError= true,
			msgError  = true;
			
		$('.username').blur(function() {
			if($(this).val().length < 4) {
				$(this).css('border','1px solid #080')
				$(this).parent().find('.custom-alert').fadeIn(200);
				$(this).parent().find('.asterisx').fadeIn(100);
				userError = true;
			}else{
				$(this).css('border','1px solid gray')
				$(this).parent().find('.custom-alert').fadeOut(200);
				$(this).parent().find('.asterisx').fadeOut(100);
				userError = false;
			}
		});
		$('.email').blur(function() {
			if($(this).val().length < 1) {
				$(this).css('border','1px solid #080')
				$(this).parent().find('.custom-alert').fadeIn(200);
				$(this).parent().find('.asterisx').fadeIn(100);
				emailError = true;
			}else{
				$(this).css('border','1px solid gray')
				$(this).parent().find('.custom-alert').fadeOut(200);
				$(this).parent().find('.asterisx').fadeOut(100);
				emailError = false;
			}
		});	
		$('.cellphone').blur(function() {
			if($(this).val().length < 10) {
				$(this).css('border','1px solid #080')
				$(this).parent().find('.custom-alert').fadeIn(200);
				$(this).parent().find('.asterisx').fadeIn(100);
				cellError = true;
			}else{
				$(this).css('border','1px solid gray')
				$(this).parent().find('.custom-alert').fadeOut(200);
				$(this).parent().find('.asterisx').fadeOut(100);
				cellError = false;
			}
		});
		$('.message').blur(function() {
			if($(this).val().length < 25) {
				$(this).css('border','1px solid #080')
				$(this).parent().find('.custom-alert').fadeIn(200);
				$(this).parent().find('.asterisx').fadeIn(100);
				msgError = true;
			}else{
				$(this).css('border','1px solid gray')
				$(this).parent().find('.custom-alert').fadeOut(200);
				$(this).parent().find('.asterisx').fadeOut(100);
				msgError = false;
			}
		});
		$('.contact-form').submit(function (e) {
			if (userError === true || emailError === true || msgError === true || msgError === true ) {
				e.preventDefault();
			}
			});
});





