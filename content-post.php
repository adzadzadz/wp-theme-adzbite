<?php

	/**
	 * This is where the blog design goes.
	 * Blog single and home are using the same file.
	 *
	 */

?>

<div class="blog-contain">

	<?php if(!is_single()) : ?>
		<div class="row article-exerpt-wrap">
			<?php if ( has_post_thumbnail() ) {?>
				<div class="col-xs-12 col-sm-4 col-md-4" style="text-align: center;">
					<a href="<?= get_permalink(); ?>" class="img-thumbnail"><?php the_post_thumbnail('thumbnail'); ?></a>
				</div>
				<div class="col-xs-12 col-sm-8 col-md-8">
					<h3 class="title"><b><a href="<?php the_permalink();?>"><?php the_title();?></a></b></h3>
					<div class="blog-info">
							<span class="title">By:</span> <span class="info"><?php the_author(); ?></span>,
							<!-- <span class="title">Posted in:</span> <span class="info"><?php echo the_category(', ');?></span>, -->
							<span class="title">On:</span> <span class="info"><?php the_date('F j, Y g:i a'); ?></span>
					</div>
					<div class="excerpt">
						<?php the_excerpt(); ?>
						<div class="blog-continue_reading">
							<a href="<?php the_permalink();?>" class="btn btn-primary cat_continue">Continue Reading &#8594;</a>
						</div>
					</div>
				</div>
			<?php } else {?>
				<div class="col-xs-12">
					<h3 class="title"><b><a href="<?php the_permalink();?>"><?php the_title();?></a></b></h3>
					<div class="blog-info">
							<span class="title">By:</span> <span class="info"><?php the_author(); ?></span>,
							<span class="title">Posted in:</span> <span class="info"><?php echo the_category(', ');?></span>,
							<span class="title">On:</span> <span class="info"><?php the_date('F j, Y g:i a'); ?></span>
					</div>
					<div class="excerpt">
						<?php the_excerpt(); ?>
						<div class="blog-continue_reading">
							<a href="<?php the_permalink();?>" class="btn btn-primary cat_continue">Continue Reading</a>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	<?php else: ?>
		<div class="blog-info-single">
			<h1 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
			<h4>Posted in <?php echo the_category(', ');?> on <?php the_date('F j, Y g:i a'); ?></h4>
		</div>
		<div class="horizontal-wall"></div>
		<div class="blog-content">
			<?php the_content();?>
			<br />
			<hr>
			<p class="wp_tags"><small><?php the_tags(); ?></small></p>
			<hr>
			<h3><b>About the Author</b></h3>
			<div class="author-info">
				<!-- <h3><b>Written by:</b></h3> -->
				<div class="media">
					<a class="pull-left" href="#">
						<?=  get_avatar( get_the_author_meta( 'ID' ), 100 ) ?>
					</a>
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
			<div class="fb-comments" data-href="http://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>" data-numposts="50" data-colorscheme="light" data-width="550px"></div>
		</div>
	<?php endif ?>
	</div>
<hr />