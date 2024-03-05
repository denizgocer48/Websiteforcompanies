<?php $this->load->view("home-top-header"); ?>
<!-- ==== Preloader start ==== -->
<!--<div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
</div>-->
<!-- ==== Preloader end ==== -->
<!-- Header start -->
<?php $this->load->view("home-header"); ?>
<!-- Header End -->

<section class="page-title page-bg bg-opacity section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $news->title;?></h2>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">Anasayfa</a></li>
                        <li><?php echo $news->title;?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog-details-post section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-9">
                <div class="post-content">
                    <div class="blog-grids-s2 blog-content-wrapper">
                        <div class="entry-media">
                            <img src="uploads/<?php echo $news->image;?>" alt="" class="img img-responsive">
                        </div>
                        <div class="entry-header">
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="fa fa-user"></i>Post by: <a href="#">Erdal Eryılmaz</a></li>
                                    <li><i class="fa fa-calendar"></i> <a href="#"><?php echo $news->created_at;?></a></li>
                                    <li><i class="fa fa-commenting"></i> <a href="#">5 Yorum</a></li>
                                </ul>
                            </div>
                            <div class="entry-title">
                                <h2><?php echo $news->title;?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="entry-body">
                        <?php echo $news->title;?>
                    </div>
                    <div class="tag-social-share">
                        <div class="tag">
                            <?php
                            $seo = explode(",",$news->tags);
                              foreach ($seo as $seoo) {?>
                                <a href="javascript:void;">#<?php echo $seoo;?></a>
                            <?php }?>




                        </div>
                        <div class="social-share">
                            <span>Share:</span>
                            <ul class="social-links">
                                <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url("news/detay/$news->id");?>"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="comments-area">
                        <h3 class="comments-title">Comments</h3>
                        <ol class="comment-list">
                            <li>
                                <article>
                                    <div class="comment-meta">
                                        <div class="comment-author-metadata">
                                            <img src="image/user/dummy-image.jpg" alt="" class="img-circle avatar">
                                            <h4><a href="#">John Doe</a></h4>
                                            <div class="comment-metadata">
                                                <a href="#">June 4, 2017 at 08:00 AM</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ea commodo consequat...</p>
                                    </div>
                                    <div class="review">
                                        <a href="#" class="comment-reply-link">Reply</a>
                                    </div>
                                </article>

                                <ol>
                                    <li>
                                        <article>
                                            <div class="comment-meta">
                                                <div class="comment-author-metadata">
                                                    <img src="image/user/dummy-image.jpg" alt="" class="avatar">
                                                    <h4><a href="#">John Doe</a></h4>
                                                    <div class="comment-metadata">
                                                        <a href="#">June 4, 2017 at 08:00 AM</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ea commodo consequat...</p>
                                            </div>
                                            <div class="review">
                                                <a href="#" class="comment-reply-link">Reply</a>
                                            </div>
                                        </article>

                                        <ol>
                                            <li>
                                                <article>
                                                    <div class="comment-meta">
                                                        <div class="comment-author-metadata">
                                                            <img src="image/user/dummy-image.jpg" alt="" class="avatar">
                                                            <h4><a href="#">John Doe</a></h4>
                                                            <div class="comment-metadata">
                                                                <a href="#">June 4, 2017 at 08:00 AM</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-content">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ea commodo consequat...</p>
                                                    </div>
                                                    <div class="review">
                                                        <a href="#" class="comment-reply-link">Reply</a>
                                                    </div>
                                                </article>
                                            </li>
                                        </ol>

                                    </li>
                                </ol>
                            </li>
                            <li>
                                <article>
                                    <div class="comment-meta">
                                        <div class="comment-author-metadata">
                                            <img src="image/user/dummy-image.jpg" alt="" class="avatar">
                                            <h4><a href="#">John Doe</a></h4>
                                            <div class="comment-metadata">
                                                <a href="#">June 4, 2017 at 08:00 AM</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ea commodo consequat...</p>
                                    </div>
                                    <div class="review">
                                        <a href="#" class="comment-reply-link">Reply</a>
                                    </div>
                                </article>
                            </li>
                        </ol>

                        <div class="comment-respond">
                            <h3 class="comment-reply-title">Post A Comment</h3>
                            <form class="comment-form row">
                                <div class="col col-sm-6">
                                    <input type="text" class="form-control" placeholder="Enter Name*">
                                </div>
                                <div class="col col-sm-6">
                                    <input type="email" class="form-control" placeholder="Enter Email*">
                                </div>
                                <div class="col col-sm-12">
                                    <input type="text" class="form-control" placeholder="Enter Website*">
                                </div>
                                <div class="col col-sm-12">
                                    <textarea class="form-control" placeholder="Enter Your Comment*"></textarea>
                                </div>
                                <div class="col col-sm-12 text-center">
                                    <button type="submit" class="btn btn-default btn-style hvr-shutter-out-vertical">Comment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col col-lg-3">
                <div class="blog-sidebar">
                    <div class="widget search-widget">
                        <form class="form">
                            <div>
                                <input type="text" class="form-control" placeholder="Search...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="widget categories-widget">
                        <h3>Categories</h3>
                        <ul>
                            <li><a href="#">Apps Design</a></li>
                            <li><a href="#">Photography</a></li>
                            <li><a href="#">Creative Design</a></li>
                            <li><a href="#">Developer</a></li>
                            <li><a href="#">HTML &amp; CSS</a></li>
                        </ul>
                    </div>
                    <div class="widget recent-posts-widget">
                        <h3>Recent posts</h3>
                        <div class="post">
                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h4>
                            <span class="date">Aug 08, 2017</span>
                        </div>
                        <div class="post">
                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h4>
                            <span class="date">Aug 08, 2017</span>
                        </div>
                    </div>
                    <div class="widget tags-widget">
                        <h3>Tags Clouds</h3>
                        <div>
                            <a href="#">Advisor</a>
                            <a href="#">Consulting</a>
                            <a href="#">Credit</a>
                            <a href="#">Welth management</a>
                            <a href="#">Finance</a>
                            <a href="#">Advisor</a>
                            <a href="#">Consulting</a>
                            <a href="#">Credit</a>
                        </div>
                    </div>
                    <div class="widget subscribe search-widget">
                        <h3>Subscribe</h3>
                        <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing</p>
                        <form class="form">
                            <div>
                                <input type="text" class="form-control" placeholder="Enter your email here...">
                                <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
    <div class="container">

        <div class="portfolio-content">
            <!-- Protfolio navbar -->
            <!--<div class="portfolio-filter-wrap text-center" >
                <ul class="portfolio-filter hover-style-one">
                    <li class="active"><a href="#" data-filter="*"> All</a></li>
                    <li><a href="#" data-filter=".cat1">WEB Design</a></li>
                    <li><a href="#" data-filter=".cat2">Mobile</a></li>
                    <li><a href="#" data-filter=".cat3">SEO</a></li>
                    <li><a href="#" data-filter=".cat4">Photography</a></li>
                    <li><a href="#" data-filter=".cat5">Development</a></li>
                </ul>
            </div>-->
            <section class="blog-main-section section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-12">
                            <div class="blog-grids-s2 blog-content-wrapper">
                                <div class="row">
                                <?php foreach ($news as $new) { ?>
                                    <div class="col-md-6 m-b-30">
                                        <div class="grid">
                                            <div class="entry-header">
                                                <img src="uploads/<?php echo $new->image ?>" alt="" class="img img-responsive">
                                            </div>
                                            <div class="entry-body">
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li><i class="fa fa-user"></i>Post by: <a href="">Erdal Eryılmaz</a></li>
                                                        <li><i class="fa fa-calendar"></i> <a href=""><?php echo $new->created_at; ?></a></li>
                                                        <li><i class="fa fa-commenting"></i> <a href="#">10 Yorum</a></li>
                                                    </ul>
                                                </div>
                                                <div class="entry-details">
                                                    <h3><a href="#"><?php echo $new->title ?></a></h3>
                                                    <?php echo $new->content; ?>
                                                    <a href="#">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>




                                </div>
                            </div>
                            <div class="pagi m-t-0 text-center">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-long-arrow-left"></i></a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li>
                                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div> <!-- end container -->
            </section>
            
        </div>
    </div>
</section>
<!-- ==== footer section start ==== -->
<?php $this->load->view("footer"); ?>
<!-- ==== footer section end ==== -->

<!-- ====bottom-footer section start ==== -->
<?php $this->load->view("bottom-footer"); ?>
<!-- ==== bottom-footerfooter section end ==== -->