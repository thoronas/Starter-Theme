jQuery(document).ready(function($) {

	$(".burger-trigger").click(function(e){
		e.preventDefault();
		$('.burger-trigger').toggleClass('open');
		$('.mobile-navigation-container').toggleClass('open');
		$('body').toggleClass('custom-overflow');
	});

	$("#mobile-nav > li").find('.sub-menu').parent().children('a').after('<span class="menu-slide"></span>');

	$("#mobile-nav > li .menu-slide").on('click',function(e){
		$(this).toggleClass('open');
		e.preventDefault();
		e.stopPropagation();

		$(this).siblings('.sub-menu').stop(true, true).slideToggle(200);
	});

	$('.fancybox').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
	});

});
