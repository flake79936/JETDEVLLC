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
		
			//-----------------------------------------------------------+
			// addBout() - Add a single node to the accordian
			// TODO: add JSON object as input parameter and build the
			//       bout with that data,
			//-----------------------------------------------------------+
			function addBout(){
				var bout =
					"<h3>1D Abstractions</h3>"+
						"<div>"+
							"<p>"+
								"<table>"+
									"<tr>"+
										"<td>"+
											"hello"+
										"</td>"+
										"<td>"+
											"Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus."+
										"</td>"+
									"</tr>"+
								"</table>"+
							"</p>"+
						"</div>";
				return bout;
			}
			 
			$(function(){
				$( "#accordion" )
						.accordion({
							header: "> .group > .handle",
							heightStyle: "content"
						})
						.sortable({
							axis: "y",
							handle: ".handle",
							stop: function( event, ui ) {
								// IE doesn't register the blur event when sorting
								// so trigger focusout handler to remove .ui-state-focus
								ui.item.children(".handle").triggerHandler("focusout");
							}
						});
						
				for (var i = 0; i < 8; i++) {
					$("#accordion").append(addBout()).accordion("refresh");
				}
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
									<!--todo-->
								</div>
							</body>
						</html>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>