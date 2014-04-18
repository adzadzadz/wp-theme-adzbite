<?php
/*
 * Template Name: 404
 */
get_header(); ?>

	<div class="row  error-page">
    	<div class="span12">
            <div class="vvbig">404</div>
            <div class="vbig">Page Not Found</div>
        </div>
	</div>

    <!-- Search Box -->
    <div class="row mb80">
        <div class="span12">
            <div class="search-block clearfix">
                    <div class="error-serch-txt">you may want to search it again</div>
                    <div class="page-search">
                        <form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
                            <input type="text" name="s" placeholder="Type keywords..." value="" />
                        </form>
                    </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>