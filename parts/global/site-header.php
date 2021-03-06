<?php
/*
 * Site Header
 */

// Site Header Custom Fields
$logo = wp_get_attachment_image_src(get_field('header_logo', 'option'), 'logo');
?>

<header class="site-header">
  <div class="container">
    <div class="row">
      <div class="col-12 fix">

        <?php // Logo ?>
        <a href="<?php echo esc_url(home_url()); ?>" class="site-header__logo">
          <img src="<?php echo $logo[0]; ?>" alt="<?php echo get_bloginfo('name'); ?>">
        </a>
        
        <h1>September 30 — October 2</h1>

        <?php // Primary menu
          // wp_nav_menu(
          //   array(
          //     'theme_location' => 'primary',
          //     'container' => 'nav',
          //     'container_class' => 'nav--primary lg-only',
          //   )
          // );
        ?>

        <?php // Mobile nav button ?>
          <div class="menu-icon" >
            <a id="nifty-nav-toggle" class="nifty-hamburger"><span></span></a>
          </div>

      </div>
    </div>
  </div>

  <?php // Mobile menu
  wp_nav_menu(
    array(
      'theme_location' => 'mobile',
      'container' => 'nav',
      'container_class' => 'nav--mobile',
    )
  ); ?>
</header>
