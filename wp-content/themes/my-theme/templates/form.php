<?php

$form_title = get_field('form_title');
$form_email = get_field('form_email');
$form_address = get_field('form_address');

$form = get_field('contact_form');
                
?>

<section class="section form__section">
  <div class="container">
    <div class="inner-container">
      <div class="form__block">

        <div class="form__content">

          <h2 class="title section_title form__title">
            <?php if($form_title){
              echo $form_title;
            } ?>
          </h2>

          <div class="form__contacts">
            <a class="form__contacts--mail" href="mailto:<?php the_field('form_email') ?>" rel="noopener noreferrer">
              <?php the_field('form_email') ?>
            </a>

            <p class="form__contacts--address">
              <?php 
            if($form_address) {
              echo $form_address;
            }?>
            </p>
          </div>

        </div>

        <div class="">

          <?php if($form) : ?>
          <div class="form__object">
            <?php echo $form?>
          </div>
          <?php endif; ?>

        </div>

      </div>
    </div>
  </div>
</section>