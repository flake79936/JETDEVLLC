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
		<script src="js/iepngfix_tilebg.js"  type="text/javascript"></script>
		<script src="js/scrollTo.js"         type="text/javascript"></script>
		<script src="js/global.js"           type="text/javascript"></script>
		<script type="text/javascript">
			$(function(){
				$("#createEvent-nav, #findstadarena-nav, #emaildeals-nav, #product-nav, #events-nav").scrollTo({ offset:-54 });
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
	
	<body style="background-color: black;">
		<div class="header-wrap">
			<div class="header">
				<a class="logout-btn" href='logout.php'>Log Out</a>
				<ul class="head-social-icons">
					<li><a class="facebook"   href="#"></a></li>
					<li><a class="twitter"    href="#"></a></li>
					<li><a class="googleplus" href="#"></a></li>
				</ul><!--//head-social-icons-->

				<ul class="nav">
					<li><a href="./EventCreation.php">Create Event</a></li>
					<li><a href="./Search-Form.php">Search</a></li>
					
					<li><span class="shadow">|</span></li>
					
					<!--<li><a id="findstadarena-nav" href="#findstadarena">Find a Stadium/Arena</a></li>-->
					
					<li><span class="shadow">|</span></li>
					
					<!--<li><a id="emaildeals-nav" href="#emaildeals">Email Deals</a></li>-->
					
					<li><span class="shadow">|</span></li>
					
					<li><a href="./eventAccor.php">Your Events</a></li>
					
					<li><span class="shadow">|</span></li>
					
					<li><a href="#events">Events</a></li>
				</ul>
				<div class="mobile-menu-btn"><span class="icon-reorder"></span></div>
			</div><!--//header-->
		</div><!--//header-wrap-->
		
		<div class="mobile-menu-list">
			<ul>
				<li><a class="mobile-nav" href="#createEvent">createEvent</a></li>
				<!--<li><a class="mobile-nav" href="#findstadarena">Find a Stadium/Arena</a></li>-->
				<!--<li><a class="mobile-nav" href="#emaildeals">Email Deals</a></li>-->
				<!--<li><a class="mobile-nav" href="#product">Product</a></li>-->
				<li><a class="mobile-nav" href="#Events">Events</a></li>
				<li><a class="mobile-nav" href="login.php"><span class="icon-lock"></span> Login</a></li>
			</ul>   
		</div><!--//mobile-menu-list-->

	</body>
</html>