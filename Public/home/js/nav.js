$(function () {
    var st = 90;
    $('#nav_all>li').mouseenter(function () {
        $(this).find('ul').stop(false, true).slideDown(st);
    }).mouseleave(function () {
        $(this).find('ul').stop(false, true).slideUp(st);
    });

	$(".sanMlogId").focus(function(){
		$(this).css("background-image","none");
	});
	$(".sanMlogId").blur(function(){
			$(this).css({"background-image":"url(images/id_input_bg.png)","background-repeat":"no-repeat","background-position":"8px 11px","background-color":"#f2f1ef;"})
	});
	$(".sanMlogPw").focus(function(){
		$(this).css("background-image","none");
	});
	$(".sanMlogPw").blur(function(){
			$(this).css({"background-image":"url(images/id_input_bg.png)","background-repeat":"no-repeat","background-position":"8px -29px","background-color":"#f2f1ef;"})
	});

});