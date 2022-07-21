
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
								<h1>contact us</h1>
							</div>
							<ol class="tg-breadcrumb">
								<li><a href="#"><i class="fa fa-home"></i></a></li>
								<li class="tg-active">contact us</li>
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
					Get In Touch Start
			*************************************-->
			<section class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-lg-offset-2 col-lg-8 col-md-offset-1 col-md-10 col-sm-offset-0 col-sm-12 col-xs-12">
							<div class="tg-sectionhead">
								<div class="tg-sectiontitle">
									<h2>let’s talk</h2>
									<h3>Get in Touch</h3>
								</div>
								<div class="tg-description">
									<p>Leave us a message now</p>
								</div>
							</div>
						</div>
						<form class="tg-themeform">
							<fieldset>
								<div class="col-sm-4">
									<div class="form-group">
										<input type="text" class="form-control" name="name" placeholder="Name">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<input type="text" class="form-control" name="number" placeholder="Number">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<input type="email" class="form-control" name="email" placeholder="Email">
									</div>
								</div>
								<div class="col-sm-12 col-xs-12">
									<div class="form-group">
										<textarea placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-sm-12 col-xs-12">
									<button type="button" class="tg-btn"><span>i’m waiting</span></button>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</section>
			<!--************************************
					Get In Touch End
			*************************************-->
			<!--************************************
					Location Map Start
			*************************************-->
			<!--************************************
					Location Map End
			*************************************-->
			<!--************************************
					Active Location Start
			*************************************-->
			<section class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-lg-offset-2 col-lg-8 col-md-offset-1 col-md-10 col-sm-offset-0 col-sm-12 col-xs-12">
							<div class="tg-sectionhead">
								<div class="tg-sectiontitle">
									<h2>some of our</h2>
									<h3>active Location</h3>
								</div>
								<div class="tg-description">
									<p>Our office location</p>
								</div>
							</div>
						</div>
						<div id="tg-addressslider" class="tg-addressslider">
							<div class="item">
								<div class="tg-addressbox">
									<div class="tg-map">
										<div class="tg-getdirection">
											<a class="tg-btngetdirection" href="#">
												<i class="fa fa-paper-plane"></i>
											</a>
										</div>
										<div id="tg-addressmapone" class="tg-addressmap"></div>
									</div>
									<div class="tg-addresscontent">
										<h4>HEAD OFFICE</h4>
										<ul class="tg-contactinfo">
											<li>
												<i class="fa fa-home"></i>
												<address>
                                                    <?php echo $company_details->location ?>,
                                                    <?php echo $company_details->address ?>
                                                </address>
											</li>
											<li>
												<i class="fa fa-envelope-o"></i>
												<span><a href="mailto:<?php echo $company_details->email ?>"><?php echo $company_details->email ?></a></span>
											</li>
											<li>
												<i class="fa fa-phone"></i>
                                                <span><a href="tel:<?php echo $company_details->cell ?>"><?php echo $company_details->cell ?></a></span>
											</li>
										</ul>
									</div>
								</div>
							</div>

<!--							<div class="item">-->
<!--								<div class="tg-addressbox">-->
<!--									<div class="tg-map">-->
<!--										<div class="tg-getdirection">-->
<!--											<a class="tg-btngetdirection" href="#">-->
<!--												<i class="fa fa-paper-plane"></i>-->
<!--											</a>-->
<!--										</div>-->
<!--										<div id="tg-addressmaptwo" class="tg-addressmap"></div>-->
<!--									</div>-->
<!--									<div class="tg-addresscontent">-->
<!--										<h4>Prestwich branch</h4>-->
<!--										<ul class="tg-contactinfo">-->
<!--											<li>-->
<!--												<i class="fa fa-home"></i>-->
<!--												<address>123 Eccles Old Road, Salford Road, East London, Uk, M6 7AF</address>-->
<!--											</li>-->
<!--											<li>-->
<!--												<i class="fa fa-envelope-o"></i>-->
<!--												<span><a href="mailto:support@yourdomain.com">support@yourdomain.com</a></span>-->
<!--											</li>-->
<!--											<li>-->
<!--												<i class="fa fa-phone"></i>-->
<!--												<span>+44 123 456 788 - 9</span>-->
<!--											</li>-->
<!--										</ul>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->

