<?php get_header(); ?>

<main class="site-main gallery-page">

  <!-- Horizontal Gallery Section -->
  <section class="horizontal-gallery">
    <?php if ( have_posts() ) : ?>
      <div class="gallery-wrapper">
        <?php while ( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class('gallery-item'); ?>>
            <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>" class="gallery-thumb">
                <?php the_post_thumbnail('large'); ?>
              </a>
            <?php else : ?>
              <a href="<?php the_permalink(); ?>" class="gallery-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.jpg" alt="Placeholder image">
              </a>
            <?php endif; ?>
            <div class="gallery-info">
              <h2 class="gallery-title"><?php the_title(); ?></h2>
              <p class="gallery-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
            </div>
          </article>
        <?php endwhile; ?>
      </div>
    <?php else : ?>
      <p>No exhibitions found.</p>
    <?php endif; ?>
  </section>

</main>

<?php get_footer(); ?>
