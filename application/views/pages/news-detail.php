
      <?php //echo var_dump($news_details); ?>
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
								<h1>news detail</h1>
							</div>
							<ol class="tg-breadcrumb">
								<li><a href="#"><i class="fa fa-home"></i></a></li>
								<li class="tg-active">news detail</li>
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
						<div class="col-sm-12 col-xs-12">
							<div class="tg-twocolumns">
								<div class="tg-postbuttons">
									<a class="tg-btn tg-prevpost" href="#"><span>prev post</span></a>
									<a class="tg-btn tg-nextpost" href="#"><span>next post</span></a>
								</div>
								<figure class="tg-newsimg"><img src="<?php echo base_url() ?>images/news/<?php  echo $news_details->picture ?>" alt="image description"></figure>
								<div class="row">
									<div class="col-lg-9 col-sm-7 col-xs-12 pull-right">
										<div id="tg-content" class="tg-content">
											<article class="tg-news-detail">
												<ul class="tg-newsmetadata">
													<li><a href="#"><?php echo date_format(date_create($news_details->datetime), "M d Y") ?></a></li>
													<li><a href="#"><?php echo date_format(date_create($news_details->datetime), "H:i A") ?></a></li>
													<li><a href="#"><?php echo $news_details->location  ?></a></li>
												</ul>
												<div class="tg-newstitle">
													<h2><?php  echo $news_details->title ?></h2>
												</div>
												<div class="tg-description">
													<p><?php echo $news_details->content ?></p>
												</div>
												<div class="tg-tags-social">
													<div class="tg-tags">
														<i class="fa fa-tags"></i>
														<strong>tags: </strong>
														<a href="#">fashion</a>
														<a href="#">travel</a>
														<a href="#">tech</a>
														<a href="#">sports</a>
													</div>
													<div class="tg-socialshare">
														<i class="fa fa-share-square-o"></i>
														<strong>share: </strong>
														<ul>
															<li><a href="#"><i data-iconname="on facebook" class="fa fa-facebook-f"></i></a></li>
															<li><a href="#"><i data-iconname="on twitter" class="fa fa-twitter "></i></a></li>
<!--															<li><a href="#"><i data-iconname="on pinterest" class="fa fa-pinterest-p"></i></a></li>-->
<!--															<li><a href="#"><i data-iconname="on linkedin" class="fa fa-linkedin"></i></a></li>-->
														</ul>
													</div>
												</div>
											</article>
<!--											<div id="tg-comments" class="tg-comments">-->
<!--												<div class="tg-sectiontitle">-->
<!--													<h2>User Reviews</h2>-->
<!--													<h3>03 Comments</h3>-->
<!--												</div>-->
<!--												<ul>-->
<!--													<li>-->
<!--														<div class="tg-comment">-->
<!--															<figure><a href="#"><img src="images/authors/img-01.jpg" alt="image description"></a></figure>-->
<!--															<div class="tg-commentdata">-->
<!--																<span class="tg-datetag"><time datetime="">May 3, 2016</time></span>-->
<!--																<h3>Will Mccaulley</h3>-->
<!--																<div class="tg-description">-->
<!--																	<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etire magna aliqua. Ut enim ad minim veniam.</p>-->
<!--																</div>-->
<!--																<a class="tg-btn" href="#"><span>reply</span></a>-->
<!--															</div>-->
<!--														</div>-->
<!--													</li>-->
<!--													<li>-->
<!--														<div class="tg-comment">-->
<!--															<figure><a href="#"><img src="images/authors/img-02.jpg" alt="image description"></a></figure>-->
<!--															<div class="tg-commentdata">-->
<!--																<span class="tg-datetag"><time datetime="">May 3, 2016</time></span>-->
<!--																<h3>Will Mccaulley</h3>-->
<!--																<div class="tg-description">-->
<!--																	<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etire magna aliqua. Ut enim ad minim veniam.</p>-->
<!--																</div>-->
<!--																<a class="tg-btn" href="#"><span>reply</span></a>-->
<!--															</div>-->
<!--														</div>-->
<!--													</li>-->
<!--													<li>-->
<!--														<div class="tg-comment">-->
<!--															<figure><a href="#"><img src="images/authors/img-03.jpg" alt="image description"></a></figure>-->
<!--															<div class="tg-commentdata">-->
<!--																<span class="tg-datetag"><time datetime="">May 3, 2016</time></span>-->
<!--																<h3>Will Mccaulley</h3>-->
<!--																<div class="tg-description">-->
<!--																	<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etire magna aliqua. Ut enim ad minim veniam.</p>-->
<!--																</div>-->
<!--																<a class="tg-btn" href="#"><span>reply</span></a>-->
<!--															</div>-->
<!--														</div>-->
<!--													</li>-->
<!--												</ul>-->
<!--											</div>-->
											<div class="tg-commentformarea">
												<div class="tg-sectiontitle">
													<h2>Love You Feedback</h2>
													<h3>leave your comment</h3>
												</div>
												<form class="tg-formcomment">
													<fieldset>
														<div class="row">
															<div class="col-md-4 col-sm-12 col-xs-12">
																<div class="form-group">
																	<input type="text" name="Name" class="form-control" placeholder="Name">
																</div>
															</div>
															<div class="col-md-4 col-sm-12 col-xs-12">
																<div class="form-group">
																	<input type="text" name="website" class="form-control" placeholder="Your Website">
																</div>
															</div>
															<div class="col-md-4 col-sm-12 col-xs-12">
																<div class="form-group">
																	<input type="email" name="email" class="form-control" placeholder="Email">
																</div>
															</div>
															<div class="col-sm-12 col-xs-12">
																<div class="form-group">
																	<textarea class="form-control" placeholder="Message"></textarea>
																</div>
															</div>
															<div class="col-sm-12 col-xs-12">
																<button type="submit" class="tg-btn"><span>send</span></button>
															</div>
														</div>
													</fieldset>
												</form>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-sm-5 col-xs-12">
										<aside id="tg-sidebar" class="tg-siderbar">
											<div class="tg-widget tg-widgetsearch">
												<form>
													<fieldset>
														<input type="search" name="search" class="form-control" placeholder="Search">
														<button type="submit"><i class="fa fa-search"></i></button>
													</fieldset>
												</form>
											</div>
											<div class="tg-widget tg-widgetcategory">
												<div class="tg-widgettitle"><h3>Our Services</h3></div>
												<div class="tg-widgetcontent">
													<ul>
                                                        <?php  foreach ($services as $service): ?>
														<li><a href="#"><?php echo $service->title ?></a></li>
                                                        <?php endforeach; ?>
													</ul>
												</div>
											</div>
										</aside>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!--************************************
				Main End
		*************************************-->


