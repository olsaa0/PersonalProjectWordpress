<?php
/*
Template Name: Books Page
*/
get_header();
?>

<main class="books-page">

    <section class="page-header">
        <h1>~Books~</h1>
        <p class="page-description">A selection of unique and inspiring photo books to explore.</p>
    </section>

    <section class="books-grid">
        <!-- Row 1 -->
        <div class="book-item">
            <div class="book-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/illusion.png" alt="Dreamscapes">
            </div>
            <div class="book-info">
                <h2 class="book-title">Dreamscapes</h2>
                <p class="book-excerpt">A visual exploration of surreal landscapes and dreamlike worlds.</p>
            </div>
        </div>

        <div class="book-item">
            <div class="book-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/art.png" alt="Urban Reflections">
            </div>
            <div class="book-info">
                <h2 class="book-title">Urban Reflections</h2>
                <p class="book-excerpt">Capturing the rhythm of the city and its luminous beauty.</p>
            </div>
        </div>

        <div class="book-item">
            <div class="book-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/moon.png" alt="Nature’s Voice">
            </div>
            <div class="book-info">
                <h2 class="book-title">Nature’s Voice</h2>
                <p class="book-excerpt">Moments that celebrate the quiet power of the natural world.</p>
            </div>
        </div>

        <div class="book-item">
            <div class="book-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/flower.png" alt="Colors of Time">
            </div>
            <div class="book-info">
                <h2 class="book-title">Colors of Time</h2>
                <p class="book-excerpt">A journey through vibrant palettes and timeless photography.</p>
            </div>
        </div>

        <!-- Row 2 -->
        <div class="book-item">
            <div class="book-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/face.png" alt="Silent Streets">
            </div>
            <div class="book-info">
                <h2 class="book-title">Silent Streets</h2>
                <p class="book-excerpt">Poetic shots capturing quiet moments in bustling cities.</p>
            </div>
        </div>

        <div class="book-item">
            <div class="book-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/world.png" alt="Golden Hours">
            </div>
            <div class="book-info">
                <h2 class="book-title">Golden Hours</h2>
                <p class="book-excerpt">Exploring the world bathed in the glow of dawn and dusk.</p>
            </div>
        </div>

        <div class="book-item">
            <div class="book-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/study.png" alt="Fragments of Memory">
            </div>
            <div class="book-info">
                <h2 class="book-title">Fragments of Memory</h2>
                <p class="book-excerpt">A collection inspired by nostalgia and fleeting moments.</p>
            </div>
        </div>

        <div class="book-item">
            <div class="book-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/stairs.png" alt="Ocean Eyes">
            </div>
            <div class="book-info">
                <h2 class="book-title">Ocean Eyes</h2>
                <p class="book-excerpt">The emotion and energy of the sea captured in every frame.</p>
            </div>
        </div>

        <!-- Row 3 -->
        <div class="book-item">
            <div class="book-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/cloud.png" alt="Celestial">
            </div>
            <div class="book-info">
                <h2 class="book-title">Celestial</h2>
                <p class="book-excerpt">A cosmic dance between light, stars, and shadow.</p>
            </div>
        </div>

        <div class="book-item">
            <div class="book-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/land.png" alt="In Bloom">
            </div>
            <div class="book-info">
                <h2 class="book-title">In Bloom</h2>
                <p class="book-excerpt">Floral wonders captured through the lens of creativity.</p>
            </div>
        </div>

        <div class="book-item">
            <div class="book-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/rip.png" alt="Moments in Motion">
            </div>
            <div class="book-info">
                <h2 class="book-title">Moments in Motion</h2>
                <p class="book-excerpt">Energy and life seen through dynamic photography.</p>
            </div>
        </div>

        <div class="book-item">
            <div class="book-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/camera.png" alt="Beyond the Frame">
            </div>
            <div class="book-info">
                <h2 class="book-title">Beyond the Frame</h2>
                <p class="book-excerpt">An invitation to see stories beyond the photograph itself.</p>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
