<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Top utility bar -->
<div class="top-bar">
  <div class="top-bar-inner">
    <a href="<?php echo site_url('/subscribe'); ?>">Subscribe</a>
    <?php if ( is_user_logged_in() ): ?>
      <a href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a>
    <?php else: ?>
      <a href="<?php echo wp_login_url(); ?>">Login</a>
    <?php endif; ?>
  </div>
</div>

<!-- Main site header -->
<header class="site-header">
  <div class="navbar-container">
    <!-- Left: Site Logo -->
    <div class="site-logo">
      <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
    </div>

    <!-- Center: Navigation -->
    <nav class="main-navigation">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'main_menu',
        'container' => false,
        'items_wrap' => '<ul class="nav-menu">%3$s</ul>',
        'fallback_cb' => false
      ));
      ?>
    </nav>

    <!-- Right: Optional links -->
    <div class="nav-utility">
      <a href="<?php echo site_url('/about'); ?>">About</a>
      <a href="<?php echo site_url('/contact'); ?>">Contact</a>
    </div>
  </div>
</header>
