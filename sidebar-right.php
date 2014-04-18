<?php
	
	/**
	 * 
	 * Everything in the right sidebar goes here.
	 *
	 */

?>


<aside class="right col-sm-3">
	<div class="wp-sidebar-widgets">
		<?php if ( is_active_sidebar( 'right_sidebar' ) ) : ?>
			<ul id="sidebar">
				<?php dynamic_sidebar( 'right_sidebar' ); ?>
			</ul>
		<?php endif; ?>
	</div>
</aside>