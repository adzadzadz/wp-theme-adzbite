<?php

	/**
	 * Everything about sending emails goes here.
	 *
	 */

?>


<?php

if($_SERVER['REQUEST_METHOD'] != 'POST') {
	header("location:" . $_SERVER['HTTP_REFERER']);
	exit;
}

echo '<div class="alert alert-success"><strong>Sent!</strong> You will get a response within 12 hours.</div>';