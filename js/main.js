var windowHeight;

windowHeight = $(window).outerHeight();

$('a[href*=\\#]:not([href=\\#])').click(function() {
	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
		|| location.hostname == this.hostname) {
		
		var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		   if (target.length) {
			 $('html,body').animate({
				 scrollTop: target.offset().top
			}, 1000);
			return false;
		}
	}
});

$(document).on('scroll', function() {

	if($(window).scrollTop() > $('#worklist-1').offset().top - windowHeight) {
		$('#worklist-1 div').first().addClass('animate__fromleft');
		$('#worklist-1 div').last().addClass('animate__fromright');
	}
	
	if($(window).scrollTop() > $('#worklist-2').offset().top - windowHeight) {
		$('#worklist-2 div').first().addClass('animate__fromleft');
		$('#worklist-2 div').last().addClass('animate__fromright');
	}
	
	if($(window).scrollTop() > $('.main__work__list-double').offset().top - windowHeight) {
		$('.main__work__list-double div').first().addClass('animate__fromleft');
		$('.main__work__list-double div').last().addClass('animate__fromright');
		$('.main__work__list-double-text').addClass('animate__frombottom');
	}
	
	if($(window).scrollTop() > $('.main__twitter').offset().top - windowHeight) {
		$('.main__twitter > *').addClass('animate__fromtop');
	}
	
	if($(window).scrollTop() > $('.main__shop').offset().top - windowHeight) {
		$('.main__shop__list').addClass('animate__frombottom');
	}
	
	if($(window).scrollTop() > $('.main__shopbutton').offset().top - windowHeight) {
		$('.main__shopbutton a').addClass('animate__frombottom');
	}
	
	if($(window).scrollTop() > $('.main__newsletter').offset().top - windowHeight) {
		$('.main__newsletter > *').addClass('animate__fromtop');
	}
	
	if($(window).scrollTop() > $('.footer').offset().top - windowHeight) {
		$('.footer__address').addClass('animate__fromleft');
		$('.footer__social').addClass('animate__frombottom');
		$('.footer__copyright').addClass('animate__fromright');
	}
	
});