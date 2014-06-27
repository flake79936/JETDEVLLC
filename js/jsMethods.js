/*----(Start) ToolTip Script----*/
function toolTip(){
	$(document).tooltip();
}(document, "script", "twitter-wjs");
/*----(End) ToolTip Script----*/

/*----(Start) Twitter Script----*/
!function(d,s,id){
	var js,fjs=d.getElementsByTagName(s)[0];
	if(!d.getElementById(id)){
		js = d.createElement(s);
		js.id=id;
		js.src="//platform.twitter.com/widgets.js";
		fjs.parentNode.insertBefore(js,fjs);
	}
}(document, "script", "twitter-wjs");
/*----(End) Twitter script----*/

/*----(Start) Hashtag Script----*/
!function(d,s,id){
	var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
	if(!d.getElementById(id)){
		js=d.createElement(s);
		js.id=id;
		js.src=p+'://platform.twitter.com/widgets.js';
		fjs.parentNode.insertBefore(js,fjs);
	}
}(document, 'script', 'twitter-wjs');
/*----(End) Hashtag script----*/

/*----(Start) Mobile Menu Toggle----*/
function mobileMenuBtn(){
	$(".mobile-menu-list").hide();
	$('.mobile-menu-btn').click(function(){
		$(this).toggleClass("active");
		$(".mobile-menu-list").slideToggle(200);
	});
}(document, "script", "twitter-wjs");
/*----(End) Mobile Menu Toggle----*/