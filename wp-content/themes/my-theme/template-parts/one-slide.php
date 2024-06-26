<?php

$testimonial_text = get_field('testimonial_text');
$testimonial_author = get_field('testimonial_author');
$testimonial_author_role = get_field('testimonial_author_role');

$testimonial_image = get_field('testimonial_image');
$size = 'medium';

?>

<div class="swiper-slide testimonial__slide">

  <div class="testimonial__image">
    <?php if( $testimonial_image ) {
        echo wp_get_attachment_image( $testimonial_image, $size );
    } ?>
  </div>

  <div class="testimonial__content">
    <div class="testimonial__text">
      <?php 
        if($testimonial_text) {
          echo $testimonial_text;
        }?>
    </div>
    <p class="testimonial__author">
      <?php 
        if($testimonial_author) {
          echo $testimonial_author;
        }?>
    </p>
    <p class="testimonial__author--role">
      <?php 
        if($testimonial_author_role) {
          echo $testimonial_author_role;
        }?>
    </p>
  </div>
</div>