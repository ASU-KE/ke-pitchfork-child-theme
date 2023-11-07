// Start your project's JS here.

// Add/remove sticky menu class to anchor menus after a certain scroll distance.
jQuery(document).ready( function() {
jQuery(window).scroll(function(){
	var stickyMenu = jQuery('.uds-anchor-menu'),
	scroll = jQuery(window).scrollTop();

  // Note: the use of several small heroes made me reduce the scroll threshold to 256px.
	if (scroll <= 256) stickyMenu.removeClass('sticky');
	else stickyMenu.addClass('sticky');
	});
})
