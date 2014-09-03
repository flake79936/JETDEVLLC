<?php

	# xml_feeder.php

    //get the simplepie library
    require_once('includes/simplepie.inc');
    
    //grab the feed
    $feed = new SimplePie();
    
    $feed->set_feed_url(array(
    	'http://feeds.elpasotimes.com/mngi/rss/CustomRssServlet/525/215302.xml',
		'http://topics.latimes.com/world/people/felipe-calderon.atom'
    ));
    
    //enable caching
    $feed->enable_cache(true);
    
    //provide the caching folder
    $feed->set_cache_location('cache');
    
    //set the amount of seconds you want to cache the feed
    $feed->set_cache_duration(25);
    
    //init the process
    $feed->init();
    
    //let simplepie handle the content type (atom, RSS...)
    $feed->handle_content_type();
	
	// How many items per feed should we try to grab?
	//$items_per_feed = 0;
	$feed->set_item_limit(5);
	
	// grab starting point
	//$starting = $HTTP_GET_VARS[start];
	
	// As long as we're not trying to grab more items than the feed has, go through them one by one and add them to the array.
	for ($x = 0; $x < $feed->get_item_quantity($items_per_feed); $x++)
	{
		$first_items[] = $feed->get_item($x);
	}

?>
				
<?php if ($feed->error): ?>
  <p><?php echo $feed->error; ?></p>
<?php endif; ?>

<?php foreach ($feed->get_items() as $item): ?>
<?php //foreach ($first_items as $item): ?>

    <p class="headline"><a href="<?php echo $item->get_permalink(); ?>" title="<?php $feed = $item->get_feed(); echo $item->get_title(); ?>"><?php $feed = $item->get_feed(); echo $item->get_title(); ?></a></p>
		<p class="body"><?php $feed = $item->get_feed(); echo $item->get_description(); ?></p>
        <p class="news_links"><a href="mercados.php" class="more" title="More on Juarez">More on Ju&aacute;rez</a><a href="<?php echo $item->get_permalink(); ?>" class="full" title="Full story" target="_blank">Full Story</a></p>
        
<?php endforeach; ?>
<?php

?>