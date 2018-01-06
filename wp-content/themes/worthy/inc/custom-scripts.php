<?php
function worthy_scripts() {

	wp_enqueue_script( 'worthy-jquery-script', get_template_directory_uri() . '/js/jquery.min.js', array(), '20180106', true );

	wp_enqueue_script( 'worthy-navigation-script', get_template_directory_uri() . '/js/navigation.js', array(), '20180106', true );

	wp_enqueue_script( 'worthy-skip-link-focus-fix-script', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20180106', true );

	wp_enqueue_script( 'worthy-bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20180106', true );

	wp_enqueue_script( 'worthy-modernizr-script', get_template_directory_uri() . '/js/modernizr.js', array(), '20180106', true );

	wp_enqueue_script( 'worthy-isotope-script', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), '20180106', true );

	wp_enqueue_script( 'worthy-jquery-backstretch-script', get_template_directory_uri() . '/js/jquery.backstretch.min.js', array(), '20180106', true );

	wp_enqueue_script( 'worthy-jquery-appear-script', get_template_directory_uri() . '/js/jquery.appear.js', array(), '20180106', true );

	wp_enqueue_script( 'worthy-template-script', get_template_directory_uri() . '/js/template.js', array(), '20180106', true );

	wp_enqueue_script( 'worthy-custom-script', get_template_directory_uri() . '/js/custom.js', array(), '20180106', true );


}
add_action( 'wp_enqueue_scripts', 'worthy_scripts' );


/*
		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
	//	<script type="text/javascript" src="plugins/jquery.min.js"></script>
	//	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
	//	<script type="text/javascript" src="plugins/modernizr.js"></script>

		<!-- Isotope javascript -->
	//	<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
		
		<!-- Backstretch javascript -->
	//	<script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>

		<!-- Appear javascript -->
	//	<script type="text/javascript" src="plugins/jquery.appear.js"></script>

		<!-- Initialization of Plugins -->
	//	<script type="text/javascript" src="js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>
*/