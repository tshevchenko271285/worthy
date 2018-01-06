<?php
function worthy_style() {
	wp_enqueue_style( 'worthy-style', get_stylesheet_uri() );

	wp_enqueue_style( 'worthy-bootstrap-style', get_template_directory_uri() . '/layouts/bootstrap.css', array(), null, 'all' );

	wp_enqueue_style( 'worthy-animations-style', get_template_directory_uri() . '/layouts/animations.css', array(), null, 'all' );

	wp_enqueue_style( 'worthy-font-awesome-style', get_template_directory_uri() . '/layouts/font-awesome.css', array(), null, 'all' );

	wp_enqueue_style( 'worthy-style-theme-style', get_template_directory_uri() . '/layouts/style-theme.css', array(), null, 'all' );

	wp_enqueue_style( 'worthy-custom-style', get_template_directory_uri() . '/layouts/custom.css', array(), null, 'all' );

}
add_action( 'wp_enqueue_scripts', 'worthy_style' );
