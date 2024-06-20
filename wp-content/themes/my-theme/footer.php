<footer>

  <section class="footer__section">
    <div class="container">
      <div class="footer__container">

        <?php 
            if ( has_custom_logo() ) {
                echo get_custom_logo();
            }
          ?>

        <?php
            if ( is_active_sidebar( 'footer-menu' ) ) {
                dynamic_sidebar( 'footer-menu' );
            } 
          ?>

        <?php
            $footer_copyright = get_field('footer_copyright');
            $footer_rights = get_field('footer_rights');
          ?>

        <p class="footer__copyright">
          <?php if($footer_copyright) {
            echo $footer_copyright;
          }
          echo date(' Y ');
          if($footer_rights) {
            echo $footer_rights;
          } ?>
        </p>

      </div>
    </div>
  </section>

</footer>
<?php wp_footer(); ?>
</div>
</body>

</html>