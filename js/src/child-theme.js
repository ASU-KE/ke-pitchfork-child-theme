// Start your project's JS here.

// Add/remove sticky menu class to anchor menus after a certain scroll distance.
jQuery(window).scroll(function(){
	var stickyMenu = jQuery('.uds-anchor-menu'),
	scroll = jQuery(window).scrollTop();

	if (scroll <= 500) stickyMenu.removeClass('sticky');
	else stickyMenu.addClass('sticky');
	});
