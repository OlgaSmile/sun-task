<?php

$hero_title = get_field('hero_title');
$hero_description = get_field('hero_description');
$hero_button_cta = get_field('hero_button_cta');
$hero_button_link = get_field('hero_button_link');

$image = get_field('hero_image');

?>
<section class="hero__section">
  <div class="hero__container">

    <div class="hero__content">

      <h1 class="title hero__title"><?php if($hero_title){
        echo $hero_title;
      } ?></h1>

      <p class="hero__description"><?php 
      if($hero_description) {
        echo $hero_description;
      }?></p>

      <a class="button" href="<?php echo esc_url($hero_button_link); ?>"><?php 
      if($hero_button_cta){
        echo $hero_button_cta;
      } ?></a>
    </div>

    <div class="hero__image">
      <img class="" src="<?php echo esc_url($image['sizes']['medium_large']); ?>"
        alt="<?php echo esc_attr($image['alt']); ?>">
    </div>
  </div>
</section>