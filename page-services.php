<?php get_header();?>
<main class="page page-services">
  <div data-observ></div>
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
    </div>
  </div>
  <?php the_content();?>
</main>
<?php get_footer();?>