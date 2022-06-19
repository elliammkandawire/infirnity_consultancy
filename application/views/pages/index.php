<!--************************************
				Home Slider Start
		*************************************-->
		<div id="tg-homeslider" class="tg-homeslider tg-haslayout">


			<figure class="item">
				<img src="images/slider/img-01.jpg" alt="image description">
				<figcaption>
					<div class="container">
						<div class="row">
							<div class="col-md-7 col-sm-10 col-xs-12 pull-right">
								<h1>Five star service</h1>
								<h2>guaranteed</h2>
								<img class="tg-svginject" src="images/img-01.svg" alt="image description">
								<div class="tg-description">
									<p><?php echo $company_details->mission ?></p>
								</div>
								<div class="tg-btnsbox">
									<a class="tg-btn" href="<?php echo base_url() ?>/aboutus"><span>Read more</span></a>
									<a class="tg-btn" href="<?php echo base_url() ?>/services"><span>View Services</span></a>
								</div>
							</div>
						</div>
					</div>
				</figcaption>
			</figure>


			<figure class="item">
				<img src="images/slider/img-01.jpg" alt="image description">
				<figcaption>
					<div class="container">
						<div class="row">
							<div class="col-md-7 col-sm-10 col-xs-12 pull-right">
								<h1>Five star service</h1>
								<h2>guaranteed</h2>
								<img class="tg-svginject" src="images/img-01.svg" alt="image description">
								<div class="tg-description">
									<p><?php echo $company_details->vision ?></p>
								</div>
								<div class="tg-btnsbox">
                                    <a class="tg-btn" href="<?php echo base_url() ?>/aboutus"><span>Read more</span></a>
                                    <a class="tg-btn" href="<?php echo base_url() ?>/services"><span>View Services</span></a>
								</div>
							</div>
						</div>
					</div>
				</figcaption>
			</figure>
			<figure class="item">
				<img src="images/slider/img-01.jpg" alt="image description">
				<figcaption>
					<div class="container">
						<div class="row">
							<div class="col-md-7 col-sm-10 col-xs-12 pull-right">
								<h1>Five star service</h1>
								<h2>guaranteed</h2>
								<img class="tg-svginject" src="images/img-01.svg" alt="image description">
								<div class="tg-description">
									<p><?php echo $company_details->mission ?></p>
								</div>
								<div class="tg-btnsbox">
                                    <a class="tg-btn" href="<?php echo base_url() ?>/aboutus"><span>Read more</span></a>
                                    <a class="tg-btn" href="<?php echo base_url() ?>/services"><span>View Services</span></a>
								</div>
							</div>
						</div>
					</div>
				</figcaption>
			</figure>
		</div>
		<!--************************************
				Home Slider End
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
						<div id="tg-servicesslider" class="tg-servicesslider tg-services">
                            <?php foreach($services as $service): ?>
							<div class="item tg-service">
								<span class="tg-seviceicon">
									<i class="<?php  echo $service->icon ?>"></i>
								</span>
								<div class="tg-heading">
									<h4><a href="<?php echo base_url() ?>services/<?php echo $service->slug ?>"><?php echo $service->title ?></a></h4>
								</div>
								<div class="tg-description">
<!--									<p>--><?php //echo $service->content ?><!--</p>-->
									<p><?php echo substr($service->short_description, 0, 100);  ?>...</p>
								</div>
							</div>
                            <?php endforeach; ?>

