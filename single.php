<?php
	
	/**
	 * 
	 * This is the default single blog page.
	 *
	 */

?>


<?php get_header(); ?>
<div id="page-content">
	<?php get_sidebar( 'left' ); ?>
	<?php get_template_part( 'content', 'top' ); ?> 
	<div class="gray">
		<section class="center-content col-lg-7 col-md-7 col-sm-9 blog-page">
			<div class="page_title_bg">
				<div class="col-md-1 visible-md visible-lg page_title"></div>
				<div id="breadcrumb_bg" class="col-md-11 col-sm-12"><?php the_breadcrumb(); ?></div>
			</div>
			<div class="blog-bg">
			
				<?php if(have_posts()): while(have_posts()) : the_post(); ?>

				<?php get_template_part('content','post'); ?>

				<?php endwhile; else: ?>

				<h4>No content to display.</h4>

				<?php endif ?>
			</div>

		</section>
		<?php get_sidebar( 'right' ); ?>
	</div>
</div>

<script>
	$(document).ready(function () {

		title = "Like and Share";
		message = '<div class="row"><div class="fb-like float-left top-social" data-href="http://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>        <div class="g-plusone" data-size="medium" data-href="http://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>"></div></div>';
		$('.thebox').html('<span class="glyphicon glyphicon-remove close-btn"></span><h2>' + title + '</h2><hr>' + message + '');

		setTimeout(function(){showNotifmodal();},15000);

		function showNotifmodal(title, message) {
      
		    if ($('.notifbox').length > 0) { // #notifbox exists
		                   //place href as img src value
		        
		        //show notifbox window - you could use .show('fast') for a transition
		        $('.notifbox').show();
		        $('.thebox').slideDown();
		    }
		}
	});
</script>

<?php get_footer(); ?>


