<div class="form__section" id="contacts">
      <?php 
      $imageBG = get_field('imageBG');
      echo wp_get_attachment_image( $imageBG, 'full', false, ['class'=> 'form__bg']);?>
  <div class="form__container">
    <div class="form__block">
      <?php 
      $form = get_field('form');
      echo do_shortcode($form)?>
    </div>
  </div>
</div>
