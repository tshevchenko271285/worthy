<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_about_block' );
function crb_about_block() {
	Container::make( 'theme_options', 'About' )
		->set_icon('dashicons-lightbulb')
		->add_tab( 'First Block', array(
			Field::make( 'text', 'crb_about_block_title', 'Title' ),
			Field::make( 'text', 'crb_about_block_desc', 'Desctiption' ),
			Field::make( "image", "crb_about_block_img", "Image")->set_width(20),
			Field::make( "rich_text", "crb_about_block_text", "Text")->set_width(80),
			Field::make( 'complex', 'crb_about_block_list', 'List' )
				->add_fields( array(
					Field::make( 'text', 'text', 'List item' )
				 ) ),
		) )
		->add_tab( 'Second Block', array(
			Field::make( 'text', 'crb_about_block_sub_title', 'Title' ),
			Field::make( "rich_text", "crb_about_block_sub_text", "Text"),
			Field::make( 'complex', 'crb_about_block_accord', 'Accordion' )
				->add_fields( array(
					Field::make( 'text', 'title', 'Title item' ),
					Field::make( 'textarea', 'text', 'Text item' ),
				 ) ),
		) );
}