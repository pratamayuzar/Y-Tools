<div class="container">
	<div class="row">
	<?php
	$i = 0;
	while ($posts->have_posts()):
		$posts->the_post();
		$i++;
		$panel = ($i & 1 ? "blue" : 'red');
		$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		if (empty($feat_image)){
			$feat_image = "http://www.travelbubble.com/images/no_image_found.png";
		}
	?>
		<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
			<div class="panel price panel-<?php echo $panel;?>">
				<div class="panel-heading  text-center">
				<h3 style="height: 70px;"><?php echo get_the_title(); ?></h3>
				</div>
				<div class="panel-body text-center">
					<a href="<?php echo get_permalink(); ?>" style="height: 50px;"><img src="<?php echo $feat_image; ?>"></a>
				</div>
				<p class="text-center" style="height: 100px;"><strong><?php echo get_the_content(); ?></strong></p>
				<div class="panel-footer">
					<a class="btn btn-lg btn-block btn-primary y-tidio hide" href="#">Book Now!</a>
				</div>
			</div>
		</div>
	<?php endwhile; ?>	
	</div>        
</div>