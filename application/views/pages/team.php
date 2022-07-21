
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
								<h1>team</h1>
							</div>
							<ol class="tg-breadcrumb">
								<li><a href="#"><i class="fa fa-home"></i></a></li>
								<li class="tg-active">team</li>
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
			<div class="tg-pagecontent">
				<div class="container">
					<div class="row">
						<div class="col-lg-offset-2 col-lg-8 col-md-offset-1 col-md-10 col-sm-offset-0 col-sm-12 col-xs-12">
							<div class="tg-sectionhead">
								<div class="tg-sectiontitle">
									<h2>meet our</h2>
									<h3>professional team</h3>
								</div>
								<div class="tg-description">
									<p>Meet Our Professional Team</p>
								</div>
							</div>
						</div>
						<div class="tg-teammembers">
                            <?php  foreach ($teams as $team): ?>
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="tg-member">
									<figure>
										<img style="object-fit: cover; height: 400px;" src="<?php echo base_url(); ?>images/team/<?php echo $team->picture ?>" alt="image">
										<figcaption>
											<ul class="tg-socialprofilelinks">
												<li><a target="_blank" href="<?php echo $team->twitter_link ?>"><i class="fa fa-twitter"></i></a></li>
												<li><a target="_blank" href="<?php echo $team->facebook_link ?>"><i class="fa fa-facebook"></i></a></li>
											</ul>
										</figcaption>
									</figure>
									<div class="tg-memberinfo">
										<div class="tg-membername">
											<h4><a href="#"><?php  echo $team->fullname ?></a></h4>
										</div>
										<div class="tg-memberdesignation">
											<span><a href="#"><?php  echo $team->position  ?></a></span>
										</div>
									</div>
								</div>
							</div>
                            <?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!--************************************
				Main End
		*************************************-->
