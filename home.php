<?php

	/**
	 * This is where the blog is listed.
	 * It fetches the content-post.php file to get the blog posts.
	 * 
	 */

?>

<?php get_header(); ?>
<div id="page-content">
	<?php get_sidebar( 'left' ); ?>
	<?php get_template_part( 'content', 'top' ); ?> 
	<div class="col-md-10 gray">
		<section class="center-content col-sm-9">
			<div class="page_title_bg">
				<div class="col-md-3 col-sm-12 page_title"><h2>Articles</h2></div>
				<div id="breadcrumb_bg" class="col-md-9 col-sm-12"><?php the_breadcrumb(); ?></div>
			</div>
				<?php if(have_posts()): while(have_posts()) : the_post(); ?>

				<div class="home-content">

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