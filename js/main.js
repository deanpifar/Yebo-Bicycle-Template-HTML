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
	
	if($(window).scrollTop() > $('.main__work__list-3').offset().top - windowHeight) {
		$('.main__work__list-3 div').first().addClass('animate__fromleft');
		$('.main__work__list-3 div').last().addClass('animate__fromright');
		$('.main__work__list-3-text').addClass('animate__frombottom');
	}
	
	if($(window).scrollTop() > $('.main__twitter').offset().top - windowHeight) {
		$('.main__twitter > *').addClass('animate__fromtop');
	}
	
	if($(window).scrollTop() > $('.main__newsletter').offset().top - windowHeight) {
		$('.main__newsletter > *').addClass('animate__fromtop');
	}
	
});