<?PHP
	require_once("./include/membersite_config.php");
	//assuming the user is registered
	if(!$fgmembersite->CheckLogin()){
		$fgmembersite->RedirectToURL("index.php");
		exit;
	}
	
	if(isset($_POST["submitted"])){
		$result = $fgmembersite->searchEvent();
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
		<link rel="STYLESHEET" type="text/css" href="css/fg_membersite.css">
		<link href="css/accordion.css" rel="stylesheet" type="text/css" />
		
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
					<li><a href="./EventCreation.php">Create Event</a></li>
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
			<form id='search' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='POST' accept-charset='UTF-8'>
				<fieldset align="left">
					<legend>Search</legend>
					<input type='hidden' name='submitted' id='submitted' value='1'/>
					
					<div class='container'>
						<label for='eventSearch' >Search:</label><br/>
						<input type='text' name='eventSearch' title="..." id='eventSearch' value='<?php echo $fgmembersite->SafeDisplay('eventSearch') ?>' maxlength="50" /><br/>
						<span id='search_eventSearch_errorloc' class='error'></span>
					</div>
					
					<input id="submitButton" type="submit" name="Submit" value="Search" />
				</fieldset>
				<div>
					<span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span>
				</div>
			</form>
			
			<?php
				if(isset($_POST["submitted"])){ ?>
				<div id="main_container">
					<div id='middle_box'>
						<div id="inner-mid-box">
							<?PHP
								$i = 0;
								while($row = mysql_fetch_assoc($result)){ 
								
								//if the street name contains two or more words, the map will not recognize the street.
								$address = $row['Eaddress'] . ", " . $row['Ecity'] . ", " . $row['Estate'] . " " . $row['Ezip'];
								$expression = "/\s/";
								$replace = "+";

								$street = preg_replace($expression, $replace, $address);
							?>
								<div class="accordion vertical">
									<ul>
										<li>
											<input type="radio" id="radio-<?= $i?>" name="radio-accordion" checked="checked" />
											<label for="radio-<?= $i?>"><?= $row['Evename'] ?></label>
											<!-- <label for="radio-<?= $i?>">Event <?= $i?></label> -->
											<div class="content">
												<!-- <h3>hello test</h3 -->
												<p><?= $row['Evename'] ?></p>
												<p><?= $row['Eaddress'] ?></p>
												<p><?= $row['Edescription'] ?></p>
												<p><a href="<?= $row['Ewebsite'] ?>" target="_blank"><?= $row['Ewebsite'] ?></p>

												
												<a href="<?= $row['Efacebook'] ?>"target="_blank" >
												<img src="./img/icons/facebook.ico"
												width="20" height="20" title="Facebook" 
												border="0" style="display:inline;"></a>
												
												
												<a href="https://twitter.com/intent/tweet?button_hashtag=<?= $row['Ehashtag'] ?>" 
												class="twitter-hashtag-button">Tweet#<?= $row['Ehashtag'] ?></a>
												
												
												<a href="https://twitter.com/<?= $row['Etwitter'] ?>" class="twitter-follow-button" 
												data-show-count="false" data-lang="en">Follow<?= $row['Etwitter'] ?></a>

												
												<a href="<?= $row['Egoogle'] ?>" rel="publisher" target="_blank">
												<img src="./img/icons/googleplus.ico"
												width="20" height="20" title="google+" 
												border="0" style="display:inline;"></a>
												<p><?= $row['Eother'] ?></p>																											
												<p><iframe
													width="300"
													height="150"
													frameborder="0" style="border:0"
													src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB0uLEbR6K9fehSmaCyR4-NdWmIUaYevjY&q=<?= $street?>">
												</iframe></p>
											</div>
										</li>
									</ul>
								</div>
							<?PHP $i++; } ?>
						</div>
					</div>
				</div>
			<?PHP } else {
				 echo "";
				} ?>
		</div>
	</body>
	<script type="text/javascript">
		// <![CDATA[
		var frmvalidator = new Validator("search");
		frmvalidator.EnableOnPageErrorDisplay();
		frmvalidator.EnableMsgsTogether();
		
		frmvalidator.addValidation("eventSearch", "req", "Search Field is Empty!");
		// ]]>
	</script>
</html>