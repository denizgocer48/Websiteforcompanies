<header>
    <div class="hidden-xs hidden-sm nav-top primary-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="nav-top-access">
                        <!-- Social links -->
                        <ul>
                            <li><i class="fa fa-phone"></i><?php echo $settings->phone;?></li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $settings->mail;?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 text-right">
                    <div class="nav-top-social">
                        <ul>
                            <?php foreach ($social as $row) {?>
                            <li><a href="<?php echo $row->link;?>"><i class="<?php echo $row->icon;?>"></i></a></li>
                            <?php }?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <!--== change the logo name ==-->
                        <a href="">
                            <img width="200" height="39" src="uploads/<?php echo $settings->logo;?>" alt="">
                        </a>
                    </div>
                    <!-- Responsive Menu Start -->
                    <div class="responsive-menu"></div>
                    <!-- Responsive Menu End -->
                </div>
                <div class="col-md-9 col-sm-12">
                    <div class="mainmenu">
                        <nav>
                            <ul id="navigation">
                                <li class="current-page-item"><a href="">Anasayfa</a>

                                </li>
                                <li>
                                    <a href="javascript:void;">
                                        Kurumsal
                                    </a>
                                    <ul>
                                        <li><a href="about_us">Hakkımızda</a></li>
                                        <li><a href="vision">Vizyonumuz</a></li>
                                        <li><a href="mission">Misyonumuz</a></li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="services">Hizmetlerimiz</a>
                                </li>
                                <li>
                                    <a href="projects">Ürünlerimiz</a>
                                </li>
                                <li>
                                    <a href="news">Haberler</a>

                                </li>

                                <li>
                                    <a href="javascript:void;">Dökümanlar</a>
                                    <ul>
                                        <li><a href="sss">S.S.S</a></li>
                                        <li><a href="albums">Resim Galeri</a></li>
                                        <li><a href="videos">Videolar</a></li>

                                    </ul>
                                </li>
                                <li><a href="contact">İletişim</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>