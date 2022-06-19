
		<!--************************************
				Inner Banner Start
		*************************************-->
		<div id="tg-innerbanner" class="tg-innerbanner tg-haslayout">
			<div class="tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-03.jpg"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="tg-innerbannercontent">
							<div class="tg-pagetitle">
								<h1>services</h1>
							</div>
							<ol class="tg-breadcrumb">
								<li><a href="#"><i class="fa fa-home"></i></a></li>
								<li class="tg-active">services</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Inner Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					What We Offers Start
			*************************************-->
			<section class="tg-main-section tg-paddingbottomzero tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-lg-offset-2 col-lg-8 col-md-offset-1 col-md-10 col-sm-offset-0 col-sm-12 col-xs-12">
							<div class="tg-sectionhead">
								<div class="tg-sectiontitle">
									<h2>our services</h2>
									<h3>What We Offer</h3>
								</div>
								<div class="tg-description">
									<p>We are made up of a team that is dedicated to work. We offer services that have impact to your organisation. Below is a list of </p>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="row">
								<div class="tg-services tg-servicestyletwo">

                                    <?php foreach($services as $service): ?>
									<div class="col-sm-6">
										<div class="tg-box">
											<div class="tg-service">
												<span class="tg-seviceicon">
													<i class="<?php  echo $service->icon ?>"></i>
												</span>
												<div class="tg-heading">
													<h4><a href="<?php echo base_url() ?>services/<?php echo $service->slug ?>"><?php echo $service->title ?></a></h4>
												</div>
												<div class="tg-description">
													<p><?php echo $service->short_description ?></p>
												</div>
											</div>
										</div>
									</div>
                                    <?php endforeach; ?>
								</div>
							</div>
						</div>
<!--						<div class="col-sm-4 hidden-sm hidden-xs">-->
<!--							<figure class="tg-serviceimg">-->
<!--								<img src="images/img-03.jpg" alt="image description">-->
<!--							</figure>-->
<!--						</div>-->
					</div>
				</div>
			</section>
			<!--************************************
					What We Offers End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->

