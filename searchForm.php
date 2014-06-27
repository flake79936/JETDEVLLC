<?PHP
	require_once("./include/membersite_config.php");
	/*if(isset($_POST['submitted'])){
		if($fgmembersite->Login()){
			$fgmembersite->RedirectToURL("userPage.php");
		}
	}*/
	
	if(!$fgmembersite->CheckLogin()){
		$fgmembersite->RedirectToURL("index.php");
		exit;
	}
?>

<html dir="ltr" lang="en-US" >
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Search</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="format-detection" content="email=no" />
		
		<!--(Start) Style Sheets-->
		<link href="css/fg_membersite.css"    rel="STYLESHEET" type="text/css"  />
		
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
		<script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
		
		<!--code for tooltip-->
		<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		<link rel="stylesheet" href="/resources/demos/style.css">
		<script>
			$(function() {
				$( document ).tooltip();
			});
		</script>
		
		<!--(Start) Provided by JetDevLLC-->
		<script src="js/jquery-1.9.0.min.js" type="text/javascript"></script>
		<script src="js/iepngfix_tilebg.js"  type="text/javascript"></script>
		<script src="js/scrollTo.js"         type="text/javascript"></script>
		<script src="js/global.js"           type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$(".mobile-menu-list").hide();
				$('.mobile-menu-btn').click(function(){
					$(this).toggleClass("active");
					$(".mobile-menu-list").slideToggle(200);
				});
			});
		</script>
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
					<li>Welcome Back! <?= $fgmembersite->UserFullName() ?>!</li>
				</ul><!--//head-social-icons-->

				<ul class="nav">
					<li><a href="./userPage.php">User Page</a></li>
					<li><span class="shadow">|</span></li>
					<li><a href="./eventCreation.php">Create Event</a></li>
					<li><span class="shadow">|</span></li>
					<li><a href="./eventAccor.php">Your Events</a></li>
				</ul>
				<div class="mobile-menu-btn"><span class="icon-reorder"></span></div>
			</div><!--//header-->
		</div><!--//header-wrap-->
		
		<div class="mobile-menu-list">
			<ul>
				<li><a href="./EventCreation.php">createEvent</a></li>
				<li><a href="./searchForm.php">Search</a></li>
				<li><a href="#Events">Events</a></li>
			</ul>   
		</div><!--//mobile-menu-list-->
		
		<div id='fg_membersite' align="center">
			<form id='login' action='search.php' method='GET' accept-charset='UTF-8'>
				<fieldset align="left">
					<legend>Search</legend>
					<input type='hidden' name='submitted' id='submitted' value='1'/>
					
					<div>
						<span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span>
					</div>
					
					<div class='container'>
						<label for='search' >Search:</label><br/>
						<input type='text' name='Search' title="..." id='Search' value='<?php echo $fgmembersite->SafeDisplay('Search') ?>' maxlength="50" /><br/>
						<span id='login_UuserName_errorloc' class='error'></span>
					</div>
					
					<input type="submit" value="Search" />
				</fieldset>
			</form>
		</div>
	</body>
</html>