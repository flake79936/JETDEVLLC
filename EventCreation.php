<?PHP
	require_once("./include/membersite_config.php");
	/*This part ckecks whether there is a session or not.*/
	if(!$fgmembersite->CheckLogin()){
		$fgmembersite->RedirectToURL("index.php");
		exit;
	}
	
	if(isset($_POST["submitted"])){
		if($fgmembersite->CreateEvent()){
			$fgmembersite->RedirectToURL("event_thank_you.php");
		}
	}
?>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Create Event</title>
		
		<!--Stylesheets-->
		<link rel="STYLESHEET" type="text/css" href="css/fg_membersite.css" />
		<link rel="STYLESHEET" type="text/css" href="css/pwdwidget.css" />
		<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		
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
		
		<!--Scripts-->
		<script type="text/javascript" src="scripts/gen_validatorv31.js"></script>
		
		<script src="scripts/pwdwidget.js" type="text/javascript"></script>
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		
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
		<!--Calendar-->
		
		<!--Script to show whether the event is 'Other'-->
		<script type="text/javascript">
			$(document).ready(function(){
				$("#other").hide();
				$("select").change(function(){
					$("select option:selected").each(function(){
						if($(this).attr("value") === "Other"){
							$("#other").show();
						} else {
							$("#other").hide();
						}
					});
				}).change();
			});
		</script>
		
		<!--Counts the number of characters-->
		<script type="text/javascript">
			function textCounter(field, cnt, maxlimit) {         
				var cntfield = document.getElementById(cnt)
				if (field.value.length > maxlimit) // if too long...trim it!
					field.value = field.value.substring(0, maxlimit);
				 // otherwise, update 'characters left' counter
				else
					//cntfield.value = maxlimit - field.value.length;
					document.getElementById('charsLeft').innerHTML = maxlimit - field.value.length;
			}
		</script>
		
		<!--date pickers-->
		<script type="text/javascript">
			$(document).ready(function(){
				$("#EstartDate").datepicker();
				$("#EendDate").datepicker();
			});
		</script>
		<script>
			function goBack() {
				window.history.back()
			}
		</script>
	</head>
	
	<body>
		<div class="header-wrap">
			<div class="header">
				<!--<a class="login-btn" href="login.php">Log In</a>-->
				<ul class="head-social-icons">
					<li><a class="facebook"   href="#"></a></li>
					<li><a class="twitter"    href="#"></a></li>
					<li><a class="googleplus" href="#"></a></li>
				</ul><!--//head-social-icons-->

				<ul class="nav">
					<li><a id="talktous-nav" href="#talktous">Talk to Us</a></li>
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
			<form id="event" action="<?php echo $fgmembersite->GetSelfScript(); ?>" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
				<fieldset align="left">
					<table>
						<legend>Event Info</legend>

						<input type="hidden" name="submitted" id="submitted" value="1"/>

						<tr><td class="short_explanation">* required fields</td></tr>
						<input type="text" class="spmhidip" name="<?php echo $fgmembersite->GetSpamTrapInputName(); ?>" />

						<tr><td><span class="error"><?php echo $fgmembersite->GetErrorMessage(); ?></span></td></tr>
						
						<tr>
							<!--Event Name-->
							<td class="container">
								<label for="Evename">Event Name*: </label><br/>
								<input type="text" name="Evename" title="Enter the Event Name" id="Evename" value="<?php echo $fgmembersite->SafeDisplay('Evename') ?>" maxlength="50" /><br/>
								<span id="event_Evename_errorloc" class="error"></span>
							</td>
						</tr>
						
						<tr>
							<!--Start Date picker-->
							<td class="container">
								<label for="EstartDate">Start date: </label><br/>
								<input type="text" name="EstartDate" title="Pick Start Date" id="EstartDate" value="<?php echo $fgmembersite->SafeDisplay("EstartDate") ?>" maxlength="50" /><br/>
								<span id="event_EstartDate_errorloc" class="error"></span>
							</td>
							
							<!--End Date picker-->
							<td class="container">
								<label for="EendDate">End date: </label><br/>
								<input type="text" name="EendDate" title="Pick Start Date" id="EendDate" value="<?php echo $fgmembersite->SafeDisplay("EendDate") ?>" maxlength="50" /><br/>
								<span id="event_EendDate_errorloc" class="error"></span>
							</td>
						</tr>
						
						<tr>
							<!--Address-->
							<td class="container">
								<label for="Eaddress">Address*: </label><br/>
								<input type="text" name="Eaddress" title="Enter the Address of the Event"id="Eaddress" value="<?php echo $fgmembersite->SafeDisplay("Eaddress") ?>" maxlength="50" /><br/>
								<span id="event_Eaddress_errorloc" class="error"></span>
							</td>
							
							<!--City-->
							<td class="container">
								<label for="Ecity">City*: </label><br/>
								<input type="text" name="Ecity" title="Enter the City of the Event"id="Ecity" value="<?php echo $fgmembersite->SafeDisplay("Ecity") ?>" maxlength="50" /><br/>
								<span id="event_Ecity_errorloc" class="error"></span>
							</td>
						</tr>
						
						<tr>
							<!--State-->
							<td class="container">
								<label for="Estate">State*: </label><br/>
								<input type="text" name="Estate" title="Enter the State of the Event"id="Estate" value="<?php echo $fgmembersite->SafeDisplay("Estate") ?>" maxlength="50" /><br/>
								<span id="event_Estate_errorloc" class="error"></span>
							</td>
							
							<!--Zip-->
							<td class="container">
								<label for="Ezip">Zip*: </label><br/>
								<input type="text" name="Ezip" title="Enter the Zip code of the Event" id="Ezip" value="<?php echo $fgmembersite->SafeDisplay("Ezip") ?>" maxlength="50" /><br/>
								<span id="event_Ezip_errorloc" class="error"></span>
							</td>
						</tr>
						
						<!--Phone-->
						<tr>
							<td class="container">
								<label for="EphoneNumber">Phone number*: </label><br/>
								<input type="text" name="EphoneNumber" title="Enter the Phone Number for the Event"id="EphoneNumber" value="<?php echo $fgmembersite->SafeDisplay("EphoneNumber") ?>" maxlength="50" /><br/>
								<span id="event_EphoneNumber_errorloc" class="error"></span>
							</td>
						</tr>
						
						<tr>
							<!--Type of Event-->
							<td class="container">
								<label for="Etype">Type of Event*: </label><br/>
								<select name="Etype">
								 <option>Please Select One</option>
								 <option value="Concert">Concert</option>
 								 <option value="Fair">Fair</option>
							     <option value="Art">Art</option>
  								 <option value="Social">Social</option>
  								 <option value="Other">Other</option>
								</select>
							</td>
						</tr>
						
						<tr id="other" >
							<!--Other 'option'-->
							<td colspan="2">
								<label for="Eother">Other: </label><br/>
								<textarea onKeyUp="textCounter(this,'charsLeft', 500)" rows="3" cols="30" name="Eother" id="Eother" value="<?php echo $fgmembersite->SafeDisplay("Eother") ?>"></textarea>
								<div style="color:red; font-size:12pt; font-style:italic;" id="charsLeft" value="500"> 500 Characters Max</div>
								<span id="event_Eother_errorloc" class="error"></span>
							</td>
						</tr>
						
						<tr>
							<!--Description-->
							<td class="container">
								<label for="Edescription">Description of the Event*: </label><br/>
								<input type="text" name="Edescription" title="Enter the Description of the Event" id="Edescription" value="<?php echo $fgmembersite->SafeDisplay("Edescription") ?>" maxlength="50" /><br/>
								<span id="event_Edescription_errorloc" class="error"></span>
							</td>
							
							<!--hastags-->
							<td class="container">
								<label for="Ehashtag">Hastags: </label><br/>
								<input type="text" name="Ehashtag" title="Enter Hashtag" id="Ehashtag" value="<?php echo $fgmembersite->SafeDisplay("Ehashtag") ?>" maxlength="50" /><br/>
								<span id="event_Ehashtag_errorloc" class="error"></span>
							</td>
							
							<!--website-->
							<td class="container">
								<label for="Ewebsite">Website*: </label><br/>
								<input type="text" name="Ewebsite" title="correct format: http://www.website.com" id="Ewebsite" value="<?php echo $fgmembersite->SafeDisplay("Ewebsite") ?>" maxlength="50" /><br/>
								<span id="event_Ewebsite_errorloc" class="error"></span>
							</td>
						</tr>
						
						<tr>
							<!--Facebook-->
							<td class="container">
								<label for="Efacebook">FaceBook: </label><br/>
								<input type="text" name="Efacebook" title="correct format: http://www.facebook.com/USERNAME where the USERNAME should be replaced with your facebook username"
								 id="Efacebook" value="<?php echo $fgmembersite->SafeDisplay("Efacebook") ?>" maxlength="50" /><br/>
								<span id="event_Efacebook_errorloc" class="error"></span>
							</td>
							
							<!--twitter-->
							<td class="container">
								<label for="Etwitter">Twitter: </label><br/>
								<input type="text" name="Etwitter" title="Do not include the @ symbol" id="Etwitter" value="<?php echo $fgmembersite->SafeDisplay("Etwitter") ?>" maxlength="50" /><br/>
								<span id="event_Etwitter_errorloc" class="error"></span>
							</td>
							
							<!--google+-->
							<td class="container">
								<label for="Egoogle">Google+: </label><br/>
								<input type="text" name="Egoogle" title="Enter Google+ Username " id="Egoogle" value="<?php echo $fgmembersite->SafeDisplay("Egoogle") ?>" maxlength="50" /><br/>
								<span id="event_Egoogle_errorloc" class="error"></span>
							</td>
						</tr>
						
						<tr>
							<!--Submit Button-->
							<td>
								<input id="submitButton" type="submit" name="Submit" value="Create Event" />
								<input type="button" onclick="goBack();" value="Go Back" />
							</td>
						</tr>
					</table>
				</fieldset>
			</form>
		</div>
		<script type="text/javascript">
			// <![CDATA[
			var frmvalidator = new Validator("event");
			frmvalidator.EnableOnPageErrorDisplay();
			frmvalidator.EnableMsgsTogether();
			
			frmvalidator.addValidation("Evename",      "req", "Please fill in Event Name");
			frmvalidator.addValidation("Eaddress",     "req", "Please fill in address");
			frmvalidator.addValidation("Ecity",        "req", "Please fill in City");
			frmvalidator.addValidation("Estate",       "req", "Please fill in State");
			frmvalidator.addValidation("Ezip",         "req", "Please fill in Zip code");
			frmvalidator.addValidation("EphoneNumber", "req", "Please fill in Phone Number");
			frmvalidator.addValidation("EstartDate",   "req", "Please Select a Start Date");
			frmvalidator.addValidation("EendDate",     "req", "Please Select an End Date");
			frmvalidator.addValidation("Etype",        "req", "Please fill in Type of Event");
			frmvalidator.addValidation("Edescription", "req", "Please fill in Description");
			// ]]>
		</script>
	</body>
</html>