<?php

	/**
	 * Everything about sending emails goes here.
	 *
	 */


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
			$to = 'adzbite@gmail.com';
			$subject = 'Adzbite Contact Form';
			$headers = '\n\n\n Name: ' . $name . ' \n Email: ' . $email . '\n Website: ' . $website;


		mail( $to, $subject, $message . $headers);
		echo '<div class="alert alert-success"><strong>Sent!</strong> You will get a response within 12 hours.</div>';
		exit;
	}
	else {
		echo '<div class="alert alert-danger"><strong>Something is wrong!</strong> There is no message to send.</div>';
		exit;
	}
}