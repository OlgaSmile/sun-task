<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <title>wp-theme</title>
</head>

<body>
  <div class="wrapper">
    <header class="header">
      <div class="header__container">

        <?php 
            if ( has_custom_logo() ) {
                echo get_custom_logo();
            }
        ?>

        <button class="menu__btn--open" id="js-open-menu" type="button" aria-label="Open menu">
          <svg class="menu__icon">
            <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#menu-burger"></use>
          </svg>
        </button>

        <button class="menu__btn--close hidden" id="js-close-menu" type="button" aria-label="Open menu">
          <svg class="menu__icon">
            <use href="<?php echo get_template_directory_uri()?>/assets/images/sprite.svg#close"></use>
          </svg>
        </button>

        <div class="menu__block hidden" id="js-mobile-backdrop">
          <nav>
            <?php wp_nav_menu( [
                                'theme_location'       => 'header',                          
                                'container'            => false,                           
                                'menu_class'           => 'menu__list',
                                'menu_id'              => false,    
                                'echo'                 => true,                            
                                'items_wrap'           => '<ul id="%1$s" class="header_list %2$s">%3$s</ul>',  
                                ] ); 
                            ?>
          </nav>
        </div>

      </div>
    </header>