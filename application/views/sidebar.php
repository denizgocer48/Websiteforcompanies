<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="uploads/<?php echo $admin->image;?>"  class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?php echo $admin->name; ?>
									<span class="user-level">Administrator</span>

								</span>
                    </a>
                    <div class="clearfix"></div>


                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item <?php echo $url == "home" ? "active" : "" ?>">
                    <a  href="home" >
                        <i class="fas fa-home"></i>
                        <p>Anasayfa</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "settings" ? "active" : "" ?>">
                    <a  href="settings" >
                        <i class="flaticon-settings"></i>
                        <p>Genel Ayarlar</p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="flaticon-attachment"></i>
                        <p>Kurumsal</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="dashboard">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="about_us">
                                    <span class="sub-item">Hakkımızda</span>
                                </a>
                            </li>
                            <li>
                                <a href="vision">
                                    <span class="sub-item">Vizyonumuz</span>
                                </a>
                            </li>
                            <li>
                                <a href="mission">
                                    <span class="sub-item">Misyonumuz</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item <?php echo $url == "pages" ? "active" : "" ?>">
                    <a  href="pages" >
                        <i class="icon-book-open"></i>
                        <p>Sayfalar</p>
                    </a>
                </li>


                <li class="nav-item <?php echo $url == "services" ? "active" : "" ?>">
                    <a  href="services" >
                        <i class="flaticon-share-1"></i>
                        <p>Hizmetler</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "sliders" ? "active" : "" ?>">
                    <a  href="sliders" >
                        <i class="flaticon-interface-4"></i>
                        <p>Slaytlar</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "projects" ? "active" : "" ?>">
                    <a  href="projects" >
                        <i class="flaticon-shapes-1"></i>
                        <p>Ürünler</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "albums" ? "active" : "" ?>">
                    <a  href="albums" >
                        <i class="flaticon-circle"></i>
                        <p>Albümler</p>
                    </a>
                </li>
                
                <li class="nav-item <?php echo $url == "videos" ? "active" : "" ?>">
                    <a  href="videos" >
                        <i class="flaticon-youtube"></i>
                        <p>Video Galeri</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "teams" ? "active" : "" ?>">
                    <a  href="teams" >
                        <i class="flaticon-users"></i>
                        <p>Ekibimiz</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "clients" ? "active" : "" ?>">
                    <a  href="clients" >
                        <i class="flaticon-chat-8"></i>
                        <p>Müşteri Yorumları</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "brands" ? "active" : "" ?>">
                    <a  href="brands" >
                        <i class="flaticon-idea"></i>
                        <p>Sponsorlar</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "sss" ? "active" : "" ?>">
                    <a  href="sss" >
                        <i class="flaticon-round"></i>
                        <p>Sıkça Sorulan Sorular</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "counters" ? "active" : "" ?>">
                    <a  href="counters" >
                        <i class="flaticon-graph-1"></i>
                        <p>İstatistikler</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "news" ? "active" : "" ?>">
                    <a  href="news" >
                        <i class="flaticon-agenda-1"></i>
                        <p>Bloglar</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "subscribers" ? "active" : "" ?>">
                    <a  href="subscribers" >
                        <i class="flaticon-user-2"></i>
                        <p>Aboneler</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "message" ? "active" : "" ?>">
                    <a  href="message" >
                        <i class="flaticon-envelope-1"></i>
                        <p>Gelen Mesajlar</p>
                    </a>
                </li>





            </ul>
        </div>
    </div>
</div>