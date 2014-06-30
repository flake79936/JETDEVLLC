<<<<<<< HEAD
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
		<link href="favicon.ico" rel="shortcut icon"  />
		<title>Registered User Page</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="format-detection" content="email=no" />
		
		<!--(Start) Style Sheets-->
			<link rel="STYLESHEET" type="text/css" href="css/fg_membersite.css">
			<link href="css/accordion.css" rel="stylesheet" type="text/css" />
			
			<!--(Start) Provided by JetDevLLC-->
				<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
				<link href="css/styleEdit.css"            rel="stylesheet" type="text/css" />
				<link href="css/responsiveEdit.css"       rel="stylesheet" type="text/css" />	
				<!--[if IE 6]>
				<style type="text/css">img, div, { behavior: url("js/iepngfix.htc") }
				</style>
				<![endif]-->
			<!--(End) Provided by JetDevLLC-->
		<!--(End) Style Sheets-->
		
		<!--(Start) Scripts-->
			<script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
				
				<!--(Start) ToolTip Script-->
					<script type="text/javascript">
						$(function(){
							$(document).tooltip();
						});
					</script>
				<!--(End) ToolTip Script-->
				
				<!--(Start) Twitter Script-->
					<script type="text/javascript">
						!function(d,s,id){
							var js,fjs=d.getElementsByTagName(s)[0];
							if(!d.getElementById(id)){
								js = d.createElement(s);
								js.id=id;
								js.src="//platform.twitter.com/widgets.js";
								fjs.parentNode.insertBefore(js,fjs);
							}
						}(document, "script", "twitter-wjs");
					</script>
				<!--(End) Twitter script-->
				
				<!--(Start) Hashtag Script-->
					<script type="text/javascript">
						!function(d,s,id){
							var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
							if(!d.getElementById(id)){
								js=d.createElement(s);
								js.id=id;
								js.src=p+'://platform.twitter.com/widgets.js';
								fjs.parentNode.insertBefore(js,fjs);
							}
						}(document, 'script', 'twitter-wjs');
					</script>
				<!--(End) Hashtag script-->
			
			<!--(Start) Tooltip Scripts-->
				<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
				<link rel="stylesheet" href="/resources/demos/styleEdit.css">
				<script src="//code.jquery.com/jquery-1.10.2.js"></script>
				<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
			<!--(End) Tooltip Scripts-->
			
			<!--(Start) Provided by JetDevLLC-->
				<script src="js/jquery-1.9.0.min.js" type="text/javascript"></script>
				<script src="js/iepngfix_tilebg.js"  type="text/javascript"></script>
				<script src="js/scrollTo.js"         type="text/javascript"></script>
				<script src="js/global.js"           type="text/javascript"></script>
				
				<!--(Start) Mobile Menu Toggle-->
					<script type="text/javascript">
						$(document).ready(function(){
							$(".mobile-menu-list").hide();
							$('.mobile-menu-btn').click(function(){
								$(this).toggleClass("active");
								$(".mobile-menu-list").slideToggle(200);
							});
						});
					</script>
				<!--(End) Mobile Menu Toggle-->
			<!--(End) Provided by JetDevLLC-->
		<!--(End) Scripts-->
	</head>
	
	<body>
		<div class="header-wrap">
			<div class="header">
				<a class="logout-btn" href='logout.php'>Log Out</a>
				<ul class="head-social-icons">
					<!---<li><a class="facebook"   href="#"></a></li>
					<li><a class="twitter"    href="#"></a></li>
					<li><a class="googleplus" href="#"></a></li>-->
					<li>Welcome <?= $fgmembersite->UserFullName() ?>!</li>
				</ul><!--//head-social-icons-->

				<ul class="nav">
					<li><a href="./eventCreation.php">Create Event</a></li>
					<li><span class="shadow">|</span></li>
					<li><a href="./searchForm.php">Search Events</a></li>
					<li><span class="shadow">|</span></li>
					<li><a href="./eventAccor.php">Your Events</a></li>
				</ul>
				<div class="mobile-menu-btn"><span class="icon-reorder"></span></div>
			</div><!--//header-->
		</div><!--//header-wrap-->
		
		<div class="mobile-menu-list">
			<ul>
				<li><a href="./eventCreation.php">Create Event</a></li>
				<li><a href="./searchForm.php">Search Events</a></li>
				<li><a href="./eventAccor.php">Your Events</a></li>
			</ul>   
		</div><!--//mobile-menu-list-->
