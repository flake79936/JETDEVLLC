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
		
		<!--code for acordian-->
		<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-1.9.1.js"></script>
		<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		<link rel="stylesheet" href="/resources/demos/style.css">
		<style>
			#accordion-resizer {
				padding: 10px;
				width:   350px;
				height:  200px;
			}
		</style>
		<script>
			$(function() {
				var div = "<h3>1D Abstractions</h3><div><p><table><tr><td> test " + count + " </td></tr></table></p></div>";
				$( "#accordion" ).append(div);
				$( "#accordion" ).accordion({ heightStyle: "fill" });
			});
			$(function() {
				var count = 0;
				$( "#accordion-resizer" ).resizable({
					minHeight: 100,
					minWidth: 200,
					resize: function() {
						$( "#accordion" ).accordion( "refresh" );
					}
					count++;
				});
			});
		</script>
	</head>
	
	<body>
		<div id="main_container">
			<div id='middle_box'>
				<h2>This is an Access Controlled Page</h2>
				This page can be accessed after logging in only. To make more access controlled pages, 
				copy paste the code between &lt;?php and ?&gt; to the page and name the page to be php.
				<p>Logged in as: <?= $fgmembersite->UserFullName() ?></p>
				<p>Logged in as: <?= $fgmembersite->UserName() ?></p>
				<p><a href='login-home.php'>Home</a></p>
				<br/><br/><br/>
				<div class="middle_box_content">
					<div align = "left">
						<html lang="en">
							<body>
								<div id="accordion">
								<?PHP $i = 0;
									while( $i < 5 ){ ?>
									<h3>1D Abstractions</h3>
									<div>
										<p>
											<table>
												<tr>
													<td>
														<iframe
														width="350"
														height="200"
														frameborder="0" style="border:0"
														src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB0uLEbR6K9fehSmaCyR4-NdWmIUaYevjY
														&q=<?= $street?>">
														</iframe>
													</td>
												</tr>
											</table>
										</p>
									</div>
									<?PHP $i++;
										} ?>
								</div>
							</body>
						</html>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>