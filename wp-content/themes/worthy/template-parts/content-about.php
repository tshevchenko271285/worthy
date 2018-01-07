<?php
/**
 ** 	Prepare data from about block
 */
$about['title'] = carbon_get_theme_option( 'crb_about_block_title' ) ? carbon_get_theme_option( 'crb_about_block_title' ) : '';		
$about['description'] = carbon_get_theme_option( 'crb_about_block_desc' ) ? carbon_get_theme_option( 'crb_about_block_desc' ) : '';		
$about['image'] = carbon_get_theme_option( 'crb_about_block_img' ) ? wp_get_attachment_url(carbon_get_theme_option( 'crb_about_block_img' )) : false;		
$about['text'] = carbon_get_theme_option( 'crb_about_block_text' ) ? carbon_get_theme_option( 'crb_about_block_text' ) : '';		
$about['list'] = is_array(carbon_get_theme_option('crb_about_block_list')) ? carbon_get_theme_option('crb_about_block_list') : false;		

$about['sub_title'] = carbon_get_theme_option( 'crb_about_block_sub_title' ) ? carbon_get_theme_option( 'crb_about_block_sub_title' ) : '';
$about['sub_text'] = carbon_get_theme_option( 'crb_about_block_sub_text' ) ? carbon_get_theme_option( 'crb_about_block_sub_text' ) : '';
$about['accordion'] = is_array(carbon_get_theme_option('crb_about_block_accord')) ? carbon_get_theme_option('crb_about_block_accord') : false;
?>

<!-- <pre>
<?php //var_dump($about); //wp_die()?>
</pre> -->
		<!-- section start -->
		<!-- ================ -->
		<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 id="about" class="title text-center"><?php echo $about['title']; ?><!-- About <span>Worthy</span> --></h1>
						<p class="lead text-center"><?php echo $about['description']; ?></p>
						<div class="space"></div>
						<div class="row">
							<div class="col-md-6">
								<?php if($about['image']) : ?>
									<img src="<?php echo $about['image'] ?>" alt="">
								<?php endif ?>
								<div class="space"></div>
							</div>
							<div class="col-md-6">
								<?php echo wpautop($about['text']); ?>
								<?php if($about['list']) : ?>
								<ul class="list-unstyled">
									<?php foreach($about['list'] as $item) { ?>
										<li><i class="fa fa-caret-right pr-10 text-colored"></i> <?php echo $item['text']; ?></li>
									<?php } ?>
								</ul>
								<?php endif ?>
							</div>
						</div>
						<div class="space"></div>
						<h2><?php echo $about['sub_title']; ?></h2>
						<div class="row">
							<div class="col-md-6">
								<?php echo wpautop($about['sub_text']); ?>
							</div>
							<div class="col-md-6">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<?php 
									$first_acc = true;
									foreach($about['accordion'] as $acc_key=>$acc_item) { ?>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="heading<?php echo $acc_key; ?>">
											<h4 class="panel-title">
												<a 
													class="<?php echo $first_acc ? '' : 'collapsed'; ?>"
													data-toggle="collapse"
													data-parent="#accordion" 
													href="#collapse<?php echo $acc_key; ?>" 
													aria-expanded="<?php echo $first_acc ? 'true' : 'false'; ?>" 
													aria-controls="collapse<?php echo $acc_key; ?>">
													<?php echo $acc_item['title']; ?>
												</a>
											</h4>
										</div>
										<div 
											id="collapse<?php echo $acc_key; ?>" 
											class="panel-collapse collapse <?php echo $first_acc ? ' in' : '' ?>" 
											role="tabpanel" 
											aria-labelledby="heading<?php echo $acc_key; ?>"
										>
											<div class="panel-body">
												<?php echo $acc_item['text']; ?>
											</div>
										</div>
									</div>
									<?php 
									$first_acc = false; 
									} 
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->