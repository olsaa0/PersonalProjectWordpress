<?php get_header(); ?>

<div class="hero-title">
  <h1>Photo Exhibition</h1>
  <p class="hero-subtitle">A curated collection of photographic art from around the world.</p>

  <div class="nav-links">
    <a href="<?php echo get_permalink(get_page_by_title('Books')); ?>" class="hero-button">Books</a>
    <a href="<?php echo get_permalink(get_page_by_title('Exhibition')); ?>" class="hero-button">Exhibition</a>
    <a href="<?php echo get_permalink(get_page_by_title('About')); ?>" class="hero-button">About</a>
  </div>
</div>

<main class="home-container">
  <section class="hero">
    <h1>.</h1>
    <p>.</p>
  </section>

  <section class="gallery">
    <h2>Featured Photos</h2>
    <div class="photo-grid">
      <?php
      // Example loop — later you’ll replace this with WP posts or custom post types
      $photos = [
        ['title' => 'Sunset Bliss', 'url' => get_template_directory_uri() . '/images/cover.png'],
        ['title' => 'City Lights', 'url' => get_template_directory_uri() . '/images/modern.png'],
        ['title' => 'Nature Harmony', 'url' => get_template_directory_uri() . '/images/circle.png']
      ];

      foreach ($photos as $photo) {
        echo '<div class="photo-item">';
        echo '<img src="' . $photo['url'] . '" alt="' . $photo['title'] . '">';
        echo '<h3>' . $photo['title'] . '</h3>';
        echo '</div>';
      }
      ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>
