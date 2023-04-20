<?php

/**
 * Block Name: portfolio
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<div class="portfolio__section" id="portfolio">
    <div class="portfolio__container">
      <?php if(get_field('title')){
        ?>
         <h2 class="portfolio__title"><?php the_field('title')?></h2>
        <?php
      }?>
      <div class="portfolio__swiper swiper">
        <div class="portfolio__block swiper-wrapper">
        <?php		
          global $post;
          if(get_field('count__post')){
            $postCount = get_field('count__post');
          } else {
            $postCount = -1;
          }

          $query = new WP_Query( [
            'post_type'=> 'portfolio',
            'posts_per_page' => $postCount,
            'order'=> 'DESC',
            'orderby'=> 'date'
          ] );

          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post();
              echo get_template_part( 'template-parts/portfolio-box');
            }
          } 

          wp_reset_postdata(); // Сбрасываем $post
          ?>
        </div>
        <div class="portfolio__pagination swiper-pagination"></div>
      </div>
    </div>
  </div>