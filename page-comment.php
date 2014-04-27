<?php

	/**
	 * This is where the blog is listed.
	 * It fetches the content-post.php file to get the blog posts.
	 *
	 * Template Name: Page With Comment
	 *
	 */

?>


<?php get_header(); ?>
<div id="page-content">
	<?php get_sidebar( 'left' ); ?>
	<?php get_template_part( 'content', 'top' ); ?> 
	<div class="gray">
		<section class="center-content col-lg-7 col-md-7 col-sm-9">
				<?php if(have_posts()): while(have_posts()) : the_post(); ?>

				<div class="page_title_bg">
					<div class="col-md-3 col-sm-12 page_title"><h2><?php the_title(); ?></h2></div>
					<div id="breadcrumb_bg" class="col-md-9 col-sm-12"><?php the_breadcrumb(); ?></div>
				</div>

				<div class="home-content">

				<?php if ( has_post_thumbnail() ) {the_post_thumbnail('thumbnail');} ?>

				<?php the_content(); ?>
				<br>
				<br>
				<div class="fb-comments" data-href="http://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>" data-numposts="50" data-colorscheme="dark" data-width="550px"></div>
				</div>
				<?php endwhile; else: ?>

				<h4>No content to display.</h4>

				<?php endif ?>
				
		</section>
		<?php get_sidebar( 'right' ); ?>
	</div>
</div>

<?php get_footer(); ?>