<!--							<div class="item tg-service">-->
<!--								<span class="tg-seviceicon">-->
<!--									<i class="fa fa-line-chart"></i>-->
<!--								</span>-->
<!--								<div class="tg-heading">-->
<!--									<h4><a href="#">Financial planning</a></h4>-->
<!--								</div>-->
<!--								<div class="tg-description">-->
<!--									<p>Consectetur adipisicing elit sed doid apor incididunt ut labore et dolore magna aliqua.</p>-->
<!--								</div>-->
<!--							</div>-->
<!--                            -->
<!--                            -->
<!--							<div class="item tg-service">-->
<!--								<span class="tg-seviceicon">-->
<!--									<i class="fa fa-trophy"></i>-->
<!--								</span>-->
<!--								<div class="tg-heading">-->
<!--									<h4><a href="#">investment banking</a></h4>-->
<!--								</div>-->
<!--								<div class="tg-description">-->
<!--									<p>Consectetur adipisicing elit sed doid apor incididunt ut labore et dolore magna aliqua.</p>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="item tg-service">-->
<!--								<span class="tg-seviceicon">-->
<!--									<i class="fa fa-balance-scale"></i>-->
<!--								</span>-->
<!--								<div class="tg-heading">-->
<!--									<h4><a href="#">Wealth management</a></h4>-->
<!--								</div>-->
<!--								<div class="tg-description">-->
<!--									<p>Consectetur adipisicing elit sed doid apor incididunt ut labore et dolore magna aliqua.</p>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="item tg-service">-->
<!--								<span class="tg-seviceicon">-->
<!--									<i class="fa fa-line-chart"></i>-->
<!--								</span>-->
<!--								<div class="tg-heading">-->
<!--									<h4><a href="#">Financial planning</a></h4>-->
<!--								</div>-->
<!--								<div class="tg-description">-->
<!--									<p>Consectetur adipisicing elit sed doid apor incididunt ut labore et dolore magna aliqua.</p>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="item tg-service">-->
<!--								<span class="tg-seviceicon">-->
<!--									<i class="fa fa-trophy"></i>-->
<!--								</span>-->
<!--								<div class="tg-heading">-->
<!--									<h4><a href="#">investment banking</a></h4>-->
<!--								</div>-->
<!--								<div class="tg-description">-->
<!--									<p>Consectetur adipisicing elit sed doid apor incididunt ut labore et dolore magna aliqua.</p>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="item tg-service">-->
<!--								<span class="tg-seviceicon">-->
<!--									<i class="fa fa-balance-scale"></i>-->
<!--								</span>-->
<!--								<div class="tg-heading">-->
<!--									<h4><a href="#">Wealth management</a></h4>-->
<!--								</div>-->
<!--								<div class="tg-description">-->
<!--									<p>Consectetur adipisicing elit sed doid apor incididunt ut labore et dolore magna aliqua.</p>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="item tg-service">-->
<!--								<span class="tg-seviceicon">-->
<!--									<i class="fa fa-line-chart"></i>-->
<!--								</span>-->
<!--								<div class="tg-heading">-->
<!--									<h4><a href="#">Financial planning</a></h4>-->
<!--								</div>-->
<!--								<div class="tg-description">-->
<!--									<p>Consectetur adipisicing elit sed doid apor incididunt ut labore et dolore magna aliqua.</p>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="item tg-service">-->
<!--								<span class="tg-seviceicon">-->
<!--									<i class="fa fa-trophy"></i>-->
<!--								</span>-->
<!--								<div class="tg-heading">-->
<!--									<h4><a href="#">investment banking</a></h4>-->
<!--								</div>-->
<!--								<div class="tg-description">-->
<!--									<p>Consectetur adipisicing elit sed doid apor incididunt ut labore et dolore magna aliqua.</p>-->
<!--								</div>-->
<!--							</div>-->
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					What We Offers End
			*************************************-->




			<!--************************************
					Video Why Choose Us? Start
			*************************************-->
