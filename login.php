<?PHP
	require_once("./include/membersite_config.php");
	if(isset($_POST['submitted'])){
		if($fgmembersite->Login()){
			$fgmembersite->RedirectToURL("userPage.php");
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<title>Login</title>
		
		<link rel="STYLESHEET" type="text/css" href="css/fg_membersite.css" />
		
		<!--Scripts-->
		<script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
		
		<!--Go Back function-->
		<script>
			function goBack() {
				window.history.back()
			}
		</script>
		
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
	</head>
	<body>
		<!-- Form Code Start -->
		<div id='fg_membersite'>
			<form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
				<fieldset>
					<legend>Login</legend>

					<input type='hidden' name='submitted' id='submitted' value='1'/>

					<div class='short_explanation'>* required fields</div>

					<div>
						<span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span>
					</div>
					<div class='container'>
						<label for='UuserName' >UserName*:</label><br/>
						<input type='text' name='UuserName' title="Enter your Username" id='UuserName' value='<?php echo $fgmembersite->SafeDisplay('UuserName') ?>' maxlength="50" /><br/>
						<span id='login_UuserName_errorloc' class='error'></span>
					</div>
					<div class='container'>
						<label for='UPswd' >Password*:</label><br/>
						<input type='password' title="Enter your Password" name='UPswd' id='UPswd' maxlength="50" /><br/>
						<span id='login_UPswd_errorloc' class='error'></span>
					</div>

					<div class='container'>
						<input type='submit' name='Submit' value='Submit' />
						<input type="button" onclick="goBack();" value="Go Back" />
					</div>
					<div class='short_explanation'><a href='reset-pwd-req.php'>Forgot Password?</a></div>
					<div class='short_explanation'><a href='registration.php'>Register Here</a></div>
				</fieldset>
			</form>

			<script type='text/javascript'>
				// <![CDATA[

				var frmvalidator  = new Validator("login");
				frmvalidator.EnableOnPageErrorDisplay();
				frmvalidator.EnableMsgsTogether();

				frmvalidator.addValidation("UuserName", "req", "provide your username");

				frmvalidator.addValidation("UPswd", "req", "Please provide the password");

				// ]]>
			</script>
		</div>
	</body>
</html>