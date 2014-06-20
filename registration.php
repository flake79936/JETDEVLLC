<?PHP
	require_once("./include/membersite_config.php");
	/*This part ckecks whether there is a session or not.*/
	/*if(!$fgmembersite->CheckLogin()){
		$fgmembersite->RedirectToURL("index.php");
		exit;
	}*/
	
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
		
		<!--Scripts-->
		<script type="text/javascript" src="scripts/gen_validatorv31.js"></script>
		<script src="scripts/pwdwidget.js" type="text/javascript"></script>
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	</head>
	
	<body>
		<div id='fg_membersite'>
			<a href="index.php">Home</a>
			<form id="register" action="<?php echo $fgmembersite->GetSelfScript(); ?>" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
				<fieldset>
					<table>
						<legend>User Registration</legend>

						<input type="hidden" name="submitted" id="submitted" value="1"/>

						<tr><td class="short_explanation">* required fields</td></tr>
						<input type="text" class="spmhidip" name="<?php echo $fgmembersite->GetSpamTrapInputName(); ?>" />

						<tr><td><span class="error"><?php echo $fgmembersite->GetErrorMessage(); ?></span></td></tr>
						<!--First Name-->
						<tr>
							<td class="container">
								<label for="UFname">First Name*: </label><br/>
								<input type="text" name="UFname" id="UFname" value="<?php echo $fgmembersite->SafeDisplay('UFname') ?>" maxlength="50" /><br/>
								<span id="register_UFname_errorloc" class="error"></span>
							</td>
						</tr>
						
						<!--Last Name-->
						<tr>
							<td class="container">
								<label for="ULname">Last Name*: </label><br/>
								<input type="text" name="ULname" id="ULname" value="<?php echo $fgmembersite->SafeDisplay('ULname') ?>" maxlength="50" /><br/>
								<span id="register_ULname_errorloc" class="error"></span>
							</td>
						</tr>
						
						<!--Username-->
						<tr>
							<td class="container">
								<label for="UuserName">Username*: </label><br/>
								<input type="text" name="UuserName" id="UuserName" value="<?php echo $fgmembersite->SafeDisplay("UuserName") ?>" maxlength="50" /><br/>
								<span id="register_UuserName_errorloc" class="error"></span>
							</td>
						</tr>
						
						<!--Password-->
						<tr>
							<td class='container' style='height:80px;'>
									<label for='UPswd' >Password*:</label><br/>
									<div class='pwdwidgetdiv' id='thepwddiv' ></div>
									<noscript>
										<input type='password' name='UPswd' id='UPswd' value="<?php echo $fgmembersite->SafeDisplay("UPswd") ?>" maxlength="50" />
									</noscript>    
									<div id='register_UPswd_errorloc' class='error' style='clear:both'></div>
							</td>
						</tr>
						
						<!--Confirm Password-->
						<tr>
							<td class="container">
								<label for="ConPswd" >Confirm Password*: </label><br/>
								<input type='password' name="ConPswd" id="ConPswd" value="<?php echo $fgmembersite->SafeDisplay("ConPswd") ?>" maxlength="50" /><br/>
								<span id="register_ConPswd_errorloc" class="error" style="clear"></span>
							</td>
						</tr>
						
						
						
						<!--Email-->
						<tr>
							<td class="container">
								<label for="Uemail" >Email*: </label><br/>
								<input type="text" name="Uemail" id="Uemail" value="<?php echo $fgmembersite->SafeDisplay('Uemail') ?>" maxlength="50" /><br/>
								<span id="register_Uemail_errorloc" class="error"></span>
							</td>
						</tr>
						
						<!--Phone-->
						<tr>
							<td class="container">
								<label for="Uphone" >Phone*: </label><br/>
								<input type="text" name="Uphone" id="Uphone" value="<?php echo $fgmembersite->SafeDisplay("Uphone") ?>" maxlength="50" /><br/>
								<span id="register_Uphone_errorloc" class="error"></span>
							</td>
						</tr>
					</table>
					<input id="submitButton" type="submit" name="Submit" value="submit" />
				</fieldset>
				
			</form>
		</div>
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