			<div id="carousel-example-generic" class="carousel slide carousel-home" data-ride="carousel">
			<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<?php for ($x=1; $x < (int)$options['home_carousel_img_count']; $x++) { ?> 
						<li data-target="#carousel-example-generic" data-slide-to="<?= $x ?>"></li>
					<?php } ?>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
				<?php for ($x=0; $x < (int)$options['home_carousel_img_count']; $x++) { ?> 
					<div class="item <?php if($x == 0){echo 'active';}?>">
						<img src="<?= $options['home_carousel_' . $x]?>" alt="<?= $options['home_carousel_alt_' . $x]?>">
						<div class="carousel-caption">
							<?= $options['home_carousel_caption_' . $x]?>
						</div>
					</div>
				<?php } ?>
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>


			<!-- ads aside.left -->
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

		<!-- ads content -->
		<div class="ads-content">
				<a href="http://29f343pqfauc6t1ktxqywhgbin.hop.clickbank.net/?tid=PADI-SOCIAL" target="_blank"><img src="<?= get_template_directory_uri() ?>/assets/imgs/ads/socialmediajobs-wide.jpg" alt="social media jobs"></a>
			</div><br>