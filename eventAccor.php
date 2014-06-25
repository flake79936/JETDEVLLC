<?PHP
	require_once("./include/membersite_config.php");
	if(!$fgmembersite->CheckLogin()){
		$fgmembersite->RedirectToURL("login.php");
		exit;
	}
	
	$street = "vista+del+sol,el+paso+tx";
	$usrname = $fgmembersite->UsrName();
	
	
//  $con = mysqli_connect('localhost', 'root', 'password', 'EventAdvisor');
 	$con = mysqli_connect('localhost', 'JetDevSQL', 'DevTeamSQL!!12', 'EventAdvisor');
	
	if (!$con) {
		die('Could not connect: ' . mysqli_error($con));
	}

	mysqli_select_db($con, "EventAdvisor");
	
// 	$sql = "SELECT Evename, Edescription, Etype, Eaddress, Ecity, Estate, Ezip FROM Events WHERE UuserName = '" . $usrname . "'";
	$sql = "SELECT * FROM Events WHERE UuserName = '" . $usrname . "' ORDER BY EstartDate";
	
	$result = mysqli_query($con, $sql);
	
//Script

	
	
?>

<html>
	<head>
		<link rel="STYLESHEET" type="text/css" href="css/fg_membersite.css">
		<link href="css/accordion.css" rel="stylesheet" type="text/css" />
		
<!-- Script -->
		<script>
			function goBack() {
				window.history.back()
			}
		</script>
<!-- End of Script		 -->

	</head>
	
	<body >
		<div id="main_container">
			<div id='middle_box'>
				<!--displays the full name and username of the user-->
				<p>Logged in as: <?= $fgmembersite->UserFullName() ?></p>
				<p>Logged in as: <?= $usrname?></p>
				
				<input type="button" onclick="goBack();" value="Go Back" />
		
				<?PHP
					$i = 0;
					while($row = mysqli_fetch_array($result)){ 
					
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
									<p><?= $row['Ewebsite'] ?></p>
									<p><?= $row['Ehashtag'] ?></p>
									
									<a href="<?= $row['Efacebook'] ?>" >
									<img src="./img/icons/facebook.ico"
								    width="54" height="54" title="Facebook" 
								    border="0" style="display:inline;"></a>
									
									<a href="<?= $row['Etwitter'] ?>" >
									<img src="./img/icons/twitter.ico"
								    width="54" height="54" title="twitter" 
								    border="0" style="display:inline;"></a>
								    
									<a href="<?= $row['Egoogle'] ?>" rel="publisher" >
									<img src="./img/icons/googleplus.ico"
								    width="54" height="54" title="google+" 
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
	</body>
</html>
<?PHP mysqli_close($con) ?>