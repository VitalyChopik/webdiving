<?php get_header();?>
<main class="page">
  <div data-observ></div>
  <?php if( have_rows('contacts') ):
    while( have_rows('contacts') ) : the_row(); ?>
    <div class="contacts">
        <?php 
        $imageBG = get_sub_field('imageBG');
        echo wp_get_attachment_image( $imageBG, 'full', false, ['class'=> 'contacts__bg']);?>
      <div class="breadcrumbs">
        <div class="breadcrumbs__container">
          <a href="<?php echo home_url();?>" class="breadcrumbs__link">Главная</a>
          <a href="<?php echo get_permalink(); ?>" class="breadcrumbs__link"><?php the_title();?></a>
        </div>
      </div>
      <div class="contacts__container">
        <div class="contacts__block">
          <h1 class="contacts__title"><?php the_sub_field('title')?></h1>
          <div class="contacts__develops">
            <?php 
            $image = get_sub_field('develop_img');
            echo wp_get_attachment_image( $image, 'full', false, ['class'=> 'contacts__develops-img']);?>
            
            <div class="contacts__develops-text"><?php the_sub_field('develop_text')?></div>
          </div>
          <div class="contacts__block-info">
            <div class="contacts__block-timetable">
              <h3 class="contacts__block-title">График работы:</h3>
              <div class="timetable__block">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.988 0C5.364 0 0 5.376 0 12C0 18.624 5.364 24 11.988 24C18.624 24 24 18.624 24 12C24 5.376 18.624 0 11.988 0ZM15.948 17.652L10.8 12.492V6H13.2V11.508L17.652 15.96L15.948 17.652Z" fill="url(#paint0_linear_1163_1046)"/>
                <defs>
                <linearGradient id="paint0_linear_1163_1046" x1="-1.17945e-07" y1="12" x2="22.6646" y2="17.5014" gradientUnits="userSpaceOnUse">
                <stop stop-color="#3369E7"/>
                <stop offset="1" stop-color="#8E43E7"/>
                </linearGradient>
                </defs>
                </svg>
                <?php the_field('timetable', 'option')?>
              </div>
            </div>
            <div class="contacts__block-brif">
              <a href="<?php the_sub_field('brif_file')?>" class="brif__block" download>
                <?php 
                $imageBrif = get_sub_field('brif_image');
                echo wp_get_attachment_image( $imageBrif, 'full', false, ['class'=> 'brif__block-img']);?>
                <div class="brif__box">
                  <span class="brif__box-text"><?php the_sub_field('brif_text');?></span>
                </div>
              </a>
            </div>
            <div class="contacts__block-contact">
              <h3 class="contacts__block-title">Напишите нам:</h3>
              <div class="contact__block">
                <svg width="25" height="18" viewBox="0 0 25 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1163_836)">
                <path d="M23.6953 2.69581e-05C23.5888 -0.010507 23.4815 -0.010507 23.375 2.69581e-05H1.5C1.3598 0.00210081 1.22053 0.0222819 1.08594 0.0600269L12.375 10.8525L23.6953 2.69581e-05Z" fill="url(#paint0_linear_1163_836)"/>
                <path d="M24.8516 1.04248L13.4766 11.9175C13.1838 12.1969 12.7878 12.3537 12.375 12.3537C11.9622 12.3537 11.5662 12.1969 11.2734 11.9175L4.09782e-08 1.12498C-0.0346567 1.24726 -0.0530323 1.37326 -0.0546875 1.49998V16.5C-0.0546875 16.8978 0.109933 17.2793 0.402958 17.5606C0.695984 17.8419 1.09341 18 1.50781 18H23.3828C23.7972 18 24.1946 17.8419 24.4877 17.5606C24.7807 17.2793 24.9453 16.8978 24.9453 16.5V1.49998C24.9391 1.34372 24.9075 1.18936 24.8516 1.04248ZM2.57813 16.5H1.49219V15.4275L7.17188 10.02L8.27344 11.0775L2.57813 16.5ZM23.3672 16.5H22.2734L16.5781 11.0775L17.6797 10.02L23.3594 15.4275L23.3672 16.5Z" fill="url(#paint1_linear_1163_836)"/>
                </g>
                <defs>
                <linearGradient id="paint0_linear_1163_836" x1="1.08594" y1="5.42233" x2="19.0964" y2="14.5234" gradientUnits="userSpaceOnUse">
                <stop stop-color="#3369E7"/>
                <stop offset="1" stop-color="#8E43E7"/>
                </linearGradient>
                <linearGradient id="paint1_linear_1163_836" x1="-0.0546876" y1="9.52123" x2="22.1073" y2="17.4519" gradientUnits="userSpaceOnUse">
                <stop stop-color="#3369E7"/>
                <stop offset="1" stop-color="#8E43E7"/>
                </linearGradient>
                <clipPath id="clip0_1163_836">
                <rect width="25" height="18" fill="white"/>
                </clipPath>
                </defs>
                </svg>
                <a href="mailto:<?php the_field('email', 'option')?>" class="contact__block-email"><?php the_field('email', 'option')?></a>
              </div>
            </div>
            <div class="contacts__block-social">
              <h3 class="contacts__block-title">Мы отвечаем в:</h3>
              <?php if( have_rows('social', 'option') ):
                while( have_rows('social', 'option') ) : the_row(); 
                $icon =get_sub_field('icon');?>
                <a href="<?php the_sub_field('link')?>" class="social__link"><?php echo wp_get_attachment_image( $icon, 'full', false, ['class'=> 'social__icon']);?></a>
                <?php endwhile;
              endif;?>
            </div>
          </div>
        </div>
        <div class="contacts__form main-form">
        <?php echo do_shortcode('[contact-form-7 id="193" title="form popup" html_class="contact-form"]')?>
        </div>
      </div>
    </div>
    <?php
    endwhile;
  endif;
?>
</main>
<?php get_footer();?>