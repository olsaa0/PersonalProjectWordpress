<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php bloginfo('name'); ?><?php wp_title(' | '); ?></title>
  <?php wp_head(); ?>
  <style>
    /* Reset & basics */
    body, h1, h3, p, ul, li {
      margin: 0; padding: 0;
    }
    body {
      font-family: Arial, sans-serif;
      background: #fff;
      color: #222;
    }
    a {
      color: #0073aa;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }

    /* Simple nav */
    nav.simple-nav {
      background: #f5f5f5;
      padding: 12px 20px;
      text-align: center;
      font-size: 0.9rem;
    }
    nav.simple-nav a {
      margin: 0 12px;
      font-weight: 600;
      color: #0073aa;
    }

    /* Layout */
    .main-wrapper {
      max-width: 1100px;
      margin: 30px auto;
      padding: 0 20px;
      display: flex;
      gap: 40px;
    }
    .content-left {
      flex: 3;
    }
    .sidebar-right {
      flex: 1;
      display: flex;
      align-items: flex-start;
      justify-content: center;
    }
    .sidebar-right img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    /* Hero */
    section.hero h1 {
      font-size: 3rem;
      margin-bottom: 12px;
      line-height: 1.1;
    }
    section.hero p {
      font-size: 1.2rem;
      color: #555;
      margin-bottom: 30px;
    }

    /* Photo Grid */
    section.photo-grid .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 20px;
    }
    .photo-item {
      text-align: center;
    }
    .photo-item h3 {
      margin-top: 8px;
      font-size: 1rem;
      color: #333;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .main-wrapper {
        flex-direction: column;
      }
      .sidebar-right {
        margin-top: 30px;
        justify-content: flex-start;
      }
    }
  </style>
</head>
<body <?php body_class(); ?>>

  <!-- Simple navbar -->
  <nav class="simple-nav">
    <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
    <a href="<?php echo esc_url(home_url('/exhibitions')); ?>">Exhibitions</a>
    <a href="<?php echo esc_url(home_url('/gallery')); ?>">Gallery</a>
    <a href="<?php echo esc_url(home_url('/about')); ?>">About</a>
  </nav>

  <main class="homepage">
    <div class="main-wrapper">
      <div class="content-left">

        <!-- Hero Section -->
        <section class="hero">
          <h1>-Photo <br>Exhibition-</h1>
          <p>Featuring photography from our gallery</p>
        </section>

        <!-- Photo Grid Section -->
        <section class="photo-grid">
          <div class="grid">
            <?php
            // Query latest 9 posts with featured images only
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 9,
              'meta_query' => array(
                array(
                  'key' => '_thumbnail_id',
                ),
              ),
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
            else : ?>
              <p>No photos to display.</p>
            <?php endif; ?>
          </div>
        </section>

      </div>

      <aside class="sidebar-right">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/cover.png'); ?>" alt="Cover Image" />
      </aside>
    </div>
  </main>

  <?php wp_footer(); ?>
</body>
</html>
