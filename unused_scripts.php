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