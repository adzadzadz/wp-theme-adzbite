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
// Example: [lightbox class="wp_featured" img="" alt="" img_link="#" img_attr="" height="" width=""]
function lightbox($atts, $content = null)
{
	extract(shortcode_atts(array('class' => '', 'img' => '', 'alt' => '', 'img_link' => '#', 'img_attr' => '', 'cols' => 1),$atts));

	$output = '';
	$output .= '<div style="padding-left:0;" class="lb-pop col-xs-' . $cols . '"><a class="thumbnail" style="margin-bottom: 0px;">';
	$output .= '<img class="' . $class . '" src="' . $img . '" data-link="' . $img_link . '" alt="' . $alt . '" height="' . $height . '" width="' . $width . '"' . $img_attr . '>';
	$output .= '</a></div>';

	return $output;
}

/** =============== Contact Form =================*/

add_shortcode('adzbite_contact','contact_form');

function contact_form($atts, $content = null)
{
	extract(shortcode_atts(array('class' => '', 'button' => 'Send'),$atts));

	$output = '';
	$output .= '<div class="adzbite-contact col-md-7">';
	$output .= '<form action="' . get_template_directory_uri() . '/assets/php-mail.php" method="POST" id="adzbite-contact-form">';
	$output .= '<div class="form-group"><label for="name" id="label_name">Name: </label><input class="form-control" type="text" id="name" name="name" placeholder="Channing Tatum"><div class="alert-name alert alert-danger"></div></div>';
	$output .= '<div class="form-group"><label for="email" id="label_email">Email: </label><input class="form-control" type="text" id="email" name="email" placeholder="bubbles@powerpuffgirls.org"><div class="alert-email alert alert-danger"></div></div>';
	$output .= '<div class="form-group"><label for="website" id="label_website">Website:</label><input class="form-control" type="text" name="website" id="website" placeholder="www.adzbite.com"><div class="alert-website alert alert-danger"></div></div>';
	$output .= '<div class="form-group"><label for="message" id="label_message">Message: </label><textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Dude, just right something. I don\'t want to be lonely."></textarea><div class="alert-message alert alert-danger"></div></div></form>';
	$output .= '<div class="result" style="display:hidden;"></div><button class="btn btn-success adzbite-contact-button">' . $button . '</button></div></div>';

	return $output;
}


