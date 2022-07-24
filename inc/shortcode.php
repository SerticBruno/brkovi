<?php
defined( 'ABSPATH' ) || exit;

add_shortcode('youtube', 'brkovi_youtube_shortcode'); 
function brkovi_youtube_shortcode($atts, $content = null) { 
 
	if (!isset($atts['id']))
		return '';
	$ratio = (isset($atts['ratio']) ? $atts['ratio'] : '16by9');

	// Output needs to be return
	return "<div class=\"embed-responsive embed-responsive-{$ratio}\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/{$atts['id']}\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>";
} 


add_shortcode('vimeo', 'brkovi_vimeo_shortcode'); 
function brkovi_vimeo_shortcode($atts, $content = null) { 
 
	if (!isset($atts['id']))
		return '';
	$ratio = (isset($atts['ratio']) ? $atts['ratio'] : '16by9');

	// Output needs to be return
	return "<div class=\"embed-responsive embed-responsive-{$ratio}\"><iframe class=\"embed-responsive-item\" src=\"https://player.vimeo.com/video/{$atts['id']}\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>";
} 


add_filter('acf/format_value/type=textarea', 'do_shortcode');

