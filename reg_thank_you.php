<!--<meta http-equiv="refresh" content="2; index.php">-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<title>Thank you!</title>
		
		<!--(Start) Style Sheets-->
		<link rel="STYLESHEET" type="text/css" href="css/fg_membersite.css">
		
		<!--(Start) Provided by JetDevLLC-->
		<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<link href="css/style.css"            rel="stylesheet" type="text/css" />
		<link href="css/responsive.css"       rel="stylesheet" type="text/css" />
		<link href="favicon.ico"              rel="shortcut icon"  />	
		<!--[if IE 6]>
		<style type="text/css">img, div, { behavior: url("js/iepngfix.htc") }
		</style>
		<![endif]-->
		<!--(End) Provided by JetDevLLC-->
		<!--(End) Style Sheets-->
		
		<!--(Start) Scripts-->
		<!--Scripts-->
		<script src="js/jquery-1.9.0.min.js" type="text/javascript"></script>
		<script src="js/iepngfix_tilebg.js"  type="text/javascript"></script>
		<script src="js/scrollTo.js"         type="text/javascript"></script>
		<script src="js/global.js"           type="text/javascript"></script>
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
		
		
		<!--(End) Scripts-->
		
		
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
					<li><a href="./index.php">Home</a></li>
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
	
		<div id='fg_membersite' align="center">
			<h2>Thanks for registering!</h2>
			Your confirmation email is on its way.
			Please click the link in the email to complete the registration.
		</div>
	</body>
</html>