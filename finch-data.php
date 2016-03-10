<?php

defined( 'FINCH' ) || die();

function get_finch_site_data(){
	$items = array(
		'title' => 'Finch',
		'description' => 'A Lightweight, PHP Driven Web Page System',
	);
	return $items;
}

function get_finch_header_data(){
	$items = array(
			'header' => 0,
			'tablet' => 1,
			'mobile' => 1,
	);
	return $items;
}

function get_page_layout_data(){
	$items = array(
		'sidebar' => 1,
		'mobile-header-show' => 0,
		'tablet-header-show' => 0,
		'sidebar-overlay' => 1,
	);
	return $items;
}

function get_finch_sidebar_data(){
	$items = array(
			'sidebar' => 1,
			'title' => 0,
			'left' => 0,
			'bottom' => 1,
			'overlay' => 1,
			'button' => 1,
			'slide' => 0,
	);
	return $items;
}

function get_finch_sidebar_alt_data(){
	$items = array(
			'sidebar' => 0,
			'right' => 1,
			'bottom' => 1,
			'overlay' => 1,
			'button' => 1,
			'slide' => 0,
	);
	return $items;
}

function get_finch_footer_data(){
	$items = array(
		'footer' => 1,
		'tablet' => 1,
		'mobile' => 1,
	);
	return $items;
}

function get_finch_static_menu_data(){
	$items = array(
		'static' => 0,
		'item-1' => 1,
		'item-2' => 1,
		'item-3' => 1,
		'item-4' => 1,
	);
	return $items;
}

function get_finch_image_data(){
	$items = array(
		'width' => '1600',
		'height' => '900',
		'ext' => 'png',
	);
	return $items;
}

function get_no_caps_data(){
	return array( 'the', 'in', 'at', 'is', 'by' );
}

function get_finch_directory_data(){
	$items = array( 
		'uploads' => 'uploads', 
		'static' => 'static',
		'images' => 'images',
		'videos' => 'videos',
		'audio' => 'audio',
		'html' => 'html',
	);
	return $items;
}

function get_finch_file_formats(){
	$items = array(
		'mp3' => true,
		'mp4' => true,
		'webm' => false,
		'vimeo' => true,
		'youtube' => true,
	);
	return $items;
}

function get_finch_remote_video_urls(){
	$items = array(
	'youtube' => 'https://www.youtube.com/embed',
	'vimeo' => 'https://player.vimeo.com/video',
	);
	return $items;
}

function get_finch_rss_data(){
	$items = array(
			'url' => '',
	);
	return $items;
}

function get_finch_tap_grid_data(){
	$items = array(
			'home' => array( 'name' => 'Home', 'value' => '/' ),
			'phone' => array( 'name' => 'Phone', 'value' => '(123) 456-7890' ),
			'email' => array( 'name' =>  'Email', 'value' => 'joe@example.ca' ),
			'share' => array (
				array( 'name' => 'linkedin', 'url' => '#' ),
				array( 'name' => 'facebook', 'url' => '0' ),
				array( 'name' => 'googleplus', 'url' => '#' ),
				array( 'name' => 'twitter', 'url' => '#' ),
			),
	);
	return $items;
}

function get_finch_tap_grid_full_data(){
	$items = array(
		 0 => 'A',  1 => 'B',  2 => 'C',  3 => '',
		 4 => '1',  5 => '2',  6 => '3',  7 => '',
		 8 => '4',  9 => '5', 10 => '6', 11 => '',
		12 => '7', 13 => '8', 14 => '9', 15 => '',
		16 => '',  17 => '0',  18 => '',  19 => '',
	);
	return $items;
}
