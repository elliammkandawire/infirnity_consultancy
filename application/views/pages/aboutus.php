
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
								<h1>about us</h1>
							</div>
							<ol class="tg-breadcrumb">
								<li><a href="#"><i class="fa fa-home"></i></a></li>
								<li class="tg-active">About</li>
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
			<section class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="tg-whatwedo">
							<div class="col-sm-12">
								<div class="tg-sectionhead">
									<div class="tg-sectiontitle">
										<h2>who we are</h2>
										<h3>what we do</h3>
									</div>
									<div class="tg-description">
										<p><?php echo $company_details->background ?></p>
									</div>
								</div>
								<ul>
									<li>
										<span class="tg-whatwedoicon">
											<i class="fa fa-bell-o"></i>
										</span>
										<div class="tg-whatwedocontent">
											<h4><a href="#">Mission</a></h4>
											<div class="tg-description">
												<p><?php echo $company_details->mission ?></p>
											</div>
										</div>
									</li>
									<li>
										<span class="tg-whatwedoicon">
											<i class="fa fa-comments-o"></i>
										</span>
										<div class="tg-whatwedocontent">
											<h4><a href="#">Vision</a></h4>
											<div class="tg-description">
												<p><?php echo $company_details->vision ?></p>
											</div>
										</div>
									</li>
									<li>
										<span class="tg-whatwedoicon">
											<i class="fa fa-flag-o"></i>
										</span>
										<div class="tg-whatwedocontent">
											<h4><a href="#">Core Values</a></h4>
											<div class="tg-description">
												<p><?php echo $company_details->core_values ?></p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					What We Offers End
			*************************************-->
			<!--************************************
					Perfessional Team Start
			*************************************-->
			<section class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-lg-offset-2 col-lg-8 col-md-offset-1 col-md-10 col-sm-offset-0 col-sm-12 col-xs-12">
							<div class="tg-sectionhead">
								<div class="tg-sectiontitle">
									<h2>Meet our</h2>
									<h3>Professional Team</h3>
								</div>
								<div class="tg-description">
									<p>Meet Our Professional Team</p>
								</div>
							</div>
						</div>
						<div id="tg-teamslider" class="tg-teamslider tg-teammembers">
                            <?php  foreach ($teams as $team): ?>
							<div class="item tg-member">
								<figure>
									<img src="images/team/<?php echo $team->picture ?>" alt="image description">
									<figcaption>
										<ul class="tg-socialprofilelinks">
                                            <li><a href="<?php echo $team->twitter_link ?>"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="<?php echo $team->facebook_link ?>"><i class="fa fa-facebook"></i></a></li>
										</ul>
									</figcaption>
								</figure>
								<div class="tg-memberinfo">
									<div class="tg-membername">
										<h4><a href="#"><?php  echo $team->fullname ?></a></h4>
									</div>
									<div class="tg-memberdesignation">
										<span><a href="#"><?php  echo $team->profession  ?></a></span>
									</div>
								</div>
							</div>
                            <?php endforeach; ?>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Perfessional Team End
			*************************************-->
			<!--************************************
					Get Advice Start
			*************************************-->
			<section class="tg-main-section tg-haslayout tg-parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-02.jpg">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-xs-12">
							<div class="tg-getadvice">
								<a class="tg-btn" href="#"><span>Get Advice</span></a>
								<p>Contact us for information or any queries related to <strong>financial investments</strong></p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Get Advice End
			*************************************-->
			<!--************************************
					Trusted by Many Start
			*************************************-->
			<section class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-lg-offset-2 col-lg-8 col-md-offset-1 col-md-10 col-sm-offset-0 col-sm-12 col-xs-12">
							<div class="tg-sectionhead">
								<div class="tg-sectiontitle">
									<h2>we are</h2>
									<h3>trusted by many</h3>
								</div>
								<div class="tg-description">
									<p>We have worked with the following companies</p>
								</div>
							</div>
						</div>
						<div id="tg-brandsslider" class="tg-brandsslider tg-brands">
                            <?php  foreach ($clients as $client ): ?>
                                <figure class="item tg-brand"><a href="#"><img src="images/brands/<?php echo $client->logo ?>" alt="image description"></a></figure>
                            <?php endforeach; ?>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Trusted by Many End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
