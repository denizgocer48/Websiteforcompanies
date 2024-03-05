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
                <h2>SIKÇA SORULAN SORULAR</h2>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">Anasayfa</a></li>
                        <li>Sıkça Sorulan Sorular</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-padding gray-brackground" id="portfolio">
    <div class="container">
        <div class="row">

            <div class="col-md-7 col-xs-12">



                <?php foreach ($sss as $row) { ?>
                <div class="panel-group accordion-s1" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne<?php echo $row->id;?>" aria-expanded="true"><?php echo $row->title;?> ?</a>
                        </div>

                        <div id="collapseOne<?php echo $row->id;?>" class="panel-collapse collapse <?php echo ($row->rank == 0)? "in" : "";?> ">
                            <div class="panel-body">
                                <?php echo $row->content;?>
                            </div>
                        </div>
                    </div>

                </div>
                <?php } ?>
            </div>
            <div class="col-md-5 col-xs-12">
                <div class="faq-text text-center">
                    <h1>SSS</h1>
                    <h5><span>Sor</span>Bitane</span>Soru <span>Zor</span>olmasın</h5>
                </div>
            </div>
        </div> <!-- end row -->





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