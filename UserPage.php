<?PHP
	require_once("./include/membersite_config.php");
	if(!$fgmembersite->CheckLogin()){
		$fgmembersite->RedirectToURL("login.php");
		exit;
	}
	
	$street = "vista+del+sol,el+paso+tx";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<title>An Access Controlled Page</title>
		<link rel="STYLESHEET" type="text/css" href="css/fg_membersite.css">
	</head>
	
	<body>
		<div id='fg_membersite_content'>
			<h2>This is an Access Controlled Page</h2>
			This page can be accessed after logging in only. To make more access controlled pages, 
			copy paste the code between &lt;?php and ?&gt; to the page and name the page to be php.
			<p>Logged in as: <?= $fgmembersite->UserFullName() ?></p>
			<p><a href='login-home.php'>Home</a></p>
		</div>
		

		
		<iframe
			width="600"
			height="450"
			frameborder="0" style="border:0"
			src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB0uLEbR6K9fehSmaCyR4-NdWmIUaYevjY
			&q=<?= $street?>">
		</iframe>
	</body>
</html>
