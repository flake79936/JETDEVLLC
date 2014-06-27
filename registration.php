<?PHP
	require_once("./include/membersite_config.php");
	
	if(isset($_POST["submitted"])){
		if($fgmembersite->RegisterUser()){
			$fgmembersite->RedirectToURL("reg_thank_you.php");
		}
	}
?>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>User Registration</title>
		
		<!--Stylesheets-->
		<link rel="STYLESHEET" type="text/css" href="css/fg_membersite.css" />
		<link rel="STYLESHEET" type="text/css" href="css/pwdwidget.css" />
		
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
		
		<script type="text/javascript" src="scripts/gen_validatorv31.js"></script>
		<script src="scripts/pwdwidget.js" type="text/javascript"></script>
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		
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
  		
  		<script type="text/javascript">
			function check() {
				var completion = 0;
				if (document.getElementById("UFname").value != "") {
					completion=completion + 20;
				}
				if (document.getElementById("ULname").value != "") {
					completion=completion + 20;
				}
				if (document.getElementById("UuserName").value != "") {
					completion=completion + 20;
				}
				if (document.getElementById("Uemail").value != "") {
					completion=completion + 20;
				}
				 if (document.getElementById("Uphone").value != "") {
					completion=completion + 20;
				}
				document.getElementById("progressbar").style.width = completion + "%";//* 20 + "px";
			 }
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
		
		<div id='fg_membersite' align='center'>
			<form id="register" action="<?php echo $fgmembersite->GetSelfScript(); ?>" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
				<fieldset align='left'>
					<table>
						<legend>User Registration</legend>
						<!-- <div id="progressbar"></div> -->
						<div style="width: 100%; height: 30px; border: 1px solid green; border-radius: 4px;">
       					<div style="width: 0px; height: 30px; border:0px; background-color: lightgreen;" id="progressbar">   	Progress</div>
						</div>
						<input type="hidden" name="submitted" id="submitted" value="1"/>

						<tr><td class="short_explanation">* required fields</td></tr>
						<input type="text" class="spmhidip" name="<?php echo $fgmembersite->GetSpamTrapInputName(); ?>" />

						<tr><td><span class="error"><?php echo $fgmembersite->GetErrorMessage(); ?></span></td></tr>
						<!--First Name-->
						<tr>
							<td class="container">
							
								<label for="UFname">First Name*: </label><br/>
								<input type="text" name="UFname" title="Enter your First Name" id="UFname" onchange="check()" value="<?php echo $fgmembersite->SafeDisplay('UFname') ?>" maxlength="50" /><br/>
								<span id="register_UFname_errorloc" class="error"></span>
							</td>
						</tr>
						
						<!--Last Name-->
						<tr>
							<td class="container">
								<label for="ULname">Last Name*: </label><br/>
								<input type="text" name="ULname" title="Enter your Last Name"id="ULname" onchange="check()" value="<?php echo $fgmembersite->SafeDisplay('ULname') ?>" maxlength="50" /><br/>
								<span id="register_ULname_errorloc" class="error"></span>
							</td>
						</tr>
						
						<!--Username-->
						<tr>
							<td class="container">
								<label for="UuserName">Username*: </label><br/>
								<input type="text" name="UuserName" title="Enter your Username" id="UuserName" onchange="check()" value="<?php echo $fgmembersite->SafeDisplay("UuserName") ?>" maxlength="50" /><br/>
								<span id="register_UuserName_errorloc" class="error"></span>
							</td>
						</tr>
						
						<!--Password-->
						<tr>
							<td class='container' style='height:80px;'>
									<label for='UPswd' >Password*:</label><br/>
									<div class='pwdwidgetdiv' id='thepwddiv' ></div>
									<noscript>
										<input type='password' name='UPswd' title="Enter your Password" id='UPswd' value="<?php echo $fgmembersite->SafeDisplay("UPswd") ?>" maxlength="50" />
									</noscript>    
									<div id='register_UPswd_errorloc' class='error' style='clear:both'></div>
							</td>
						</tr>
						
						<!--Confirm Password-->
						<tr>
							<td class="container">
								<label for="ConPswd" >Confirm Password*: </label><br/>
								<input type='password' name="ConPswd" title="Confirm your Password"id="ConPswd" value="<?php echo $fgmembersite->SafeDisplay("ConPswd") ?>" maxlength="50" /><br/>
								<span id="register_ConPswd_errorloc" class="error" style="clear"></span>
							</td>
						</tr>
						
						
						
						<!--Email-->
						<tr>
							<td class="container">
								<label for="Uemail" >Email*: </label><br/>
								<input type="text" name="Uemail" title="Enter your Email"id="Uemail" onchange="check()" value="<?php echo $fgmembersite->SafeDisplay('Uemail') ?>" maxlength="50" /><br/>
								<span id="register_Uemail_errorloc" class="error"></span>
							</td>
						</tr>
						
						<!--Phone-->
						<tr>
							<td class="container">
								<label for="Uphone" >Phone*: </label><br/>
								<input type="text" name="Uphone" title="Enter your Phone Number"id="Uphone" onchange="check()" value="<?php echo $fgmembersite->SafeDisplay("Uphone") ?>" maxlength="50" /><br/>
								<span id="register_Uphone_errorloc" class="error"></span>
							</td>
						</tr>
					</table>
					<input id="submitButton" type="submit" name="Submit" value="submit" />
				</fieldset>
			</form>
		</div>
		
		<!--This script needs to wihtin the file. 
		It is validating the form.-->
		<script type="text/javascript">
			// <![CDATA[
			//'PasswordWidget()'
			// @param1: The IDname of the <div> that it is going to be used in.
			// @param2: The name of the <input> field.
			var pwdwidget = new PasswordWidget('thepwddiv', 'UPswd');
			pwdwidget.MakePWDWidget();

			var frmvalidator = new Validator("register");
			frmvalidator.EnableOnPageErrorDisplay();
			frmvalidator.EnableMsgsTogether();
			
			frmvalidator.addValidation("UFname",    "req", "Please Input Your First Name");
			frmvalidator.addValidation("ULname",    "req", "Please Input Your Last Name");
			frmvalidator.addValidation("UuserName", "req", "Please Provide a User Name");
			frmvalidator.addValidation("UPswd",     "req", "Please Provide a Password");
			frmvalidator.addValidation("ConPswd",   "req", "Please Confirm Your Password");
			frmvalidator.addValidation("Uemail",    "req", "Please Please fill in Name");
			frmvalidator.addValidation("Uphone",    "req", "Please Provide a Phone Number");
			//frmvalidator.addValidation("Uadmin",    "req", "Please fill in Name");
			
			// ]]>
		</script>
	</body>
</html>