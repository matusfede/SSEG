jQuery(document).ready(function ($) {
	$('.slide').height($(window).height()-209);

	$('#slide1').height($(window).height()-120);	

	var imagen = ($(window).height()-120)/4;
	$('#escudo').height(imagen*3);

	var spacio = 0;
	$('#bottom_menu li').each(function() { spacio += $(this).width(); });
	var dis_menu = (spacio - $('.container').width())/3;
	$('#bottom_menu li').css('margin-right', dis_menu);

	$(window).on('scroll', function() {
		//if(($(window).scrollTop()+50) > $('#bottom_menu').position().top) {
		if($(window).scrollTop() >= 500) {
			$('#bottom_menu').css('display', 'none');
			$('#top_menu').fadeIn('slow');
		} else {
			$('#bottom_menu').fadeIn('slow');
			$('#top_menu').css('display', 'none');
		}			
	});

});
