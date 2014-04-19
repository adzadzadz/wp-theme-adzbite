<?php

	/**
	 * This is where the top Carousel goes.
	 * It can be removed from pages by removing the get_template_part( 'content-top' );
	 *
	 */

$options = get_option('theme_options');

?>

<section class="top-content col-md-10 col-sm-9">
	<div class="mini-featured">
		<div id="top-carousel" class="owl-carousel">
		<?php for ($x=0; $x < (int)$options['carousel_img_count']; $x++) { ?>
			<div class="item">
				<div class="lb_thumb">
					<img class="lazyOwl" data-src="<?= $options['top_carousel_' . $x]?>" data-link="<?= $options['top_carousel_link_' . $x]?>" alt="Lazy Owl Image">
					<div class="text"><img src="<?php echo get_template_directory_uri() . '/assets/imgs/magnify.png';?>" alt=""></span></div>
				</div>
			</div>
			
		<?php }?>
		</div>
	</div>
</section>
<div class="lightbox">
	
</div>