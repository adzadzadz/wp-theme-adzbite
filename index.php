<?php

	/**
	 * 
	 * Pages return here when other files are broken.
	 * 
	 */

?>

<?php get_header(); ?>
<div id="page-content">
	<?php get_sidebar( 'left' ); ?>
	<?php get_template_part( 'content', 'top' ); ?> 
	<div class="gray">
		<section class="center-content col-lg-7 col-md-7 col-sm-9">
			<div class="page_title_bg">
				<div class="col-md-3 col-sm-12 page_title"><h2><?php the_title(); ?></h2></div>
				<div id="breadcrumb_bg" class="col-md-9 col-sm-12"><?php the_breadcrumb(); ?></div>
			</div>
			<?php if(have_posts()): while(have_posts()) : the_post(); ?>
			<div class="blog-bg">
				<br>
				<br>
				<div class="home-content">

					<?php the_content(); ?>
					
				</div>
			</div>
			<?php endwhile; else: ?>

			<h4>No content to display.</h4>

			<?php endif ?>
		</section>
		<?php get_sidebar( 'right' ); ?>
	</div>
</div>
<?php get_footer(); ?>