<!--TOP HEADER-->
<?php $this->load->view("top-header"); ?>
<!--TOP HEADER BİTİŞ-->

<style>
    .switch {

        position: relative;

        display: inline-block;

        width: 60px;

        height: 34px;

    }

    .switch input {

        opacity: 0;

        width: 0;

        height: 0;

    }

    .slider {

        position: absolute;

        cursor: pointer;

        top: 0;

        left: 0;

        right: 0;

        bottom: 0;

        background-color: #ccc;

        -webkit-transition: .4s;

        transition: .4s;

    }

    .slider:before {

        position: absolute;

        content: "";

        height: 26px;

        width: 26px;

        left: 4px;

        bottom: 4px;

        background-color: white;

        -webkit-transition: .4s;

        transition: .4s;

    }

    input:checked + .slider {

        background-color: #2196F3;

    }

    input:focus + .slider {

        box-shadow: 0 0 1px #2196F3;

    }

    input:checked + .slider:before {

        -webkit-transform: translateX(26px);

        -ms-transform: translateX(26px);

        transform: translateX(26px);

    }

    /* Rounded sliders */

    .slider.round {

        border-radius: 34px;

    }

    .slider.round:before {

        border-radius: 50%;

    }
</style>

<div class="wrapper">

    <!--HEADER-->
    <?php $this->load->view("header"); ?>
    <!--HEADER BİTİŞ-->

    <!--SİDEBAR-->
    <?php $this->load->view("sidebar"); ?>
    <!--SİDEBAR BİTİŞ-->


    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title"><?php echo $album->title; ?>' na fotoğraf yükle</h4>

                                </div>
                            </div>
                            <div class="card-body">

                                <form action="albums/uploadimages/<?php echo $album->id; ?>" class="dropzone" id="my-dropzone"></form>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title"><?php echo $album->title; ?>' na yüklenen fotoğraflar</h4>
                                    <button data-url="albums/alldelete/<?php echo $album->id;  ?>" class="btn btn-danger remove-btn btn-round ml-auto">Hepsini Sil.</button>


                                </div>
                            </div>
                            <div class="card-body">

                                <!-- Modal -->
                                <!-- <div class="modal fade" id="allDeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog " role="document">
                                        <div class="modal-content">
                                            <div class="modal-header no-bd">
                                                <h5 class="modal-title text-center">
														<span class="fw-mediumbold ">
														Tüm fotoğraflar silinsinmi?</span>
                                                    <span class="fw-light">

														</span>
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                    <div class="row">

                                                        </div>

                                                        <div class="col-md-6">
                                                        <p>
                                                            <b>Bu fotoğraflar silindikten sonra geri getirilemez!</b>
                                                        </p>
                                                        </div>

                                                <div class="modal-footer no-bd">
                                                    <a href="albums/alldelete/<?php echo $album->id;  ?>" class="btn btn-primary">Evet,Sil.</a>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Vazgeç</button>
                                                </div>

                                                    </div>


                                            </div>


                                        </div>
                                    </div>
                                </div>-->

                                <div class="table-responsive">
                                    <table id="add-row" class="display table table-striped table-hover text-center" >
                                        <thead>
                                        <tr>
                                            <th><i class="fas fa-exchange-alt"></i></th>
                                            <th>#</th>
                                            <th>Resim</th>
                                            <th>Albüm İsmi</th>
                                            <th>Durum</th>
                                            <th style="width: 10%">İşlem</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th><i class="fas fa-exchange-alt"></i></th>
                                            <th>#</th>
                                            <th>Resim</th>
                                            <th>Albüm İsmi</th>
                                            <th>Durum</th>
                                            <th>İşlem</th>
                                        </tr>
                                        </tfoot>

                                        <tbody id="sortable" data-url="<?php echo base_url("albums/ranksetter2/".$album->id);?>">

                                        <?php if ($albums){
                                            foreach ($albums as $albumss){?>

                                                <tr id="rank-<?php echo $albumss->id;?>">
                                                    <td><i class="fas fa-exchange-alt"></td>
                                                    <td><?php echo $albumss->id;?></td>
                                                    <td><img width="170" class="rounded" src="uploads/<?php echo $albumss->album_images;?>"></td>
                                                    <td><?php echo $albumss->album_images;?></td>

                                                    <td>
                                                       <label class="switch">
                                                            <input type="checkbox" data-url="<?php echo base_url("albums/isactivesetter2/$albumss->id");?>" id="isActive" <?php echo ($albumss->status == 1)? "checked" :"";?>/>
                                                            <span class="slider"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <div class="form-button-action">
                                                            <button data-url="albums/image_delete/<?php echo $albumss->id;  ?>" class="btn btn-danger remove-btn btn-sm mx-1" data-original-title="Sil">
                                                                <i class="fa fa-times-circle"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>



                                            <script>

                                                Dropzone.autoDiscover = false;
                                                // or disable for specific dropzone:
                                                // Dropzone.options.myDropzone = false;

                                                $(function() {
                                                    // Now that the DOM is fully loaded, create the dropzone, and setup the
                                                    // event listeners
                                                    var myDropzone = new Dropzone("#my-dropzone");
                                                    myDropzone.on("queuecomplete", function(file) {
                                                        $("#open-alert").iziModal({
                                                            title: 'Tebrikler!',
                                                            subtitle: 'Yükleme işlemi başarıyla tamamlandı.',
                                                            headerColor: 'green',
                                                            icon: 'far fa-check-circle',
                                                            iconText: null,
                                                            iconColor: '',
                                                            rtl: false,
                                                            width: 450,
                                                            top: null,
                                                            bottom: null,
                                                            borderBottom: true,
                                                            padding: 0,
                                                            radius: 3,
                                                            zindex: 999,
                                                            openFullscreen: false,
                                                            closeOnEscape: true,
                                                            closeButton: true,
                                                            timeoutProgressbarColor: 'rgba(255,255,255,0.5)',
                                                            transitionIn: 'comingIn',
                                                            transitionOut: 'comingOut',
                                                            transitionInOverlay: 'fadeIn',
                                                            transitionOutOverlay: 'fadeOut',
                                                            onClosed: function(){
                                                                window.location.href="<?php echo base_url("albums/uploadpage/".$album->id); ?>";
                                                            }

                                                        });
                                                        $("#open-alert").iziModal("open");
                                                    });
                                                })

                                            </script>


                                            <?php }

                                        }else{?>

                                            <tr><td colspan="7">Herhangi bir veri bulunamadı.</td></tr>

                                        <?php }?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </div>

        <!--FOOTER-->
        <?php $this->load->view("footer"); ?>
        <!--FOOTER BİTİŞ-->

    </div>

    <!-- Custom template | don't include it in your project! -->
    <!--<div class="custom-template">
        <div class="title">Settings</div>
        <div class="custom-content">
            <div class="switcher">
                <div class="switch-block">
                    <h4>Logo Header</h4>
                    <div class="btnSwitch">
                        <button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
                        <button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="green"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="red"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="white"></button>
                        <br/>
                        <button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>Navbar Header</h4>
                    <div class="btnSwitch">
                        <button type="button" class="changeTopBarColor" data-color="dark"></button>
                        <button type="button" class="changeTopBarColor" data-color="blue"></button>
                        <button type="button" class="changeTopBarColor" data-color="purple"></button>
                        <button type="button" class="changeTopBarColor" data-color="light-blue"></button>
                        <button type="button" class="changeTopBarColor" data-color="green"></button>
                        <button type="button" class="changeTopBarColor" data-color="orange"></button>
                        <button type="button" class="changeTopBarColor" data-color="red"></button>
                        <button type="button" class="changeTopBarColor" data-color="white"></button>
                        <br/>
                        <button type="button" class="changeTopBarColor" data-color="dark2"></button>
                        <button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
                        <button type="button" class="changeTopBarColor" data-color="purple2"></button>
                        <button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
                        <button type="button" class="changeTopBarColor" data-color="green2"></button>
                        <button type="button" class="changeTopBarColor" data-color="orange2"></button>
                        <button type="button" class="changeTopBarColor" data-color="red2"></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>Sidebar</h4>
                    <div class="btnSwitch">
                        <button type="button" class="selected changeSideBarColor" data-color="white"></button>
                        <button type="button" class="changeSideBarColor" data-color="dark"></button>
                        <button type="button" class="changeSideBarColor" data-color="dark2"></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>Background</h4>
                    <div class="btnSwitch">
                        <button type="button" class="changeBackgroundColor" data-color="bg2"></button>
                        <button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
                        <button type="button" class="changeBackgroundColor" data-color="bg3"></button>
                        <button type="button" class="changeBackgroundColor" data-color="dark"></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-toggle">
            <i class="flaticon-settings"></i>
        </div>
    </div> -->
    <!-- End Custom template -->
</div>

<!--BOTTOM FOOTER-->
<?php $this->load->view("bottom-footer"); ?>
<!--BOTTOM FOOTER BİTİŞ-->
