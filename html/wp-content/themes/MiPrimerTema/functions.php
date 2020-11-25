<?php
add_theme_support( 'post-thumbnails' );

function title_with_link() {
	$external_url = get_post_meta(get_the_ID(), 'external_url', true);
	if (empty($external_url)) {
		$link = get_permalink();
	} else {
		$link = $external_url;
	}
	echo '<h2><a href="'.$link.'">'.get_the_title().'</a></h2>';
}
