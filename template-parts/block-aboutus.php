<?php

/**
 * Block Name: aboutus
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<div class="about-us">
    <div class="about-us__container">
        <div class="about-us__crumbs crumbs">
          <a href="<?php echo home_url();?>" class="crumbs__link crumbs__link-home">
              Главная
          </a>
          <p>/</p>
          <a href="<?php echo get_permalink(); ?>" class="crumbs__link">
            <?php the_title();?>
          </a>
        </div>
        <h2 class="about-us__title title">
          <?php the_title();?>
        </h2>
        <h3 class="about-us__quote">
          <?php the_field('quote');?>
        </h3>
        <?php if( have_rows('images') ):?>
        <div class="about-us__row">
            <?php while( have_rows('images') ) : the_row(); ?>
            <?php $image = get_sub_field('image');
                echo wp_get_attachment_image( $image, 'full', false, ['class'=> 'about-us__item']);?>
            <?php endwhile;?>
        </div>
        <?php endif; ?>
            
        <?php if( have_rows('work_us_list') ):?>
        <div class="about-us__work work-us">
            <h3 class=" work-us__title">
                <?php the_field('work_us_title');?>
            </h3>
            <ul class="work-us__list">
              <?php while( have_rows('work_us_list') ) : the_row(); ?>
                <li class="work-us__item">
                    <?php the_sub_field('item');?>
                </li>
                <?php endwhile;?>
            </ul>
        </div>
        <?php endif; ?>
        <?php if( have_rows('difference_us_list') ):?>
        <div class="about-us__difference difference-us">
            <h3 class="difference-us__title">
              <?php the_field('difference_us_title');?>
            </h3>
            <ol class="difference-us__list">
              <?php while( have_rows('difference_us_list') ) : the_row(); ?>
                <li class="difference-us__item">
                  <?php the_sub_field('item');?>
                </li>
                <?php endwhile;?>
            </ol>
        </div>
        <?php endif; ?>
    </div>
</div>