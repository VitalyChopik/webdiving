<?php

/**
 * Block Name: procedure
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>
<section class="procedure__section" id="procedure">
  <div class="procedure__container">
    <?php if(get_field('title')){
      ?>
      <h2 class="procedure__title"><?php the_field('title')?></h2>
      <?php
    }?>
    <div class="procedure__block">
    <?php
      if( have_rows('blocks') ):
        $i=0;
        while( have_rows('blocks') ) : the_row(); $i++?>
      <div class="procedure__box">
        <span class="procedure__box-number">0<?php echo $i;?></span>
        <div class="procedure__box-image">
          <?php 
            $image = get_sub_field('icon');
            echo wp_get_attachment_image( $image, 'full', false, ['class'=> 'procedure__box-icon']);?>
        </div>
        <h3 class="procedure__box-title"><?php the_sub_field('title')?></h3>
        <p class="procedure__box-description"><?php the_sub_field('text')?></p>
      </div>
       <?php endwhile;
      endif;
    ?>
    </div>
  </div>
  </section>