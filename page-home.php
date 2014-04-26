<?php

	/**
	 * This is where the blog is listed.
	 * It fetches the content-post.php file to get the blog posts.
	 *
	 * Template Name: Home
	 *
	 */

$options = get_option('theme_options');
?>


<?php get_header(); ?>
<div id="page-content">
	<?php get_sidebar( 'left' ); ?>
	<?php get_template_part( 'content', 'top' ); ?> 
	<div class="col-md-10 gray">
		<section class="center-content col-sm-9">
			<div id="carousel-example-generic" class="carousel slide carousel-home" data-ride="carousel">
			<!-- Indicators -->
				<!-- <ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol> -->

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
				<?php for ($x=0; $x < (int)$options['home_carousel_img_count']; $x++) { ?> 
					<div class="item <?php if($x == 0){echo 'active';}?>">
						<img src="<?= $options['home_carousel_' . $x]?>" alt="...">
						<div class="carousel-caption">
							<?= $options['home_carousel_caption_' . $x]?>
						</div>
					</div>
				<?php } ?>
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
			
				<?php if(have_posts()): while(have_posts()) : the_post(); ?>

				<div class="page_title_bg">
					<div class="col-md-3 col-sm-12 page_title"><h2><?php the_title(); ?></h2></div>
					<div id="breadcrumb_bg" class="col-md-9 col-sm-12"></div>
				</div>
				
				<div class="home-content">

				<?php if ( has_post_thumbnail() ) {the_post_thumbnail('full');} ?>

				<?php the_content(); ?>
					
				</div>
				<?php endwhile; else: ?>

				<h4>No content to display.</h4>

				<?php endif ?>
			
		</section>
		<?php get_sidebar( 'right' ); ?>
	</div>
</div>
<?php get_footer(); ?>