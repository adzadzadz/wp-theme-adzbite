<?php
	
	/**
	 * 
	 * This is the custom comment's page.
	 * Specially helpful for designing the comments.
	 *
	 */

?>


<h3 class="title">Response to <?php the_title();?></h3>

<?php 
	
	$args = array(
		'style'	     => 'ol',
		'reply_text' => 'Reply',
	);
	wp_list_comments( $args ); 

	$newdefaults = array (
		
	);
	comment_form( $newdefaults );
?>
