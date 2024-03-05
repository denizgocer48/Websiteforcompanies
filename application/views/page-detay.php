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
                <h2><?php echo $pag->title;?></h2>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">Anasayfa</a></li>
                        <li><?php echo $pag->title;?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog-details-post section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-12">
                <div class="post-content">
                    <div class="blog-grids-s2 blog-content-wrapper">
                        <div class="entry-media">

                        </div>
                        <div class="entry-header">

                            <div class="entry-title">
                                <h2><?php echo $pag->title;?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="entry-body">
                        <?php echo $pag->content;?>
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

            
        </div>
    </div>
</section>
<!-- ==== footer section start ==== -->
<?php $this->load->view("footer"); ?>
<!-- ==== footer section end ==== -->

<!-- ====bottom-footer section start ==== -->
<?php $this->load->view("bottom-footer"); ?>
<!-- ==== bottom-footerfooter section end ==== -->