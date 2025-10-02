<?php
function photoexhibition_customize_register($wp_customize) {
    $wp_customize->add_setting('photoexhibition_cover_photo', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'photoexhibition_cover_photo_control',
            array(
                'label' => __('Cover Photo', 'photoexhibition'),
                'section' => 'title_tagline',
                'settings' => 'photoexhibition_cover_photo',
            )
        )
    );
}
add_action('customize_register', 'photoexhibition_customize_register');
// front-page.php (or wherever you want to display the cover photo)
<?php
$cover_photo_url = get_theme_mod('photoexhibition_cover_photo');

if ($cover_photo_url) : ?>
    <div class="photo-cover" style="background-image: url('<?php echo esc_url($cover_photo_url); ?>'); height: 400px; background-size: cover; background-position: center;">
    </div>
<?php else : ?>
    <p>Please set a cover photo in the Customizer.</p>
<?php endif; ?>
