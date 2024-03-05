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
                <h2>Haberler</h2>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">Anasayfa</a></li>
                        <li>Haberler</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-padding gray-brackground" id="portfolio">
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
                                                    <h3><a href="news/detay/<?php echo $new->id;?>"><?php echo $new->title ?></a></h3>
                                                    <?php echo $new->content; ?>
                                                    <a href="news/detay/<?php echo $new->id;?>">Devamı <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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