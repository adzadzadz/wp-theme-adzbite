<?php
	
	/**
	 * 
	 * Template Name: Archives
	 *
	 */

?>

<?php get_header(); ?>
<div id="page-content">
	<?php get_sidebar( 'left' ); ?>
	<?php get_template_part( 'content', 'top' ); ?> 
	<div class="gray">
		<section class="center-content col-lg-7 col-md-7 col-sm-9">

				<div class="page_title_bg"><h2 class="page_title_cat">Archives</h2></div>
				
				<?php if(have_posts()): while(have_posts()) : the_post(); ?>

				<div class="home-content">

				<?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?>

				<?php get_template_part('content','post'); ?>
					
				</div>
				<?php endwhile; else: ?>

				<h4>No content to display.</h4>

				<?php endif ?>
		</section>
		<?php get_sidebar( 'right' ); ?>
	</div>
</div>
<?php get_footer(); ?>