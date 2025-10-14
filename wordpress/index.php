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
    <h2>~Featured Artwork~</h2>
    <div class="photo-grid">
      <?php
      
      $photos = [
        ['title' => 'Dance on the air', 'url' => get_template_directory_uri() . '/images/cover.png'],
        ['title' => 'On and on', 'url' => get_template_directory_uri() . '/images/modern.png'],
        ['title' => 'Color Harmony', 'url' => get_template_directory_uri() . '/images/circle.png']
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
