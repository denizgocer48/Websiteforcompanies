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
                <div class="page-header">
                    <h4 class="page-title">Yönetici Ayarlar Modülü</h4>
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
                            <a href="profil">Yönetici Ayar</a>
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
                                    <div class="col-md-3">
                                        <form action="profil/updateprofilimage/<?php echo $admin->id;  ?>" method="POST" enctype="multipart/form-data">

                                            <div class="row">

                                                <div class="col-md-12">

                                            <div class="form-group">
                                                <label for="">Yüklü Olan Profil Resmi</label><br>
                                                <img width="350" height="100" src="uploads/<?php echo $admin->image;?>"  class="img-thumbnail">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Profil Resmi Yükle</label>
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                            <div class="form-group text-center">
                                                <button type="submit" name="" class="btn btn btn-primary btn-block">Güncelle</button>
                                            </div>
                                            </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="col-md-9">
                                        <form action="profil/updateprofilinfo/<?php echo $admin->id;  ?>" method="POST" enctype="multipart/form-data">

                                            <div class="row">

                                                <div class="col-md-12">
                                            <div class="form-group">
                                                 <label for="">Kullanıcı Adı</label>
                                                 <input type="text" name="name" value="<?php echo $admin->name; ?>" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Kullanıcı Email</label>
                                                <input type="text" name="mail" value="<?php echo $admin->mail; ?>" class="form-control">
                                            </div>

                                            <div class="form-group text-right">
                                                <button type="submit"  class="btn btn btn-primary">Güncelle</button>
                                            </div>
                                          </div>
                                       </div>
                                        </form>

                                        <form action="profil/updateprofilpassword/<?php echo $admin->id;  ?>" method="POST" enctype="multipart/form-data">

                                            <div class="row">

                                                <div class="col-md-12">

                                                    <div class="form-group">
                                                        <label for="">Yeni Şifre</label>
                                                        <input type="password" name="password1" placeholder="Yeni Şifre " class="form-control">
                                                        <?php if (isset($form_error)) {?>
                                                            <small><?php echo form_error("password1");?></small>
                                                        <?php } ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">Yeni  Şifre(Tekrar)</label>
                                                        <input type="password" name="password2" placeholder="Yeni  Şifre(Tekrar) " class="form-control">
                                                        <?php if (isset($form_error)) {?>
                                                            <small><?php echo form_error("password2");?></small>
                                                        <?php } ?>
                                                    </div>
                                                    <div class="form-group text-right">
                                                        <button type="submit"  class="btn btn btn-primary">Güncelle</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

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
