<?php 
/**
 ** 	Prepare data from services block
 */
$services['title'] = carbon_get_theme_option( 'crb_services_block_title' ) ? carbon_get_theme_option( 'crb_services_block_title' ) : '';		
$services['slug'] = carbon_get_theme_option( 'crb_services_block_slug' ) ? carbon_get_theme_option( 'crb_services_block_slug' ) : '';	
$services['image'] = carbon_get_theme_option( 'crb_services_block_bg' ) ? wp_get_attachment_url(carbon_get_theme_option( 'crb_services_block_bg' )) : false;	

$services['left_list'] = is_array(carbon_get_theme_option('crb_services_block_left')) ? carbon_get_theme_option('crb_services_block_left') : false;		
$services['right_list'] = is_array(carbon_get_theme_option('crb_services_block_right')) ? carbon_get_theme_option('crb_services_block_right') : false;	
?>
		<!-- section start -->
		<!-- ================ -->
		<div 
			class="section translucent-bg bg-image-1 blue"
			<?php echo $services['image'] ? 'style="background-image: url('.$services['image'].')"' : '' ?>
			>
			<div class="container object-non-visible" data-animation-effect="fadeIn">
				<h1 id="services"  class="text-center title"><?echo $services['title']; ?></h1>
				<div class="space"></div>
				<div class="row">
					<div class="col-sm-6">
						<?php if($services['left_list']) : 
							foreach( $services['left_list'] as $left_key=>$left_item ) { 
								if($left_key > 3) break;
								?>

								<div class="media">
									<div class="media-body text-right">
										<h4 class="media-heading"><?php echo $left_item['title'] ?></h4>
										<p><?php echo $left_item['text'] ?></p>
									</div>
									<div class="media-right">
										<i class="fa <?php echo $left_item["icon"]; ?>"></i>
									</div>
								</div>

							<?php } ?>
						<?php endif ?>
					</div>
					<div class="space visible-xs"></div>
					<div class="col-sm-6">
						<?php if($services['right_list']) : 
							foreach( $services['right_list'] as $right_key=>$right_item ) { 
								if($right_key > 3) break;
							?>

							<div class="media">
								<div class="media-left">
									<i class="fa <?php echo $right_item["icon"]; ?>"></i>
								</div>
								<div class="media-body">
									<h4 class="media-heading"><?php echo $right_item['title'] ?></h4>
									<p><?php echo $right_item['text'] ?></p>
								</div>
							</div>

							<?php } ?>
						<?php endif ?>
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="default-bg space blue">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1 class="text-center"><?echo $services['slug']; ?></h1>
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->