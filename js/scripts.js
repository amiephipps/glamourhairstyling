$(function(){

	$('header .banner ul li a').addClass('sliding-u-l-r');

	$('.hamburger').on('click', function() {
	  $('header .banner ul.siteMenu').toggleClass('js-expand');
	});

});