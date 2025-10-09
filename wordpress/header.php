<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Photo Exhibition</title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Hero / Top Title -->
<header class="hero-title">
    <h1>Photo Exhibition</h1>
    <p class="hero-subtitle">Explore our curated collection of stunning photography exhibitions from around the world.</p>
    <a href="<?php echo site_url('/books'); ?>" class="hero-button">Books</a>
    <a href="<?php echo site_url('/about'); ?>" class="hero-button">About</a>
</header>

