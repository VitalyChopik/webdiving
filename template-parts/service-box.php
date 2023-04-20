<article class="services__box <?php echo $args['class']; ?>">
  <div class="services__image">
    <?php 
      $image = get_field('image', $post);
      echo wp_get_attachment_image( $image, 'full', false, ['class'=> 'services__box-img']);?>
  </div>
  <div class="services__text">
    <div class="services__box-price">
      <h3 class="services__text-type"><?php the_title();?></h3>
      <span class="services__price"><?php the_field('price', $post);?></span>
    </div>
    <ul class="services__list">
    <?php
      if( have_rows('services__list', $post) ):
        while( have_rows('services__list', $post) ) : the_row();
          ?>
          <li class="services__item"><?php the_sub_field('services__item', $post);?></li>
          <?php
        endwhile;
      endif;
    ?>
    </ul>
    <?php
      $serviceBtn = get_field('service__btn', $post);
      $postLink = get_permalink();
    ?>
    <a href="<?php if(!$postLink){ echo $postLink;} else { ?> # <?php } ?>" class="services__btn">Узнать подробнее</a>
  </div>
</article>