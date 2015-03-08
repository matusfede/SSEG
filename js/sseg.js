jQuery(document).ready(function ($) {
	var alto = $(window).height();
	$('#slide1').height(alto-120);

	var dis_menu = $('.container').width();
	var spacio = 0;
	$('#bottom_menu li').each(function(){
		spacio += $(this).width();
	});
	$('#bottom_menu li').css('margin-right', spacio/3);
});
