<?php //if the street name contains two or more words, the map will not recognize the street.
	$address = "3001 wispy trail, fort worth, texas 76108";
	$expression = "/\s/";
	$replace = "+";

	$street = preg_replace($expression, $replace, $address);

	echo $street;
?>
<br/><br/><br/><br/><br/>
<?php
	$str = 'foo   o';
	$str = preg_replace('/\s\s+/', ' ', $str);
	// This will be 'foo o' now
	echo $str;
?>