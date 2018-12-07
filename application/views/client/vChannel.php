<section id="channel" class="blog blog-carousel tabs text-center pb-90" style="padding-top: -50px; background-image: none;">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#About" data-toggle="tab"><h4>Channel / Video</h4></a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade in active banner banner-1" id="About">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="carousel carousel-dots" data-slide="2" data-slide-rs="2" data-autoplay="true" data-nav="false" data-dots="true" data-space="0" data-loop="true" data-speed="800">
									<?php foreach ($video as $gl): ?>
										<div class="portfolio-item filter-restaurent">
											<div class="portfolio--img">
												<img style="height: 300px;" src="<?php echo base_url().$gl->foto ?>" alt="Dish Image">
												
												<span style=" font-size: 18px;"><?php echo $gl->jdlGalery ?></span>
												<div class="portfolio--hover">
													<div class="portfolio--action">
														<div class="pos-vertical-center">
															<div class="pos-vertical-center">
																<div class="video--player video--player-bordered">
																	<a class="popup-video" href="<?php echo $gl->link ?>">
																		<i class="icon icon-Play" style="color: #fff;"></i>
																	</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>	
									<?php endforeach ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>