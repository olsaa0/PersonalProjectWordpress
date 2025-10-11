<?php
/*
Template Name: Exhibition
*/
get_header();
?>

<main class="exhibition-page">
    <section class="exhibition-hero">
        <h1>Exhibition</h1>
        <p>Explore our curated photo exhibitions featuring impactful visual stories from around the world.</p>
    </section>

    <section class="exhibition-gallery">
        <div class="exhibition-item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/exhibition1.jpg" alt="Exhibition 1">
            <h2>Urban Light</h2>
            <p>A photographic journey through city life and light contrasts.</p>
        </div>

        <div class="exhibition-item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/exhibition2.jpg" alt="Exhibition 2">
            <h2>Echoes of Nature</h2>
            <p>Capturing the harmony between humans and the natural world.</p>
        </div>
    </section>
</main>

<?php get_footer(); ?>
