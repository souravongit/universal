$(document).ready(function(){
	$("#navigation ul li").hover(function(){ 
		$(".subnav",this).slideDown("fast");
		}, function(){ 
		$(".subnav",this).slideUp("fast");
	});


	$(".toggle").click(function(){
		$(this).toggleClass("").next().slideToggle(500);
	});

});