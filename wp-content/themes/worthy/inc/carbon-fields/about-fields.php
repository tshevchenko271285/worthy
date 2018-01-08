<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_about_block' );
function crb_about_block() {
	Container::make( 'post_meta', 'About' )
		->show_on_post_type('page')
		->add_tab( 'First Block', array(
			Field::make( 'text', 'crb_about_block_title', 'Title' ),
			Field::make( 'text', 'crb_about_block_desc', 'Desctiption' ),
			Field::make( "image", "crb_about_block_img", "Image")->set_width(20),
			Field::make( "rich_text", "crb_about_block_text", "Text")->set_width(80),
		) )
		->add_tab( 'List To First Block', array(
			Field::make( 'complex', 'crb_about_block_list', 'List' )
				->add_fields( array(
					Field::make( 'text', 'text', 'List item' )
				 ) ),
		) )
		->add_tab( 'Second Block', array(
			Field::make( 'text', 'crb_about_block_sub_title', 'Title' ),
			Field::make( "rich_text", "crb_about_block_sub_text", "Text"),
		) )
		->add_tab( 'Accordion To Second Block', array(
			Field::make( 'complex', 'crb_about_block_accord', 'Accordion' )
				->add_fields( array(
					Field::make( 'text', 'title', 'Title item' ),
					Field::make( 'textarea', 'text', 'Text item' ),
				) ),
		) );
}