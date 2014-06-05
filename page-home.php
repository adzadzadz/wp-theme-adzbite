<?php

	/**
	 * 
	 * Everything on the homepage is here
	 *
	 * Template Name: Home
	 *
	 */

$options = get_option('theme_options');
?>

<?php 
// Latest Posts
$type = 'post';
$args = array(
  'post_type' => $type,
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'caller_get_posts'=> 1,
  'cat' => -35,
);

$my_query = null;
$my_query = new WP_Query($args);
// Latest Posts - end

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
	<section class="center-content col-lg-7 col-md-7 col-sm-9">
		<div class="work-bg">
			<div class="">
				<br>
				<div class="row" style="margin: 0px 25px;">
				<div class="page_title_bg2 row">
					<h2 style="color: #fff;">
					<div class="col-md-5 col-sm-12 page_title2"><b>Latest Articles</b></div>
					<div class="col-md-7 col-sm-12 page_title_right2"><small>Still working on this one</small></div>
					</h2>
				</div><br>
				<?php if( $my_query->have_posts() ) {
					while ($my_query->have_posts()) : $my_query->the_post(); ?>
						<?php if ( has_post_thumbnail() ) {?>

							<div class="cool-gallery-single col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="img-wrap">
									<a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail( 'thumbnail', $default_attr );} ?></a>
								</div>
								<div class="cool-gallery-text-wrap">
									<div class="cool-gallery-text">
										<div class="cool-gallery-content">
											<h4><b>
												<?php 
													$excerpt = the_title();
												    echo string_limit_words($excerpt,4);
												?>
											</b></h4>
											<hr>
											<p><small>
												<a href="<?php the_permalink();?>">Read now...</a>
											 </small></p>
										</div>
									</div>
								</div>
							</div>
							
						<?php } ?>
				    <?php  endwhile; ?> 
			    <?php }?>
			    </div>
			    <br><br>
			    <div class="row" style="margin: 0px 25px;">
				<div class="page_title_bg2 row">
					<h2 style="color: #fff;">
					<div class="col-md-5 col-sm-12 page_title2"><b>Codes Stuff</b></div>
					<div class="col-md-7 col-sm-12 page_title_right2"><small>And this one :)</small></div>
					</h2>
				</div><br>
				<?php if( $my_query2->have_posts() ) {
					while ($my_query2->have_posts()) : $my_query2->the_post(); ?>
						<?php if ( has_post_thumbnail() ) {?>

							<div class="cool-gallery-single col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="img-wrap">
									<a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail( 'thumbnail', $default_attr );} ?></a>
								</div>
								<div class="cool-gallery-text-wrap">
									<div class="cool-gallery-text">
										<div class="cool-gallery-content">
											<h4><b>
												<?php 
													$excerpt = the_title();
												    echo string_limit_words($excerpt,4);
												?>
											</b></h4>
											<hr>
											<p><strong>
												<a href="<?php the_permalink();?>">Read now...</a>
											 </strong></p>
										</div>
									</div>
								</div>
							</div>
							
						<?php } ?>
				    <?php  endwhile; ?> 
			    <?php }?>
			    </div>
			    <br><br>
				<?php if(have_posts()): while(have_posts()) : the_post(); ?>
				<?php if ( has_post_thumbnail() ) {the_post_thumbnail('full');} ?>
				<?php the_content(); ?>
				<?php endwhile; else: ?>
				<h4>No content to display.</h4>
				<?php endif ?>
			</div>
		</div>
	</section>
	<?php get_sidebar( 'right' ); ?>
</div>
<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>
<?php get_footer(); ?>