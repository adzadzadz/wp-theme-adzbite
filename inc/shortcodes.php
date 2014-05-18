<?php


/** =============== Page Title =================*/

add_shortcode('title','page_title');
// Example:  [title value="Collection" sub="LoL"]
function page_title($atts, $content = null)
{
	extract(shortcode_atts(array('class' => '', 'value' => '', 'sub' => '&nbsp;'),$atts));

	$output = '';
	$output .= '<div class="page_title_bg2 row ' . $class . '">';
	$output .= '<h2 style="color: #03381C;">';
	$output .= '<div class="col-md-5 col-sm-12 page_title2"><b>' . $value . '</b></div>';
	$output .= '<div class="col-md-7 col-sm-12 page_title_right2"><small>' . $sub . '</small></div>';
	$output .= '</h2>';
	$output .= '</div><br>';

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
// Example: [lightbox cols="5" class="" img="" alt="" img_link="#" img_attr=""]
function lightbox($atts, $content = null)
{
	extract(shortcode_atts(array('class' => '', 'img' => '', 'alt' => '', 'img_link' => '#', 'img_attr' => '', 'cols' => 12),$atts));

	$output = '';
	$output .= '<div style="padding-left:0;" class="lb-pop col-md-' . $cols . '"><a class="thumbnail" style="margin-bottom: 0px;">';
	$output .= '<img class="' . $class . '" src="' . $img . '" data-link="' . $img_link . '" alt="' . $alt . '" height="' . $height . '" width="' . $width . '"' . $img_attr . '>';
	$output .= '</a></div>';

	return $output;
}

/** =============== button =================*/

add_shortcode('button','button');
// Example:  [button link="http://greatlife.adzbite.com" class="btn-primary btn-lg" value="Demo"]
function button($atts, $content = null)
{
	extract(shortcode_atts(array('class' => '', 'value' => 'Submit', 'link' => '#'),$atts));

	$output = '';
	$output .= '<a style="color: #fff;" class="btn ' . $class . '" href="'. $link . '" target="_blank">';
	$output .= $value;
	$output .= '</a>';

	return $output;
}

/** =============== Contact Form =================*/

add_shortcode('adzbite_contact','contact_form');

function contact_form($atts, $content = null)
{
	extract(shortcode_atts(array('class' => '', 'button' => 'Send'),$atts));

	$output = '';
	$output .= '<div class="contact-wrap"><div class="adzbite-contact col-md-7">';
	$output .= '<form action="" method="POST" id="adzbite-contact-form">';
	$output .= '<div class="form-group"><label for="name" id="label_name">Name: </label><input class="form-control" type="text" id="name" name="name" placeholder="Channing Tatum"><div class="alert-name alert alert-danger"></div></div>';
	$output .= '<div class="form-group"><label for="email" id="label_email">Email: </label><input class="form-control" type="text" id="email" name="email" placeholder="bubbles@powerpuffgirls.org"><div class="alert-email alert alert-danger"></div></div>';
	$output .= '<div class="form-group"><label for="website" id="label_website">Website:</label><input class="form-control" type="text" name="website" id="website" placeholder="www.adzbite.com"><div class="alert-website alert alert-danger"></div></div>';
	$output .= '<div class="form-group"><label for="message" id="label_message">Message: </label><textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Dude, just right something. I don\'t want to be lonely."></textarea><div class="alert-message alert alert-danger"></div></div></form>';
	$output .= '<button class="btn btn-primary adzbite-contact-button" onclick="sendMail();">' . $button . '</button></div><div class="result" style="display:hidden;"></div></div>';

	return $output;
}

/** =============== Featured Work =================*/

add_shortcode('work_img','featuredWork');
// Example:  [work_img link="http://greatlife.adzbite.com" class="none" main_img="http://www.adzbite.com/wp-content/uploads/2014/05/depressed-200x200.jpg" hover_img="http://www.adzbite.com/wp-content/uploads/2014/04/featured-200x200.png"][/work_img]
function featuredWork($atts, $content = null)
{
	extract(shortcode_atts(array('title' => '', 'sub' => '', 'class' => '', 'main_img' => '', 'hover_img' => '', 'link' => '#', 'alt' => 'main image', 'button' => 'View'),$atts));

	$output = '';
	$output .= '<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">';
	$output .= '<div class="page-thumbnail desc">';
	$output .= '<a href="' . $link . '">';
	$output .= '<div class="wrap-thumbnail ">';
	$output .= '<img src="' . $main_img . '" alt="' . $alt . '" class="main">';
	$output .= '<img src="' . $hover_img . '" alt="' . $alt . '" class="hover">';
	$output .= '<div class="img_darken"></div>';
	$output .= '</div>';
	$output .= '</a>';
	$output .= '<div class="caption"><p></p><a href="' . $link . '"><h3><b>' . $title . '</b></h3></a><p><b>' . $sub . '</b></p><p></p>';
	$output .= do_shortcode($content);
	$output .= '</div>';
	$output .= '</div>';
	$output .= '</div>';
	
	return $output;
}

/** =============== infobox =================*/

add_shortcode('infobox','infobox');
// Example:  [infobox class="none" bg="green" title="My Title" logo="pushpin"] Content Here [/infobox]
function infobox($atts, $content = null)
{
	extract(shortcode_atts(array('class' => '', 'bg' => '#35bc7a', 'title' => 'title', 'logo' => 'pushpin', 'cols' => '3', 'height' => '150px', 'hover' => 'true'),$atts));

	$col_count = 12 / $cols;
	if($height == 'auto') {
		$pre_height = "min-";
		$height = "10px";
	}
	else {
		$pre_height = "";
	}
	if($hover == 'true') {
		$hover_class = "hover";
	}
	else {
		$hover_class = "";
	}

	$output = '';
	$output .= '<div class="col-xs-12 col-sm-' . $col_count . '">';
	$output .= '<div class="info-box ' . $class . ' ' . $hover_class . '" style="background: ' . $bg . '; ' . $pre_height . 'height: ' . $height . ';">';
	$output .= '<span class="glyphicon glyphicon-' . $logo . '" style="font-size: 3em;"></span>';
	$output .= '<h2><b>' . $title . '</b></h2>';
	$output .= '<p></p>';
	$output .= '<p>' . do_shortcode($content) . '</p>';
	$output .= '</div>';
	$output .= '</div>';

	return $output;
}

?>
