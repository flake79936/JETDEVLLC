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
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="shortcut icon" href="favicon.ico" />
		<title>User Registration</title>
		
		<!--(Start) Style Sheets-->
			<link rel="STYLESHEET" type="text/css" href="css/fg_membersite.css" />
			<link rel="STYLESHEET" type="text/css" href="css/pwdwidget.css" />
				
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
			<script type="text/javascript" src="scripts/gen_validatorv31.js"></script>
			<script src="scripts/pwdwidget.js" type="text/javascript"></script>
			<script src="//code.jquery.com/jquery-1.10.2.js"></script>
			<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
			
			<!--(Start) Tooltip Scripts-->
				<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
				<link rel="stylesheet" href="/resources/demos/styleEdit.css">
				<script src="//code.jquery.com/jquery-1.10.2.js"></script>
				<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
				<script type="text/javascript">
					$(function(){
						$(document).tooltip();
					});
				</script>
			<!--(End) Tooltip Scripts-->
			
			<!--(Start) Progress Bar-->
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
			<!--(End) Progress Bar-->
			
			<!--(Start) Provided by JetDevLLC-->
				<script src="js/jquery-1.9.0.min.js" type="text/javascript"></script>
				<script src="js/iepngfix_tilebg.js"  type="text/javascript"></script>
				<script src="js/scrollTo.js"         type="text/javascript"></script>
				<script src="js/global.js"           type="text/javascript"></script>
				
				<!--(Start) Mobile Menu Toggle-->
					<script type="text/javascript">
						$(function(){
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
				</ul>
				<div class="mobile-menu-btn"><span class="icon-reorder"></span></div>
			</div><!--//header-->
		</div><!--//header-wrap-->

		<div class="mobile-menu-list">
			<ul>
				<li><a href="./index.php">Home</a></li>
				<li><a class="mobile-nav" href="#findstadarena">Find a Stadium/Arena</a></li>
				<li><a class="mobile-nav" href="#emaildeals">Email Deals</a></li>
				<li><a class="mobile-nav" href="#product">Product</a></li>
				<li><a class="mobile-nav" href="#faq">FAQ</a></li>
				<li><a href="./login.php"><span class="icon-lock"></span> Login</a></li>
			</ul>   
		</div><!--//mobile-menu-list-->
		
		<div id='fg_membersite' align='center'>
			<fieldset align='left'>
				<legend>User Registration</legend>
				<form id="register" action="<?php echo $fgmembersite->GetSelfScript(); ?>" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
						<!-- <div id="progressbar"></div> -->
						<div style="width: 100%; height: 30px; border: 1px solid green; border-radius: 4px;">
       					<div style="width: 0px; height: 30px; border:0px; background-color: lightgreen;" id="progressbar">   	Progress</div>
						</div>
						<input type="hidden" name="submitted" id="submitted" value="1"/>

						<div class="short_explanation">* required fields</div>
						<input type="text" class="spmhidip" name="<?php echo $fgmembersite->GetSpamTrapInputName(); ?>" />

						<div><span class="error"><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
						<!--First Name-->
							<div class="container">
								<label for="UFname">First Name*: </label><br/>
								<input type="text" name="UFname" title="Enter your First Name" id="UFname" onchange="check()" value="<?php echo $fgmembersite->SafeDisplay('UFname') ?>" maxlength="50" /><br/>
								<span id="register_UFname_errorloc" class="error"></span>
							</div>
						
						<!--Last Name-->
							<div class="container">
								<label for="ULname">Last Name*: </label><br/>
								<input type="text" name="ULname" title="Enter your Last Name"id="ULname" onchange="check()" value="<?php echo $fgmembersite->SafeDisplay('ULname') ?>" maxlength="50" /><br/>
								<span id="register_ULname_errorloc" class="error"></span>
							</div>
						
						<!--Username-->
							<div class="container">
								<label for="UuserName">Username*: </label><br/>
								<input type="text" name="UuserName" title="Enter your Username" id="UuserName" onchange="check()" value="<?php echo $fgmembersite->SafeDisplay("UuserName") ?>" maxlength="50" /><br/>
								<span id="register_UuserName_errorloc" class="error"></span>
							</div>
						
						<!--Password-->
							<div class='container' style='height:80px;'>
								<label for='UPswd' >Password*:</label><br/>
								<div class='pwdwidgetdiv' id='thepwddiv' ></div>
								<noscript>
									<input type='password' name='UPswd' title="Enter your Password" id='UPswd' value="<?php echo $fgmembersite->SafeDisplay("UPswd") ?>" maxlength="50" />
								</noscript>
								<br/><span id='register_UPswd_errorloc' class='error' style='clear:both'></span>
							</div>
						
						<!--Confirm Password-->
							<div class="container">
								<label for="ConPswd" >Confirm Password*: </label><br/>
								<input type='password' name="ConPswd" title="Confirm your Password"id="ConPswd" value="<?php echo $fgmembersite->SafeDisplay("ConPswd") ?>" maxlength="50" /><br/>
								<span id="register_ConPswd_errorloc" class="error" style="clear: both"></span>
							</div>
						
						<!--Email-->
							<div class="container">
								<label for="Uemail" >Email*: </label><br/>
								<input type="text" name="Uemail" title="Enter your Email"id="Uemail" onchange="check()" value="<?php echo $fgmembersite->SafeDisplay('Uemail') ?>" maxlength="50" /><br/>
								<span id="register_Uemail_errorloc" class="error"></span>
							</div>
						
						<!--Phone-->
							<div class="container">
								<label for="Uphone" >Phone*: </label><br/>
								<input type="text" name="Uphone" title="Enter your Phone Number"id="Uphone" onchange="check()" value="<?php echo $fgmembersite->SafeDisplay("Uphone") ?>" maxlength="50" /><br/>
								<span id="register_Uphone_errorloc" class="error"></span>
							</div>
					<input id="submitButton" type="submit" name="Submit" value="submit" />
				</form>
			</fieldset>
		</div>
	</body>
	
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
</html>