<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>
<div class="site-branding">
  <?php if ( is_active_sidebar( 'custom-navbar' ) ) { ?>
    <div class="widget-column modalSearch modal">
      <div class="search-icon">
        <button class="search-toggle" id="modalSearchToggle"><i class="fas fa-search"></i></button>
      </div>
      <?php dynamic_sidebar( 'custom-navbar' ); ?>
    </div>
  <?php }
      $logoMobile = get_field('logo_mobile');
      $logoDesktop = get_field('logo_desktop');

      if (!empty($logoMobile)) { ?>
        <div class="site-logo logo-mobile"><a href="/"><img src="<?php echo $logoMobile; ?>" alt=""></a></div>
      <?php }
      if (!empty($logoDesktop)) { ?>
        <div class="site-logo logo-desktop"><a href="/"><img src="<?php echo $logoDesktop; ?>" alt=""></a></div>
      <?php } ?>
  <?php $blog_info = get_bloginfo( 'name' ); ?>
  <?php if ( ! empty( $blog_info ) ) : ?>
    <?php if ( is_front_page() && is_home() ) : ?>
      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    <?php else : ?>
      <p class="site-title hidden"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
    <?php endif; ?>
  <?php endif; ?>

  <?php
  $description = get_bloginfo( 'description', 'display' );
  if ( $description || is_customize_preview() ) :
    ?>
      <p class="site-description hidden">
        <?php echo $description; ?>
      </p>
  <?php endif; ?>
  <div class="modalMenu modal">
    <div class="menu-icon">
      <button class="menu-toggle" id="modalMenuToggle">
        <div class="row">
          <div class="col-2"></div>
          <div class="col-2"></div>
          <div class="col-2"></div>
          <div class="col-2"></div>
          <div class="col-2"></div>
        </div>
        <div class="row">
          <div class="col-2"></div>
          <div class="col-2"></div>
          <div class="col-2"></div>
          <div class="col-2"></div>
          <div class="col-2"></div>
        </div>
        <div class="row">
          <div class="col-2"></div>
          <div class="col-2"></div>
          <div class="col-2"></div>
          <div class="col-2"></div>
          <div class="col-2"></div>
        </div>
        <div class="row">
          <div class="col-2"></div>
          <div class="col-2"></div>
          <div class="col-2"></div>
          <div class="col-2"></div>
          <div class="col-2"></div>
        </div>
        <div class="row">
          <div class="col-2"></div>
          <div class="col-2"></div>
          <div class="col-2"></div>
          <div class="col-2"></div>
          <div class="col-2"></div>
        </div>
      </button>
    </div>
    <div class="main-navigation-menu">
      <?php $menuTitle = get_field('menu_tytul');
      if (!empty($menuTitle)) { ?>
        <h3 class="widget-title"><?php echo $menuTitle; ?></h3>
      <?php }
      wp_nav_menu( array(
        'theme_location' => 'my-custom-menu',
        'container_class' => 'main-menu' ) );
      ?>
    </div>
  </div>
  <?php /* if ( has_nav_menu( 'menu-1' ) ) : ?>
    <nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentynineteen' ); ?>">
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'menu-1',
          'menu_class'     => 'main-menu',
          'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        )
      );
      ?>
    </nav><!-- #site-navigation -->
  <?php endif; */ ?>
  <?php if ( has_nav_menu( 'social' ) ) : ?>
    <nav class="social-navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentynineteen' ); ?>">
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'social',
          'menu_class'     => 'social-links-menu',
          'link_before'    => '<span class="screen-reader-text">',
          'link_after'     => '</span>' . twentynineteen_get_icon_svg( 'link' ),
          'depth'          => 1,
        )
      );
      ?>
    </nav><!-- .social-navigation -->
  <?php endif; ?>
</div><!-- .site-branding -->
