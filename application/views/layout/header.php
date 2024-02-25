        <div class="header-top bg-light bg-image-pattern px-xl-8 py-2">
            <div class="container">
                <div class="header-top-wrapper">
                    <?php foreach($data_setting as $setting) : ?>
                    <ul class="navbar-address list-inline m-0">
                        <li class="list-inline-item"><span class="icon"><img
                                    src="<?= base_url('frontend/') ?>assets/images/location-icon.svg"
                                    alt="title"></span><?= $setting->alamat; ?></li>
                        <li class="list-inline-item"><span class="icon"><img
                                    src="<?= base_url('frontend/') ?>assets/images/phone-icon.svg"
                                    alt="title"></span><?= $setting->no_hp ?>
                        </li>
                    </ul>
                    <?php endforeach; ?>
                    <ul class="navbar-social list-inline m-0">
                        <li class="list-inline-item"><a href="https://facebook.com"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="https://linkedin.com"><i
                                    class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom bg-white px-xl-8">
            <nav class="container">
                <div class="header-navbar navbar navbar-expand-lg">
                    <a class='navbar-brand' href='/'><img
                            src="<?= base_url('frontend/assets/images/header-logo.png') ?>" alt="images"></a>
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <nav class="navbar-meanmenu">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item"> <a class='nav-link' href='<?= base_url('home') ?>'>Home</a></li>
                                <li class="nav-item">
                                    <a class='nav-link toogler' href='#'> Profil </a>
                                    <ul class="dropdown-menu">
                                        <li><a class='dropdown-item' href='<?= base_url('visimisi') ?>'>Visi & Misi</a>
                                        </li>
                                        <li><a class='dropdown-item' href='<?= base_url('sejarah') ?>'>Sejarah</a></li>
                                        <li><a class='dropdown-item' href='<?= base_url('pimpinan') ?>'>Pimpinan</a>
                                        </li>
                                        <li><a class='dropdown-item' href='<?= base_url('imam') ?>'>Imam dan Muadzin</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"> <a class='nav-link' href='/about'>Berita</a></li>
                                <li class="nav-item"> <a class='nav-link' href='/about'>Artikel</a></li>
                                <li class="nav-item"> <a class='nav-link' href='<?= base_url('agenda') ?>'>Agenda</a>
                                </li>


                                <li class="nav-item"> <a class='nav-link' href='<?= base_url('video') ?>'>Nurul Ilmi
                                        TV</a></li>
                                <li class="nav-item"> <a class='nav-link' href='<?= base_url('kontak') ?>'>Kontak</a>
                                </li>
                            </ul>
                        </nav>
                        <ul class="navbar-nav align-items-center ms-auto">
                            <li class="nav-item">
                                <a class='nav-link me-4' href='' id="donate">Donate Now</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>