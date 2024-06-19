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
              <g clip-path="url(#clip0_1_56)">
                <path
                  d="M19.7709 9.44704C19.7706 9.44681 19.7704 9.44654 19.7702 9.4463L15.688 5.38381C15.3821 5.07947 14.8875 5.08061 14.5831 5.38646C14.2787 5.69228 14.2799 6.18693 14.5857 6.49131L17.3265 9.2188H0.78125C0.349766 9.2188 0 9.56857 0 10.0001C0 10.4315 0.349766 10.7813 0.78125 10.7813H17.3264L14.5857 13.5088C14.2799 13.8132 14.2788 14.3078 14.5831 14.6136C14.8875 14.9195 15.3822 14.9206 15.688 14.6163L19.7702 10.5538C19.7704 10.5536 19.7706 10.5533 19.7709 10.5531C20.0769 10.2477 20.0759 9.75142 19.7709 9.44704Z"
                  fill="" />
              </g>
              <defs>
                <clipPath id="clip0_1_56">
                  <rect width="20" height="20" fill="" />
                </clipPath>
              </defs>
            </svg>

          </div>

          <div class="custom-next-icon testimonial__navigation--next">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_1_56)">
                <path
                  d="M19.7709 9.44704C19.7706 9.44681 19.7704 9.44654 19.7702 9.4463L15.688 5.38381C15.3821 5.07947 14.8875 5.08061 14.5831 5.38646C14.2787 5.69228 14.2799 6.18693 14.5857 6.49131L17.3265 9.2188H0.78125C0.349766 9.2188 0 9.56857 0 10.0001C0 10.4315 0.349766 10.7813 0.78125 10.7813H17.3264L14.5857 13.5088C14.2799 13.8132 14.2788 14.3078 14.5831 14.6136C14.8875 14.9195 15.3822 14.9206 15.688 14.6163L19.7702 10.5538C19.7704 10.5536 19.7706 10.5533 19.7709 10.5531C20.0769 10.2477 20.0759 9.75142 19.7709 9.44704Z"
                  fill="" />
              </g>
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