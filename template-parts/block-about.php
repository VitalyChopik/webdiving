<?php

/**
 * Block Name: about
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<section class="about__section" id="about">
      <?php 
      $imageBG = get_field('imageBG');
      echo wp_get_attachment_image( $imageBG, 'full', false, ['class'=> 'about__bg']);?>
  <div class="about__container">
    <ul class="about__tabs-list">
      <li class="about__tabs-item" data-tabs-btn="1">О нас</li>
      <li class="about__tabs-item" data-tabs-btn="2">Преимущества</li>
      <li class="about__tabs-item" data-tabs-btn="3">Технологии</li>
    </ul>
    <div class="about__block">
      <div class="about__box about" data-tabs-content="1">
        <div class="about__box-text">
          <h2 class="about__box-title"><?php the_field('title');?></h2>
          <p class="about__box-description"><?php the_field('text');?></p>
          <a href="#" class="btn about__box-btn">Узнать цены</a>
        </div>
        <?php
          $image = get_field('image');
          echo wp_get_attachment_image( $image, 'full', false, ['class'=> 'about__box-image']);?>
      </div>
      <div class="about__box advantages" data-tabs-content="2">
        <div class="advantages__block">
        <?php
        if( have_rows('items') ):
          while( have_rows('items') ) : the_row();
          ?>
          <div class="advantages__box">
            <div class="advantages__icon">
                <?php
                $icon = get_sub_field('icon');
                echo wp_get_attachment_image( $icon, 'full');?>
            </div>
            <p class="advantages__title"><?php the_sub_field('value');?></p>
          </div>
          <?php
          endwhile;
        endif;
      ?>
        </div>
      </div>
      <div class="about__box stack" data-tabs-content="3">
        <div class="stack__block">
        <?php
          if( have_rows('stacks') ):
            while( have_rows('stacks') ) : the_row();
            ?>
            <div class="stack__box">
                <?php
                  $stack = get_sub_field('stack');
                  echo wp_get_attachment_image( $stack, 'full', false, ['class'=> 'stack__box-img']);?>
            </div>
            <?php
            endwhile;
          endif;
        ?>
        </div>
      </div>
    </div>
  </div>
  </section>