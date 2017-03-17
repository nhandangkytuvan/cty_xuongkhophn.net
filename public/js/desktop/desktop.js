$(document).ready(function() {
	$('.flex14col1').hover(function() {
		$(this).children('div').addClass('active');
		$(this).siblings('div.flex14col1').children('div').removeClass('active');
		var index = $(this).index();
		$('.flex13 .flex13col2').children('div').eq(index).addClass('active');
		$('.flex13 .flex13col2').children('div').eq(index).siblings('div').removeClass('active');
	}, function() {
		
	});
	$('.flex5col1').hover(function() {
		$(this).addClass('active');
		$(this).siblings('div').removeClass('active');
		var index = $(this).index();
		$('.tabs-content-1-1 >div').eq(index).addClass('active');
		$('.tabs-content-1-1 >div').eq(index).siblings('div').removeClass('active');
		$('.flex9col2 >img').eq(index).addClass('active');
		$('.flex9col2 >img').eq(index).siblings('img').removeClass('active');

		$('.flex8col2_topbv >div').eq(index).addClass('active');
		$('.flex8col2_topbv >div').eq(index).siblings('div').removeClass('active');

	}, function() {
		
	});

	$('.row5 .tabs3 >div').hover(function() {
		$(this).addClass('active').siblings('div').removeClass('active');
		var index = $(this).index();
		$('.row5 .tabs-content3').children('div').eq(index).removeClass('hide').addClass('show');
		$('.row5 .tabs-content3').children('div').eq(index).siblings('div').removeClass('show').addClass('hide');
	}, function() {
		
	});

	$('body a[href^="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en"]').each(function(index, el) {
		$(this).attr('target', '_blank');		
	});
});