<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= base_url('frontend/') ?>assets/images/logo.jpeg" type="images/x-icon" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Philosopher:wght@700&display=swap"
        rel="stylesheet">
    <!-- gulp:css -->
    <link rel="stylesheet" href="<?= base_url('frontend/') ?>assets/css/app.min.css">
    <!-- endgulp -->
</head>

<body>
    <!--  ====================== Header Area =============================  -->
    <div class="preloader">
        <div class="lds-preloader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Header -->
    <header class="header-area">
        <?php $this->load->view('layout/header.php') ?>
    </header>
    <!--  ====================== Header Area =============================  -->
    <div class="banner-area position-relative overflow-hidden">
        
        <div class="banner-slider">
        <?php foreach($data_setting as $row) : ?>
            <div class="banner-item">
                <div class="banner-bg-image"><img src="<?= base_url('upload/setting/'.$row->banner1) ?>"
                        alt="image"></div>
                <div class="container">
                    <div class="banner-wrapper">
                        <div class="banner-content ms-0">

                            <h1 class="display-3 text-primary" data-animation="fadeInDown" data-delay="0.7s"><?= $row->judul1 ?>
                            </h1>
                            <p class="lead mb-6 text-secondary" data-animation="fadeInDown" data-delay="0.7s">Around
                                16,000 Muslims live in the our twon & we have now 2 Grand Mosques.</p>
                            <a class='btn btn-primary border-radius-25 theme-btn-1 text-white'
                                data-animation='fadeInDown' data-delay='0.7s' href="#">
                                DONATE NOW</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="banner-item">
                <div class="banner-bg-image"><img src="<?= base_url('upload/setting/'. $row->banner2) ?>"
                        alt="image"></div>
                <div class="container">
                    <div class="banner-wrapper">
                        <div class="banner-content text-center">

                            <h1 class="display-3 text-primary" data-animation="fadeInDown" data-delay="0.7s">
                                <?= $row->judul2 ?>
                            </h1>
                            <p class="lead mb-6 text-secondary" data-animation="fadeInDown" data-delay="0.7s">Around
                                16,000 Muslims live in the our twon & we have now 2 Grand Mosques.</p>
                            <a class='btn btn-primary border-radius-25 theme-btn-1 text-white'
                                data-animation='fadeInDown' data-delay='0.7s' href="#">
                                DONATE NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-item">
                <div class="banner-bg-image"><img src="<?= base_url('upload/setting/'. $row->banner3) ?>"
                        alt="image"></div>
                <div class="container">
                    <div class="banner-wrapper">
                        <div class="banner-content ms-0">


                            <h1 class="display-3 text-primary" data-animation="fadeInDown" data-delay="0.7s"><?= $row->judul3 ?>
                            </h1>
                            <p class="lead mb-6 text-secondary" data-animation="fadeInDown" data-delay="0.7s">Around
                                16,000 Muslims live in the our twon & we have now 2 Grand Mosques.</p>
                            <a class='btn btn-primary border-radius-25 theme-btn-1 text-white'
                                data-animation='fadeInDown' data-delay='0.7s' href="#">
                                DONATE NOW</a>
                        </div>

                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <ul class="banner-arrows list-inline">
            <li><button class="banner-prev"><i class="fas fa-angle-left"></i></button></li>
            <li><button class="banner-next"><i class="fas fa-angle-right"></i></button></li>
        </ul>
    </div>
    <!--  ====================== Prayer Timeline Area =============================  -->
    <div class="prayer-time-area bg-light bg-image-pattern py-lg-7 py-5">
        <div class="container">
            <div class="prayer-timeline-container">
                <div class="prayer-slider">
                    <?php date_default_timezone_set('Asia/Jakarta'); ?>
                    <?php foreach($data_jadwal as $jadwal) : ?>
                    <div class="item">
                        <div class="prayer-timeline">
                            <div class="prayer-wrapper">
                                <h6 class="text-primary mb-3">Waktu <?= $jadwal->waktu_shalat ?></h6>
                                <h2 class="mb-4"><?= $jadwal->waktu_shalat ?></h2>
                                <span data-aos="fade-up" class="p-2 px-3 text-primary rounded bg-light"><span
                                        class="me-1"><i
                                            class="far fa-clock"></i></span><?= date('H:i', strtotime($jadwal->jam)) ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <!--  ====================== About Area =============================  -->
    <div id="about" class="about-area pt-lg-10 pt-8">
        <div class="container">
            <div class="row align-items-center">
                <div class="text-center text-md-start col-md-6">
                    <?php foreach($data_setting as $setting) : ?>
                    <div class="section-title mb-4">
                        <span data-aos="fade-in" class="text-secondary ">Intro Masjid</span>
                        <h2 class="h1 text-primary">Selamat Datang di Masjid <?= $setting->nama_masjid ?></h2>
                    </div>
                    <?php endforeach; ?>
                    <?php foreach($data_sejarah as $sejarah) : ?>
                    <p>
                        <?= $sejarah->deskripsi ?>
                    </p>
                    <?php endforeach; ?>
                    <!-- <p>
                        The lay to the he the their to tag antiquity began fur from sitting us, cities film english
                        could are quite business he be, who proper.
                    </p> -->
                    <div data-aos="fade-up" class="btn-container">
                        <a class='btn btn-primary text-white mt-4 mb-4 mb-md-0'
                            href='<?= base_url('sejarah') ?>'>Informasi Sejarah <i
                                class="fas fa-angle-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 offset-lg-1">
                    <div class="upcoming-prayer bg-light bg-image-pattern">
                        <div class="upcoming-prayer-wrapper ">
                            <h3 class="text-primary">Waktu Shalat Selanjutnya</h3>
                            <?php foreach($data_setting as $setting) : ?>
                            <ul class="prayer-meta list-inline mt-4 ">
                                <li class="list-inline-item"><small><i
                                            class="fas fa-mosque text-primary"></i><?= $setting->waktu_shalat ?></small>
                                </li>
                                <li class="list-inline-item"><small><i class="far fa-clock text-primary"></i>
                                        <?= date('H:i', strtotime($setting->jam)) ?>
                                    </small></li>
                            </ul>
                            <?php endforeach; ?>
                            <ul class="prayer-countdown my-4 list-inline">
                                <li>
                                    <h3 id="jam" class="display-4 text-primary"></h3><span
                                        class="text-secondary">Jam</span>
                                </li>
                                <li>
                                    <h3 id="menit" class="display-4  text-primary"></h3><span
                                        class="text-secondary">Menit</span>
                                </li>
                                <li>
                                    <h3 id="detik" class="display-4  text-primary"></h3><span
                                        class="text-secondary">Detik</span>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  ====================== Video Area =============================  -->
    <!--  ====================== Service Area =============================  -->
    <div class="service-area bg-image-pattern service-shape mt-5 py-lg-10 py-8 bg-light">
        <div class="container">
            <div class="section-title text-center mb-4">
                <span data-aos="fade-in" class="text-primary">What we do</span>
                <h2 class="h1">Layanan</h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="service-item mt-4">
                        <div class="service-wrapper bg-white">
                            <div class="service-icon">
                                <img src="<?= base_url('frontend/assets/images/service-icon.png') ?>" alt="title">
                            </div>
                            <div class="service-content mt-4">
                                <h5 class="mb-3">Info Hewan Qurban</h5>
                                <p>Jika ingin mengetahui terkait info hewan qurban Idul Adha 1445H</p>
                                <a data-bs-toggle="modal" data-bs-target="#service1" href="#" class="text-primary">Lihat
                                    Selengkapnya <i class="fas fa-angle-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="service-modal modal fade" id="service1">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Hewan Qurban</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-12">
                                        <img src="<?= base_url('frontend/assets/images/info qurban.jpeg') ?>" alt="Info Qurban">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item mt-4">
                        <div class="service-wrapper bg-white">
                            <div class="service-icon">
                                <img src="<?= base_url('frontend/assets/images/service-icon2.png') ?>" alt="title">
                            </div>
                            <div class="service-content mt-4">
                                <h5 class="mb-3">Jum'at Berkah</h5>
                                <p>Layanan Setiap Hari Jum'at yang insha allah berkah</p>
                                <a data-bs-toggle="modal" data-bs-target="#service2" href="#" class="text-primary">Lihat
                                    Selengkapnya <i class="fas fa-angle-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="service-modal modal fade" id="service2">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Sedekah Jum'at</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <img src="<?= base_url('frontend/assets/images/sedekah_jumat.png') ?>" alt="Sedekah Hari Jumat">
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <p class="text-center">Sedekah di hari Jum'at dibanding sedekah di hari lainnya seperti sedekah di bulan Ramadhan dibandingkan sedekah bulan-bulan lainnya (Ibnu Qayyim)</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item mt-4">
                        <div class="service-wrapper bg-white">
                            <div class="service-icon">
                                <img src="<?= base_url('frontend/assets/images/service-icon3.png') ?>" alt="title">
                            </div>
                            <div class="service-content mt-4">
                                <h5 class="mb-3">Jamuan Jum'at Berkah</h5>
                                <p>Keberkahan setiap hari jumat dengan jamuan berupa makanan, minuman</p>
                                <a data-bs-toggle="modal" data-bs-target="#service3" href="#" class="text-primary">Lihat
                                    Selengkapnya <i class="fas fa-angle-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="service-modal modal fade" id="service3">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Jamuan Jum'at Berkah</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="<?= base_url('frontend/assets/images/jamuan_jumat.png') ?>" alt="Jamuan Jumat">
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
    <!--  ====================== Event Area =============================  -->
    <div class="event-area py-lg-10 py-8">
        <div class="container">
            <div class="section-title text-center mb-4">
                <span data-aos="fade-in" class="text-primary">Agenda</span>
                <h2 class="h1">Kegiatan Acara</h2>
            </div>
            <div class="row d-flex align-items-stretch">
                <?php foreach($agenda as $data) : ?>
                <div class="col-md-6 col-lg-4">
                    <div class="event-item mt-4">
                        <div class="event-image">
                            <img src="<?= base_url('frontend/assets/images/event/1.jpg') ?>" alt="image">
                            <span class="event-btn badge bg-primary text-white"><i class="far fa-calendar-alt me-2"></i>
                                <?= format_indo($data->tgl_awal) ?>
                                <?php if ($data->tgl_akhir === NULL || $data->tgl_akhir === '0000-00-00') {
                                    echo 'Selesai';
                                }else{
                                    format_indo($data->tgl_akhir);
                                }
                                ?>
                            </span>
                        </div>
                        <div class="event-content">
                            <ul class="event-address list-inline">
                                <li class="list-inline-item"><span class="icon"><img
                                            src="<?= base_url('frontend/assets/images/location-icon.svg') ?>"
                                            alt="title"></span>
                                    <?= $data->lokasi ?>
                                </li>
                            </ul>
                            <h5 class="mb-3"><?= $data->judul ?></h5>
                            <a class='text-primary' href='<?= base_url("agenda/detailAgenda/".$data->slug) ?>'>
                                Detail</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <div class="text-center mt-5" data-aos="slide-up"><a class='btn btn-primary text-white'
                        href='<?= base_url('agenda') ?>'>Semua Agenda</a></div>
            </div>

        </div>
    </div>
    <!--  ====================== Call To Action Area =============================  -->

    <!--  ====================== Course Area =============================  -->

    <!--  ====================== Testimonial Area =============================  -->

    <!--  ====================== Counter Area =============================  -->
    <div class="counter-area py-lg-8 py-5 bg-image-pattern bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="counter-item my-3">
                        <div class="counter-icon"> <img src="<?= base_url('frontend/assets/images/service-icon.png') ?>"
                                alt="title"></div>
                        <div class="counter-content">
                            <h2 data-aos="fade-up" class="h1 text-white"><span
                                    class="counter-number"><?= $jumlah_pengurus ?></span></h2>
                            <h5 class="m-0 text-white">Pengurus Masjid</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="counter-item my-3">
                        <div class="counter-icon"> <img src="<?= base_url('frontend/assets/images/service-icon2.png') ?>" alt="title"></div>
                        <div class="counter-content">
                            <h2 data-aos="fade-up" class="h1 text-white"><span class="counter-number"><?= $jumlah_video ?></span></h2>
                            <h5 class="m-0 text-white">Nurul Ilmi TV</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="counter-item my-3">
                        <div class="counter-icon"> <img
                                src="<?= base_url('frontend/assets/images/service-icon3.png') ?>" alt="title"></div>
                        <div class="counter-content">
                            <h2 data-aos="fade-up" class="h1 text-white"><span
                                    class="counter-number"><?= $jumlah_agenda ?></span></h2>
                            <h5 class="m-0 text-white">Agenda Acara</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  ====================== Team Area =============================  -->
    <div class="team-area py-lg-10 py-8">
        <div class="container">
            <div class="section-title text-center mb-4">
                <span data-aos="fade-in" class="text-primary">Imam Masjid</span>
                <h2 class="h1">Imam Nurul Ilmi</h2>
            </div>
            <div class="row">
                <?php foreach($data_imam as $imam) : ?>
                <div class="col-sm-6 col-lg-3">
                    <div class="team-item mt-4">
                        <div class="team-image">
                            <ul class="team-social list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                            <?php if(!empty($imam->foto)) : ?>
                            <img src="<?= base_url('upload/imam/'.$imam->foto) ?>" alt="<?= $imam->nama ?>">
                            <?php else: ?>
                            <img src="<?= base_url('upload/default.png') ?>" alt="Default">
                            <?php endif; ?>
                        </div>
                        <div class="team-content">
                            <h5>Nama &nbsp;: <?= $imam->nama ?></h5>
                            <span class="text-primary">Jabatan : <?= $imam->jabatan ?></span>
                            <br>
                            <span>Alamat &nbsp;: <?= $imam->alamat ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <div class="text-center mt-5" data-aos="slide-up"><a class='btn btn-primary text-white'
                        href='<?= base_url('imam') ?>'>Semua Imam</a></div>
            </div>
        </div>
    </div>
    <!--  ====================== Call To Action Area =============================  -->
    <div class="call-to-action-area bg-image-pattern py-lg-8 py-5 bg-primary">
        <div class="container">
            <div class="row">
                <?php foreach($data_setting as $setting) : ?>
                <div class="col-md-8 m-auto text-center">
                    <h2 class="text-white"><?= $setting->ayat_quran ?></h2>
                    <h3 class="text-white mb-3"><?= $setting->artinya ?>
                    </h3>
                    <p data-aos="slide-up" class="small text-white m-0">- <?= $setting->surah ?> - </p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!--  ====================== Blog Area =============================  -->
    <div id="blog" class="blog-area pt-lg-10 pt-8">
        <div class="container">
            <div class="section-title text-center mb-4">
                <span class="text-primary">Blog</span>
                <h2 class="h1">Artikel Terbaru</h2>
            </div>
            <div class="row">
                <?php foreach($artikel as $data) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-style mt-4">
                        <div class="blog-image">
                            <img src="<?= base_url('upload/artikel/'.$data->gambar) ?>" alt="title">
                        </div>
                        <div class="blog-content">
                            <span class="blog-meta"><i class="fas fa-tag me-2"></i><a
                                    href='<?= base_url('blog/kategori/'.$data->nama_kategori) ?>'><?= $data->nama_kategori ?></a></span>
                            <h4><a href='<?= base_url('blog/detail/'.$data->slug) ?>'> <?= $data->judul ?></a></h4>
                            <a href='<?= base_url('blog') ?>'>Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <div class="text-center mt-5" data-aos="slide-up"><a class='btn btn-primary text-white'
                        href='<?= base_url('blog') ?>'>Semua Artikel</a></div>

            </div>
        </div>
    </div>
    <!--  ====================== Contact Area =============================  -->
    <!--  ====================== Footer Area =============================  -->
    <?php $this->load->view('layout/footer') ?>
    <!-- gulp:js -->
    <script src="<?= base_url('frontend/') ?>assets/js/build.min.js"></script>
    <!-- jQuery -->
    <script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url('assets/') ?>plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
    $(document).ready(function() {
        // Panggil fungsi untuk menghitung waktu shalat saat halaman home di-load
        $.ajax({
            url: '<?php echo site_url('Home/getPrayerTime'); ?>',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                // Panggil fungsi untuk menghitung mundur waktu shalat
                // countDownPrayerTime(data.prayer_time);
                // $.each(data, function(index, item) {
                //     var id_setting = item.id_setting;
                //     var time_mundur = item.time_mundur;

                //     // Ubah jam mundur ke format jam, menit, detik
                //     var time_mundur_parts = time_mundur.split(":");
                //     var hours = time_mundur_parts[0];
                //     var minutes = time_mundur_parts[1];
                //     var seconds = time_mundur_parts[2];

                //     // Tampilkan jam mundur pada view
                //     $('#jam').text(hours);
                //     $('#menit').text(minutes);
                //     $('#detik').text(seconds);
                // });
                // Hitung jam mundur
                countDownPrayerTime(data);
                // var countdown = setInterval(function() {

                //     var prayerTime = data[0].jam;
                //     var time = prayerTime.split(':');
                //     // var prayerTimeParts = prayerTime.split(":");
                //     var prayerDate = new Date();
                //     var currentTime = new Date();
                //     prayerDate.setHours(parseInt(time[0]));
                //     prayerDate.setMinutes(parseInt(time[1]));
                //     prayerDate.setSeconds(parseInt(time[2]));

                //     var timeDiff = prayerDate - currentTime;
                //     var hours = Math.floor(timeDiff / (1000 * 60 * 60));
                //     var minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
                //     var seconds = Math.floor((timeDiff % (1000 * 60)) / 1000);

                //     // Tampilkan waktu shalat mundur
                //     $('#jam').text(hours);
                //     $('#menit').text(minutes);
                //     $('#detik').text(seconds);

                //     // Hentikan hitung mundur jika waktu shalat sudah lewat
                //     if (timeDiff <= 0) {
                //         clearInterval(countdown);
                //         // Atur teks menjadi 0 jika waktu telah lewat
                //         $('#jam').text('0');
                //         $('#menit').text('0');
                //         $('#detik').text('0');
                //     }
                // }, 1000);
            }
        });

        function countDownPrayerTime(data) {
            // Periksa apakah data waktu shalat tidak kosong
            if (data.length > 0) {
                // Ambil waktu shalat dari data yang diterima
                var prayerTime = data[0].jam;

                // Ubah waktu shalat menjadi objek Date
                var prayerDate = new Date();
                var timeParts = prayerTime.split(':');
                prayerDate.setHours(parseInt(timeParts[0]));
                prayerDate.setMinutes(parseInt(timeParts[1]));
                prayerDate.setSeconds(parseInt(timeParts[2]));

                // Hitung perbedaan waktu antara sekarang dan waktu shalat
                var timeDiff = prayerDate - new Date();

                // Mulai hitung mundur
                var countdown = setInterval(function() {
                    // Hitung sisa waktu dalam jam, menit, dan detik
                    var hours = Math.floor(timeDiff / (1000 * 60 * 60));
                    var minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((timeDiff % (1000 * 60)) / 1000);

                    // Tampilkan sisa waktu pada elemen HTML dengan id tertentu
                    $('#jam').text(hours);
                    $('#menit').text(minutes);
                    $('#detik').text(seconds);

                    // Kurangi sisa waktu dengan interval 1 detik
                    timeDiff -= 1000;

                    // Hentikan hitung mundur jika waktu shalat telah lewat
                    if (timeDiff < 0) {
                        clearInterval(countdown);
                        // Atur teks menjadi 0 jika waktu telah lewat
                        $('#jam').text('0');
                        $('#menit').text('0');
                        $('#detik').text('0');
                    }
                }, 1000);
            } else {
                // Tampilkan pesan bahwa tidak ada data waktu shalat yang ditemukan
                console.log('Tidak ada data waktu shalat yang ditemukan.');
            }
        }

    })
    </script>

    <!-- endgulp -->
</body>

</html>