<!--TOP HEADER-->
<?php $this->load->view("top-header"); ?>
<!--TOP HEADER BİTİŞ-->

<!-- <style>
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
    
</style> -->

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
                <div class="page-header">
                    <h4 class="page-title">Genel Ayarlar Modülü</h4>
                    <ul class="breadcrumbs">
                        <li class="nav-home">
                            <a href="home">
                                <i class="flaticon-home"></i>
                            </a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="settings">Genel Ayar</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <!--<h4 class="card-title">Nav Pills With Icon (Vertical Tabs)</h4>-->
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5 col-md-3">
                                        <div class="nav flex-column nav-pills nav-secondary nav-pills-no-bd nav-pills-icons" id="v-pills-tab-with-icon" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" id="v-pills-site-tab-icons" data-toggle="pill" href="#v-pills-site-icons" role="tab" aria-controls="v-pills-site-icons" aria-selected="true">
                                                <i class="flaticon-stopwatch"></i>
                                                Site Ayarları
                                            </a>
                                            <a class="nav-link" id="v-pills-iletisim-tab-icons" data-toggle="pill" href="#v-pills-iletisim-icons" role="tab" aria-controls="v-pills-iletisim-icons" aria-selected="false">
                                                <i class="flaticon-message"></i>
                                                İletişim Ayarları
                                            </a>
                                            <a class="nav-link" id="v-pills-smtp-tab-icons" data-toggle="pill" href="#v-pills-smtp-icons" role="tab" aria-controls="v-pills-smtp-icons" aria-selected="false">
                                                <i class="flaticon-mailbox"></i>
                                                Smtp Ayarları
                                            </a>
                                            <a class="nav-link" id="v-pills-lf-tab-icons" data-toggle="pill" href="#v-pills-lf-icons" role="tab" aria-controls="v-pills-lf-icons" aria-selected="false">
                                                <i class="flaticon-layers-1"></i>
                                                Logo & Favicon Ayarları
                                            </a>
                                            <a class="nav-link" id="v-pills-sm-tab-icons" data-toggle="pill" href="#v-pills-sm-icons" role="tab" aria-controls="v-pills-sm-icons" aria-selected="false">
                                                <i class="flaticon-share"></i>
                                                Sosyal Medya Ayarları
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-9">
                                        <div class="tab-content" id="v-pills-with-icon-tabContent">

                                            <div class="tab-pane fade show active" id="v-pills-site-icons" role="tabpanel" aria-labelledby="v-pills-home-tab-icons">
                                                <form action="settings/update_site_ayarlari/<?php echo $settings->id; ?>" method="POST" enctype="multipart/form-data">

                                                    <div class="form-group">
                                                        <label for="">Site Title</label>
                                                        <input type="text" name="title" value="<?php echo $settings->title; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Site Description</label>
                                                        <input type="text" name="description" value="<?php echo $settings->description; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Site Keywords</label>
                                                        <input type="text" name="keywords" value="<?php echo $settings->keywords; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Site Author</label>
                                                        <input type="text" name="author" value="<?php echo $settings->author; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Site Footer</label>
                                                        <input type="text" name="footer" value="<?php echo $settings->footer; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group text-center">
                                                        <button type="submit"  class="btn btn btn-primary">Güncelle</button>
                                                    </div>

                                                 </form>
                                            </div>

                                            <div class="tab-pane fade" id="v-pills-iletisim-icons" role="tabpanel" aria-labelledby="v-pills-iletisim-tab-icons">
                                                <form action="settings/update_iletisim/<?php echo $settings->id; ?>" method="POST" enctype="multipart/form-data">

                                                    <div class="form-group">
                                                        <label for="">Telefon</label>
                                                        <input type="text" name="phone" value="<?php echo $settings->phone; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Mail</label>
                                                        <input type="text" name="mail" value="<?php echo $settings->mail; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Fax</label>
                                                        <input type="text" name="fax" value="<?php echo $settings->fax; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Adres</label>
                                                        <input type="text" name="address" value="<?php echo $settings->address; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Harita</label>
                                                        <textarea type="text" name="maps" rows="5" class="form-control"><?php echo $settings->maps; ?></textarea>
                                                    </div>
                                                    <div class="form-group text-center">
                                                        <button type="submit"  class="btn btn btn-primary">Güncelle</button>
                                                    </div>

                                                </form>
                                            </div>

                                            <div class="tab-pane fade" id="v-pills-smtp-icons" role="tabpanel" aria-labelledby="v-pills-smtp-tab-icons">
                                                <form action="settings/update_smtp/<?php echo $settings->id; ?>" method="POST" enctype="multipart/form-data">

                                                    <div class="form-group">
                                                        <label for="">Host</label>
                                                        <input type="text" name="host" value="<?php echo $settings->host; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Kullanıcı Mail</label>
                                                        <input type="text" name="user_mail" value="<?php echo $settings->user_mail; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Şifre</label>
                                                        <input type="text" name="user_password" value="<?php echo $settings->user_password; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Port</label>
                                                        <input type="text" name="port" value="<?php echo $settings->port; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Bilgilendirilen Mail</label>
                                                        <input type="text" name="notification_mail" value="<?php echo $settings->notification_mail; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group text-center">
                                                        <button type="submit"  class="btn btn btn-primary">Güncelle</button>
                                                    </div>

                                                </form>
                                            </div>

                                            <div class="tab-pane fade" id="v-pills-lf-icons" role="tabpanel" aria-labelledby="v-pills-lf-tab-icons">
                                                <form action="settings/logoayarlari/<?php echo $settings->id; ?>" method="POST" enctype="multipart/form-data">

                                                    <div class="form-group">
                                                        <label for="">Yüklü Olan Logo</label><br>
                                                        <img width="200" height="39" src="../uploads/<?php echo $settings->logo; ?>"  class="img-thumbnail">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Logo Yükle</label>
                                                        <input type="file" name="logo" class="form-control">
                                                    </div>
                                                    <div class="form-group text-center">
                                                        <button type="submit" name="" class="btn btn btn-primary">Güncelle</button>
                                                    </div>
                                                </form>
                                                    <hr>
                                                <form action="settings/faviconayarlari/<?php echo $settings->id; ?>" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label for="">Yüklü Olan Favicon</label><br>
                                                        <img width="35" height="35" src="../uploads/<?php echo $settings->favicon; ?>"  class="img-thumbnail">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Favicon Yükle</label>
                                                        <input type="file" name="favicon" class="form-control">
                                                    </div>
                                                    <div class="form-group text-center">
                                                        <button type="submit"  class="btn btn btn-primary">Güncelle</button>
                                                    </div>

                                                </form>
                                            </div>

                                            <div class="tab-pane fade" id="v-pills-sm-icons" role="tabpanel" aria-labelledby="v-pills-sm-tab-icons">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <div class="d-flex align-items-center">
                                                                <h4 class="card-title">Hesap Listesi</h4>
                                                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                                                                    <i class="fa fa-plus"></i>
                                                                    Yeni Ekle
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header no-bd">
                                                                            <h5 class="modal-title">
                                                                                <span class="fw-mediumbold">
                                                                                    Yeni Hesap</span>
                                                                                <span class="fw-light">
                                                                                    Ekle
                                                                                </span>
                                                                            </h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p class="small">Sosyal medya hesaplarınızı, buradan ekleyebilirsiniz.</p>
                                                                            <form action="social/insertsocial" method="POST" enctype="multipart/form-data">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <div class="form-group form-group-default">
                                                                                            <label>İsim</label>
                                                                                            <input id="addName" type="text" name="title" class="form-control" placeholder="isim giriniz">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 pr-0">
                                                                                        <div class="form-group form-group-default">
                                                                                            <label>İcon</label>
                                                                                            <input id="addPosition" type="text" name="icon" class="form-control" placeholder="icon giriniz">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group form-group-default">
                                                                                            <label>Link</label>
                                                                                            <input id="addOffice" type="text" name="link" class="form-control" placeholder="link giriniz">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                        </div>
                                                                        <div class="modal-footer no-bd">
                                                                            <button type="submit"  class="btn btn-primary">Ekle</button>
                                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">İptal</button>
                                                                        </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="table-responsive">
                                                                <table id="add-row" class="display table table-striped table-hover text-center" >
                                                                    <thead>
                                                                    <tr>
                                                                        <th><i class="fas fa-exchange-alt"></i></th>
                                                                        <th>#</th>
                                                                        <th>İcon</th>
                                                                        <th>Başlık</th>
                                                                        <th>Link</th>
                                                                        <th>Durum</th>
                                                                        <th style="width: 10%">İşlem</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tfoot>
                                                                    <tr>
                                                                        <th><i class="fas fa-exchange-alt"></i></th>
                                                                        <th>#</th>
                                                                        <th>İcon</th>
                                                                        <th>Başlık</th>
                                                                        <th>Link</th>
                                                                        <th>Durum</th>
                                                                        <th>İşlem</th>
                                                                    </tr>
                                                                    </tfoot>

                                                                    <tbody id="sortable" data-url="<?php echo base_url("social/ranksetter"); ?>">

                                                                    <?php if ($social) {
                                                                        foreach ($social as $sm) { ?>

                                                                                                                            <tr id="rank-<?php echo $sm->id; ?>">
                                                                                                                                <td><i class="fas fa-exchange-alt"></td>
                                                                                                                                <td><?php echo $sm->id; ?></td>
                                                                                                                                <td><i class="<?php echo $sm->icon; ?> fa-2x"></i></td>
                                                                                                                                <td><?php echo $sm->title; ?></td>
                                                                                                                                <td><?php echo $sm->link; ?></td>
                                                                                                                                <td>
                                                                                                                                    <label class="switch">
                                                                                                                                        <input type="checkbox" data-url="<?php echo base_url("social/isactivesetter/$sm->id"); ?>" id="isActive" <?php echo ($sm->status == 1) ? "checked" : ""; ?>>
                                                                                                                                        <span class="slider"></span>
                                                                                                                                    </label>
                                                                                                                                </td>

                                                                                                                                <td>
                                                                                                                                    <div class="form-button-action">
                                                                                                                                        <button type="button" data-toggle="modal" data-target="#updateRowModal<?php echo $sm->id; ?>" class="btn btn-primary btn-sm mx-1" data-original-title="Düzenle">
                                                                                                                                            <i class="fa fa-edit"></i>
                                                                                                                                        </button>
                                                                                                                                        <button data-url="social/deletesocial/<?php echo $sm->id; ?>"  class="btn btn-danger remove-btn btn-sm mx-1" data-original-title="Sil">
                                                                                                                                            <i class="fa fa-times"></i>
                                                                                                                                        </button>
                                                                                                                                    </div>
                                                                                                                                </td>
                                                                                                                            </tr>

                                                                                                                            <!-- Modal -->
                                                                                                                            <div class="modal fade" id="updateRowModal<?php echo $sm->id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                                                                                                                <div class="modal-dialog" role="document">
                                                                                                                                    <div class="modal-content">
                                                                                                                                        <div class="modal-header no-bd">
                                                                                                                                            <h5 class="modal-title">
                                                                                                        <span class="fw-mediumbold">
                                                                                                        <?php echo $sm->title; ?></span>
                                                                                                                                                <span class="fw-light">
                                                                                                            Güncelleniyor
                                                                                                        </span>
                                                                                                                                            </h5>
                                                                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                                                <span aria-hidden="true">&times;</span>
                                                                                                                                            </button>
                                                                                                                                        </div>
                                                                                                                                        <div class="modal-body">
                                                                                                                                            <p class="small">Sosyal medya hesaplarınızı, buradan güncelleyebilirsiniz.</p>
                                                                                                                                            <form action="social/updatesocial/<?php echo $sm->id; ?>" method="POST" enctype="multipart/form-data">
                                                                                                                                                <div class="row">
                                                                                                                                                    <div class="col-sm-12">
                                                                                                                                                        <div class="form-group form-group-default">
                                                                                                                                                            <label>İsim</label>
                                                                                                                                                            <input id="addName" type="text" name="title" class="form-control" value="<?php echo $sm->title; ?>">
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="col-md-6 pr-0">
                                                                                                                                                        <div class="form-group form-group-default">
                                                                                                                                                            <label>İcon</label>
                                                                                                                                                            <input id="addPosition" type="text" name="icon" class="form-control" value="<?php echo $sm->icon; ?>">
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="col-md-6">
                                                                                                                                                        <div class="form-group form-group-default">
                                                                                                                                                            <label>Link</label>
                                                                                                                                                            <input id="addOffice" type="text" name="link" class="form-control" value="<?php echo $sm->link; ?>">
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>

                                                                                                                                        </div>
                                                                                                                                        <div class="modal-footer no-bd">
                                                                                                                                            <button type="submit"  class="btn btn-primary">Güncelle</button>
                                                                                                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">İptal</button>
                                                                                                                                        </div>
                                                                                                                                        </form>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>

                                                                                            <?php }

                                                                    } else { ?>

                                                                                            <tr><td>Herhangi bir veri bulunamadı.</td></tr>

                                                                   <?php } ?>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
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
