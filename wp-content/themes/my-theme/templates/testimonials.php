<?php

$testimonial_title = get_field('testimonial_title');
$testimonial_title_accent = get_field('testimonial_title_accent');

?>

<section class="section">
  <div class="container">
    <div class="inner-container">

      <div class="testimonial__wrap">
        <h2 class="title section_title testimonial__title">
          <?php if($testimonial_title){
          echo $testimonial_title;
        } ?>
          <span>
            <?php if($testimonial_title_accent){
          echo $testimonial_title_accent;
        } ?>
          </span>
        </h2>

        <div class="testimonial__navigation">
          <div class="custom-prev-icon testimonial__navigation--prev">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="" xmlns="http://www.w3.org/2000/svg">
              <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#right-arrow"></use>
            </svg>

          </div>

          <div class="custom-next-icon testimonial__navigation--next">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="" xmlns="http://www.w3.org/2000/svg">
              <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#right-arrow"></use>
              <defs>
                <clipPath id="clip0_1_56">
                  <rect width="20" height="20" fill="" />
                </clipPath>
              </defs>
            </svg>

          </div>
        </div>
      </div>



      <div class="swiper testimonial__slider">
        <div class="swiper-wrapper testimonial__slider--wrapper">

          <?php get_template_part( 'template-parts/one-slide'); ?>
          <?php get_template_part( 'template-parts/one-slide'); ?>
          <?php get_template_part( 'template-parts/one-slide'); ?>

        </div>

        <div class="swiper-pagination testimonial__slider--pagination"></div>
      </div>

    </div>
  </div>
</section>