<!--			<section class="tg-bglight tg-haslayout">-->
<!--				<div class="col-sm-6">-->
<!--					<div class="row">-->
<!--						<div class="tg-videosection">-->
<!--							<figure>-->
<!--								<img src="images/img-01.jpg" alt="image description">-->
<!--								<figcaption>-->
<!--									<a class="tg-btnplay" href="../../watch.html?v=TpMJ2XlzO-0" data-rel="prettyPhoto[iframe]">-->
<!--										<i class="fa fa-play"></i>-->
<!--									</a>-->
<!--									<h2>our business Introduction</h2>-->
<!--								</figcaption>-->
<!--							</figure>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="col-sm-6">-->
<!--					<div class="tg-whychooseus">-->
<!--						<div class="tg-sectionhead">-->
<!--							<div class="tg-sectiontitle">-->
<!--								<h2>best in town</h2>-->
<!--								<h3>why choose us?</h3>-->
<!--							</div>-->
<!--							<div class="tg-description">-->
<!--								<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore iqua Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div id="tg-ourskill" class="tg-ourskill tg-skillgroup">-->
<!--							<div class="tg-skill">-->
<!--								<h4>FINANCIAL ANALYSIS</h4>-->
<!--								<div class="tg-skillholder" data-percent="95%">-->
<!--									<div class="tg-skillbar">-->
<!--										<h5>95%</h5>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="tg-skill tg-active">-->
<!--								<h4>INVESTMENTS</h4>-->
<!--								<div class="tg-skillholder" data-percent="80%">-->
<!--									<div class="tg-skillbar">-->
<!--										<h5>80%</h5>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="tg-skill">-->
<!--								<h4>FINANCIAL PLANNER</h4>-->
<!--								<div class="tg-skillholder" data-percent="50%">-->
<!--									<div class="tg-skillbar">-->
<!--										<h5>50%</h5>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="tg-skill">-->
<!--								<h4>BUSINESS SUPPORT</h4>-->
<!--								<div class="tg-skillholder" data-percent="90%">-->
<!--									<div class="tg-skillbar">-->
<!--										<h5>90%</h5>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</section>-->
			<!--************************************
					Video Why Choose Us? End
			*************************************-->
			<!--************************************
					Perfessional Team Start
			*************************************-->
