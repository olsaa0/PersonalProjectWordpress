<?php get_header(); ?>

<main class="homepage">

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h1>-Photo <br>Exhibition-</h1>
      <p>Featuring photography from our gallery</p>
    </div>
  </section>

  <!-- Photo Grid Section -->
  <section class="photo-grid">
    <div class="container grid">
      <?php
      // Query latest 9 posts with featured images
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 9,
        'meta_query' => array(
          array(
            'key' => '_thumbnail_id' // Only posts with featured images
          )
        )
      );

      $query = new WP_Query($args);

      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
          <div class="photo-item">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('medium'); ?>
            </a>
            <h3><?php the_title(); ?></h3>
          </div>
        <?php endwhile;
        wp_reset_postdata();
      else :
        echo '<p>No photos to display.</p>';
      endif;
      ?>
    </div>
  </section>

</main>

<?php get_footer(); ?>
