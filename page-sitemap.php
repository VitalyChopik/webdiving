<?php get_header();?>
<main class="page">
  <div data-observ></div>
  <div class="sitemap">
    <div class="sitemap__container">
      <h1><?php the_title();?></h1>
      <h2 class="title">Страницы</h2>
      <?php
      	$args = array(
          'post_type' => array('page'), 
          'posts_per_page' => -1,
        );
        $query = new WP_Query($args);
        $sitemap = '<ul>';
      
        while ($query->have_posts()) {
            $query->the_post();
            $sitemap .= '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        }
      
        wp_reset_postdata();
      
        $sitemap .= '</ul>';
        echo $sitemap;
      ?>
      <h2 class="title">Посты</h2>
      <?php
      	$args = array(
          'post_type' => array('post'), 
          'posts_per_page' => -1,
        );
        $query = new WP_Query($args);
        $sitemap = '<ul>';
      
        while ($query->have_posts()) {
            $query->the_post();
            $sitemap .= '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        }
      
        wp_reset_postdata();
      
        $sitemap .= '</ul>';
        echo $sitemap;
      ?>
      <h2 class="title">Портфолио</h2>
      <?php
      	$args = array(
          'post_type' => array('portfolio'),
          'posts_per_page' => -1,
        );
        $query = new WP_Query($args);
        $sitemap = '<ul>';
      
        while ($query->have_posts()) {
            $query->the_post();
            $case = get_field('case', $post);
            $customLink = get_field('custom__link', $post);
            $postLink = get_permalink();
            if($case) {
              $echoLink ="";
              $echoLink = $customLink;
            } else {
              $echoLink ="";
              $echoLink = $postLink;
            }
            $sitemap .= '<li><a href="' . $echoLink . '">' . get_the_title() . '</a></li>';
        }
      
        wp_reset_postdata();
      
        $sitemap .= '</ul>';
        echo $sitemap;
      ?>
      <!-- <h2 class="title">Услуги</h2> -->
      <?php
      	// $args = array(
        //   'post_type' => array('service'),
        //   'posts_per_page' => -1,
        // );
        // $query = new WP_Query($args);
        // $sitemap = '<ul>';
      
        // while ($query->have_posts()) {
        //     $query->the_post();
        //     $sitemap .= '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        // }
      
        // wp_reset_postdata();
      
        // $sitemap .= '</ul>';
        // echo $sitemap;
      ?>
    </div>
  </div>
  </main>
<?php get_footer();?>