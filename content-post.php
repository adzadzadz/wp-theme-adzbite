<?php

	/**
	 * This is where the blog design goes.
	 * Blog single and home are using the same file.
	 *
	 */

?>

<div class="blog-contain">

	<?php if(!is_single()) : ?>
		<div class="row article-summary-wrap">
			<div class="row home-content blog-list">
				<div class="blog-info col-lg-12 col-md-12 top">
						<!-- <span class="title">By:</span> <span class="info"><?php the_author(); ?></span>, -->
						<span class="title"><i class="fa fa-child"></i></span>
						<span class="title">Posted in:</span> <span class="info"><?php echo the_category(', ');?></span>,
						<span class="title">On:</span> <span class="info"><?php the_date('F j, Y g:i a'); ?></span>
				</div>
			</div>
			<div class="row home-content">
				<div class="col-lg-12 col-md-12">
					<h3 class="title"><b><a href="<?php the_permalink();?>"><?php the_title();?></a></b></h3>
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
					<span class="title"><i class="fa fa-reddit"></i></span>
					<span class="title">Article Posted by</span> <span class="info"><?php the_author(); ?></span>
				</div>
			</div>
		</div>
	<?php else: ?>
		<div class="blog-info-single">
			<div class="row">
				<div class="fb-like float-left top-social" data-href="http://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
				<div class="g-plusone" data-size="medium" data-href="http://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>"></div>
			</div>
			<h1 class="title"><?php the_title();?></h1>
			<h4>Posted in <?php echo the_category(', ');?> on <?php the_date('F j, Y g:i a'); ?></h4>
		</div>
		<div class="horizontal-wall"></div>
		<div class="blog-content">
			<?php the_content();?>
			<?php previous_post_link('<button class="next-post col-lg-12 btn btn-lg btn-danger">%link</button>', 'Click here for the previous article', TRUE); ?>
			<?php next_post_link('<button class="next-post col-lg-12 btn btn-lg btn-success">%link</button>', 'Click here for the next article', TRUE); ?>
			<br><br>
			<div class="ads-content">
				<a href="http://29f343pqfauc6t1ktxqywhgbin.hop.clickbank.net/?tid=PADI-SOCIAL" target="_blank"><img src="<?= get_template_directory_uri() ?>/assets/imgs/ads/socialmediajobs-wide.jpg" alt="social media jobs"></a>
			</div><br>
			<hr>
			<p class="wp_tags"><small><i class="fa fa-tags"></i> <?php the_tags(); ?></small></p>
			<hr>
			<h3><b>About me</b></h3>
			<div class="author-info">
				<!-- <h3><b>Written by:</b></h3> -->
				<div class="media">
					<span class="pull-left">
						<?=  get_avatar( get_the_author_meta( 'ID' ), 100 ) ?>
					</span>
					<div class="media-body">
					<h3 class="media-heading"><b><a href="<?php echo get_page_link(13);?>"> <?php the_author(); ?></a></b></h3>
					<small><?php the_author_meta('description'); ?></small>
					</div>
				</div>
			</div>
			<hr>
			<div class="row post-social-plugin">
				<div class="col-md-1">
					<div class="fb-like" data-colorscheme="light" data-href="http://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>" data-layout="standard" data-action="like" data-show-faces="true" data-share="false"></div>
				</div>
			</div>
			<div class="row post-social-plugin">
				<div class="col-md-1">
					<div class="fb-share-button" data-href="http://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>" data-type="button_count"></div>
				</div>
			</div>
			<hr>
			<?php comments_template(); ?>
			<!-- <div class="fb-comments" data-href="http://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>" data-numposts="50" data-colorscheme="light" data-width="550px"></div> -->
		</div>
	<?php endif ?>
	</div>
<hr />