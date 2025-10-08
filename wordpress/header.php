<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
  <!-- Default WordPress title removed -->
  <nav class="main-nav">
    <?php wp_nav_menu(['theme_location' => 'main-menu']); ?>
  </nav>
</header>

