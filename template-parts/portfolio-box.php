<article class="portfolio__box swiper-slide">
  <h3 class="portfolio__box-title"><?php the_title();?></h3>

  <h4 class="portfolio__box-type">
    <?php
      $category = get_the_terms($post, 'service-category'); 
      echo $category[0]->name;
    ?>
  </h4>
  <?php 
          $image = get_post_thumbnail_id( );
          echo wp_get_attachment_image( $image, 'full', false, ['class'=> 'portfolio__box-img']);?>
  <?php
  $case = get_field('case', $post);
  $customLink = get_field('custom__link', $post);
  $postLink = get_permalink();
  if($case) {
    $echoLink ="";
    $echoLink = $customLink;
  } else {
    $echoLink ="";
    $echoLink = $postLink;
  }
 
  ?>
  <a href="<?php echo  $echoLink;?>" class="portfolio__link">
    <img src="<?php echo get_template_directory_uri()?>/dist/images/icons/portfolio__hover.svg" alt="">
  </a>
</article>