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

// Work related articles
$type2 = 'post';
$args2 = array(
  'post_type' => $type2,
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'caller_get_posts'=> 1,
  'cat' => 35,
);

$my_query2 = null;
$my_query2 = new WP_Query($args2);
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
		    <br><br>
		    <div class="page_title_bg">
				<div class="col-md-4 col-sm-12 page_title"><h2>Related Articles</h2></div>
				<!-- <div id="breadcrumb_bg" class="col-md-8 col-sm-12"></div> -->
			</div>
		    
	    	<?php if( $my_query2->have_posts() ) {
				while ($my_query2->have_posts()) : $my_query2->the_post(); ?>
					<?php if ( has_post_thumbnail() ) {?>
						<div class="work-bg">
						<br>
							<div class="row article-summary-wrap">
								<div class="row home-content blog-list">
									<div class="blog-info col-lg-12 col-md-12 top">
											<!-- <span class="title">By:</span> <span class="info"><?php the_author(); ?></span>, -->
											<span style="font-weight: bold; color: #fff;"><i class="fa fa-child"></i></span>
											<span style="font-weight: bold; color: #fff;">Posted in:</span> <span class="info"><?php echo the_category(', ');?></span>,
											<span style="font-weight: bold; color: #fff;">On:</span> <span class="info"><?php the_date('F j, Y g:i a'); ?></span>
									</div>
								</div>
								<div class="row home-content">
									<div class="col-lg-12 col-md-12">
										<h3 style="font-weight: bold; color: #fff;"><b><a href="<?php the_permalink();?>"><?php the_title();?></a></b></h3>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="text-align: center;">
										<a href="<?= get_permalink(); ?>" class="post-thumb img-thumbnail"><?php the_post_thumbnail('thumbnail'); ?></a>
									</div>
									<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
										<div class="excerpt">
											<?php the_excerpt(); ?>
										</div>
									</div>
								</div>
								<hr>
								<div class="row home-content blog-list">
									<div class="blog-continue_reading col-lg-4 col-md-4">
										<a href="<?php the_permalink();?>" class="cat_continue"><i class="fa fa-share"></i> Continue Reading</a>
									</div>
									<div class="blog-info col-lg-8 col-md-8">
										<span style="font-weight: bold; color: #fff;"><i class="fa fa-reddit"></i></span>
										<span style="font-weight: bold; color: #fff;">Article Posted by</span> <span class="info"><?php the_author(); ?></span>
									</div>
								</div>
							</div>
							<br>
						</div><br>
					<?php } ?>
			    <?php  endwhile; ?> 
		    <?php }?>
		</section>
		<?php get_sidebar( 'right' ); ?>
	</div>
</div>
<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>
<?php get_footer(); ?>