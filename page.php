<?php
	
	/**
	 * 
	 * This is the default page
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

				<div class="page_title_bg">
					<div class="col-md-3 col-sm-12 page_title"><h2><?php the_title(); ?></h2></div>
					<div id="breadcrumb_bg" class="col-md-9 col-sm-12"><?php the_breadcrumb(); ?></div>
				</div>
				<div class="home-content">

				<?php if ( has_post_thumbnail() ) {the_post_thumbnail('thumbnail');} ?>

				<?php the_content(); ?>
					
				</div>
				<?php endwhile; else: ?>

				<h4>No content to display.</h4>

				<?php endif ?>
		</section>
		<?php get_sidebar( 'right' ); ?>
	</div>
</div>
<?php get_footer(); ?>