<!--			<section class="tg-main-section tg-haslayout">-->
<!--				<div class="container">-->
<!--					<div class="row">-->
<!--						<div class="col-lg-offset-2 col-lg-8 col-md-offset-1 col-md-10 col-sm-offset-0 col-sm-12 col-xs-12">-->
<!--							<div class="tg-sectionhead">-->
<!--								<div class="tg-sectiontitle">-->
<!--									<h2>Meet our</h2>-->
<!--									<h3>Professional Team</h3>-->
<!--								</div>-->
<!--								<div class="tg-description">-->
<!--									<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div id="tg-teamslider" class="tg-teamslider tg-teammembers">-->
<!--							<div class="item tg-member">-->
<!--								<figure>-->
<!--									<img src="images/team/img-01.jpg" alt="image description">-->
<!--									<figcaption>-->
<!--										<ul class="tg-socialprofilelinks">-->
<!--											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
<!--											<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--											<li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
<!--										</ul>-->
<!--									</figcaption>-->
<!--								</figure>-->
<!--								<div class="tg-memberinfo">-->
<!--									<div class="tg-membername">-->
<!--										<h4><a href="#">Dwight Billick</a></h4>-->
<!--									</div>-->
<!--									<div class="tg-memberdesignation">-->
<!--										<span><a href="#">Financial Planner</a></span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="item tg-member">-->
<!--								<figure>-->
<!--									<img src="images/team/img-02.jpg" alt="image description">-->
<!--									<figcaption>-->
<!--										<ul class="tg-socialprofilelinks">-->
<!--											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
<!--											<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--											<li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
<!--										</ul>-->
<!--									</figcaption>-->
<!--								</figure>-->
<!--								<div class="tg-memberinfo">-->
<!--									<div class="tg-membername">-->
<!--										<h4><a href="#">Leonia Murch</a></h4>-->
<!--									</div>-->
<!--									<div class="tg-memberdesignation">-->
<!--										<span><a href="#">Financial Planner</a></span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="item tg-member">-->
<!--								<figure>-->
<!--									<img src="images/team/img-03.jpg" alt="image description">-->
<!--									<figcaption>-->
<!--										<ul class="tg-socialprofilelinks">-->
<!--											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
<!--											<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--											<li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
<!--										</ul>-->
<!--									</figcaption>-->
<!--								</figure>-->
<!--								<div class="tg-memberinfo">-->
<!--									<div class="tg-membername">-->
<!--										<h4><a href="#">Milford Mcwilliam</a></h4>-->
<!--									</div>-->
<!--									<div class="tg-memberdesignation">-->
<!--										<span><a href="#">Financial Planner</a></span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="item tg-member">-->
<!--								<figure>-->
<!--									<img src="images/team/img-04.jpg" alt="image description">-->
<!--									<figcaption>-->
<!--										<ul class="tg-socialprofilelinks">-->
<!--											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
<!--											<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--											<li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
<!--										</ul>-->
<!--									</figcaption>-->
<!--								</figure>-->
<!--								<div class="tg-memberinfo">-->
<!--									<div class="tg-membername">-->
<!--										<h4><a href="#">Jessenia Ly</a></h4>-->
<!--									</div>-->
<!--									<div class="tg-memberdesignation">-->
<!--										<span><a href="#">Financial Planner</a></span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="item tg-member">-->
<!--								<figure>-->
<!--									<img src="images/team/img-01.jpg" alt="image description">-->
<!--									<figcaption>-->
<!--										<ul class="tg-socialprofilelinks">-->
<!--											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
<!--											<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--											<li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
<!--										</ul>-->
<!--									</figcaption>-->
<!--								</figure>-->
<!--								<div class="tg-memberinfo">-->
<!--									<div class="tg-membername">-->
<!--										<h4><a href="#">Dwight Billick</a></h4>-->
<!--									</div>-->
<!--									<div class="tg-memberdesignation">-->
<!--										<span><a href="#">Financial Planner</a></span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="item tg-member">-->
<!--								<figure>-->
<!--									<img src="images/team/img-02.jpg" alt="image description">-->
<!--									<figcaption>-->
<!--										<ul class="tg-socialprofilelinks">-->
<!--											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
<!--											<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--											<li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
<!--										</ul>-->
<!--									</figcaption>-->
<!--								</figure>-->
<!--								<div class="tg-memberinfo">-->
<!--									<div class="tg-membername">-->
<!--										<h4><a href="#">Leonia Murch</a></h4>-->
<!--									</div>-->
<!--									<div class="tg-memberdesignation">-->
<!--										<span><a href="#">Financial Planner</a></span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="item tg-member">-->
<!--								<figure>-->
<!--									<img src="images/team/img-03.jpg" alt="image description">-->
<!--									<figcaption>-->
<!--										<ul class="tg-socialprofilelinks">-->
<!--											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
<!--											<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--											<li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
<!--										</ul>-->
<!--									</figcaption>-->
<!--								</figure>-->
<!--								<div class="tg-memberinfo">-->
<!--									<div class="tg-membername">-->
<!--										<h4><a href="#">Milford Mcwilliam</a></h4>-->
<!--									</div>-->
<!--									<div class="tg-memberdesignation">-->
<!--										<span><a href="#">Financial Planner</a></span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="item tg-member">-->
<!--								<figure>-->
<!--									<img src="images/team/img-04.jpg" alt="image description">-->
<!--									<figcaption>-->
<!--										<ul class="tg-socialprofilelinks">-->
<!--											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
<!--											<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--											<li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
<!--										</ul>-->
<!--									</figcaption>-->
<!--								</figure>-->
<!--								<div class="tg-memberinfo">-->
<!--									<div class="tg-membername">-->
<!--										<h4><a href="#">Jessenia Ly</a></h4>-->
<!--									</div>-->
<!--									<div class="tg-memberdesignation">-->
<!--										<span><a href="#">Financial Planner</a></span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="item tg-member">-->
<!--								<figure>-->
<!--									<img src="images/team/img-01.jpg" alt="image description">-->
<!--									<figcaption>-->
<!--										<ul class="tg-socialprofilelinks">-->
<!--											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
<!--											<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--											<li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
<!--										</ul>-->
<!--									</figcaption>-->
<!--								</figure>-->
<!--								<div class="tg-memberinfo">-->
<!--									<div class="tg-membername">-->
<!--										<h4><a href="#">Dwight Billick</a></h4>-->
<!--									</div>-->
<!--									<div class="tg-memberdesignation">-->
<!--										<span><a href="#">Financial Planner</a></span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="item tg-member">-->
<!--								<figure>-->
<!--									<img src="images/team/img-02.jpg" alt="image description">-->
<!--									<figcaption>-->
<!--										<ul class="tg-socialprofilelinks">-->
<!--											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
<!--											<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--											<li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
<!--										</ul>-->
<!--									</figcaption>-->
<!--								</figure>-->
<!--								<div class="tg-memberinfo">-->
<!--									<div class="tg-membername">-->
<!--										<h4><a href="#">Leonia Murch</a></h4>-->
<!--									</div>-->
<!--									<div class="tg-memberdesignation">-->
<!--										<span><a href="#">Financial Planner</a></span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="item tg-member">-->
<!--								<figure>-->
<!--									<img src="images/team/img-03.jpg" alt="image description">-->
<!--									<figcaption>-->
<!--										<ul class="tg-socialprofilelinks">-->
<!--											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
<!--											<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--											<li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
<!--										</ul>-->
<!--									</figcaption>-->
<!--								</figure>-->
<!--								<div class="tg-memberinfo">-->
<!--									<div class="tg-membername">-->
<!--										<h4><a href="#">Milford Mcwilliam</a></h4>-->
<!--									</div>-->
<!--									<div class="tg-memberdesignation">-->
<!--										<span><a href="#">Financial Planner</a></span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="item tg-member">-->
<!--								<figure>-->
<!--									<img src="images/team/img-04.jpg" alt="image description">-->
<!--									<figcaption>-->
<!--										<ul class="tg-socialprofilelinks">-->
<!--											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
<!--											<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--											<li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
<!--										</ul>-->
<!--									</figcaption>-->
<!--								</figure>-->
<!--								<div class="tg-memberinfo">-->
<!--									<div class="tg-membername">-->
<!--										<h4><a href="#">Jessenia Ly</a></h4>-->
<!--									</div>-->
<!--									<div class="tg-memberdesignation">-->
<!--										<span><a href="#">Financial Planner</a></span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</section>-->
			<!--************************************
					Perfessional Team End
			*************************************-->



			<!--************************************
					Statistics Start
			*************************************-->
			<section class="tg-haslayout tg-parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-01.jpg">
				<div class="container">
					<div class="row">
						<div class="tg-statistics">
							<div class="tg-statistic tg-goals">
								<span class="icon-Icon1 tg-icon"></span>
								<div class="tg-namecount">
									<h2><span class="tg-statistic-count" data-from="0" data-to="10" data-speed="8000" data-refresh-interval="50">1900+</span></h2>
									<h3>Happy customers</h3>
								</div>
							</div>
							<div class="tg-statistic tg-activeplayers">
								<span class="icon-Icon2 tg-icon"></span>
								<div class="tg-namecount">
									<h2><span class="tg-statistic-count" data-from="0" data-to="20" data-speed="8000" data-refresh-interval="50">967</span></h2>
									<h3>Successful Deals</h3>
								</div>
							</div>
							<div class="tg-statistic tg-activeteams">
								<span class="icon-Icon3 tg-icon"></span>
								<div class="tg-namecount">
									<h2><span class="tg-statistic-count" data-from="0" data-to="10" data-speed="8000" data-refresh-interval="50">1208</span></h2>
									<h3>awards earned</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Statistics End
			*************************************-->
			<!--************************************
					Projects Start
			*************************************-->
