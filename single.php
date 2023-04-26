<?php get_header();?>
<main class="single">
  <div data-observ></div>
  <div class="single__page">
    <div class="single__container">
      <h1 class="single__title"><?php the_title();?></h1>
      <?php the_post_thumbnail( 'full', array('class' => 'single__image') ); ?>
      <!-- <span class="single__date"></span> -->
      <div class="single__content">
        <?php the_content();?>
      </div>
    </div>
  </div>
</main>
<?php get_footer();?>