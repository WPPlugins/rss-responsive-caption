<?php
/*
Plugin Name: RSS Responsive Caption
Plugin URI: http://brandonmoeller.com/blog/2011/12/18/rss-responsive-caption
Description: Improves WordPress caption elements so captioned images in RSS feeds responsively adjust to fit within Google Reader’s screen on Android devices.
Author: Brandon Moeller
Version: 1.0
Author URI: http://brandonmoeller.com
*/

/*
This plugin allows publishers to better control the width of photos that use the WordPress caption shortcode feature, when that content is displayed in RSS feed readers like Google Reader, as displayed on small-screen mobile devices. 

This plugin accomplishes the same thing that adjusting the "function img_caption_shortcode" code in includes/media.php would, but allows the user to automatically update WordPress without worrying about losing these changes. 

It is the author's hope that in future releases of WordPress (post 3.3), this plugin will prove unnecessary if (hard-working, responsive-minded) WordPress core developers decide to include the fix in newer versions of the awesome great open source software we have all come to love. 

The code for this plugin was inspired by code found on this page of the codex: http://codex.wordpress.org/Function_Reference/add_filter 
*/

add_filter('img_caption_shortcode', 'rss_responsive_caption_img_caption_shortcode_filter',10,3);

/**
 * Filter to replace the [caption] shortcode text with code that displays images better in RSS feeds
 *
 * @return text HTML content with responsive images with captions
 **/
function rss_responsive_caption_img_caption_shortcode_filter($val, $attr, $content = null)
{
	extract(shortcode_atts(array(
		'id'	=> '',
		'align'	=> '',
		'width'	=> '',
		'caption' => ''
	), $attr));
	
	if ( 1 > (int) $width || empty($caption) )
		return $val;

	if ( $id ) $id = 'id="' . esc_attr($id) . '" ';

	return '<div ' . $id . 'class="wp-caption ' . esc_attr($align) . '" style="max-width: 100% !important; height: auto; width: ' . (10 + (int) $width) . 'px">'
	. do_shortcode( $content ) . '<p class="wp-caption-text">' . $caption . '</p></div>';
}

?>