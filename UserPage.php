<?PHP
	require_once("./include/membersite_config.php");
	if(!$fgmembersite->CheckLogin()){
		$fgmembersite->RedirectToURL("login.php");
		exit;
	}
	
	$street = "vista+del+sol,el+paso+tx";
	$usrname = $fgmembersite->UsrName();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<title>An Access Controlled Page</title>
		<link rel="STYLESHEET" type="text/css" href="css/fg_membersite.css">
		
		
		
		<!--code for acordian-->
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		<link rel="stylesheet" href="css/test.css">
		<style>
			/* IE has layout problems when sorting  */
			.group { zoom: 1 }
		</style>
<<<<<<< HEAD
=======

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
>>>>>>> origin/master
	</head>
	
	<body onLoad="showEvents('ecorral2');">
		<div id="main_container">
			<div id='middle_box'>
				<!--displays the full name and username of the user-->
				<p>Logged in as: <?= $fgmembersite->UserFullName() ?></p>
				<p>Logged in as: <?= $usrname?></p>
				
				
				<br/><br/><br/>
				<div class="middle_box_content" align = "left">
					<div id="main-container" class="main-container">
						<div id="accordion"><b>Person info will be listed here.</b></div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

<!--
IDEA:
	When the user clicks on the 'see my events' link,
	The page should be loaded with the events.
	Automatically the page should query the users events based on the username.
	
-->
