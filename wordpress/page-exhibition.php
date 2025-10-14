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
            <img src="<?php echo get_template_directory_uri(); ?>/images/nature.png" alt="Nature">
            <h2>Urban Light</h2>
            <p>A photographic journey through city life and light contrasts.</p>
        </div>

        <div class="exhibition-item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/swirl.png" alt="Swirl">
            <h2>Echoes of Nature</h2>
            <p>Capturing the harmony between humans and the natural world.</p>
        </div>

        <section class="exhibition-gallery">
        <div class="exhibition-item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/woods.png" alt="Woods">
            <h2>Urban Light</h2>
            <p>A photographic journey through city life and light contrasts.</p>
        </div>

        

    </section>
</main>

<?php get_footer(); ?>
