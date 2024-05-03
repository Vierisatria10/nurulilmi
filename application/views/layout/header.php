 <div class="header-top bg-light bg-image-pattern px-xl-8 py-2">
     <div class="container">
         <div class="header-top-wrapper">
             <?php foreach($data_setting as $setting) : ?>
             <ul class="navbar-address list-inline m-0">
                 <li class="list-inline-item"><span class="icon"><img
                             src="<?= base_url('frontend/') ?>assets/images/location-icon.svg"
                             alt="title"></span><?= strip_tags(character_limiter($setting->alamat, 70)); ?></li>
                 <li class="list-inline-item"><span class="icon"><img
                             src="<?= base_url('frontend/') ?>assets/images/phone-icon.svg"
                             alt="title"></span><?= $setting->no_hp ?>
                 </li>
             </ul>
             <ul class="navbar-social list-inline m-0">
                 <li class="list-inline-item"><a href="<?= $setting->sosmed1 ?>"><i class="fab fa-facebook-f"></i></a>
                 </li>
                 <li class="list-inline-item"><a href="<?= $setting->sosmed2 ?>"><i class="fab fa-instagram"></i></a>
                 </li>
                 <li class="list-inline-item"><a href="<?= $setting->sosmed3 ?>"><i class="fab fa-youtube"></i></a>
                 </li>
             </ul>
             <?php endforeach; ?>
         </div>
     </div>
 </div>
 <div class="header-bottom bg-white px-xl-8">
     <nav class="container">
         <div class="header-navbar navbar navbar-expand-lg">
             <?php foreach($data_setting as $setting) : ?>
             <a class='navbar-brand' target="_blank" href="<?= base_url('upload/setting/'.$setting->logo) ?>"><img
                     src="<?= base_url('upload/setting/'.$setting->logo) ?>" alt="images"></a>
             <?php endforeach; ?>
             <div class="collapse navbar-collapse" id="navbar-menu">
                 <nav class="navbar-meanmenu">
                     <ul class="navbar-nav ms-auto">
                         <li class="nav-item"> <a class='nav-link' href="<?= base_url('home') ?>">Home</a></li>
                         <li class="nav-item">
                             <a class='nav-link toogler' href='#'> Profil </a>
                             <ul class="dropdown-menu">
                                 <li><a class='dropdown-item' href="<?= base_url('visimisi') ?>">Visi & Misi</a>
                                 </li>
                                 <li><a class='dropdown-item' href="<?= base_url('sejarah') ?>">Sejarah</a></li>
                                 <li><a class='dropdown-item' href="<?= base_url('pimpinan') ?>">Pengurus Umum</a>
                                 </li>
                                 <li><a class='dropdown-item' href="<?= base_url('imam') ?>">Imam dan Muadzin</a>
                                 </li>
                                 <li><a class='dropdown-item' href="<?= base_url('struktur') ?>">Struktur Organisasi</a>
                                 </li>
                             </ul>
                         </li>
                         <li class="nav-item">
                             <a class='nav-link toogler' href="#" id="bidang"> Bidang </a>
                             <ul class="dropdown-menu">
                                 <li><a class='dropdown-item' href="#">Ibadah dan
                                         Dakwah</a>
                                 </li>
                                 <li><a class='dropdown-item' href="#">Baitul Mall dan
                                         Sosial</a></li>
                                 <li><a class='dropdown-item' href="#">Kepemudaan</a>
                                 </li>
                                 <li><a class='dropdown-item' href="#">SDM dan
                                         Pendidikan</a>
                                 </li>
                                 <li><a class='dropdown-item' href="#">Umum dan
                                         Kerumahtanggaan</a>
                                 </li>
                                 <li><a class='dropdown-item' href="#">Hubungan
                                         Masyarakat</a>
                                 </li>
                                 <li><a class='dropdown-item' href="#">Keamanan
                                         dan Ketertiban</a>
                                 </li>
                             </ul>
                         </li>
                         <li class="nav-item"> <a class='nav-link'
                                 href='<?= base_url('blog/kategori/berita') ?>'>Berita</a></li>
                         <li class="nav-item"> <a class='nav-link' href="<?= base_url('blog') ?>">Artikel</a>
                         </li>
                         <li class="nav-item"> <a class='nav-link' href="<?= base_url('agenda') ?>">Agenda</a>
                         </li>


                         <li class="nav-item"> <a class='nav-link' href="<?= base_url('video') ?>">Nurul Ilmi
                                 TV</a></li>
                         <li class="nav-item"> <a class='nav-link' href="<?= base_url('download') ?>">Download</a></li>
                         <li class="nav-item"> <a class='nav-link' href="<?= base_url('galeri') ?>">Galeri</a></li>

                         <li class="nav-item"> <a class='nav-link' href="<?= base_url('kontak') ?>">Kontak</a>
                         </li>
                     </ul>
                 </nav>
                 <ul class="navbar-nav align-items-center ms-auto">
                     <li class="nav-item">
                         <a class='nav-link me-4' href="#" id="donate">Donate Now</a>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>
 </div>