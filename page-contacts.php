<?php get_header();?>
<main class="page">
  <div data-observ></div>
  <?php if( have_rows('contacts') ):
    while( have_rows('contacts') ) : the_row(); ?>
    <div class="contacts">
      <div class="contacts__container">
          <div class="contacts__crumbs crumbs">
              <a href="<?php echo home_url();?>" class="crumbs__link crumbs__link-home">
                  Главная
              </a>
              <p>/</p>
              <a href="<?php echo get_permalink(); ?>" class="crumbs__link">
                <?php the_title();?>
              </a>
          </div>
          <div class="contacts__row">
              <div class="contacts__body">
                  <h1 class="contacts__title">
                      <?php the_sub_field('title')?>
                  </h1>
                  <div class="contacts__devel devel-contacts">
                  <?php 
                  $image = get_sub_field('develop_img');
                  echo wp_get_attachment_image( $image, 'full', false, ['class'=> 'devel-contacts__img']);?>

                      <div class="devel-contacts__body"> 
                          <div class="devel-contacts__title">
                              <h2><?php the_sub_field('develop_text')?></h2>
                          </div>
                      </div>
                      
                  </div>
                  <div class="contacts__grid grid-contacts" data-da=".contacts__container, 1000, last">
                      <div class="grid-contacts__item grid-contacts__chart">
                          <h3 class="grid-contacts__title">
                              График работы:
                          </h3>
                          <div class="grid-contacts__text">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M11.988 0C5.364 0 0 5.376 0 12C0 18.624 5.364 24 11.988 24C18.624 24 24 18.624 24 12C24 5.376 18.624 0 11.988 0ZM15.948 17.652L10.8 12.492V6H13.2V11.508L17.652 15.96L15.948 17.652Z" fill="url(#paint0_linear_1163_1046)"/>
                              <defs>
                              <linearGradient id="paint0_linear_1163_1046" x1="-1.17945e-07" y1="12" x2="22.6646" y2="17.5014" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#3369E7"/>
                              <stop offset="1" stop-color="#8E43E7"/>
                              </linearGradient>
                              </defs>
                              </svg>
                              <p><?php the_field('timetable', 'option')?></p>
                          </div>
                      </div>
                      <div class="grid-contacts__item grid-contacts__brif brif-contacts">
                          <a href="<?php the_sub_field('brif_file')?>" download="<?php the_sub_field('brif_file')?>" class="brif-contacts__body">
                              <?php 
                              $imageBrif = get_sub_field('brif_image');
                              echo wp_get_attachment_image( $imageBrif, 'full', false, ['class'=> 'brif-contacts__img']);?>    
                              <div class="brif-contacts__text">
                                  <p>Скачать бриф
                                  </br>на создание сайта</p>
                              </div>
                          </a>
                      </div>
                      <div class="grid-contacts__item grid-contacts__email">
                          <h3 class="grid-contacts__title">
                              Напишите нам:
                          </h3>
                          <div class="grid-contacts__text">
                              <img src="<?php echo get_template_directory_uri()?>/dist/images/icons/email.svg" alt="">
                              <a href="mailto:<?php the_field('email', 'option')?>"><?php the_field('email', 'option')?></a>
                          </div>
                      </div>
                      <div class="grid-contacts__item grid-contacts__social social-contacts">
                          <h3 class="grid-contacts__title">
                              Мы отвечаем в:
                          </h3>
                          <div class="social-contacts__row">
                            <?php if( have_rows('social', 'option') ):
                              while( have_rows('social', 'option') ) : the_row(); 
                              $icon =get_sub_field('icon');?>
                              <a href="<?php the_sub_field('link')?>" class="social-contacts__item"><?php echo wp_get_attachment_image( $icon, 'full');?></a>
                              <?php endwhile;
                            endif;?>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="contacts__form main-form">
                <?php echo do_shortcode('[contact-form-7 id="193" title="form popup" html_class="contact-form"]')?>
              </div>
          </div>
      </div>
  </div>
    <?php
    endwhile;
  endif;
?>
</main>
<?php get_footer();?>