<!--							<div class="item">-->
<!--								<div class="tg-addressbox">-->
<!--									<div class="tg-map">-->
<!--										<div class="tg-getdirection">-->
<!--											<a class="tg-btngetdirection" href="#">-->
<!--												<i class="fa fa-paper-plane"></i>-->
<!--											</a>-->
<!--										</div>-->
<!--										<div id="tg-addressmapthree" class="tg-addressmap"></div>-->
<!--									</div>-->
<!--									<div class="tg-addresscontent">-->
<!--										<h4>Newyork Branch</h4>-->
<!--										<ul class="tg-contactinfo">-->
<!--											<li>-->
<!--												<i class="fa fa-home"></i>-->
<!--												<address>123 Eccles Old Road, Salford Road, East London, Uk, M6 7AF</address>-->
<!--											</li>-->
<!--											<li>-->
<!--												<i class="fa fa-envelope-o"></i>-->
<!--												<span><a href="mailto:support@yourdomain.com">support@yourdomain.com</a></span>-->
<!--											</li>-->
<!--											<li>-->
<!--												<i class="fa fa-phone"></i>-->
<!--												<span>+44 123 456 788 - 9</span>-->
<!--											</li>-->
<!--										</ul>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="item">-->
<!--								<div class="tg-addressbox">-->
<!--									<div class="tg-map">-->
<!--										<div class="tg-getdirection">-->
<!--											<a class="tg-btngetdirection" href="#">-->
<!--												<i class="fa fa-paper-plane"></i>-->
<!--											</a>-->
<!--										</div>-->
<!--										<div id="tg-addressmapone" class="tg-addressmap"></div>-->
<!--									</div>-->
<!--									<div class="tg-addresscontent">-->
<!--										<h4>HEAD OFFICE</h4>-->
<!--										<ul class="tg-contactinfo">-->
<!--											<li>-->
<!--												<i class="fa fa-home"></i>-->
<!--												<address>123 Eccles Old Road, Salford Road, East London, Uk, M6 7AF</address>-->
<!--											</li>-->
<!--											<li>-->
<!--												<i class="fa fa-envelope-o"></i>-->
<!--												<span><a href="mailto:support@yourdomain.com">support@yourdomain.com</a></span>-->
<!--											</li>-->
<!--											<li>-->
<!--												<i class="fa fa-phone"></i>-->
<!--												<span>+44 123 456 788 - 9</span>-->
<!--											</li>-->
<!--										</ul>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="item">-->
<!--								<div class="tg-addressbox">-->
<!--									<div class="tg-map">-->
<!--										<div class="tg-getdirection">-->
<!--											<a class="tg-btngetdirection" href="#">-->
<!--												<i class="fa fa-paper-plane"></i>-->
<!--											</a>-->
<!--										</div>-->
<!--										<div id="tg-addressmaptwo" class="tg-addressmap"></div>-->
<!--									</div>-->
<!--									<div class="tg-addresscontent">-->
<!--										<h4>Prestwich branch</h4>-->
<!--										<ul class="tg-contactinfo">-->
<!--											<li>-->
<!--												<i class="fa fa-home"></i>-->
<!--												<address>123 Eccles Old Road, Salford Road, East London, Uk, M6 7AF</address>-->
<!--											</li>-->
<!--											<li>-->
<!--												<i class="fa fa-envelope-o"></i>-->
<!--												<span><a href="mailto:support@yourdomain.com">support@yourdomain.com</a></span>-->
<!--											</li>-->
<!--											<li>-->
<!--												<i class="fa fa-phone"></i>-->
<!--												<span>+44 123 456 788 - 9</span>-->
<!--											</li>-->
<!--										</ul>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="item">-->
<!--								<div class="tg-addressbox">-->
<!--									<div class="tg-map">-->
<!--										<div class="tg-getdirection">-->
<!--											<a class="tg-btngetdirection" href="#">-->
<!--												<i class="fa fa-paper-plane"></i>-->
<!--											</a>-->
<!--										</div>-->
<!--										<div id="tg-addressmapthree" class="tg-addressmap"></div>-->
<!--									</div>-->
<!--									<div class="tg-addresscontent">-->
<!--										<h4>Newyork Branch</h4>-->
<!--										<ul class="tg-contactinfo">-->
<!--											<li>-->
<!--												<i class="fa fa-home"></i>-->
<!--												<address>123 Eccles Old Road, Salford Road, East London, Uk, M6 7AF</address>-->
<!--											</li>-->
<!--											<li>-->
<!--												<i class="fa fa-envelope-o"></i>-->
<!--												<span><a href="mailto:support@yourdomain.com">support@yourdomain.com</a></span>-->
<!--											</li>-->
<!--											<li>-->
<!--												<i class="fa fa-phone"></i>-->
<!--												<span>+44 123 456 788 - 9</span>-->
<!--											</li>-->
<!--										</ul>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="item">-->
<!--								<div class="tg-addressbox">-->
<!--									<div class="tg-map">-->
<!--										<div class="tg-getdirection">-->
<!--											<a class="tg-btngetdirection" href="#">-->
<!--												<i class="fa fa-paper-plane"></i>-->
<!--											</a>-->
<!--										</div>-->
<!--										<div id="tg-addressmapone" class="tg-addressmap"></div>-->
<!--									</div>-->
<!--									<div class="tg-addresscontent">-->
<!--										<h4>HEAD OFFICE</h4>-->
<!--										<ul class="tg-contactinfo">-->
<!--											<li>-->
<!--												<i class="fa fa-home"></i>-->
<!--												<address>123 Eccles Old Road, Salford Road, East London, Uk, M6 7AF</address>-->
<!--											</li>-->
<!--											<li>-->
<!--												<i class="fa fa-envelope-o"></i>-->
<!--												<span><a href="mailto:support@yourdomain.com">support@yourdomain.com</a></span>-->
<!--											</li>-->
<!--											<li>-->
<!--												<i class="fa fa-phone"></i>-->
<!--												<span>+44 123 456 788 - 9</span>-->
<!--											</li>-->
<!--										</ul>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="item">-->
<!--								<div class="tg-addressbox">-->
<!--									<div class="tg-map">-->
<!--										<div class="tg-getdirection">-->
<!--											<a class="tg-btngetdirection" href="#">-->
<!--												<i class="fa fa-paper-plane"></i>-->
<!--											</a>-->
<!--										</div>-->
<!--										<div id="tg-addressmaptwo" class="tg-addressmap"></div>-->
<!--									</div>-->
<!--									<div class="tg-addresscontent">-->
<!--										<h4>Prestwich branch</h4>-->
<!--										<ul class="tg-contactinfo">-->
<!--											<li>-->
<!--												<i class="fa fa-home"></i>-->
<!--												<address>123 Eccles Old Road, Salford Road, East London, Uk, M6 7AF</address>-->
<!--											</li>-->
<!--											<li>-->
<!--												<i class="fa fa-envelope-o"></i>-->
<!--												<span><a href="mailto:support@yourdomain.com">support@yourdomain.com</a></span>-->
<!--											</li>-->
<!--											<li>-->
<!--												<i class="fa fa-phone"></i>-->
<!--												<span>+44 123 456 788 - 9</span>-->
<!--											</li>-->
<!--										</ul>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="item">-->
<!--								<div class="tg-addressbox">-->
<!--									<div class="tg-map">-->
<!--										<div class="tg-getdirection">-->
<!--											<a class="tg-btngetdirection" href="#">-->
<!--												<i class="fa fa-paper-plane"></i>-->
<!--											</a>-->
<!--										</div>-->
<!--										<div id="tg-addressmapthree" class="tg-addressmap"></div>-->
<!--									</div>-->
<!--									<div class="tg-addresscontent">-->
<!--										<h4>Newyork Branch</h4>-->
<!--										<ul class="tg-contactinfo">-->
<!--											<li>-->
<!--												<i class="fa fa-home"></i>-->
<!--												<address>123 Eccles Old Road, Salford Road, East London, Uk, M6 7AF</address>-->
<!--											</li>-->
<!--											<li>-->
<!--												<i class="fa fa-envelope-o"></i>-->
<!--												<span><a href="mailto:support@yourdomain.com">support@yourdomain.com</a></span>-->
<!--											</li>-->
<!--											<li>-->
<!--												<i class="fa fa-phone"></i>-->
<!--												<span>+44 123 456 788 - 9</span>-->
<!--											</li>-->
<!--										</ul>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
					</div>
				</div>
			</section>
			<!--************************************
					Active Location End
			*************************************-->

