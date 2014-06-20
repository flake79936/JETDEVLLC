<?PHP
	require_once("./include/membersite_config.php");
	if(!$fgmembersite->CheckLogin()){
		$fgmembersite->RedirectToURL("login.php");
		exit;
	}
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
		
		<!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<div style="width:450px;color:#555">
			<div style="overflow:hidden;height:300px;width:450px;">
				<div id="gmap_canvas" style="height:300px;width:450px;"></div>
				<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
			</div>
			<script type="text/javascript">
				function init_map(){
								//   10 times, position,                                                           the type of map: either road or satellite
					var myOptions = {zoom:10, center:new google.maps.LatLng(31.75710249999999,-106.49350859999998), mapTypeId: google.maps.MapTypeId.ROADMAP};
					
					map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
					marker = new google.maps.Marker({map:map, position:new google.maps.LatLng(31.75710249999999, -106.49350859999998)});
					
					// 'infoewindow' is only information to display
					infowindow = new google.maps.InfoWindow({content:"<b>Home</b><br/>1432 backus<br/> el paso" });
					google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});
					infowindow.open(map, marker);
				}
					google.maps.event.addDomListener(window, 'load', init_map);
			</script>
			<div style="text-align:right;font-family:arial;font-size:10px;">
				Google Maps Generator by <a style="text-decoration:none;color:#555;" href="http://www.map-embed.com">www.map-embed.com</a>
			</div>
		</div>-->
		
		<iframe
			width="600"
			height="450"
			frameborder="0" style="border:0"
			src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB0uLEbR6K9fehSmaCyR4-NdWmIUaYevjY
			&q=1432+backus,el+paso+tx">
		</iframe>
	</body>
</html>
