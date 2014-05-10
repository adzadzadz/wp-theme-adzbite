<?php

	/**
	 * This is where the blog design goes.
	 * Blog single and blog list are using the same file.
	 *
	 */

?>

<div class="blog-contain">

	<?php if(!is_single()) : ?>
		<div class="row">
			<?php if ( has_post_thumbnail() ) {?>
				<div class="col-xs-4">
					<a href="<?= get_permalink(); ?>" class="img-thumbnail"><?php the_post_thumbnail('thumbnail'); ?></a>
				</div>
				<div class="col-xs-8">
					<h1 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
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
					<h1 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
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
			<div class="horizontal-wall"></div>
			<div class="author-img">
				<h3><b>Authored by:</b></h3>&nbsp;<span class="img"><?=  get_avatar( get_the_author_meta( 'ID' ), 32 ) ?></span>  <span class="info"><a href="<?php echo get_page_link(13);?>"> <?php the_author(); ?></a></span><br>
			</div>
		
			<p class="wp_tags"><small><?php the_tags(); ?></small></p>
			<hr />
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