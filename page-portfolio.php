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
				<div class="col-md-3 col-sm-12 page_title"><h2><?php the_title(); ?></h2></div>
				<div id="breadcrumb_bg" class="col-md-9 col-sm-12"><?php the_breadcrumb(); ?></div>
			</div>
			
			<?php if(have_posts()): while(have_posts()) : the_post(); ?>
			
			<?php if ( has_post_thumbnail() ) {the_post_thumbnail('full');} ?>
				
			<?php the_content(); ?>

			<?php endwhile; ?>

			<?php endif ?>
			<div class="work-bg">
			<?php if( $my_query->have_posts() ) {
				
				while ($my_query->have_posts()) : $my_query->the_post(); ?>
						<?php if ( has_post_thumbnail() ) {?>
							
							<div class="cool-gallery-single col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="img-wrap">
									<a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail( 'medium', $default_attr );} ?></a>
								</div>
								<div class="cool-gallery-text">
									<div class="cool-gallery-content">
										<h4><b><?php the_title();?></b></h4>
										<hr>
										<p><small><?php the_excerpt(); ?></small></p>
									</div>
								</div>
							</div>

						<?php } ?>
					
					<!-- <div class="blog-bg">
						<div class="home-content">
							<br>
							<div class="row">
								<div class="col-xs-4">

									<?php if ( has_post_thumbnail() ) {?> <a href="<?php the_permalink();?>" class="img-thumbnail"> <?php the_post_thumbnail('thumbnail');?> </a> <?php } ?>	
								</div>
								<div class="col-xs-8">

									<h3 class="title"><b><a href="<?php the_permalink();?>"><?php the_title();?></a></b></h3>
									<div class="blog-info">
											<span class="title">On:</span> <span class="info"><?php the_date('F j, Y g:i a'); ?></span>
									</div>
									<?php the_excerpt(); ?>
								</div>
							</div>
							<br>
							<hr>
							<br>
							<div class="row home-content blog-list">
								<div class="blog-continue_reading col-lg-4 col-md-4">
									<a href="<?php the_permalink();?>" class="cat_continue"><i class="fa fa-share"></i> Continue Reading</a>
								</div>
								<div class="blog-info col-lg-8 col-md-8">
									<span class="title"><i class="fa fa-reddit"></i></span>
									<span class="title">Project by</span> <span class="info"><?php the_author(); ?></span>
								</div>
							</div>
							<br>
						</div>
					</div>
					<br> -->						
		    						 
		    <?php  endwhile;}?>
		    <div class="row"></div>
		    </div>

		</section>
		<?php get_sidebar( 'right' ); ?>
	</div>
</div>
<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>
<?php get_footer(); ?>