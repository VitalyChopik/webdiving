<article class="blog__post">
  <?php the_post_thumbnail( 'full', array('class' => 'blog__post-img') ); ?>
  <div class="blog__post-text">
    <h2 class="blog__post-title"><?php the_title();?></h2>
    <p class="blog__post-excerpt"><?php echo get_the_excerpt();?></p>
    <a href="<?php the_permalink()?>" class="blog__post-permalink">Читать далее...</a>
  </div>
</article>