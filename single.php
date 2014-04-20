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
	<div class="col-md-10 gray">
		<section class="center-content col-sm-9 blog-page">

		<div class="blog-bg">

			<div class="page_title_bg"><h2 class="page_title" style="color: #fff;">Blog</h2></div>

				<?php if(have_posts()): while(have_posts()) : the_post(); ?>
				
				<div class="home-content">

				<?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?>

				<?php get_template_part('content','post'); ?>
					
				</div>
				<?php endwhile; else: ?>

				<h4>No content to display.</h4>

				<?php endif ?>
		</div>

		</section>
		<?php get_sidebar( 'right' ); ?>
	</div>
</div>
<?php get_footer(); ?>