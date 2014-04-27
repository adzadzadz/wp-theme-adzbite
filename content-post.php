<?php

	/**
	 * This is where the blog design goes.
	 * Blog single and blog list are using the same file.
	 *
	 */

?>
<?php if ( has_post_thumbnail() ) {?>
	<div class="wp_featured col-xs-12">
		<a href="<?= get_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
	</div>
<?php } ?>
<div class="blog-contain">
	<h1 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
	<div class="blog-content">
		<div class="blog-info">
				<span class="title">Posted in:</span> <span class="info"><?php echo the_category(', ');?></span>,
				<span class="title">Authored by:</span>  <span class="info"><a href="<?php echo get_page_link(13);?>"> <?php the_author(); ?></a></span>,
				<span class="title">On:</span> <span class="info"><?php the_date('F j, Y g:i a'); ?></span>
		</div>
	</div>
	<br />
	<div class="excerpt">
	<?php if(!is_single()) : ?>
		<?php the_excerpt(); ?>
		<div class="blog-continue_reading">
			<a href="<?php the_permalink();?>" class="btn btn-primary cat_continue">Continue Reading</a>
		</div>
	<?php else: ?>
		<div class="blog-content">
			<?php the_content();?>
		</div>
		<p class="wp_tags"><small><?php the_tags(); ?></small></p>
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
		
		<div class="fb-comments" data-href="http://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>" data-numposts="50" data-colorscheme="light" data-width="756px"></div>

		
	<?php endif ?>
	</div>
</div>
<hr class="blog-info">