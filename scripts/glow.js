function animateGlow(div){
    div.css({backgroundPosition:"0 0"})
        .animate({backgroundPosition:"-3000px 0"},25000,"linear",function(){ animateGlow(div); })
}
 
$(function(){
    $("#login").prepend('<div id="maskContainer"><div id="logmask"></div></div>');
    $("#maskContainer").css("opacity",0);
    $("input").focus(function(){
        $("#maskContainer").stop().fadeTo(500,1);
    });
    $("input").blur(function(){
        $("#maskContainer").fadeTo(500,0);
    });
    animateGlow($("#logmask"));
});
