<?php get_header(); ?>

<main class="home-container">
  <section class="hero">
    <h1>Welcome to the Photo Exhibition</h1>
    <p>Explore stunning photography from around the world</p>
  </section>

  <section class="gallery">
    <h2>Featured Photos</h2>
    <div class="photo-grid">
      <?php
      // Example loop — later you’ll replace this with WP posts or custom post types
      $photos = [
        ['title' => 'Sunset Bliss', 'url' => get_template_directory_uri() . '/images/photo1.jpg'],
        ['title' => 'City Lights', 'url' => get_template_directory_uri() . '/images/photo2.jpg'],
        ['title' => 'Nature Harmony', 'url' => get_template_directory_uri() . '/images/photo3.jpg']
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
