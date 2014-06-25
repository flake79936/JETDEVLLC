<?PHP
	require_once("./include/membersite_config.php");
// 	if(!$fgmembersite->CheckLogin()){
// 		$fgmembersite->RedirectToURL("login.php");
// 		exit;
// 	}
	
// 	$street = "vista+del+sol,el+paso+tx";
// 	$usrname = $fgmembersite->UsrName();
// 	
//capture search term and remove spaces at its both ends if the is any
$searchTerm = trim($_GET['Esearch']);

//check whether the name parsed is empty
if($searchTerm == "")
{
	echo "Enter name you are searching for.";
	exit();
}




	
	$con = mysqli_connect('localhost', 'root', 'password', 'EventAdvisor');
	
	if (!$con) {
		die('Could not connect: ' . mysqli_error($con));
	}

	mysqli_select_db($con, "EventAdvisor");
	
// 	$sql = "SELECT Evename, Edescription, Etype, Eaddress, Ecity, Estate, Ezip FROM Events WHERE UuserName = '" . $usrname . "'";
	$sql = "SELECT Evename, EstartDate, Edescription, Etype, Eaddress, Ecity, Estate, Ezip FROM Events WHERE Ecity LIKE '" . $searchTerm . "' ORDER BY EstartDate";
	
	$result = mysqli_query($con, $sql);
	
// 	
//MYSQL search statement
// $query = "SELECT * FROM Events WHERE student_name LIKE '%$searchTerm%'";
// 
// $results = mysqli_query($link, $query);

/* check whethere there were matching records in the table
by counting the number of results returned */
// if(mysqli_num_rows($result) >= 1)
// {
// 	$output = "";
// 	while($row = mysqli_fetch_array($result))
// 	{
// 		$output .= "Student ID: " . $row['Evename'] . "<br />";
// 		$output .= "Name: " . $row['Ecity'] . "<br />";
// 		$output .= "Course: " . $row['Etype'] . "<br />";
// 		$output .= "Age: " . $row['Ezip'] . "<br /><br />";
// 	}
// 	echo $output;
// }
// else
// 	echo "There was no matching record for the name " . $searchTerm;	
// 	
// 	
// 	
	
?>

<html>
	<head>
		<link rel="STYLESHEET" type="text/css" href="css/fg_membersite.css">
		<link href="css/accordion.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body >
		<div id="main_container">
			<div id='middle_box'>
				<!--displays the full name and username of the user-->
<!-- 
				<p>Logged in as: <?= $fgmembersite->UserFullName() ?></p>
				<p>Logged in as: <?= $usrname?></p>
 -->
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
									<!-- <h3>hello test</h3 -->>
									<p><?= $row['Evename'] ?></p>
									<p><?= $row['Eaddress'] ?></p>
									<p><?= $row['Edescription'] ?></p>
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