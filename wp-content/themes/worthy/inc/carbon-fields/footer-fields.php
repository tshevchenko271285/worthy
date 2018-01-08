<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_footer_block' );
function crb_footer_block() {
		Container::make( 'theme_options', 'Theme Options' )
		 ->add_fields(array(

		));
	Container::make( 'theme_options', 'Footer' )
		->set_page_parent('crb_carbon_fields_container_theme_options.php')
	 	->add_tab( 'Contact info', array(
			Field::make( 'text', 'cbr_footer_contact_title', 'Title' )->set_width(100),
			Field::make( 'textarea', 'cbr_footer_contact_text', 'Text' )->set_width(100),
			Field::make( 'text', 'cbr_footer_contact_address', 'Address' )->set_width(25),
			Field::make( 'text', 'cbr_footer_contact_phone', 'Phone' )->set_width(25),
			Field::make( 'text', 'cbr_footer_contact_fax', 'Fax' )->set_width(25),
			Field::make( 'text', 'cbr_footer_contact_email', 'Email' )->set_width(25)
		))
	 	->add_tab( 'Social', array(
			Field::make( 'text', 'cbr_footer_facebook', 'Facebook' )->set_width(25),
			Field::make( 'text', 'cbr_footer_twitter', 'Twitter' )->set_width(25),
			Field::make( 'text', 'cbr_footer_google', 'Google' )->set_width(25),
			Field::make( 'text', 'cbr_footer_skype', 'Skype' )->set_width(25),
			Field::make( 'text', 'cbr_footer_linkedin', 'Linkedin' )->set_width(25),
			Field::make( 'text', 'cbr_footer_youtube', 'Youtube' )->set_width(25),
			Field::make( 'text', 'cbr_footer_flickr', 'Flickr' )->set_width(25),
			Field::make( 'text', 'cbr_footer_pinterest', 'Pinterest' )->set_width(25)
		))
	 	->add_tab( 'Sub Footer', array(
			Field::make( 'text', 'cbr_subfooter_copytext', 'Copytext' )->set_width(50),
			Field::make( 'text', 'cbr_subfooter_link_url', 'Link Url' )->set_width(25),
			Field::make( 'text', 'cbr_subfooter_link_text', 'Link Text' )->set_width(25)
		));
}