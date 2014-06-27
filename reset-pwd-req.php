<?PHP
	require_once("./include/membersite_config.php");
	$emailsent = false;
	if(isset($_POST['submitted'])){
		if($fgmembersite->EmailResetPasswordLink()){
			$fgmembersite->RedirectToURL("reset-pwd-link-sent.html");
			exit;
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<title>Reset Password Request</title>
		<link rel="STYLESHEET" type="text/css" href="css/fg_membersite.css" />
		
		
		
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
		
		<!--(Start) Scripts-->
		<script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
		
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
				</ul>
				<div class="mobile-menu-btn"><span class="icon-reorder"></span></div>
			</div><!--//header-->
		</div><!--//header-wrap-->

		<div class="mobile-menu-list">
			<ul>
				<li><a href="./index.php">Home</a></li>
				<!--<li><a href="#findstadarena">Find a Stadium/Arena</a></li>
				<li><a href="#emaildeals">Email Deals</a></li>
				<li><a href="#product">Product</a></li>
				<li><a href="#faq">FAQ</a></li>-->
			</ul>   
		</div><!--//mobile-menu-list-->
	
		<!-- Form Code Start -->
		<div id='fg_membersite' align="center">
			<form id='resetreq' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
				<fieldset align="left">
					<legend>Reset Password</legend>

					<input type='hidden' name='submitted' id='submitted' value='1'/>

					<div class='short_explanation'>* required fields</div>

					<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
					<div class='container'>
						<label for='username' >Your Email*:</label><br/>
						<input type='text' name='email' id='email' value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50" /><br/>
						<span id='resetreq_email_errorloc' class='error'></span>
					</div>
					<div class='short_explanation'>A link to reset your password will be sent to the email address</div>
					<div class='container'>
						<input type='submit' name='Submit' value='Submit' />
					</div>
				</fieldset>
			</form>

			<script type='text/javascript'>
				// <![CDATA[

				var frmvalidator  = new Validator("resetreq");
				frmvalidator.EnableOnPageErrorDisplay();
				frmvalidator.EnableMsgsTogether();

				frmvalidator.addValidation("email","req","Please provide the email address used to sign-up");
				frmvalidator.addValidation("email","email","Please provide the email address used to sign-up");

				// ]]>
			</script>
		</div>
	</body>
</html>