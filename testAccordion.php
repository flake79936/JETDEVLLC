<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Fight Card</title>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		<link rel="stylesheet" href="css/test.css">
		<style>
			/* IE has layout problems when sorting  */
			.group { zoom: 1 }
		</style>
		 
		<script>
			//-----------------------------------------------------------+
			// addBout() - Add a single node to the accordian
			// TODO: add JSON object as input parameter and build the
			//       bout with that data,
			//-----------------------------------------------------------+
			function addBout(){
				var bout =
					"<div class=\"group\">" +
						"<span class=\"handle\"> " +
							"<div class=\"table\">" +
								"<div class=\"row\">" +
									"<span class=\"cell width33pct align-left\">" +
										"<strong>Blue Fighter TBD</strong>" +
									"</span>" +
									"<span class=\"cell align-center valign-middle\">" +
										"vs." +
									"</span>" +
									"<span class=\"cell width33pct align-right\">" +
										"<strong>Red Fighter TBD</strong>"+
									"</span>" +
								"</div>" +
							"</div>" +
						"</span>" +
						"<div>" +
							"<div class=\"table\">" +
								"<div class=\"row\">" +
									"<span class=\"cell width150 align-center\">" +
										"<img src=\"images/silhouette.jpg\" alt=\"\">" +
									"</span>" +
									"<span class=\"cell align-center valign-middle\">" +
										"Round<br />0" +
									"</span>" +
									"<span class=\"cell width150 align-center\">" +
										"<img src=\"images/silhouette.jpg\" alt=\"\">" +
									"</span>" +
								"</div>" +
							"</div>" +
							"<span>" +
							"Mauris mauris ante, blandit et, ultrices a, suscipit , " +
							"quam. Integerut neque. <br /> Vivamus nisi metus molestie" +
							" vel, gravida in, condimentum sit amet, nunc. Nam a nibh." +
							"accordion .ui- iconDonec suscipit eros. Nam mi. Proin " +
							" viverra leo ut odio. Curabitur malesuada. Vestibulum a " +
							"velit eu ante scelerisque vulputate." +
							"</span>" +
						"</div>" +
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
			 
				//-----------------------------------------------------------+
				// This for loop is just for testing.
				// The real app will iterate a JSON collection and send
				// each bout node to the addBout function for insertion
				// into the accordion
				//-----------------------------------------------------------+
				for (var i=0;i<20;i++) {
					$("#accordion").append(addBout()).accordion("refresh");
				}
			});
		</script>
	</head>
	 
	<body>
		<div id="main-container" class="main-container">
			<div id="accordion">
				<!-- Bouts will be inserted here -->
			</div>
		</div>
	</body>
</html>