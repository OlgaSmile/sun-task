<?php

$description_title = get_field('description_title');
$description_text = get_field('description_text');

$description_image = get_field('description_image');
$size = 'medium';
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
        <?php if( $description_image ) {
            echo wp_get_attachment_image( $description_image, $size );
        } ?>
      </div>

    </div>
  </div>
</section>