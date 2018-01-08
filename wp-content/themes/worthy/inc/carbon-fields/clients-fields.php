<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_clients_block' );
function crb_clients_block() {
	Container::make( 'post_meta', 'Clients' )
		->show_on_post_type('page')
		->add_tab( 'Basic Settings', array(
					Field::make( 'text', 'crb_clients_block_title', 'Title' )->set_width(40),
					Field::make( 'text', 'crb_clients_block_slug', 'Slug' )->set_width(40),
					Field::make( 'image', 'crb_clients_block_bg', 'Backgound' )->set_width(20),
		) )
		->add_tab( 'Testomonials', array(
			Field::make( 'complex', 'crb_clients_block_testomonials', 'Feedback list' )
				->add_fields( array(
					Field::make( 'text', 'title', 'Title' )->set_width(50),
					Field::make( 'text', 'slug', 'Slug' )->set_width(50),
					Field::make( 'textarea', 'text', 'Text' )->set_width(80),
					Field::make( 'image', 'icon', 'Icon' )->set_width(20),
				 ) ),
		) )
		->add_tab( 'Icon Clients', array(
			Field::make( 'complex', 'crb_clients_block_icon_clients', 'Right list' )
				->add_fields( array(
					Field::make( 'image', 'icon', 'Icon' )
				 ) ),
		) );
}
