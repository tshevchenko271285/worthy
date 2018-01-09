<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_portfolio_block' );
function crb_portfolio_block() {
	Container::make( 'post_meta', 'Portfolio' )
		->show_on_post_type('page')
		->add_fields( array(
			Field::make( 'text', 'crb_portfolio_block_title', 'Title' )->set_width(20),
			Field::make( 'text', 'crb_portfolio_block_desc', 'Description' )->set_width(70),
			Field::make( 'select', 'crb_portfolio_block_count', 'Count Images' )
				->set_width(10)
				->add_options(array(
					  '4'  => '1 row',
					  '8'  => '2 rows',
					  '12' => '3 rows',
					  '16' => '4 rows',
				  )),
		) );
}
