<?php

add_action( 'wp_ajax_nopriv_adzbite_login_form', 'adzbite_login_form' );

function adzbite_login_form() {

	$output .= '<form method="post" action="/wp-login.php" class="wp-user-form">';
	$output .= '<div class="username form-group">';
	$output .= '<label for="user_login">Username </label>';
	$output .= '<input class="form-control" type="text" name="log" value="" size="20" id="user_login" tabindex="11" />';
	$output .= '</div>';
	$output .= '<div class="password  form-group">';
	$output .= '<label for="user_pass">Password </label>';
	$output .= '<input class="form-control" type="password" name="pwd" value="" size="20" id="user_pass" tabindex="12" />';
	$output .= '</div>';
	$output .= '<div class="login_fields">';
	$output .= '<div class="rememberme form-group">';
	$output .= '<label for="rememberme"></label>';
	$output .= '<input class="" type="checkbox" name="rememberme" value="forever" checked="checked" id="rememberme" tabindex="13" /> Remember me';
	$output .= '</div>';
	$output .=  do_action('login_form');
	$output .= '<input class="btn btn-primary" type="submit" name="user-submit" value="Login" tabindex="14" class="user-submit" />';
	$output .= '<input type="hidden" name="redirect_to" value="' . $_SERVER['HTTP_REFERER'] . '" />';
	$output .= '<input type="hidden" name="user-cookie" value="1" />';
	$output .= '</div>';
	$output .= '</form>';

	echo $output;
    die();
}

add_action( 'wp_ajax_nopriv_adzbite_register_form', 'adzbite_register_form' );

function adzbite_register_form() {

	$output .= '<form method="post" action="' . site_url('wp-login.php?action=register', 'login_post') . '" class="wp-user-form">';
	$output .= '<div class="username form-group">';
	$output .= '<label for="user_login">Username</label>';
	$output .= '<input class="form-control" type="text" name="user_login" value="" size="20" id="user_login" tabindex="101" />';
	$output .= '</div>';
	$output .= '<div class="email form-group">';
	$output .= '<label for="user_email">Email</label>';
	$output .= '<input class="form-control" type="text" name="user_email" value="" size="25" id="user_email" tabindex="102" />';
	$output .= '</div>';
	$output .= '<div class="login_fields">';
	$output .= do_action('register_form');
	$output .= '<div class="alert alert-danger">*Your password will be emailed to you.</div>';
	$output .= '<input type="submit" name="user-submit" value="Sign up" class="btn btn-primary" tabindex="103" />';
	$output .= '<input type="hidden" name="redirect_to" value="' . $_SERVER['HTTP_REFERER'] . '?register=true" />';
	$output .= '<input type="hidden" name="user-cookie" value="1" />';
	$output .= '</div>';
	$output .= '</form>';

	echo $output;
    die();
}

// Mailer

add_action( 'wp_ajax_nopriv_contact_message', 'contact_message' );

function contact_message() {

	if(isset($_POST['name']) and isset($_POST['email'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		if (isset($_POST['website'])) {
			$website = $_POST['website'];
		}
		else {
			$website = 'NONE!';
		}
	}
	if (isset($_POST['message'])) {
		if(trim($_POST['message']) != "") {
				$message = $_POST['message'];
				// $to = get_bloginfo( 'admin_email' );
				$to = get_bloginfo('admin_email');
				$subject = 'Adzbite Contact Form';
				$headers = '<br><br><br>Name: ' . $name;
				$headers .= '<br>Email: ' . $email;
				$headers .= '<br>Website: ' . $website;
				

			wp_mail( $to, $subject, $message . $headers );
			echo '<div class="alert alert-success"><strong>Sent!</strong> You will get a response within 12 hours.</div>';
			die();
		}
		else {
			echo '<div class="alert alert-danger"><strong>Something is wrong!</strong> There is no message to send.</div>';
			die();
		}
	}

    die();
}

