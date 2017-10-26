<div class="row db-padding-btm db-attached">
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
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
	    <div class="db-wrapper">
	        <div class="db-pricing-eleven db-bk-color-one">
	            <div class="price">
	            	<h3><?php echo get_the_title(); ?></h3>
	            </div>
	            <div class="type">
	                <a href="<?php echo get_permalink(); ?>" style="height: 50px;"><img src="<?php echo $feat_image; ?>"></a>
	            </div>
	            <p class="text-center" style="height: 100px;"><strong><?php echo get_the_content(); ?></strong></p>
	            <div class="pricing-footer">
	                <a href="#" class="btn btn-primary btn-lg y-tidio hide">BOOK ORDER</a>
	            </div>
	        </div>
	    </div>
	</div>
<?php endwhile; ?>
</div>
