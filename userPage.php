<?PHP
	require_once("./include/membersite_config.php");
	/*This part ckecks whether there is a session or not.*/
	if(!$fgmembersite->CheckLogin()){
		$fgmembersite->RedirectToURL("index.php");
		exit;
	}
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>User Account</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="format-detection" content="email=no" />
		
		<!--Style Sheets-->
		<link rel="STYLESHEET" type="text/css" href="css/fg_membersite.css">
		<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<link href="css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="favicon.ico" />	
		<!--[if IE 6]>
		<style type="text/css">img, div, { behavior: url("js/iepngfix.htc") }
		</style>
		<![endif]-->
		
		<!--Scripts-->
		<script src="js/jquery-1.9.0.min.js" type="text/javascript"></script>
		<script src="js/iepngfix_tilebg.js" type="text/javascript"></script>
		<script src="js/scrollTo.js" type="text/javascript"></script>
		<script src="js/global.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(function(){
				$("#talktous-nav, #findstadarena-nav, #emaildeals-nav, #product-nav, #faq-nav").scrollTo({ offset:-54 });
				$(".mobile-nav").scrollTo({ offset:0 });
			});

			$(document).ready(function(){
				$(".mobile-menu-list").hide();
				$('.mobile-menu-btn').click(function(){
					$(this).toggleClass("active");
					$(".mobile-menu-list").slideToggle(200);
				});
			});
		</script>
		
	</head>
	
	<body>
		<div class="header-wrap">
			<div class="header">
				<a class="login-btn" href="login.php">Log In</a>
				<ul class="head-social-icons">
					<li><a class="facebook"   href="#"></a></li>
					<li><a class="twitter"    href="#"></a></li>
					<li><a class="googleplus" href="#"></a></li>
				</ul><!--//head-social-icons-->

				<ul class="nav">
					<li><a id="talktous-nav" href="#talktous">Talk to Us</a></li>
					<li><span class="shadow">|</span></li>
					<li><a id="findstadarena-nav" href="#findstadarena">Find a Stadium/Arena</a></li>
					<li><span class="shadow">|</span></li>
					<li><a id="emaildeals-nav" href="#emaildeals">Email Deals</a></li>
					<li><span class="shadow">|</span></li>
					<li><a id="product-nav" href="#product">Product</a></li>
					<li><span class="shadow">|</span></li>
					<li><a href="#Events">Events</a></li>
					<!--<li><a id="faq-nav" href="#faq">Event</a></li>-->
				</ul>
				<div class="mobile-menu-btn"><span class="icon-reorder"></span></div>
			</div><!--//header-->
		</div><!--//header-wrap-->

		<div class="mobile-menu-list">
			<ul>
				<li><a class="mobile-nav" href="#talktous">Talk to Us</a></li>
				<li><a class="mobile-nav" href="#findstadarena">Find a Stadium/Arena</a></li>
				<li><a class="mobile-nav" href="#emaildeals">Email Deals</a></li>
				<li><a class="mobile-nav" href="#product">Product</a></li>
				<li><a class="mobile-nav" href="#faq">FAQ</a></li>
				<li><a class="mobile-nav" href="#"><span class="icon-lock"></span> Login</a></li>
			</ul>   
		</div><!--//mobile-menu-list-->

		<div class="wrap">
			<div id="talktous" class="below-header-bg"></div>
			<div class="banner-box">
				<div class="left-col"><img src="images/two-phone-with-shadow.png" alt="" /></div>
				<div class="right-col">
					
				</div><!--//right-col-->
				
			</div><!--//banner-box-->
			<div class="black-bar-banner"></div>

		</div><!--//wrap-->
	</body>
</html>