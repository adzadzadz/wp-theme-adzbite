<?php

	/**
	 * This is where the blog design goes.
	 * Blog single and blog list are using the same file.
	 *
	 */

?>


<div class="blog-contain">
	<h1 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
	<div class="blog-info">
			<span class="title">Posted in:</span> <span class="info"><?php echo the_category(', ');?></span>,
			<span class="title">Authored by:</span>  <span class="info"><a href="<?php echo get_page_link(13);?>"> <?php the_author(); ?></a></span>,
			<span class="title">On:</span> <span class="info"><?php the_date('F j, Y g:i a'); ?></span>
	</div>
	<br />
	<div class="excerpt">
	<?php if(!is_single()) : ?>
		<?php the_excerpt(); ?>
		<div class="fb-like" data-colorscheme="dark" data-href="http://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>" data-layout="standard" data-action="like" data-show-faces="true" data-share="false"></div>
		<br />
		<br />
		<div class="blog-continue_reading">
			<a href="<?php the_permalink();?>">Continue Reading &rarr;</a>
		</div>
	<?php else: ?>
		<?php the_content();?>
		<div class="row post-social-plugin">
			<div class="col-md-1">
				<div class="fb-like" data-colorscheme="light" data-href="http://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div>
			</div>
		</div>
		<div class="row post-social-plugin">
			<div class="col-md-1">
				<div class="fb-share-button" data-href="http://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>" data-type="button_count"></div>
			</div>
		</div>
		
		<?php comments_template();?>

		
	<?php endif ?>
	</div>
</div>
<hr class="blog-info">