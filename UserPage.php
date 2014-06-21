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
	
	<body >
	<div id="main_container">
		<div id='middle_box'>
			<h2>This is an Access Controlled Page</h2>
			This page can be accessed after logging in only. To make more access controlled pages, 
			copy paste the code between &lt;?php and ?&gt; to the page and name the page to be php.
			<p>Logged in as: <?= $fgmembersite->UserFullName() ?></p>
			<p>Logged in as: <?= $fgmembersite->UserName() ?></p>
			<p><a href='login-home.php'>Home</a></p>
		
		<iframe
			width="600"
			height="450"
			frameborder="0" style="border:0"
			src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB0uLEbR6K9fehSmaCyR4-NdWmIUaYevjY
			&q=<?= $street?>">
		</iframe>
		<br/><br/><br/>
		<br/><br/><br/>
			<div class="middle_box_content">
				<div align = "center">
					<html lang="en">
						<head>
							<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
							<script src="//code.jquery.com/jquery-1.9.1.js"></script>
							<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
							<link rel="stylesheet" href="/resources/demos/style.css">
							<style>
								#accordion-resizer {
									padding: 10px;
									width: 350px;
									height: 200px;
								}
							</style>
							<script>
								$(function() {
									$( "#accordion" ).accordion({
										heightStyle: "fill"
									});
								});
								$(function() {
									$( "#accordion-resizer" ).resizable({
										minHeight: 100,
										minWidth: 200,
										resize: function() {
											$( "#accordion" ).accordion( "refresh" );
										}
									});
								});
							</script>
						</head>
						<body>
							<div id="accordion">
								<h3>1D Abstractions</h3>
								<div>
									<p>
										<table>
											<tr>
											<td>
												<font size="3" color="black"><b>Timeline</b></font>
												<?php $src = "http://www.stanford.edu/group/spatialhistory/media/images/publication/MSantosAPeers_graphs-05.svg"; ?>
												<a href='./SetQueryParameters.php?type=1D_Timeline&image=<?php echo $src ?>&desc=Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.'><img src="http://www.stanford.edu/group/spatialhistory/media/images/publication/MSantosAPeers_graphs-05.svg" width="250" height="250">
											</td>
											<td>
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
											</td>
											</tr>
										</table>
									</p>
								</div>
								<h3>2D Abstractions</h3>
								<div>
									<p>
										<table>
											<tr>
												<td>
													<font size="3" color="black"><b>Contour Map</b></font><br>
													<?php $src = "https://nanohub.org/infrastructure/rappture/raw-attachment/wiki/rp_xml_ele_field/contour.jpg"; ?>
													<a href='./SetQueryParameters.php?type=2D_ContourMap&image=<?php echo $src ?>&desc=Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.'><img src="https://nanohub.org/infrastructure/rappture/raw-attachment/wiki/rp_xml_ele_field/contour.jpg"  width="250" height="250"></a>
												</td>
												<td>
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
												</td>
											</tr>
										</table>
									</p>
								</div>
							</div>
						</body>
					</html>
				</div>
			</div>
		</div>
		</div>
	</body>
</html>

