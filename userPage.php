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
		<link rel="STYLESHEET" type="text/css" href="css/fg_membersite.css">
		<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<link href="css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="favicon.ico" />	
	</head>
	
	<body >
		<div id="main_container">
			<div id='middle_box'>
				<!--displays the full name and username of the user-->
				<p>Logged in as: <?= $fgmembersite->UserFullName() ?></p>
				<p>Logged in as: <?= $usrname?></p>
			</div>
		</div>
		
		<div class="header-wrap">
			<div class="header">
				<ul class="nav">
					<li><a id="talktous-nav" href="eventCreation.php">Create Event</a></li>
					<li><span class="shadow">|</span></li>
					<li><a id="findstadarena-nav" href="#findstadarena">Find a Stadium/Arena</a></li>
					<li><span class="shadow">|</span></li>
					<li><a id="emaildeals-nav" href="#emaildeals">Email Deals</a></li>
					<li><span class="shadow">|</span></li>
					<li><a id="product-nav" href="#product">Product</a></li>
					<li><span class="shadow">|</span></li>
					<li><a href="#yourEvents">Your Events</a></li>
					<!--<li><a id="faq-nav" href="#faq">Event</a></li>-->
				</ul>
				<div class="mobile-menu-btn"><span class="icon-reorder"></span></div>
			</div><!--//header-->
		</div><!--//header-wrap-->
	</body>
</html>