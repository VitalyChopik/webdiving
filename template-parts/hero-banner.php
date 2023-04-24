<?php
  if( have_rows('hero__section') ):
    while( have_rows('hero__section') ) : the_row();
    ?>
    <div class="hero__section">
    <?php 
      $imageBG = get_sub_field('imageBG');
      echo wp_get_attachment_image( $imageBG, 'full', false, ['class'=> 'hero__bg']);?>
      <div class="hero__container">
        <div class="hero__text">
          <h1 class="hero__title">
            <?php the_sub_field('title')?>
          </h1>
          <p class="hero__subtitle">   <?php the_sub_field('subtitle')?></p>
          <button class="btn hero__btn" data-type="offerPopup">Заказать</button>
        </div>
        <?php 
          $image = get_sub_field('image');
          echo wp_get_attachment_image( $image, 'full', false, ['class'=> 'hero__image']);?>
      </div>
    </div>
    <?php
    endwhile;
  endif;
?>