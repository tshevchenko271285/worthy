<?php
	$_banner_block_title = carbon_get_theme_option( 'crb_banner_block_title' ) ? carbon_get_theme_option( 'crb_banner_block_title' ) : '';

	$_banner_block_text = carbon_get_theme_option( 'crb_banner_block_text' ) ? carbon_get_theme_option( 'crb_banner_block_text' ) : '';	

	$_banner_block_bg = carbon_get_theme_option( 'crb_banner_block_bg' ) ? carbon_get_theme_option( 'crb_banner_block_bg' ) : '';

	$_banner_block_bg_url = wp_get_attachment_url( $_banner_block_bg ) ? wp_get_attachment_url( $_banner_block_bg ) : ' ';

	echo "<script>var _banner_block_bg = '$_banner_block_bg_url'</script>";
?>
<div id="banner" class="banner">
	<div class="banner-image">
		
	</div>
	<div class="banner-caption">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
					<h1 class="text-center"><?php echo $_banner_block_title;?></h1>
					<p class="lead text-center"><?php echo $_banner_block_text;?></p>
				</div>
			</div>
		</div>
	</div>
</div>