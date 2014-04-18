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
		<div class="blog-continue_reading">
			<a href="<?php the_permalink();?>">Continue Reading &rarr;</a>
		</div>
	<?php else: ?>
		<?php the_content();?>

		<?php comments_template();?>

		
	<?php endif ?>
	</div>
</div>

<hr class="blog-info">