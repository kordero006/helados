$(document).ready(function(){
			//Check to see if the window is top if not then display button
			$(window).scroll(function(){
				if ($(this).scrollTop() > 300) {
					$('.top').fadeIn();
				} else {
					$('.top').fadeOut();
				}
			});
		});