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

add_shortcode('blockqoute','light_bg_shortcode2');

function light_bg_shortcode2($atts, $content = null)
{
	extract(shortcode_atts(array('class' => ''),$atts));

	$output = '';
	$output .= '<div class="light_bg2 '.$class.'">';
	$output .= do_shortcode($content);
	$output .= '</div>';

	return $output;
}
 
/** =============== Carousel =================*/

add_shortcode('carousel','mini_carousel');

function mini_carousel($atts, $content = null)
{
	$output = '';
	$output .= '<div id="mini-carousel" class="owl-mini-carousel">';
	$output .= do_shortcode($content);
	$output .= '</div>';

	return $output;
}

add_shortcode('carousel_img','carousel_img_wrap');

function carousel_img_wrap($atts, $content = null)
{
	extract(shortcode_atts(array('img' => '', 'alt' => '', 'link' => '#', 'target' => '_blank'),$atts));

	$output = '';
	$output .= '<div class="item"><a href="' . $link . '" target="' . $target . '"><img class="lazyOwl" src="' . $img . '" alt="'. $alt . '"></a></div>';

	return $output;
}