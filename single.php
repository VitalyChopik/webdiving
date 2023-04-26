<?php get_header();?>
<main class="single">
  <div data-observ></div>
  <div class="single__page">
    <div class="single__container">
      <h1 class="single__title"><?php the_title();?></h1>
      <span class="single__date"><?php the_time('d, F Y'); ?></span>

    </div>
  </div>
  <?php the_content();?>
</main>
<?php get_footer();?>