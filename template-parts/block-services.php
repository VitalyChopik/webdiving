<?php

/**
 * Block Name: services
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>
<div class="services__section" id="services"> 
      <?php 
      $imageBG = get_field('imageBG');
      echo wp_get_attachment_image( $imageBG, 'full', false, ['class'=> 'services__bg']);?>
    <div class="services__container">
      <?php if(get_field('title')){
        ?>
         <h2 class="services__title"><?php the_field('title')?></h2>
        <?php
      }?>
      <?php if(get_field('subtitle')){
        ?>
         <p class="services__subtitle"><?php the_field('subtitle')?></p>
        <?php
      }?>
      
      <div class="services__block">
      <?php		
          global $post;
          if(get_field('count__post')){
            $postCount = get_field('count__post');
          } else {
            $postCount = -1;
          }

          $query = new WP_Query( [
            'post_type'=> 'service',
            'posts_per_page' => $postCount,
            'order'=> 'DESC',
            'orderby'=> 'date'
          ] );
          $cntPost=0;
          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $cntPost++;
              $query->the_post();
              if($cntPost<=3 || $cntPost>6){
                echo get_template_part( 'template-parts/service-box', '',['class'=>'purple']);
              } else {
                echo get_template_part( 'template-parts/service-box', '', ['class'=>'blue']);
              }
              
              
            }
          } 
          wp_reset_postdata(); // Сбрасываем $post
          ?>
        </div>
        <a class="services__more">Все услуги</a>
      </div>
    </div>
  </div>