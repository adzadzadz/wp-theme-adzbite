<?php

	/**
	 * This is where the blog is listed.
	 * It fetches the content-post.php file to get the blog posts.
	 *
	 * Template Name: Portfolio
	 *
	 */

	$default_attr = array(
		'class'	=> "cool-gallery-img",
	);

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
				<div class="col-md-3 col-sm-12 page_title"><h2>Projects</h2></div>
				<div id="breadcrumb_bg" class="col-md-9 col-sm-12"></div>
			</div>
			
			<?php if(have_posts()): while(have_posts()) : the_post(); ?>
			
			<?php if ( has_post_thumbnail() ) {the_post_thumbnail('full');} ?>
				
			<?php the_content(); ?>

			<?php endwhile; ?>

			<?php endif ?>
			<div class="work-bg">
				<div class="row">
					<?php if( $my_query->have_posts() ) {
						while ($my_query->have_posts()) : $my_query->the_post(); ?>
							<?php if ( has_post_thumbnail() ) {?>

								<div class="cool-gallery-single col-lg-4 col-md-6 col-sm-6 col-xs-6">
									<div class="img-wrap">
										<a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail( 'medium', $default_attr );} ?></a>
									</div>
									<div class="cool-gallery-text-wrap">
										<div class="cool-gallery-text">
											<div class="cool-gallery-content">
												<h4><b><?php the_title();?></b></h4>
												<hr>
												<p><small>
												<?php 
													$excerpt = get_the_excerpt();
												    echo string_limit_words($excerpt,25);
												?>...
												</small></p>
											</div>
										</div>
									</div>
								</div>

							<?php } ?>
					    <?php  endwhile; ?> 
				    <?php }?>
			    </div>
		    </div>

		</section>
		<?php get_sidebar( 'right' ); ?>
	</div>
</div>
<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>
<?php get_footer(); ?>