<!--			<section class="tg-main-section tg-haslayout">-->
<!--				<div class="container">-->
<!--					<div class="row">-->
<!--						<div class="col-lg-offset-2 col-lg-8 col-md-offset-1 col-md-10 col-sm-offset-0 col-sm-12 col-xs-12">-->
<!--							<div class="tg-sectionhead">-->
<!--								<div class="tg-sectiontitle">-->
<!--									<h2>some of our</h2>-->
<!--									<h3>Featured Projects</h3>-->
<!--								</div>-->
<!--								<div class="tg-description">-->
<!--									<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="tg-themetabs">-->
<!--							<nav class="tg-themetabnav">-->
<!--								<ul role="tablist">-->
<!--									<li role="presentation" class="active"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">All</a></li>-->
<!--									<li role="presentation"><a href="#investment" aria-controls="investment" role="tab" data-toggle="tab">Investment</a></li>-->
<!--									<li role="presentation"><a href="#taxes" aria-controls="taxes" role="tab" data-toggle="tab">Taxes</a></li>-->
<!--									<li role="presentation"><a href="#planning" aria-controls="planning" role="tab" data-toggle="tab">Planning</a></li>-->
<!--									<li role="presentation"><a href="#financial" aria-controls="financial" role="tab" data-toggle="tab">Financial</a></li>-->
<!--								</ul>-->
<!--							</nav>-->
<!--							<div class="tab-content tg-themetabcontent">-->
<!--								<div role="tabpanel" class="tab-pane in active" id="all">-->
<!--									<div id="tg-projectsliderall" class="tg-projectsliderall tg-projects">-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-01.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-02.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-03.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-04.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-05.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-01.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-02.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-03.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-04.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-05.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-01.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-02.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-03.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-04.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-05.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--									</div>-->
<!--								</div>-->
<!--								<div role="tabpanel" class="tab-pane" id="investment">-->
<!--									<div id="tg-projectsliderinvestment" class="tg-projectsliderinvestment tg-projects">-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-01.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-02.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-03.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-04.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-01.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-02.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-03.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-05.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--									</div>-->
<!--								</div>-->
<!--								<div role="tabpanel" class="tab-pane" id="taxes">-->
<!--									<div id="tg-projectslidertaxes" class="tg-projectslidertaxes tg-projects">-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-04.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-05.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-01.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-02.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-03.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-04.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-05.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-01.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-02.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-03.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--									</div>-->
<!--								</div>-->
<!--								<div role="tabpanel" class="tab-pane" id="planning">-->
<!--									<div id="tg-projectsliderplanning" class="tg-projectsliderplanning tg-projects">-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-01.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-02.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-04.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-05.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-03.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-01.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-02.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--									</div>-->
<!--								</div>-->
<!--								<div role="tabpanel" class="tab-pane" id="financial">-->
<!--									<div id="tg-projectsliderfinancial" class="tg-projectsliderfinancial tg-projects">-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-01.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-02.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-03.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-04.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-05.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--										<div class="item tg-project">-->
<!--											<figure>-->
<!--												<img src="images/projects/img-03.jpg" alt="image description">-->
<!--												<figcaption>-->
<!--													<h4><a href="#">sicing elit sed doi tempor</a></h4>-->
<!--												</figcaption>-->
<!--											</figure>-->
<!--										</div>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</section>-->
			<!--************************************
					Projects End
			*************************************-->
			<!--************************************
					Request Call Back Start
			*************************************-->
			<section class="tg-haslayout tg-bglight tg-bgimage">
				<div class="container">
					<div class="row">
						<div class="tg-requestcallback">
							<div class="col-sm-3 hidden-xs">
								<figure>
									<img src="images/img-02.png" alt="image description">
								</figure>
							</div>
							<div class="col-sm-9 col-xs-12">
								<div class="tg-contentbox">
									<div class="tg-sectionhead">
										<div class="tg-sectiontitle">
											<h2>we are always ready</h2>
											<h3>request a call back</h3>
										</div>
										<div class="tg-description">
											<p>Give us a call back or message in the message box below so that we discuss business terms and help your business take a spring forward</p>
										</div>
									</div>
									<form id="tg-formtheme" class="tg-formtheme" action="#" enctype="text/plain">
										<fieldset>
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control" name="" placeholder="Your Name">
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control" name="" placeholder="Your Number">
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control" name="" placeholder="Your Email">
													</div>
												</div>
												<div class="col-lg-9 col-md-8 col-sm-7">
													<div class="form-group">
														<div class="tg-select">
															<select>
																<option>I would like to discuss</option>
																<option>I would like to discuss</option>
																<option>I would like to discuss</option>
																<option>I would like to discuss</option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-lg-3 col-md-4 col-sm-5">
													<div class="form-group">
														<button type="button" class="tg-btn tg-btn-lg"><span>i’m waiting</span></button>
													</div>
												</div>
											</div>
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Request Call Back End
			*************************************-->
			<!--************************************
					Testimonials Start
			*************************************-->
