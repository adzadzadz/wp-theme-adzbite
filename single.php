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
		<div class="blog-bg">
			<div class="page_title_bg">
				<div class="col-md-3 col-sm-12 page_title"><h2 style="color: #fff;">Article</h2></div>
				<div id="breadcrumb_bg" class="col-md-9 col-sm-12"><?php the_breadcrumb(); ?></div>
			</div>
				<?php if(have_posts()): while(have_posts()) : the_post(); ?>
				
				<div class="home-content">

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