<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_banner_block' );
function crb_banner_block() {
	Container::make( 'theme_options', __( 'Banner', 'worthy' ) )
		->set_icon('dashicons-format-image')
		->add_fields( array(
			Field::make( 'text', 'crb_banner_block_title', 'Banner Title' ),
			Field::make( "image", "crb_banner_block_bg", "Banner background")->set_width(20),
			Field::make( 'textarea', 'crb_banner_block_text', 'Banner Text' )->set_width(80),
		) );
}