<!--			<section class="tg-main-section tg-haslayout">-->
<!--				<div class="container">-->
<!--					<div class="row">-->
<!--						<div class="col-lg-offset-2 col-lg-8 col-md-offset-1 col-md-10 col-sm-offset-0 col-sm-12 col-xs-12">-->
<!--							<div class="tg-sectionhead">-->
<!--								<div class="tg-sectiontitle">-->
<!--									<h2>thoughts of our</h2>-->
<!--									<h3>Satisfied customers</h3>-->
<!--								</div>-->
<!--								<div class="tg-description">-->
<!--									<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div id="tg-testimonialsslider" class="tg-testimonialsslider tg-clientfeedback">-->
<!--							<div class="item tg-testimonial">-->
<!--								<blockquote>-->
<!--									<q>Tempor incididunt ut labore et dolore magna aliqua enim adiat minim sitaie veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.</q>-->
<!--								</blockquote>-->
<!--								<div class="tg-clientinfo">-->
<!--									<figure><a href="#"><img src="images/thumbs/img-01.jpg" alt="image description"></a></figure>-->
<!--									<div class="tg-namecountery">-->
<!--										<h4><a href="#">Christi jenny</a></h4>-->
<!--										<span>Manchester</span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="item tg-testimonial">-->
<!--								<blockquote>-->
<!--									<q>Tempor incididunt ut labore et dolore magna aliqua enim adiat minim sitaie veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.</q>-->
<!--								</blockquote>-->
<!--								<div class="tg-clientinfo">-->
<!--									<figure><a href="#"><img src="images/thumbs/img-02.jpg" alt="image description"></a></figure>-->
<!--									<div class="tg-namecountery">-->
<!--										<h4><a href="#">Milford smith</a></h4>-->
<!--										<span>Manchester</span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="item tg-testimonial">-->
<!--								<blockquote>-->
<!--									<q>Tempor incididunt ut labore et dolore magna aliqua enim adiat minim sitaie veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.</q>-->
<!--								</blockquote>-->
<!--								<div class="tg-clientinfo">-->
<!--									<figure><a href="#"><img src="images/thumbs/img-01.jpg" alt="image description"></a></figure>-->
<!--									<div class="tg-namecountery">-->
<!--										<h4><a href="#">Christi jenny</a></h4>-->
<!--										<span>Manchester</span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="item tg-testimonial">-->
<!--								<blockquote>-->
<!--									<q>Tempor incididunt ut labore et dolore magna aliqua enim adiat minim sitaie veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.</q>-->
<!--								</blockquote>-->
<!--								<div class="tg-clientinfo">-->
<!--									<figure><a href="#"><img src="images/thumbs/img-02.jpg" alt="image description"></a></figure>-->
<!--									<div class="tg-namecountery">-->
<!--										<h4><a href="#">Milford smith</a></h4>-->
<!--										<span>Manchester</span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="item tg-testimonial">-->
<!--								<blockquote>-->
<!--									<q>Tempor incididunt ut labore et dolore magna aliqua enim adiat minim sitaie veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.</q>-->
<!--								</blockquote>-->
<!--								<div class="tg-clientinfo">-->
<!--									<figure><a href="#"><img src="images/thumbs/img-01.jpg" alt="image description"></a></figure>-->
<!--									<div class="tg-namecountery">-->
<!--										<h4><a href="#">Christi jenny</a></h4>-->
<!--										<span>Manchester</span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="item tg-testimonial">-->
<!--								<blockquote>-->
<!--									<q>Tempor incididunt ut labore et dolore magna aliqua enim adiat minim sitaie veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.</q>-->
<!--								</blockquote>-->
<!--								<div class="tg-clientinfo">-->
<!--									<figure><a href="#"><img src="images/thumbs/img-02.jpg" alt="image description"></a></figure>-->
<!--									<div class="tg-namecountery">-->
<!--										<h4><a href="#">Milford smith</a></h4>-->
<!--										<span>Manchester</span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</section>-->
			<!--************************************
					Testimonials End
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

