<?php

/*
 * Template Name: 404
 */

?>



<?php get_header(); ?>
<div id="page-content">
    <?php get_sidebar( 'left' ); ?>
    <?php get_template_part( 'content', 'top' ); ?> 
    <div class="col-md-10 gray">
        <section class="center-content col-sm-9">
            <div class="page_title_bg"><h2 class="page_title">ERROR!</h2></div>
            <div class="home-content">
                <div class="jumbotron" style="color: #333333;">
                    <h1>404 Page Not Found</h1>
                    <p>...</p>
                    <p><a class="btn btn-primary btn-lg" role="button" href="<?= home_url(); ?>" style="color: #fff;">Home</a></p>
                </div>
           </div>
        </section>
        <?php get_sidebar( 'right' ); ?>
    </div>
</div>
<?php get_footer(); ?>
<?php get_footer(); ?>