<?php

	/**
	 * This is where the Contact Page happens.
	 * 
	 *
	 * Template Name: Contact
	 *
	 */

?>


<?php get_header(); ?>
<div id="page-content">
	<?php get_sidebar( 'left' ); ?>
	<?php get_template_part( 'content', 'top' ); ?> 
	<div class="col-md-10 gray">
		<section class="center-content col-sm-9">
			<?php if(have_posts()): while(have_posts()) : the_post(); ?>

				<div class="page_title_bg"><h2 class="page_title"><?php the_title(); ?></h2></div>

				<div class="home-content">

				<?php if ( has_post_thumbnail() ) {the_post_thumbnail('thumbnail');} ?>

				<?php the_content(); ?>
					
				<?php endwhile; else: ?>

				<h4>No content to display.</h4>

				<?php endif ?>
		</section>
		<?php get_sidebar( 'right' ); ?>
	</div>
</div>
<?php get_footer(); ?>