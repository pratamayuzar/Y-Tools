<div class="fullwidth">
  <div class="gallery">
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
    <figure class="item">
      <div class="img-wrap"><img src="<?php echo $feat_image; ?>" alt="" /></div>
      <figcaption class="caption">
          <h3><?php echo get_the_title(); ?><br/><?php echo get_the_content(); ?></h3>
          <a class="btn-buy y-tidio hide" href="#">Book Now!</a>
          <a class="btn-details" href="<?php echo get_permalink(); ?>">See details</a>
      </figcaption>
    </figure>
  <?php endwhile; ?>
  </div>
</div>