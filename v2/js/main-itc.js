//loader
$(document).ready(function() {
	
	setTimeout(function(){
		$('body').addClass('loaded');
		$('h1').css('color','#222222');
	}, 3000);
	
});


/************** LightBox *********************/
	$(function(){
		$('[data-rel="lightbox"]').lightbox();
	});