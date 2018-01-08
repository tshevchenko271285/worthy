<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package worthy
 */

/**
 ** 	Prepare data from Clients block
 */
// Contact info
$footer['title'] = carbon_get_theme_option('cbr_footer_contact_title') ? carbon_get_theme_option('cbr_footer_contact_title') : '';
$footer['text'] = carbon_get_theme_option('cbr_footer_contact_text') ? carbon_get_theme_option('cbr_footer_contact_text') : '';
$footer['address'] = carbon_get_theme_option('cbr_footer_contact_address') ? carbon_get_theme_option('cbr_footer_contact_address') : '';
$footer['phone'] = carbon_get_theme_option('cbr_footer_contact_phone') ? carbon_get_theme_option('cbr_footer_contact_phone') : '';
$footer['fax'] = carbon_get_theme_option('cbr_footer_contact_fax') ? carbon_get_theme_option('cbr_footer_contact_fax') : '';
$footer['email'] = carbon_get_theme_option('cbr_footer_contact_email') ? carbon_get_theme_option('cbr_footer_contact_email') : '';

//Social
$footer['facebook'] = carbon_get_theme_option('cbr_footer_facebook') ? carbon_get_theme_option('cbr_footer_facebook') : false;
$footer['twitter'] = carbon_get_theme_option('cbr_footer_twitter') ? carbon_get_theme_option('cbr_footer_twitter') : false;
$footer['google'] = carbon_get_theme_option('cbr_footer_google') ? carbon_get_theme_option('cbr_footer_google') : false;
$footer['skype'] = carbon_get_theme_option('cbr_footer_skype') ? carbon_get_theme_option('cbr_footer_skype') : false;
$footer['linkedin'] = carbon_get_theme_option('cbr_footer_linkedin') ? carbon_get_theme_option('cbr_footer_linkedin') : false;
$footer['youtube'] = carbon_get_theme_option('cbr_footer_youtube') ? carbon_get_theme_option('cbr_footer_youtube') : false;
$footer['flickr'] = carbon_get_theme_option('cbr_footer_flickr') ? carbon_get_theme_option('cbr_footer_flickr') : false;
$footer['pinterest'] = carbon_get_theme_option('cbr_footer_pinterest') ? carbon_get_theme_option('cbr_footer_pinterest') : false;

//SubFooter
$footer['copytext'] = carbon_get_theme_option('cbr_subfooter_copytext') ? carbon_get_theme_option('cbr_subfooter_copytext') : '';
$footer['link_url'] = carbon_get_theme_option('cbr_subfooter_link_url') ? carbon_get_theme_option('cbr_subfooter_link_url') : '';
$footer['link_text'] = carbon_get_theme_option('cbr_subfooter_link_text') ? carbon_get_theme_option('cbr_subfooter_link_text') : '';



//<?php echo $footer['']; ?>
?>
<!-- footer start -->
<!-- ================ -->
<footer id="footer">

	<!-- .footer start -->
	<!-- ================ -->
	<div class="footer section">
		<div class="container">
			<h1 class="title text-center" id="contact"><?php echo $footer['title']; ?></h1>
			<div class="space"></div>
			<div class="row">
				<div class="col-sm-6">
					<div class="footer-content">
						<p class="large"><?php echo $footer['text']; ?></p>
						<ul class="list-icons">
							<li><i class="fa fa-map-marker pr-10"></i> <?php echo $footer['address']; ?></li>
							<li><i class="fa fa-phone pr-10"></i> <?php echo $footer['phone']; ?></li>
							<li><i class="fa fa-fax pr-10"></i> <?php echo $footer['fax']; ?></li>
							<li><i class="fa fa-envelope-o pr-10"></i> <?php echo $footer['email']; ?></li>
						</ul>
						<ul class="social-links">
							<?php if($footer['facebook']) :?>
							<li class="facebook"><a target="_blank" href="<?php echo $footer['facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
							<?php endif;
							if($footer['twitter']) :?>
							<li class="twitter"><a target="_blank" href="<?php echo $footer['twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
							<?php endif;
							if($footer['google']) :?>
							<li class="googleplus"><a target="_blank" href="<?php echo $footer['google']; ?>"><i class="fa fa-google-plus"></i></a></li>
							<?php endif;
							if($footer['skype']) :?>
							<li class="skype"><a target="_blank" href="<?php echo $footer['skype']; ?>"><i class="fa fa-skype"></i></a></li>
							<?php endif;
							if($footer['linkedin']) :?>
							<li class="linkedin"><a target="_blank" href="<?php echo $footer['linkedin']; ?>"><i class="fa fa-linkedin"></i></a></li>
							<?php endif;
							if($footer['youtube']) :?>
							<li class="youtube"><a target="_blank" href="<?php echo $footer['youtube']; ?>"><i class="fa fa-youtube"></i></a></li>
							<?php endif;
							if($footer['flickr']) :?>
							<li class="flickr"><a target="_blank" href="<?php echo $footer['flickr']; ?>"><i class="fa fa-flickr"></i></a></li>
							<?php endif;
							if($footer['pinterest']) :?>
							<li class="pinterest"><a target="_blank" href="<?php echo $footer['pinterest']; ?>"><i class="fa fa-pinterest"></i></a></li>
							<?php endif;?>
						</ul>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="footer-content">
						<?php echo do_shortcode('[contact-form-7 id="96" title="Contact form 1" html_id="footer-form" html_role="form"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- .footer end -->

	<!-- .subfooter start -->
	<!-- ================ -->
	<div class="subfooter">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="text-center"><?php echo $footer['copytext']; ?> <a target="_blank" href="<?php echo $footer['link_url']; ?>"><?php echo $footer['link_text']; ?></a></p>
				</div>
			</div>
		</div>
	</div>
	<!-- .subfooter end -->

</footer>
<!-- footer end -->
<?php wp_footer(); ?>

</body>
</html>
