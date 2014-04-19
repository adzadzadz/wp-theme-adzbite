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
	<title>Adzbite <?php echo get_bloginfo( 'name' ); ?><?php wp_title( ' | ', true, 'left' ); ?></title>
	<?php wp_head(); ?>
</head>
<body>
<header class="col-sm-12 col-xs-12">
	<nav class="mini">
		<div class="brand col-md-2 col-sm-3 col-xs-12">
			<a href="<?= home_url(); ?>"><span style="color: #fff;">adzbite</span><?= get_bloginfo( 'name' ); ?></a> 
		</div>
		<div class="left-nav col-md-5 col-sm-5 col-xs-7">
			<?php wp_nav_menu( array('theme_location' => 'top_menu_left', 'items_wrap' => '<ul id="%1$s" class="%2$s float-li-left">%3$s</ul>', )); ?>
		</div>
		<div class="right-nav col-md-5 col-sm-4 col-xs-5">
			<ul class="float-li-right">
				<li><a href="<?php bloginfo('wpurl'); ?>/wp-login.php?action=register">Register</a></li>
				<li>
					<?php if ( is_user_logged_in() ) { ?> 
						<a href="<?= wp_logout_url( home_url() ); ?>" title="Logout">Logout</a> 
					<?php }
					else{ ?>
						<a href="<?= wp_login_url(); ?>" title="Login">Login</a>
					<?php } ?>
				</li>
			<?php wp_nav_menu( array('theme_location' => 'top_menu_right', 'items_wrap' => '%3$s', )); ?>
			</ul>
		</div>
	</nav>
</header>

