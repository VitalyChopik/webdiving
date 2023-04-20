<?php get_header();?>
<main class="page">
  <div data-observ></div>
  <?php echo get_template_part( 'template-parts/hero-banner'); ?>
  <?php the_content();?>
  <?php echo get_template_part( 'template-parts/form'); ?>
</main>
<?php get_footer();?>