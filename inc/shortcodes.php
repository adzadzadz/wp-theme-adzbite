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
 
/** =============== Lightbox =================*/

add_shortcode('lightbox','lightbox');

function lightbox($atts, $content = null)
{
	extract(shortcode_atts(array('class' => '', 'img' => '', 'alt' => '', 'img_link' => '#'),$atts));

	$output = '';
	$output .= '<div class="lb_thumb">';
	$output .= '<img class="' . $class . '" src="' . $img . '" data-link="' . $img_link . '" alt="' . $alt . '">';
	$output .= '</div>';

	return $output;
}

