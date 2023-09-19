<?php

/**
 * Block Name: text
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>
<div class="text-block">
  <div class="text-block__container">
    <?php the_field('text');?>
  </div>
</div>