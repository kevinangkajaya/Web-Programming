$(document).ready(function(){
	
	$slideCount = $('#slider .slides .slide').length;
	$slideWidth = $('#slider .slides .slide').width();
	$slideHeight = $('#slider .slides .slide').height();
	$totalWidth = $slideCount * $slideWidth;

	$('#slider').css({width: $slideWidth, height: $slideHeight});
	$('#slider .slides').css({
		width: $totalWidth, marginLeft: - $slideWidth
	});

	$('#laquo').click(function(){
		$('#slider .slides').animate({left: + $slideWidth}, 500, function(){
				$('#slider .slides .slide:last-child').prependTo('#slider .slides');
				$('#slider .slides').css('left', '');
		});
	});

	$('#raquo').click(function(){
		$('#slider .slides').animate({left: - $slideWidth}, 500, function(){
				$('#slider .slides .slide:first-child').appendTo('#slider .slides');
				$('#slider .slides').css('left', '');
		});
	});

	setInterval(function(){
		$('#slider .slides').animate({left: - $slideWidth}, 500, function(){
				$('#slider .slides .slide:first-child').appendTo('#slider .slides');
				$('#slider .slides').css('left', '');
		});
	}, 5000);
});