<?php
/*
Template Name: Books Page
*/
get_header();
?>

<main class="books-page">

    
    <section class="page-header">
        <h1>~Books~</h1>
        <p class="page-description">A selection of different and unique photo books to explore.</p>
    </section>

    
    <section class="books-grid">
        <?php
        
        for ($i = 1; $i <= 20; $i++) {
            
            $img = get_template_directory_uri() . '/images/book' . (($i % 10) + 1) . '.jpg';
            $title = "Book " . $i;
            $desc = "A short description for Book " . $i . ".";
        ?>
            <div class="book-item">
                <div class="book-thumb">
                    <img src="<?php echo $img; ?>" alt="<?php echo $title; ?>">
                </div>
                <div class="book-info">
                    <h2 class="book-title"><?php echo $title; ?></h2>
                    <p class="book-excerpt"><?php echo $desc; ?></p>
                </div>
            </div>
        <?php } ?>
    </section>

</main>

<?php get_footer(); ?>