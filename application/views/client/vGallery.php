<section id="gallery" class="blog blog-carousel tabs text-center pb-90" style="padding-top: -50px;">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#About" data-toggle="tab"><h4>Gallery</h4></a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade in active banner banner-1" id="About">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="carousel carousel-dots" data-slide="4" data-slide-rs="2" data-autoplay="true" data-nav="false" data-dots="true" data-space="0" data-loop="true" data-speed="800">
									<?php foreach ($galery as $gl): ?>
										<div class="portfolio-item filter-restaurent">
											<div class="portfolio--img">
												<img src="<?php echo base_url().$gl->foto ?>" alt="Dish Image">
												<div class="portfolio--hover">
													<div class="portfolio--action">
														<div class="pos-vertical-center">
															<div class="portfolio--zoom">
																<a class="img-gallery-item" href="<?php echo base_url().$gl->foto ?>" title="<?php echo $gl->jdlGalery ?>"></a>
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