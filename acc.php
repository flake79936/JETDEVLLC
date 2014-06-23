<?PHP
	require_once("./include/membersite_config.php");
	if(!$fgmembersite->CheckLogin()){
		$fgmembersite->RedirectToURL("login.php");
		exit;
	}
	
	$street = "vista+del+sol,el+paso+tx";
	$usrname = $fgmembersite->UsrName();
?>

<html>
	<head>
		<link href="acc.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
		<!--displays the full name and username of the user-->
		<p>Logged in as: <?= $fgmembersite->UserFullName() ?></p>
		<p>Logged in as: <?= $usrname?></p>
	
	
		<?PHP while($row = mysqli_fetch_array($result)){ ?>
			<div class="accordion vertical">
				<ul>
					<li>
						<input type="radio" id="radio-1" name="radio-accordion" checked="checked" />
						<label for="radio-1">Title&nbsp;One</label>
						<div class="content">
							<h3>This is an example accordion item</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec posuere lorem. Pellentesque hendrerit, lorem luctus porttitor vestibulum, eros sapien mattis libero, euismod congue neque nisi at ipsum. Mauris semper ipsum sit amet metus semper malesuada. Donec vel est justo, ac porta diam.</p>
							<p>In ut est in orci commodo blandit. Cras rhoncus ultricies augue. Proin quam odio, venenatis ut tempus tristique, aliquet in velit. Pellentesque volutpat facilisis orci, ut congue mi rhoncus at. Nullam vehicula dignissim neque, sed rhoncus magna ultricies et.</p>
						</div>
					</li>
					
					
					
					
					
					<li>
						<input type="radio" id="radio-2" name="radio-accordion" />
						<label for="radio-2">Title&nbsp;Two</label>
						<div class="content">
							<h3>Totally another one right here</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec posuere lorem. Pellentesque hendrerit, lorem luctus porttitor vestibulum, eros sapien mattis libero, euismod congue neque nisi at ipsum. Mauris semper ipsum sit amet metus semper malesuada. Donec vel est justo, ac porta diam.</p>
							<p>In ut est in orci commodo blandit. Cras rhoncus ultricies augue. Proin quam odio, venenatis ut tempus tristique, aliquet in velit. Pellentesque volutpat facilisis orci, ut congue mi rhoncus at. Nullam vehicula dignissim neque, sed rhoncus magna ultricies et.</p>
						</div>
					</li>
				</ul>
			</div>
		<?PHP } ?>
	</body>
</html>