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
                <h2>ÜRÜNLERİMİZ</h2>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">Anasayfa</a></li>
                        <li>Ürünlerimiz</li>
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
            <div class="portfolio portfolio-gutter portfolio-style-2 portfolio-container portfolio-masonry portfolio-column-count-4 ">

                <!-- Single portfolio item -->
                <?php foreach ($projects as $row) { ?>
                <div class="portfolio-item cat1 cat3">
                    <div class="portfolio-item-content">
                        <div class="item-thumbnail">
                            <!-- Change the dummy image -->
                            <img src="uploads/<?php echo $row->image;?>" alt="">
                        </div>
                        <div class="portfolio-description">
                            <h4><a href="#" ><?php echo $row->title;?></a></h4>

                            <!-- Change the dummy image -->
                            <a href="uploads/<?php echo $row->image;?>" class="portfolio-gallery-set"><i class="fa fa-search-plus"></i></a><a target="_blank" href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <?php } ?>



            </div>
            <div class="text-center">
                <a class="btn btn-default btn-style hvr-shutter-out-vertical" href="#">View More</a>
            </div>
        </div>
    </div>
</section>
<!-- ==== footer section start ==== -->
<?php $this->load->view("footer"); ?>
<!-- ==== footer section end ==== -->

<!-- ====bottom-footer section start ==== -->
<?php $this->load->view("bottom-footer"); ?>
<!-- ==== bottom-footerfooter section end ==== -->