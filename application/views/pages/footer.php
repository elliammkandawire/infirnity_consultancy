

<!--************************************
        Footer Start
*************************************-->
<footer id="tg-footer" class="tg-footer tg-haslayout">
    <div class="tg-footertopbar tg-bglight tg-bgimage tg-shadow">
        <div class="container">
            <div class="row">
                <div class="tg-signuparea">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <span class="tg-formtitle">signup for latest updates!</span>
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <div class="row">
                            <form class="tg-formsignup">
                                <fieldset>
                                    <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <button type="submit" class="tg-btn"><span>signup</span></button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tg-footermiddlearea">
        <div class="container">
            <div class="row">
                <div class="tg-footerwidgets">
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="tg-widget tg-widgetinfo">
                            <div id="tg-footerlocation-map" class="tg-footerlocation-map"></div>
                            <h4>Head office</h4>
                            <ul class="tg-contactinfo">
                                <li>
                                    <i class="fa fa-home"></i>
                                    <address>
                                        <?php echo $company_details->location ?>,
                                        <?php echo $company_details->address ?>,
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
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="tg-widget tg-widgetusefulllinks">
                            <div class="tg-widgettitle"><h3>useful links</h3></div>
                            <ul>
                                <li><a href="#">Wealth Planning</a></li>
                                <li><a href="#">Investment Management</a></li>
                                <li><a href="#">Year-End Tax Planning</a></li>
                                <li><a href="#">Tax Advisory Services</a></li>
                                <li><a href="#">Small Business Taxes</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="tg-widget tg-widgetrecentnews">
                            <div class="tg-widgettitle"><h3>Recent News</h3></div>
                            <ul>
                                <li>
                                    <time datetime=""><a href="#"><span>04</span> Feb</a></time>
                                    <div class="tg-posdata">
                                        <h4><a href="#">Claritas dynamicus qui seqauri mutatem consum.</a></h4>
                                        <ul class="tg-postmetadata">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-clock-o"></i>
                                                    <span>24 Min Ago</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <time datetime=""><a href="#"><span>04</span> Feb</a></time>
                                    <div class="tg-posdata">
                                        <h4><a href="#">Claritas dynamicus qui seqauri mutatem consum.</a></h4>
                                        <ul class="tg-postmetadata">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-clock-o"></i>
                                                    <span>24 Min Ago</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <time datetime=""><a href="#"><span>04</span> Feb</a></time>
                                    <div class="tg-posdata">
                                        <h4><a href="#">Claritas dynamicus qui seqauri mutatem consum.</a></h4>
                                        <ul class="tg-postmetadata">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-clock-o"></i>
                                                    <span>24 Min Ago</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="tg-widget tg-widgetflicker">
                            <div class="tg-widgettitle"><h3>Flickr Widget</h3></div>
                            <ul>
                                <li><figure><a href="#"><img src="images/thumbs/img-03.jpg" alt="image description"></a></figure></li>
                                <li><figure><a href="#"><img src="images/thumbs/img-04.jpg" alt="image description"></a></figure></li>
                                <li><figure><a href="#"><img src="images/thumbs/img-05.jpg" alt="image description"></a></figure></li>
                                <li><figure><a href="#"><img src="images/thumbs/img-06.jpg" alt="image description"></a></figure></li>
                                <li><figure><a href="#"><img src="images/thumbs/img-07.jpg" alt="image description"></a></figure></li>
                                <li><figure><a href="#"><img src="images/thumbs/img-08.jpg" alt="image description"></a></figure></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tg-footerbottombar">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <span class="tg-copyright">&copy; 2016 | All Rights Reserved</span>
                    <ul class="tg-socialicons">
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                    <strong class="tg-logo"><a href="#"><img src="images/flogo.png" alt="image description"></a></strong>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--************************************
        Footer End
*************************************-->
</div>
<!--************************************
        Wrapper End
*************************************-->
<script src="<?php echo  base_url()?>js/vendor/jquery-library.js"></script>
<script src="<?php echo  base_url()?>js/vendor/bootstrap.min.js"></script>
<script src="<?php echo  base_url()?>js/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&language=en"></script>
<script src="<?php echo  base_url()?>js/owl.carousel.min.js"></script>
<script src="<?php echo  base_url()?>js/jquery.svgInject.js"></script>
<script src="<?php echo  base_url()?>js/isotope.pkgd.js"></script>
<script src="<?php echo  base_url()?>js/chartsloader.js"></script>
<script src="<?php echo  base_url()?>js/prettyPhoto.js"></script>
<script src="<?php echo  base_url()?>js/parallax.js"></script>
<script src="<?php echo  base_url()?>js/countTo.js"></script>
<script src="<?php echo  base_url()?>js/appear.js"></script>
<script src="<?php echo  base_url()?>js/gmap3.js"></script>
<script src="<?php echo  base_url()?>js/main.js"></script>
</body>
</html>