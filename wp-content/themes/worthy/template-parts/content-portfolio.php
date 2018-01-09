<?php
$portfolio['title'] = carbon_get_the_post_meta( 'crb_portfolio_block_title' ) ? carbon_get_the_post_meta( 'crb_portfolio_block_title' ) : '';	
$portfolio['description'] = carbon_get_the_post_meta( 'crb_portfolio_block_desc' ) ? carbon_get_the_post_meta( 'crb_portfolio_block_desc' ) : '';	
$portfolio['count'] = carbon_get_the_post_meta( 'crb_portfolio_block_count' ) ? carbon_get_the_post_meta( 'crb_portfolio_block_count' ) : 12;	

?>		
		<!-- section start -->
		<!-- ================ -->
		<div class="section">
			<div class="container">
				<h1 class="text-center title" id="portfolio"><?php echo $portfolio['title']; ?></h1>
				<div class="separator"></div>
				<p class="lead text-center"><?php echo $portfolio['description']; ?></p>
				<br>			
				<div class="row object-non-visible" data-animation-effect="fadeIn">
					<div class="col-md-12">

						<!-- isotope filters start -->
						<div class="filters text-center">
							<ul class="nav nav-pills">
								<li class="active"><a href="#" data-filter="*">All</a></li>
								<?php 
									$args_tax_portfolio = array(
										'taxonomy' => 'type_of_work',
										'hide_empty' => false,
									);
									$terms_portfolio = get_terms( $args_tax_portfolio );
									foreach($terms_portfolio as $term_portfolio) {
								?>
								<li><a href="#" data-filter=".<?php echo $term_portfolio->slug; ?>">
									<?php echo $term_portfolio->name; ?>
								</a></li>
								<?php } ?>
							</ul>
						</div>
						<div class="isotope-container row grid-space-20">
						<!-- isotope filters end -->
							<?php
							$attr_portfolio = array('post_type'=>'portfolio', 'posts_per_page' => $portfolio['count'],);
							$query_portfolio = new WP_Query($attr_portfolio); 
							if( $query_portfolio->have_posts() ){
								$porfolio_index = 0;
								while( $query_portfolio->have_posts() ){ $query_portfolio->the_post();
									$porfolio_index++;
									$terms_portfolio = get_the_terms(get_the_id(), 'type_of_work');
								?>
								<!-- portfolio items start -->
									<div class="col-sm-6 col-md-3 isotope-item <?php echo $terms_portfolio[0]->slug; ?>">
										<div class="image-box">
											<div class="overlay-container">
												<?php the_post_thumbnail(); ?>
												<a class="overlay" data-toggle="modal" data-target="#project-<?php echo $porfolio_index;?>">
													<i class="fa fa-search-plus"></i>
													<span><?php echo $terms_portfolio[0]->name; ?></span>
												</a>
											</div>
											<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-<?php echo $porfolio_index;?>"><?php the_title(); ?></a>
										</div>
										<!-- Modal -->
										<div class="modal fade" id="project-<?php echo $porfolio_index;?>" tabindex="-1" role="dialog" aria-labelledby="project-<?php echo $porfolio_index;?>-label" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
														<h4 class="modal-title" id="project-<?php echo $porfolio_index;?>-label"><?php the_title(); ?>
														</h4>
													</div>
													<div class="modal-body">
														<h3><?php the_excerpt(); ?></h3>
														<div class="row">
															<div class="col-md-6">
																<?php the_content(); ?>
															</div>
															<div class="col-md-6">
																<?php the_post_thumbnail(); ?>
															</div>
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
													</div>
												</div>
											</div>
										</div>
										<!-- Modal end -->
									</div>
								<?php
								
								}
								wp_reset_postdata(); // сбрасываем переменную $post
							} 
							else echo 'Записей нет.';
							?>

						</div>
						<!-- portfolio items end -->
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->
