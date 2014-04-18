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
			<div class="home-content">
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
<?php get_footer(); ?>