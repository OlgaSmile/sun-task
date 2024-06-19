<?php

$description_title = get_field('description_title');
$description_text = get_field('description_text');

$description_image = get_field('description_image');

?>

<section class="description__section">
  <div class="container">
    <div class="description__container">

      <div class="description__content">
        <h2 class="title block_title description__title">
          <?php if($description_title){
        echo $description_title;
      } ?>
        </h2>

        <p class="description__text">
          <?php 
      if($description_text) {
        echo $description_text;
      }?>
        </p>

      </div>

      <div class="description__image">
        <img class="" src="<?php echo esc_url($description_image['sizes']['medium_large']); ?>"
          alt="<?php echo esc_attr($description_image['alt']); ?>">
      </div>

    </div>
  </div>
</section>