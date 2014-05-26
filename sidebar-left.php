<?php
	
	/**
	 * 
	 * Everything on the left sidebar goes here.
	 *
	 */

?>

<div class="row"> <!-- End is on Sidebar-right -->
<aside class="left col-lg-2 col-md-2 col-sm-3">
	<div class="left-wrap">
		<div class="col-lg-12 tagline">
			<?=  bloginfo( 'description' ); ?>
		</div>
	
		<div class="aside-left-menu">
			<h3 class="widget-title">Menu</h3>
			<?php 

				wp_nav_menu( array(
					'theme_location' => 'side_menu',
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'link_before' => '<span class="glyphicon glyphicon-chevron-right" style="font-size: 10px;"></span> ',
					'container'       => 'nav',
					'container_class' => 'main',
				)); 

			?>
		</div>
		<div class="row"></div>
		<div class="wp-sidebar-widgets">
			<?php if ( is_active_sidebar( 'left_sidebar' ) ) : ?>
				<div id="sidebar">
					<?php dynamic_sidebar( 'left_sidebar' ); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</aside>