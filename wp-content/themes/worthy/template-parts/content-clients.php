<?php
/**
 ** 	Prepare data from Clients block
 */
$clients['title'] = carbon_get_the_post_meta( 'crb_clients_block_title' ) ? carbon_get_the_post_meta( 'crb_clients_block_title' ) : '';		
$clients['slug'] = carbon_get_the_post_meta( 'crb_clients_block_slug' ) ? carbon_get_the_post_meta( 'crb_clients_block_slug' ) : '';
$clients['background'] = carbon_get_the_post_meta( 'crb_clients_block_bg' ) ? wp_get_attachment_url(carbon_get_the_post_meta( 'crb_clients_block_bg' )) : false;

$clients['testomonials'] = is_array(carbon_get_the_post_meta('crb_clients_block_testomonials')) ? carbon_get_the_post_meta('crb_clients_block_testomonials') : false;

$clients['icon_clients'] = is_array(carbon_get_the_post_meta('crb_clients_block_icon_clients')) ? carbon_get_the_post_meta('crb_clients_block_icon_clients') : false;		
	
?>
<!-- section start -->
<!-- ================ -->
<div <?php echo $clients['background'] ? 
	'style="background-image: url('.$clients['background'].')"' : ''?>
	class="section translucent-bg bg-image-2 pb-clear">
	<div class="container object-non-visible" data-animation-effect="fadeIn">
		<h1 id="clients" class="title text-center"><?php echo $clients['title']; ?></h1>
		<div class="space"></div>
		<div class="row">
		<?php 
			if($clients['testomonials']) :
			foreach($clients['testomonials'] as $f_kay=>$feedback) { 
				if($f_kay > 5) break;
				$icon_url = wp_get_attachment_url($feedback['icon']);
		?>
			<div class="col-md-4">
				<div class="media testimonial">
					<div class="media-left">
						<img src="<?php echo $icon_url; ?>" alt="">
					</div>
					<div class="media-body">
						<h3 class="media-heading"><?php echo $feedback['title']; ?></h3>
						<blockquote>
							<p><?php echo $feedback['text']; ?></p>
							<footer><?php echo $feedback['slug']; ?></footer>
						</blockquote>
					</div>
				</div>
			</div>
		<?php 
			}
			endif;
		?>
		</div>
	</div>
	<!-- section start -->
	<!-- ================ -->
	<div class="translucent-bg blue">
		<div class="container">
			<div class="list-horizontal">
				<div class="row">
				<?php
					if($clients['icon_clients']) :
					foreach ($clients['icon_clients'] as $c_key => $client) {
						$icon_url = wp_get_attachment_url($client['icon']);
				?>
						<div class="col-xs-2">
							<div class="list-horizontal-item">
								<img src="<?php echo $icon_url; ?>" alt="client">
							</div>
						</div>
				<?php
					}
					endif;
				?>
				</div>
			</div>
		</div>
	</div>
	<!-- section end -->
</div>
<!-- section end -->

<!-- section start -->
<!-- ================ -->
<div class="default-bg space">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1 class="text-center"><?php echo $clients['slug']; ?></h1>
			</div>
		</div>
	</div>
</div>
<!-- section end -->