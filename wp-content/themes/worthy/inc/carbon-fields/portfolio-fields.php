<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_portfolio_block' );
function crb_portfolio_block() {
	Container::make( 'post_meta', 'Portfolio' )
		->show_on_post_type('page')
		->add_fields( array(
			Field::make( 'text', 'crb_portfolio_block_title', 'Title' ),
			Field::make( 'text', 'crb_portfolio_block_desc', 'Description' ),
		) );
}
