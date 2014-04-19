<?php

// Adzbite Theme Options Area


$options = get_option('theme_options');


function build_options_page() { ?>
<div id="theme-options-wrap">
	<div class="icon32" id="icon-tools"> <br /> </div>
	<h2>Adzbite Theme Settings</h2>
	<p>Update various settings throughout your website.</p>
	<form method="post" action="options.php" enctype="multipart/form-data">
		<?php settings_fields('theme_options'); ?>
		<?php do_settings_sections(__FILE__); ?>
		<p class="submit">
			<input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />
		</p>
	</form>
</div>
<?php }
add_action('admin_init', 'register_and_build_fields');
function register_and_build_fields() {

	// register_setting( $option_group, $option_name, $sanitize_callback );
	register_setting('theme_options', 'theme_options', 'validate_setting');
	
	$options = get_option('theme_options');

	// add_settings_section( $id, $title, $callback, $page );
	add_settings_section('top_carousel', 'Top Carousel Settings', 'top_carousel', __FILE__);
	add_settings_section('home_carousel', 'Home Carousel Settings', 'home_carousel', __FILE__);
	function top_carousel() {}
	function home_carousel() {}

	// add_settings_field( $id, $title, $callback, $page, $section, $args );
	add_settings_field('carousel_img_count', 'Number of Images:', 'img_count', __FILE__, 'top_carousel');
	add_settings_field('home_carousel_img_count', 'Number of Images:', 'home_img_count', __FILE__, 'home_carousel');


	for ($x=0; $x < (int)$options['carousel_img_count']; $x++) { 
		add_settings_field('top_carousel_' . $x, 'Image Url ' . $x .':', 'top_carousel_img_input_' . $x, __FILE__, 'top_carousel');
	}

	for ($x=0; $x < (int)$options['home_carousel_img_count']; $x++) { 
		add_settings_field('home_carousel_' . $x, 'Image Url ' . $x .':', 'home_carousel_img_input_' . $x, __FILE__, 'home_carousel');
		add_settings_field('home_carousel_caption' . $x, 'Image Caption ' . $x .' (HTML Tags Allowed):', 'home_carousel_caption_input_' . $x, __FILE__, 'home_carousel');
	}
	
}
function validate_setting($theme_options) {
	return $theme_options;
}
//===================================================================
//======================= IMAGE COUNTS ==============================
//===================================================================
function img_count() {
	$options = get_option('theme_options'); echo "<input style='width: 40px;' name='theme_options[carousel_img_count]' value='{$options['carousel_img_count']}' type='text'>";
}
function home_img_count() {
	$options = get_option('theme_options'); echo "<input style='width: 40px;' name='theme_options[home_carousel_img_count]' value='{$options['home_carousel_img_count']}' type='text'>";
}

//===================================================================
//========================= IMAGE URLS ==============================
//===================================================================
// Top Carousel
function top_carousel_img_input_0() {
	$options = get_option('theme_options'); echo "<input style='width: 500px;' name='theme_options[top_carousel_0]' value='{$options['top_carousel_0']}' type='text'>";
}
function top_carousel_img_input_1() {
	$options = get_option('theme_options'); echo "<input style='width: 500px;' name='theme_options[top_carousel_1]' value='{$options['top_carousel_1']}' type='text'>";
}
function top_carousel_img_input_2() {
	$options = get_option('theme_options'); echo "<input style='width: 500px;' name='theme_options[top_carousel_2]' value='{$options['top_carousel_2']}' type='text'>";
}
function top_carousel_img_input_3() {
	$options = get_option('theme_options'); echo "<input style='width: 500px;' name='theme_options[top_carousel_3]' value='{$options['top_carousel_3']}' type='text'>";
}
function top_carousel_img_input_4() {
	$options = get_option('theme_options'); echo "<input style='width: 500px;' name='theme_options[top_carousel_4]' value='{$options['top_carousel_4']}' type='text'>";
}
function top_carousel_img_input_5() {
	$options = get_option('theme_options'); echo "<input style='width: 500px;' name='theme_options[top_carousel_5]' value='{$options['top_carousel_5']}' type='text'>";
}
function top_carousel_img_input_6() {
	$options = get_option('theme_options'); echo "<input style='width: 500px;' name='theme_options[top_carousel_6]' value='{$options['top_carousel_6']}' type='text'>";
}
function top_carousel_img_input_7() {
	$options = get_option('theme_options'); echo "<input style='width: 500px;' name='theme_options[top_carousel_7]' value='{$options['top_carousel_7']}' type='text'>";
}
function top_carousel_img_input_8() {
	$options = get_option('theme_options'); echo "<input style='width: 500px;' name='theme_options[top_carousel_8]' value='{$options['top_carousel_8']}' type='text'>";
}
function top_carousel_img_input_9() {
	$options = get_option('theme_options'); echo "<input style='width: 500px;' name='theme_options[top_carousel_9]' value='{$options['top_carousel_9']}' type='text'>";
}
function top_carousel_img_input_10() {
	$options = get_option('theme_options'); echo "<input style='width: 500px;' name='theme_options[top_carousel_10]' value='{$options['top_carousel_10']}' type='text'>";
}
// Home Carousel
function home_carousel_img_input_0() {
	$options = get_option('theme_options'); echo "<input style='width: 500px;' name='theme_options[home_carousel_0]' value='{$options['home_carousel_0']}' type='text'>";
}
function home_carousel_img_input_1() {
	$options = get_option('theme_options'); echo "<input style='width: 500px;' name='theme_options[home_carousel_1]' value='{$options['home_carousel_1']}' type='text'>";
}
function home_carousel_img_input_2() {
	$options = get_option('theme_options'); echo "<input style='width: 500px;' name='theme_options[home_carousel_2]' value='{$options['home_carousel_2']}' type='text'>";
}
function home_carousel_img_input_3() {
	$options = get_option('theme_options'); echo "<input style='width: 500px;' name='theme_options[home_carousel_3]' value='{$options['home_carousel_3']}' type='text'>";
}
function home_carousel_img_input_4() {
	$options = get_option('theme_options'); echo "<input style='width: 500px;' name='theme_options[home_carousel_4]' value='{$options['home_carousel_4']}' type='text'>";
}
//Home Carousel Caption
function home_carousel_caption_input_0() {
	$options = get_option('theme_options'); echo "<input style='width: 500px;' name='theme_options[home_carousel_caption_0]' value='{$options['home_carousel_caption_0']}' type='text'>";
}
function home_carousel_caption_input_1() {
	$options = get_option('theme_options'); echo "<input style='width: 500px;' name='theme_options[home_carousel_caption_1]' value='{$options['home_carousel_caption_1']}' type='text'>";
}
function home_carousel_caption_input_2() {
	$options = get_option('theme_options'); echo "<input style='width: 500px;' name='theme_options[home_carousel_caption_2]' value='{$options['home_carousel_caption_2']}' type='text'>";
}
function home_carousel_caption_input_3() {
	$options = get_option('theme_options'); echo "<input style='width: 500px;' name='theme_options[home_carousel_caption_3]' value='{$options['home_carousel_caption_3']}' type='text'>";
}
function home_carousel_caption_input_4() {
	$options = get_option('theme_options'); echo "<input style='width: 500px;' name='theme_options[home_carousel_caption_4]' value='{$options['home_carousel_caption_4']}' type='text'>";
}
//===================================================================
//========================= IMAGE URLS - END ========================
//===================================================================


add_action('admin_menu', 'theme_options_page');
function theme_options_page() {  
	add_menu_page('Adzbite Theme Settings', 'Adzbite Theme Settings', 'administrator', __FILE__, 'build_options_page');
}