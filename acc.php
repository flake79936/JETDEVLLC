<?PHP
	require_once("./include/membersite_config.php");
	if(!$fgmembersite->CheckLogin()){
		$fgmembersite->RedirectToURL("login.php");
		exit;
	}
	
	$street = "vista+del+sol,el+paso+tx";
	$usrname = $fgmembersite->UsrName();
	
	
	$con = mysqli_connect('localhost', 'root', 'password', 'EventAdvisor');
	
	if (!$con) {
		die('Could not connect: ' . mysqli_error($con));
	}

	mysqli_select_db($con, "EventAdvisor");
	
	$sql = "SELECT Evename FROM Events WHERE UuserName = 'ecorral2'";
	
	$result = mysqli_query($con, $sql);
?>

<html>
	<head>
		<link href="css/acc.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
		<!--displays the full name and username of the user-->
		<p>Logged in as: <?= $fgmembersite->UserFullName() ?></p>
		<p>Logged in as: <?= $usrname?></p>
		
		<?PHP
			$i = 0;
			while($row = mysqli_fetch_array($result)){ 
		?>
			<div class="accordion vertical">
				<ul>
					<li>
						<input type="radio" id="radio-<?= $i?>" name="radio-accordion" checked="checked" />
						<label for="radio-<?= $i?>">Event <?= $i?></label>
						<div class="content">
							<h3>hello test</h3>
							<p><?= $row['Evename'] ?></p>
						</div>
					</li>
				</ul>
			</div>
		<?PHP $i++; } ?>
	</body>
</html>