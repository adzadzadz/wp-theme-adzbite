<?php

// Adzbite Theme Options Area

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

	// add_settings_section( $id, $title, $callback, $page );
	add_settings_section('General', 'Homepage Settings', 'section_homepage', __FILE__);
	function section_homepage() {}
	function section_footer() {}

	// add_settings_field( $id, $title, $callback, $page, $section, $args );
	add_settings_field('logo', 'Logo Url', 'logo_setting', __FILE__, 'General');
}
function validate_setting($theme_options) {
	return $theme_options;
}
function logo_setting() {
	$options = get_option('theme_options');  echo "<input name='theme_options[logo]' value='{$options['logo_setting']}' type='text'>";
}
add_action('admin_menu', 'theme_options_page');
function theme_options_page() {  
	add_menu_page('Adzbite Theme Settings', 'Adzbite Theme Settings', 'administrator', __FILE__, 'build_options_page');
}