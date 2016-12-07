(function(){
	$(".myHone .nav-item").mouseenter(function(){
       $(this).children(".nav-item-sub").css("display","block");
	});
	$(".myHone .nav-item").mouseleave(function(){
       $(this).children(".nav-item-sub").css("display","none");
	});
	$(".btnbox button").click(function(){
       $(this).addClass("cur").siblings().removeClass("cur");
       $(this).parents(".btnbox").siblings(".pullbox").find(".divbox>div").eq($(this).index()).addClass("cur").siblings().removeClass("cur")
	});
})()