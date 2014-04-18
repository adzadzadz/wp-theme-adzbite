<?php


/** =============== Title ==================*/

add_shortcode('title','title_shortcode');

function title_shortcode($atts, $content = null)
{
	extract(shortcode_atts(array('class' => ''),$atts));

	$output = '';
	$output .= '<h4 class="title '.$class.'">';
	$output .= do_shortcode($content);
	$output .= '</h4>';

	return $output;
}

/** =========== Light Background ============*/

add_shortcode('light_bg','light_bg_shortcode');

function light_bg_shortcode($atts, $content = null)
{
	extract(shortcode_atts(array('class' => ''),$atts));

	$output = '';
	$output .= '<div class="light_bg '.$class.'">';
	$output .= do_shortcode($content);
	$output .= '</div>';

	return $output;
}

/** =========== Light Background 2 ============*/

add_shortcode('light_bg2','light_bg_shortcode2');

function light_bg_shortcode2($atts, $content = null)
{
	extract(shortcode_atts(array('class' => ''),$atts));

	$output = '';
	$output .= '<div class="light_bg2 '.$class.'">';
	$output .= do_shortcode($content);
	$output .= '</div>';

	return $output;
}
 
/** =========== Top Carousel Image ============*/

add_shortcode('top_img','top_carousel_image');

function top_carousel_image($atts, $content = null)
{
	extract(shortcode_atts(array('link' => '', 'alt' => ''),$atts));

	$output = '';
	$output .= '<div class="item"><img class="lazyOwl" data-src="';
	$output .= $link;
	$output .= '" alt="' . $alt . '"></div>';

	return $output;
}
