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
                <h2>Hakkımızda</h2>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">Anasayfa</a></li>
                        <li>Hakkımızda</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about" class="about section-padding-top">
    <div class="container">
        <!--<div class="section-title">
            <h2><?php echo $about_us->name; ?></h2>
            <span class="s-title-icon"><i class="icofont icofont-diamond"></i></span>
        </div>-->
        <div class="row">
            <!-- About image -->
            <div class="col-md-6">
                <a  class="img-about">
                    <img src="uploads/<?php echo $about_us->image;?>" alt="" class="img-responsive">
                </a>
            </div>
            <div class="col-md-6">
                <!-- About text-->
                <div class="about-details">
                    <h5>BİZ KİMİZ</h5>
                    <p><?php echo $about_us->content;?></p>
                    <ul class="image-contact-list">
                        <li><i class="icofont icofont-speech-comments"></i> <span> Reliable and Secure Platform</span></li>
                        <li><i class="icofont icofont-package"></i> <span>Everything is perfectly organized</span></li>
                        <li><i class="icofont icofont-settings"></i> <span>Simple Line Icon</span></li>
                        <li><i class="icofont icofont-gift"></i> <span>Step on the new level</span></li>

                    </ul>

                </div>
                <!-- /About text -->
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