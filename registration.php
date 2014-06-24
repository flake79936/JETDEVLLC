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
		<script>
			function goBack() {
				window.history.back()
			}
		</script>
<!-- 
		<script>
			$(function() {
				$( "#progressbar" ).progressbar({
					value: 0

					
				});
			});
  		</script>
 -->

  		
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
		<div id='fg_membersite'>
			<a href="index.php">Home</a>
			<form id="register" action="<?php echo $fgmembersite->GetSelfScript(); ?>" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
				<fieldset>
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
					<input type="button" onclick="goBack();" value="Go Back" />
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