<?php

	/**
	 * This is where the Contact Page happens.
	 * 
	 *
	 * Template Name: Contact
	 *
	 */

?>


<?php get_header(); ?>
<div id="page-content">
	<?php get_sidebar( 'left' ); ?>
	<?php get_template_part( 'content', 'top' ); ?> 
	<div class="col-md-10 gray">
		<section class="center-content col-sm-9">
			<?php if(have_posts()): while(have_posts()) : the_post(); ?>

				<div class="page_title_bg"><h2 class="page_title"><?php the_title(); ?></h2></div>

				<div class="home-content">

				<?php if ( has_post_thumbnail() ) {the_post_thumbnail('thumbnail');} ?>

				<?php the_content(); ?>
					
					<div class="adzbite-contact col-md-7">
						<form action="http://localhost/adzbite/adzbite_wp/wp-content/themes/adzbite/assets/php-mail.php" method="POST" id="adzbite-contact-form">
							<div class="form-group">
								<label for="name" id="label_name">Name: </label>
								<input class="form-control" type="text" id="name" name="name">
								<div class="alert-name alert alert-danger"></div>
							</div>
							<div class="form-group">
								<label for="email" id="label_name">Email: </label>
								<input class="form-control" type="text" id="email" name="email">
								<div class="alert-email alert alert-danger"></div>
							</div>
							<div class="form-group">
								<label for="website" id="label_website">Website:</label>
								<input class="form-control" type="text" name="website" id="website">
								<div class="alert-website alert alert-danger"></div>
							</div>
							<div class="form-group">
								<label for="message" id="label_message">Message: </label>
								<textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
								<div class="alert-message alert alert-danger"></div>
							</div>
						</form>
						<div class="result" style="display:hidden;"></div>
						<button class="button btn-lg btn-primary adzbite-contact-button">Button</button>
					</div>
				</div>
				<?php endwhile; else: ?>

				<h4>No content to display.</h4>

				<?php endif ?>
		</section>
		<?php get_sidebar( 'right' ); ?>
	</div>
</div>
<?php get_footer(); ?>