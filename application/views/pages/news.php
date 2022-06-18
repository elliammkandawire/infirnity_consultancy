
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
                            <h1>New</h1>
                        </div>
                        <ol class="tg-breadcrumb">
                            <li><a href="#"><i class="fa fa-home"></i></a></li>
                            <li class="tg-active">Latest News</li>
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
                                <h2>Some of our</h2>
                                <h3>latest news</h3>
                            </div>
                            <div class="tg-description">
                                <p>Latest News.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tg-newsposts">

                        <?php  foreach ($news as $article): ?>
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="tg-news">
                                <figure>
                                    <img src="images/news/img-01.jpg" alt="image description">
                                    <figcaption>
                                        <a class="tg-btnplusicon" href="#"><i class="fa fa-link"></i></a>
                                    </figcaption>
                                </figure>
                                <div class="tg-newscontent tg-borderstyle">
                                    <ul class="tg-newsmetadata">
                                        <li><a href="#">June 27, 2016</a></li>
                                        <li><a href="#">09:00 am</a></li>
                                        <li><a href="#"><?php echo $article->location ?></a></li>
                                    </ul>
                                    <div class="tg-newstitle">
                                        <h2><a href="<?php echo base_url() ?>news/<?php echo $article->slug ?>"><?php echo $article->title ?></a></h2>
                                    </div>
                                    <div class="tg-description">
                                        <p><?php echo substr($article->content, 0,200) ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="col-sm-12 col-xs-12">
                        <nav class="tg-pagination">
                            <ul>
                                <li class="tg-prevpage"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>...</li>
                                <li><a href="#">10</a></li>
                                <li class="tg-nextpage"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--************************************
            Main End
    *************************************-->