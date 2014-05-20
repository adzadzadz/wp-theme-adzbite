<?php

	/**
	 * This is where the blog is listed.
	 * It fetches the content-post.php file to get the blog posts.
	 *
	 * Template Name: Portfolio
	 *
	 */

?>

<?php 

$type = 'adzbite-portfolio';
$args=array(
  'post_type' => $type,
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'caller_get_posts'=> 1
);

$my_query = null;
$my_query = new WP_Query($args);

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

			<?php if ( has_post_thumbnail() ) {the_post_thumbnail('full');} ?>
			
			<?php the_content(); ?>

			<?php endwhile; ?>

			<?php endif ?>
			
			<?php if( $my_query->have_posts() ) {
				
				while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<div class="blog-bg">
						<div class="home-content">
							<br>
							<div class="row">
								
								<div class="col-xs-4">

									<?php if ( has_post_thumbnail() ) {?> <a href="<?php the_permalink();?>" class="img-thumbnail"> <?php the_post_thumbnail('thumbnail');?> </a> <?php } ?>	
								</div>

								<div class="col-xs-8">

									<h3 class="title"><b><a href="<?php the_permalink();?>"><?php the_title();?></a></b></h3>
									<div class="blog-info">
											<span class="title">By:</span> <span class="info"><?php the_author(); ?></span>,
											<!-- <span class="title">Posted in:</span> <span class="info"><?php echo the_category(', ');?></span>, -->
											<span class="title">On:</span> <span class="info"><?php the_date('F j, Y g:i a'); ?></span>
									</div>
									<?php the_excerpt(); ?>
									&nbsp;
									<div class="blog-continue_reading">
										<a href="<?php the_permalink();?>" class="btn btn-primary cat_continue">Open Project</a>
									</div>
								</div>
							</div>
							<br>
						</div>
					</div>
					<br>						
		    						 
		    <?php  endwhile;}?>
			   

		</section>
		<?php get_sidebar( 'right' ); ?>
	</div>
</div>
<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>
<?php get_footer(); ?>