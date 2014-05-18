<?php

	/**
	 * 
	 * Everything in the footer goes here
	 *
	 */

?>
		<div class="row"></div>
			<footer class="main col-lg-12">
				<div class="row">
					<div class="col_1 col-lg-3 col-md-3 col-sm-6 col-xm-12">
						<?php if ( is_active_sidebar( 'left_sidebar' ) ) : ?>
							<div id="sidebar">
								<?php dynamic_sidebar( 'footer1' ); ?>
							</div>
						<?php endif; ?>
					</div>
					<div class="col_2 col-lg-3 col-md-3 col-sm-6 col-xm-12">
						<?php if ( is_active_sidebar( 'left_sidebar' ) ) : ?>
							<div id="sidebar">
								<?php dynamic_sidebar( 'footer2' ); ?>
							</div>
						<?php endif; ?>
					</div>
					<div class="col_3 col-lg-3 col-md-3 col-sm-6 col-xm-12">
						<?php if ( is_active_sidebar( 'left_sidebar' ) ) : ?>
							<div id="sidebar">
								<?php dynamic_sidebar( 'footer3' ); ?>
							</div>
						<?php endif; ?>
					</div>
					<div class="col_4 col-lg-3 col-md-3 col-sm-6 col-xm-12">
						<?php if ( is_active_sidebar( 'left_sidebar' ) ) : ?>
							<div id="sidebar">
								<?php dynamic_sidebar( 'footer4' ); ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
				<div class="row">
					<div class="copyright-bottom">&copy; <a href="#"><span style="color: #fff;">adzbite</span><span style="color: green;">Solutions </span></a> | <?= date('Y') ?></div>
				</div>
			</footer>
	</div> <!-- div.container -->
<?php wp_footer(); ?>
</body>
</html>