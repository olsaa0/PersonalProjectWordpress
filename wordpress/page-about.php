<?php
/*
Template Name: About Page
*/
get_header();
?>

<main class="about-page">

  
  <section class="about-hero">
    <div class="about-hero-content">
      <h1>About Us</h1>
      <p>We are a creative platform dedicated to showcasing powerful photo exhibitions that capture stories, emotions, and perspectives from around the world.</p>
    </div>
  </section>

  
  <section class="about-story">
    <div class="story-text">
      <h2>Our Story</h2>
      <p>Made online, <strong>Photo Exhibition</strong> a digital space dedicated to the art of visual storytelling.
We believe that every photograph captures more than just a moment — it holds emotion, culture, and perspective. Our mission is to showcase impactful photo exhibitions that inspire reflection, spark dialogue, and connect people through the universal language of imagery.

Founded by passionate visual artists and curators, we collaborate with photographers from around the world to bring you thoughtfully curated collections. Each exhibition highlights powerful themes — from social issues and human experiences to nature’s beauty and urban life — inviting visitors to see the world through a new lens.</p>
      <p>Today, we collaborate with photographers and art spaces globally, highlighting the emotional and aesthetic impact of each frame captured.</p>
    </div>
    <div class="story-image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/about.png" alt="Our Story">
    </div>
  </section>

  
  <section class="about-team">
    <h2>Inspiring Art!</h2>
    <div class="team-grid">
      <div class="team-member">
        <img src="<?php echo get_template_directory_uri(); ?>/images/yellow.png" alt="Yellow">
        <h3>Gustav Klimt</h3>
        <p>The Kiss</p>
      </div>
      <div class="team-member">
        <img src="<?php echo get_template_directory_uri(); ?>/images/sky.png" alt="Van">
        <h3>Van Gogh</h3>
        <p>Wheat Field with Cypresses</p>
      </div>
      <div class="team-member">
        <img src="<?php echo get_template_directory_uri(); ?>/images/woman.png" alt="Parasol">
        <h3>Claude Monet</h3>
        <p>Woman With Parasol</p>
      </div>
    </div>
  </section>

  
  <section class="about-mission">
    <blockquote>
      “Art speaks where words fall silent — it captures emotions, tells untold stories, and reveals the beauty hidden in the ordinary.”
    </blockquote>
    <p>Our mission is to inspire and connect through the art of photography.</p>
  </section>

</main>

<?php get_footer(); ?>
