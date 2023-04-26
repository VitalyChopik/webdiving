<?php get_header();?>
<main class="page">
  <div class="blog">
    <div class="blog__container">
      <div class="blog__posts">
        <?php		
          global $post;
          $query = new WP_Query( [
            'post_type'=> 'post',
            'posts_per_page' => -1,
            'order'=> 'DESC',
            'orderby'=> 'date'
          ] );

          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post();
              echo get_template_part( 'template-parts/blog-post');
            }
          } 
          wp_reset_postdata(); // Сбрасываем $post
        ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer();?>