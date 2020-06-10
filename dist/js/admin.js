$(".menu-content li > a").click(function(e){
	$(".menu-content ul ul").slideUp(), $(this).next().is(":visible") || $(this).next().slideDown(),e.stopPropagation() 
});

$(window).bind("load resize",function(){
	if($(this).width() < 768){
		$(".sidebar-collapse").addClass("collapse");
	}
	else{
		$(".sidebar-collapse").removeClass("collapse");
		$(".sidebar-collapse").removeAttr("style");
	}

});