=======
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
		<link href="favicon.ico" rel="shortcut icon"  />
		<title>Registered User Page</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="format-detection" content="email=no" />
		
		<!--(Start) Style Sheets-->
			<link rel="STYLESHEET" type="text/css" href="css/fg_membersite.css">
			<link href="css/accordion.css" rel="stylesheet" type="text/css" />
			
			<!--(Start) Provided by JetDevLLC-->
				<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
				<link href="css/styleEdit.css"            rel="stylesheet" type="text/css" />
				<link href="css/responsiveEdit.css"       rel="stylesheet" type="text/css" />	
				<!--[if IE 6]>
				<style type="text/css">img, div, { behavior: url("js/iepngfix.htc") }
				</style>
				<![endif]-->
			<!--(End) Provided by JetDevLLC-->
		<!--(End) Style Sheets-->
		
		<!--(Start) Scripts-->
			<script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
				
				<!--(Start) ToolTip Script-->
					<script type="text/javascript">
						$(function(){
							$(document).tooltip();
						});
					</script>
				<!--(End) ToolTip Script-->
				
				<!--(Start) Twitter Script-->
					<script type="text/javascript">
						!function(d,s,id){
							var js,fjs=d.getElementsByTagName(s)[0];
							if(!d.getElementById(id)){
								js = d.createElement(s);
								js.id=id;
								js.src="//platform.twitter.com/widgets.js";
								fjs.parentNode.insertBefore(js,fjs);
							}
						}(document, "script", "twitter-wjs");
					</script>
				<!--(End) Twitter script-->
				
				<!--(Start) Hashtag Script-->
					<script type="text/javascript">
						!function(d,s,id){
							var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
							if(!d.getElementById(id)){
								js=d.createElement(s);
								js.id=id;
								js.src=p+'://platform.twitter.com/widgets.js';
								fjs.parentNode.insertBefore(js,fjs);
							}
						}(document, 'script', 'twitter-wjs');
					</script>
				<!--(End) Hashtag script-->
			
			<!--(Start) Tooltip Scripts-->
				<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
				<link rel="stylesheet" href="/resources/demos/styleEdit.css">
				<script src="//code.jquery.com/jquery-1.10.2.js"></script>
				<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
			<!--(End) Tooltip Scripts-->
			
			<!--(Start) Provided by JetDevLLC-->
				<script src="js/jquery-1.9.0.min.js" type="text/javascript"></script>
				<script src="js/iepngfix_tilebg.js"  type="text/javascript"></script>
				<script src="js/scrollTo.js"         type="text/javascript"></script>
				<script src="js/global.js"           type="text/javascript"></script>
				
				<!--(Start) Mobile Menu Toggle-->
					<script type="text/javascript">
						$(document).ready(function(){
							$(".mobile-menu-list").hide();
							$('.mobile-menu-btn').click(function(){
								$(this).toggleClass("active");
								$(".mobile-menu-list").slideToggle(200);
							});
						});
					</script>
				<!--(End) Mobile Menu Toggle-->
			<!--(End) Provided by JetDevLLC-->
		<!--(End) Scripts-->
	</head>
	
	<body>
		<div class="header-wrap">
			<div class="header">
				<a class="logout-btn" href='logout.php'>Log Out</a>
				<ul class="head-social-icons">
					<!---<li><a class="facebook"   href="#"></a></li>
					<li><a class="twitter"    href="#"></a></li>
					<li><a class="googleplus" href="#"></a></li>-->
					<li>Welcome <?= $fgmembersite->UserFullName() ?>!</li>
				</ul><!--//head-social-icons-->

				<ul class="nav">
					<li><a href="./eventCreation.php">Create Event</a></li>
					<li><span class="shadow">|</span></li>
					<li><a href="./searchForm.php">Search Events</a></li>
					<li><span class="shadow">|</span></li>
					<li><a href="./eventAccor.php">Your Events</a></li>
				</ul>
				<div class="mobile-menu-btn"><span class="icon-reorder"></span></div>
			</div><!--//header-->
		</div><!--//header-wrap-->
		
		<div class="mobile-menu-list">
			<ul>
				<li><a href="./eventCreation.php">Create Event</a></li>
				<li><a href="./searchForm.php">Search Events</a></li>
				<li><a href="./eventAccor.php">Your Events</a></li>
			</ul>   
		</div><!--//mobile-menu-list-->
>>>>>>> origin/master
	</body>
</html>