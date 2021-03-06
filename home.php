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
	<div class="gray">
		<section class="center-content col-lg-7 col-md-7 col-sm-9">
			<div class="page_title_bg">
				<div class="col-md-5 col-sm-12 page_title"><h2>Latest Cool Stuff</h2></div>
				<div id="breadcrumb_bg" class="col-md-7 col-sm-12"><?php the_breadcrumb(); ?></div>
			</div>
			
			<?php if(have_posts()): while(have_posts()) : the_post(); ?>

			<div class="blog-bg">	
			<br>	
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