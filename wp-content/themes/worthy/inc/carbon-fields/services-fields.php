<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_services_block' );
function crb_services_block() {
	Container::make( 'theme_options', 'Services' )
		->set_icon('dashicons-hammer')
		->add_tab( 'Basic Settings', array(
					Field::make( 'text', 'crb_services_block_title', 'Title' )->set_width(37),
					Field::make( 'text', 'crb_services_block_slug', 'Slug' )->set_width(37),
					Field::make( 'image', 'crb_services_block_bg', 'Backgound' )->set_width(25),
		) )
		->add_tab( 'Left panel', array(
			Field::make( 'complex', 'crb_services_block_left', 'Left list' )
				->add_fields( array(
					Field::make( 'text', 'title', 'Title' )->set_width(70),
					Field::make( 'text', 'icon', 'Icon Font Awesome(class name)' )->set_width(30),
					Field::make( 'textarea', 'text', 'Text' ),
				 ) ),
		) )
		->add_tab( 'Right panel', array(
			Field::make( 'complex', 'crb_services_block_right', 'Right list' )
				->add_fields( array(
					Field::make( 'text', 'title', 'Title' )->set_width(70),
					Field::make( 'text', 'icon', 'Icon Font Awesome(class name)' )->set_width(30),
					Field::make( 'textarea', 'text', 'Text' ),
				 ) ),
		) );
}
