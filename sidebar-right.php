<?php
	
	/**
	 * 
	 * Everything in the right sidebar goes here.
	 *
	 */

?>


<aside class="right col-lg-3 col-md-3 col-sm-12 col-xs-12">
	<div class="wp-sidebar-widgets">
		<div class="right-sidebar-widget ads-right">
			<div class="">
				<a href="http://f71c85oxhd696l1etj-hz2xila.hop.clickbank.net/?tid=LEGIT-ONLINE-JOB" target="_blank"><img src="<?= get_template_directory_uri() ?>/assets/imgs/ads/legitjobs.jpg" alt="legit online jobs"></a>
			</div>
		</div>
		<div class="right-sidebar-widget ads-right">
			<div class="">
				<a href="http://29f343pqfauc6t1ktxqywhgbin.hop.clickbank.net/?tid=PADI-SOCIAL" target="_blank"><img src="<?= get_template_directory_uri() ?>/assets/imgs/ads/socialmediajobs.jpg" alt="social media jobs"></a>
			</div>
		</div>
		<?php if ( is_active_sidebar( 'right_sidebar' ) ) : ?>
			<ul id="sidebar">
				<?php dynamic_sidebar( 'right_sidebar' ); ?>
			</ul>
		<?php endif; ?>
	</div>
</aside>
</div> <!-- div.row Starts on Sidebar-left -->



