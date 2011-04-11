$(function(){
	$("#login").prepend('<div id="glowContainer"><div id="glow"></div></div>');
	$("#glowContainer").hide();
	$("input").focus(function(){
		$("#glowContainer").stop().fadeIn();
	});
	$("input").blur(function(){
		$("#glowContainer").stop().fadeOut();
	});
	
	function animateGlow(){
		div = $("#glow");
		div.css({backgroundPosition:"0 0"})
			.animate({backgroundPosition:"-3000px 0"},25000,"linear",animateGlow);
	}
	animateGlow();
});