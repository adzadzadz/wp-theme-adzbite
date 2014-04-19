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
			<div class="item"><img class="lazyOwl" data-src="<?= $options['top_carousel_' . $x]?>" alt="Lazy Owl Image"></div>
		<?php }?>
		<?php for ($x=0; $x < (int)$options['carousel_img_count']; $x++) { ?>
			<div class="item"><img class="lazyOwl" data-src="<?= $options['top_carousel_' . $x]?>" alt="Lazy Owl Image"></div>
		<?php }?>
		</div>
	</div>
</section>
