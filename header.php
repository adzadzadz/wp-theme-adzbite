<?php

	/**
	 * 
	 * Everything in the header goes here.
	 *
	 */

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta property="fb:app_id" content="272663612872931"/>
	<title>Adzbite <?php echo get_bloginfo( 'name' ); ?><?php wp_title( ' &raquo; ', true, 'left' ); ?></title>
	<?php wp_head(); ?>
</head>
<body>
<div id="fb-root"></div>
<header class="col-lg-12 col-sm-12 col-xs-12">
	<nav class="mini">
		<div class="brand col-lg-2 col-md-2 col-sm-3 col-xs-12">
			<a href="<?= home_url(); ?>"><span style="color: #fff;">adzbite</span><?= get_bloginfo( 'name' ); ?></a> 
		</div>
		<div class="left-nav wide-screen-menu col-lg-6 col-md-6 col-sm-5">

			<?php wp_nav_menu( array('theme_location' => 'top_menu_left', 'items_wrap' => '<ul id="%1$s" class="%2$s float-li-left">%3$s</ul>', )); ?>

		</div>
		<div class="right-nav col-lg-4 col-md-4 col-sm-4 col-xs-5 wide-screen-menu">
			<ul class="float-li-right">
								
					<?php if ( is_user_logged_in() ) { ?> 
					<li><a href="<?= wp_logout_url( home_url() ); ?>" title="Logout">Logout</a></li>
					<?php }
					else{ ?>
					<li><a href="<?php bloginfo('wpurl'); ?>/wp-login.php?action=register">Register</a></li>
					<li><a href="<?= wp_login_url(); ?>" title="Login">Login</a></li>
					<?php } ?>
				
			<?php wp_nav_menu( array('theme_location' => 'top_menu_right', 'items_wrap' => '%3$s', )); ?>
			</ul>
		</div>
		<div class="left-nav mobile-menu col-xs-12">
			<span class="glyphicon glyphicon-th"></span>
		</div>
		<div class="mobile-menu-view col-xs-12">
			<ul>
				<?php wp_nav_menu( array('theme_location' => 'top_menu_left', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', )); ?>
				<?php if ( is_user_logged_in() ) { ?> 
					<li><a href="<?= wp_logout_url( home_url() ); ?>" title="Logout">Logout</a></li>
					<?php }
					else{ ?>
					<li><a href="<?php bloginfo('wpurl'); ?>/wp-login.php?action=register">Register</a></li>
					<li><a href="<?= wp_login_url(); ?>" title="Login">Login</a></li>
				<?php } ?>
			</ul>
		</div>
	</nav>
</header>

