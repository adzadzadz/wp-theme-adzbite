<?php

	/**
	 * 
	 * Pages return here when other files are broken.
	 * 
	 */

?>

<?php get_header(); ?>
<div id="page-content">
	<div class="gray-bg">
	<?php get_sidebar( 'left' ); ?>
	<?php get_template_part( 'content', 'top' ); ?> 
	<div class="col-md-10 col-sm-9 gray">
		<section class="center-content col-sm-9">
			<div class="home-content">
				<?php if(have_posts()): while(have_posts()) : the_post(); ?>

				<div class="page_title_bg"><h2 class="page_title"><?php the_title(); ?></h2></div>

				<div class="home-content">

				<?php if ( has_post_thumbnail() ) {the_post_thumbnail('thumbnail');} ?>

				<?php the_content(); ?>
					
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