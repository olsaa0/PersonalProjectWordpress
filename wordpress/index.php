<?php get_header(); ?>

<main class="site-main gallery-page">

  <!-- Hero / Title Section -->
  <section class="hero-title">
    <h1>Photo Exhibition</h1>
  </section>

  <!-- Gallery Section -->
  <section class="gallery">
    <?php if ( have_posts() ) : ?>
      <div class="photo-grid">
        <?php while ( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class('photo-item'); ?>>
            <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>" class="photo-thumb">
                <?php the_post_thumbnail('medium'); ?>
              </a>
            <?php else : ?>
              <a href="<?php the_permalink(); ?>" class="photo-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.jpg" alt="Placeholder image">
              </a>
            <?php endif; ?>

            <h2 class="photo-title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>

            <div class="photo-meta">
              <span>by <?php the_author(); ?></span> |
              <span><?php echo get_the_date(); ?></span>
            </div>
          </article>
        <?php endwhile; ?>
      </div>

      <div class="pagination">
        <?php the_posts_pagination(); ?>
      </div>

    <?php else : ?>
      <p>No photos found.</p>
    <?php endif; ?>
  </section>
</main>

<?php get_footer(); ?>
