$(document).ready(function() {
	
	var mainWorkListHeight = $('.main__work__list-text').outerHeight(true);
	mainWorkListHeight += 195;
	var mainWorkListHeightSmall = $('.main__work__list-3-text').outerHeight(true);
	mainWorkListHeightSmall += 255;
	
	$('.main__work__list-image').css('height', mainWorkListHeight + 'px');
	$('.main__work__list-3-image-small').css('height', mainWorkListHeightSmall + 'px');
	
});