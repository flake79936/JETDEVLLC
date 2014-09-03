<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>SimplePie Filter Addon Demo</title>
</head>
<body>
<?php

// load SimplePie Class
require_once 'includes/simplepie.inc';

// extend SimplePie class and instantiate
require_once 'includes/simplepie_filter.php';
$feed = new SimplePie_Filter();

// turn off caching since this is just a demo
$feed->enable_cache(false);

// these are the test feeds (clinton, obama)
$urls = array
(
		'http://feeds.elpasotimes.com/mngi/rss/CustomRssServlet/525/200227.xml',
		'http://rss.cnn.com/rss/cnn_topstories.rss',
                'http://www.kfoxtv.com/mostpopularstories/topstory.rss',
		'http://www.nytimes.com/services/xml/rss/nyt/HomePage.xml'
);
$feed->set_feed_url($urls);

// set words to filter by
$words = 'border Juarez Mexico chihuahua cartel indios mexican';

// set filter mode (and/or)
$mode = 'or';

// set the filter words and mode
$feed->set_filter($words,$mode);

// go speed racer
$feed->init();

if($feed->error())
{
	echo '<p>',$feed->error(),'</p>';
	die;
}
else
{
	$items = $feed->get_items(0,20);
	$itemsFiltered = $feed->filter($items);
	//echo '<h3>Search Results</h3>';
	if(!count($itemsFiltered))
	{
		//echo '<p>Current border news not found</p>';
		echo '';
	}
	else
	{
		foreach($itemsFiltered as $item)
		{
			/*echo '<div style="margin-bottom:3em">';
			echo '<a href="',$item->get_link(),'">',highlight($words,strip_tags($item->get_title())),'</a><br />';
			echo $item->get_date(),'<br />';
			$content = strip_tags($item->get_content());
			$content = highlight($words,$content);
			echo $content,'<br />';
			echo '</div>';*/
			echo '<p class="headline"><a href="',$item->get_permalink(),'" title="',$item->get_title(),'">',$item->get_title(),'</a></p>';
			echo '<p class="body">',$item->get_description(),'</p>';
        	echo '<p class="news_links"><a href="mercados.php" class="more" title="More on Juarez">More on Ju&aacute;rez</a><a href="',$item->get_permalink(),'" class="full" title="Full story" target="_blank">Full Story</a></p>';
		}
	}
}
/*function highlight($wordsToHighlight,$text)
{
	$w = addslashes($wordsToHighlight);
	$w = explode(' ',$w);
	foreach($w as $word)
	{
		$pattern = "#(^|[^\w])($word)($|[^\w])#ui";
		$replacement = '$1<span style="color:black;background-color:yellow">$2</span>$3';
		$text = preg_replace($pattern,$replacement,$text);
	}
	return $text;
}*/
?>
</body>
</html>
