<?php

	/**
	 * 
	 * Everything on the homepage is here
	 *
	 * Template Name: Testing Template
	 *
	 */

$options = get_option('theme_options');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta property="fb:app_id" content="272663612872931"/>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<title><?php wp_title( ' &raquo; ', true, 'left' ); ?></title>
	<?php wp_head(); ?>

</head>
<body class="container">
<div class="adzbite_page"><!-- The original .container div -->
<div id="fb-root"></div>
<div class="lightbox-popup"></div>
<div class="notifbox"><div class="thebox"></div></div>
<header class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<nav class="mini">
		<div class="brand col-lg-2 col-md-2 col-sm-2 col-xs-12" style="padding-top:12px;">
			<a href="<?= home_url(); ?>" style="font-size: 1.2em; text-decoration: none;">
				<!-- <img src="<?= $options['theme_logo'] ?>" alt="<?= get_bloginfo( 'name' ) ?> Logo"> -->
				<span style="color: #fff;">adzbite</span><span style="color: #31FF23;">Pictures</span>
			</a> 
		</div>

		<div class="left-nav wide-screen-menu col-lg-5 col-md-5 col-sm-6 col-xs-12">

			<?php wp_nav_menu( array('theme_location' => 'top_menu_left', 'items_wrap' => '<ul id="%1$s" class="%2$s float-li-left">%3$s</ul>', )); ?>

		</div>
		<div class="social_icons_wrap col-lg-3 col-md-3 col-xs-12 wide-screen-menu">
			
		</div>
		<div class="right-nav col-lg-2 col-md-2 col-sm-3 col-xs-12 wide-screen-menu">
			<ul class="float-li-right">
					
					<?php if ( is_user_logged_in() ) { ?> 
					<li style="background:#AB0C16;"><a href="<?= wp_logout_url( home_url() ); ?>" title="Logout">Logout</a></li>
					<?php }
					else{ ?>
					<li style="background:#30302F;"><a id="btn-register" href="#"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Register</a></li>
					<li style="background:#30302F;"><a id="btn-login" href="#" title="Login"><span class="glyphicon glyphicon-user"></span>&nbsp;Login</a></li>
					<?php } ?>
				
			<?php //wp_nav_menu( array('theme_location' => 'top_menu_right', 'items_wrap' => '%3$s', )); ?>
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
					<li><a id="btn-login" href="<?= wp_login_url(); ?>" title="Login">Login</a></li>
				<?php } ?>
			</ul>
		</div>
	</nav>
</header>

<div id="page-content">
	<?php get_sidebar( 'left' ); ?>
	<?php get_template_part( 'content', 'top' ); ?> 
	<section class="center-content col-lg-7 col-md-7 col-sm-9">
		<div class="work-bg">
			<div class="">
				<?php if(have_posts()): while(have_posts()) : the_post(); ?>
				<?php if ( has_post_thumbnail() ) {the_post_thumbnail('full');} ?>
				<?php the_content(); ?>
				<?php endwhile; else: ?>
				<h4>No content to display.</h4>
				<?php endif ?>
			</div>
		</div>
	</section>
	<?php get_sidebar( 'right' ); ?>
</div>
<?php get_footer(); ?>