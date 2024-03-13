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
            <div class="banner-item">
                <div class="banner-bg-image"><img src="<?= base_url('frontend/assets/images/banner/1.jpg') ?>"
                        alt="image"></div>
                <div class="container">
                    <div class="banner-wrapper">
                        <div class="banner-content ms-0">


                            <h1 class="display-3 text-primary" data-animation="fadeInDown" data-delay="0.7s">New York
                                City Holy Mosque
                            </h1>
                            <p class="lead mb-6 text-secondary" data-animation="fadeInDown" data-delay="0.7s">Around
                                16,000 Muslims live in the our twon & we have now 2 Grand Mosques.</p>
                            <a class='btn btn-primary border-radius-25 theme-btn-1 text-white'
                                data-animation='fadeInDown' data-delay='0.7s' href='/campaign'>
                                DONATE NOW</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="banner-item">
                <div class="banner-bg-image"><img src="<?= base_url('frontend/assets/images/banner/2.jpg') ?>"
                        alt="image"></div>
                <div class="container">
                    <div class="banner-wrapper">
                        <div class="banner-content text-center">

                            <h1 class="display-3 text-primary" data-animation="fadeInDown" data-delay="0.7s">We love to
                                pray for our God
                            </h1>
                            <p class="lead mb-6 text-secondary" data-animation="fadeInDown" data-delay="0.7s">Around
                                16,000 Muslims live in the our twon & we have now 2 Grand Mosques.</p>
                            <a class='btn btn-primary border-radius-25 theme-btn-1 text-white'
                                data-animation='fadeInDown' data-delay='0.7s' href='/campaign'>
                                DONATE NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-item">
                <div class="banner-bg-image"><img src="<?= base_url('frontend/assets/images/banner/3.jpg') ?>"
                        alt="image"></div>
                <div class="container">
                    <div class="banner-wrapper">
                        <div class="banner-content ms-0">


                            <h1 class="display-3 text-primary" data-animation="fadeInDown" data-delay="0.7s">Where peace
                                coming from...
                            </h1>
                            <p class="lead mb-6 text-secondary" data-animation="fadeInDown" data-delay="0.7s">Around
                                16,000 Muslims live in the our twon & we have now 2 Grand Mosques.</p>
                            <a class='btn btn-primary border-radius-25 theme-btn-1 text-white'
                                data-animation='fadeInDown' data-delay='0.7s' href='/campaign'>
                                DONATE NOW</a>
                        </div>

                    </div>
                </div>
            </div>
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
    <div id="khuthba" class="video-area py-lg-10 py-8">
        <div class="container">
            <div class="text-center">
                <div class="section-title mb-4">
                    <span data-aos="fade-in" class="text-secondary">Sermons / Khuthba</span>
                    <h2 class="h1 text-primary">Khuthba Collection</h2>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="video-item mt-4">
                        <div class="video-image">
                            <img src="<?= base_url('frontend/assets/images/khuthba/1.jpg') ?>" alt="title">
                            <a class="video-popup" href="https://www.youtube.com/watch?v=CQzFHdaMvuM"><i
                                    class="fas fa-video"></i></a>
                        </div>
                        <div class="video-content">
                            <h5 class="text-white">EP #19 : The Call of Ibrahim </h5>
                            <a class="badge bg-primary text-white fw-normal">04 Feb, 2021</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="video-item mt-4">
                        <div class="video-image">
                            <img src="<?= base_url('frontend/assets/images/khuthba/2.jpg') ?>" alt="title">
                            <a class="video-popup" href="https://www.youtube.com/watch?v=CQzFHdaMvuM"><i
                                    class="fas fa-video"></i></a>
                        </div>
                        <div class="video-content">
                            <h5 class="text-white">EP #18 : Hajj - The Journey of Hearts
                            </h5>
                            <a class="badge bg-primary text-white fw-normal">28 Jan, 2021</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="video-item mt-4">
                        <div class="video-image">
                            <img src="<?= base_url('frontend/assets/images/khuthba/3.jpg') ?>" alt="title">
                            <a class="video-popup" href="https://www.youtube.com/watch?v=CQzFHdaMvuM"><i
                                    class="fas fa-video"></i></a>
                        </div>
                        <div class="video-content">
                            <h5 class="text-white">EP #17 : Guiding to Allah by the Book
                            </h5>
                            <a class="badge bg-primary text-white fw-normal">21 Jan, 2021</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="video-item mt-4">
                        <div class="video-image">
                            <img src="<?= base_url('frontend/assets/images/khuthba/4.jpg') ?>" alt="title">
                            <a class="video-popup" href="https://www.youtube.com/watch?v=CQzFHdaMvuM"><i
                                    class="fas fa-video"></i></a>
                        </div>
                        <div class="video-content">
                            <h5 class="text-white">EP #16 : Ramadan Warriors
                            </h5>
                            <a class="badge bg-primary text-white fw-normal">14 Jan, 2021</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="video-item mt-4">
                        <div class="video-image">
                            <img src="<?= base_url('frontend/assets/images/khuthba/5.jpg') ?>" alt="title">
                            <a class="video-popup" href="https://www.youtube.com/watch?v=CQzFHdaMvuM"><i
                                    class="fas fa-video"></i></a>
                        </div>
                        <div class="video-content">
                            <h5 class="text-white">EP #15 : Have You Ever Tasted Jannah?
                            </h5>
                            <a class="badge bg-primary text-white fw-normal">09 Jan, 2021</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="video-item mt-4">
                        <div class="video-image">
                            <img src="assets/images/khuthba/6.jpg" alt="title">
                            <a class="video-popup" href="https://www.youtube.com/watch?v=CQzFHdaMvuM"><i
                                    class="fas fa-video"></i></a>
                        </div>
                        <div class="video-content">
                            <h5 class="text-white">EP #14 : Sabr or Shukr
                            </h5>
                            <a class="badge bg-primary text-white fw-normal">02 Jan, 2021</a>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5" data-aos="slide-up"><a class='btn btn-primary text-white'
                        href='/all-khuthba'>More Khuthba</a></div>
            </div>

        </div>
    </div>
    <!--  ====================== Service Area =============================  -->
    <div class="service-area bg-image-pattern service-shape py-lg-10 py-8 bg-light">
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
                                <h5 class="mb-3">Mimbar Jumat</h5>
                                <p>Quite into liabilities frequency; Each be own for through parents' understand the of
                                    it is met and as
                                    some</p>
                                <a data-bs-toggle="modal" data-bs-target="#service1" href="#" class="text-primary">Learn
                                    More <i class="fas fa-angle-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="service-modal modal fade" id="service1">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Health CheckUp</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>The that all once our the relieved its accompany will. Must for have or a back to
                                        war, the desk in the me boss it note has could are boss of escape, in
                                        consideration film control phase the quitting negatives, the be high and he his
                                        researches by politely then.</p>
                                    <p>Suggests it even how several rather of it to his real of week you him should the
                                        out gave could mister or annoyed. Devious you simple, been brothers evening. To
                                        couldn't a to stitching in orthographic the tone to feel the not reached ran
                                        study of you tend with will the nice, all must off and advantage become not the
                                        its would of at after me make could on as explain the seen, for simple, first
                                        for left recommendation hired their time illustrated insurance with universal
                                        proposal I pleasure there mountains, all attention particularly more son, card a
                                        and, we.
                                    </p>
                                    <p>
                                        Four to greediness the in a written the a finds the getting staple towards his
                                        they goals so, minutes. Been having problem of trial. King's and her off of any
                                        time. Next or said reflections, rhetoric desk clarinet several ideas only you
                                        right, made known not so powers sleep. Road, than attempt, suspicious may
                                        respective circumstances. Turned the is don't in the and is remain which see his
                                        too felt frequently excuse small I one about the his answering feedback th</p>
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
                                <h5 class="mb-3">Community Services</h5>
                                <p>Life of as differentiates up this or my the at sleep frugality a mars back, office
                                    universe a he somehow the rippedup</p>
                                <a data-bs-toggle="modal" data-bs-target="#service2" href="#" class="text-primary">Learn
                                    More <i class="fas fa-angle-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="service-modal modal fade" id="service2">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Community Services</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>The that all once our the relieved its accompany will. Must for have or a back to
                                        war, the desk in the me boss it note has could are boss of escape, in
                                        consideration film control phase the quitting negatives, the be high and he his
                                        researches by politely then.</p>
                                    <p>Suggests it even how several rather of it to his real of week you him should the
                                        out gave could mister or annoyed. Devious you simple, been brothers evening. To
                                        couldn't a to stitching in orthographic the tone to feel the not reached ran
                                        study of you tend with will the nice, all must off and advantage become not the
                                        its would of at after me make could on as explain the seen, for simple, first
                                        for left recommendation hired their time illustrated insurance with universal
                                        proposal I pleasure there mountains, all attention particularly more son, card a
                                        and, we.
                                    </p>
                                    <p>
                                        Four to greediness the in a written the a finds the getting staple towards his
                                        they goals so, minutes. Been having problem of trial. King's and her off of any
                                        time. Next or said reflections, rhetoric desk clarinet several ideas only you
                                        right, made known not so powers sleep. Road, than attempt, suspicious may
                                        respective circumstances. Turned the is don't in the and is remain which see his
                                        too felt frequently excuse small I one about the his answering feedback th</p>
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
                                <h5 class="mb-3">Umrah & Hajj</h5>
                                <p>Testimony best of a creative was thought. Can poster he three who and catch rendering
                                    may pane </p>
                                <a data-bs-toggle="modal" data-bs-target="#service3" href="#" class="text-primary">Learn
                                    More <i class="fas fa-angle-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="service-modal modal fade" id="service3">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Umrah & Hajj</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>The that all once our the relieved its accompany will. Must for have or a back to
                                        war, the desk in the me boss it note has could are boss of escape, in
                                        consideration film control phase the quitting negatives, the be high and he his
                                        researches by politely then.</p>
                                    <p>Suggests it even how several rather of it to his real of week you him should the
                                        out gave could mister or annoyed. Devious you simple, been brothers evening. To
                                        couldn't a to stitching in orthographic the tone to feel the not reached ran
                                        study of you tend with will the nice, all must off and advantage become not the
                                        its would of at after me make could on as explain the seen, for simple, first
                                        for left recommendation hired their time illustrated insurance with universal
                                        proposal I pleasure there mountains, all attention particularly more son, card a
                                        and, we.
                                    </p>
                                    <p>
                                        Four to greediness the in a written the a finds the getting staple towards his
                                        they goals so, minutes. Been having problem of trial. King's and her off of any
                                        time. Next or said reflections, rhetoric desk clarinet several ideas only you
                                        right, made known not so powers sleep. Road, than attempt, suspicious may
                                        respective circumstances. Turned the is don't in the and is remain which see his
                                        too felt frequently excuse small I one about the his answering feedback th</p>
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
    <!-- <div class="course-area py-lg-10 py-8">
        <div class="container">
            <div class="section-title text-center mb-4">
                <span data-aos="fade-in" class="text-primary">Learn With Us</span>
                <h2 class="h1">Online Islamic Courses</h2>
            </div>
            <div class="row" data-masonry='{"percentPosition": true }'>
                <div class="col-md-6 col-lg-4">
                    <div class="course-item mb-4">
                        <img class="course-image" src="assets/images/course/1.jpg" alt="title">
                        <div class="course-overlay">
                            <h4 class="mb-md-3"><a class='text-white' href='/single-course'>Dur al-Manthur </a></h4>
                            <div class="course-content">
                                <div class="course-author"><img src="assets/images/author/1.jpg" alt="title">

                                    <div class="info">
                                        <h6 class="text-white mb-0">Ali Reza</h6>
                                        <span class="text-white small">Islamic Scholar</span>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-item mb-4">
                        <img class="course-image" src="assets/images/course/2.jpg" alt="title">
                        <div class="course-overlay">
                            <h4 class="mb-md-3"><a class='text-white' href='/single-course'>Surah Quraish</a></h4>
                            <div class="course-content">
                                <div class="course-author"><img src="assets/images/author/1.jpg" alt="title">

                                    <div class="info">
                                        <h6 class="text-white mb-0">Ali Reza</h6>
                                        <span class="text-white small">Islamic Scholar</span>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-item mb-4">
                        <img class="course-image" src="assets/images/course/3.jpg" alt="title">
                        <div class="course-overlay">
                            <h4 class="mb-md-3"><a class='text-white' href='/single-course'>Surat Al-'Adiyat</a></h4>
                            <div class="course-content">
                                <div class="course-author"><img src="assets/images/author/1.jpg" alt="title">

                                    <div class="info">
                                        <h6 class="text-white mb-0">Ali Reza</h6>
                                        <span class="text-white small">Islamic Scholar</span>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-item mb-4">
                        <img class="course-image" src="assets/images/course/4.jpg" alt="title">
                        <div class="course-overlay">
                            <h4 class="mb-md-3"><a class='text-white' href='/single-course'>Surat Al-Qari'ahf</a></h4>
                            <div class="course-content">
                                <div class="course-author"><img src="assets/images/author/1.jpg" alt="title">

                                    <div class="info">
                                        <h6 class="text-white mb-0">Ali Reza</h6>
                                        <span class="text-white small">Islamic Scholar</span>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-item mb-4">
                        <img class="course-image" src="assets/images/course/5.jpg" alt="title">
                        <div class="course-overlay">
                            <h4 class="mb-md-3"><a class='text-white' href='/single-course'>Tafsir al-Jalalayn </a></h4>
                            <div class="course-content">
                                <div class="course-author"><img src="assets/images/author/1.jpg" alt="title">

                                    <div class="info">
                                        <h6 class="text-white mb-0">Ali Reza</h6>
                                        <span class="text-white small">Islamic Scholar</span>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-item mb-4">
                        <img class="course-image" src="assets/images/course/6.jpg" alt="title">
                        <div class="course-overlay">
                            <h4 class="mb-md-3"><a class='text-white' href='/single-course'>Surah Yaa'sin</a></h4>
                            <div class="course-content">
                                <div class="course-author"><img src="assets/images/author/1.jpg" alt="title">

                                    <div class="info">
                                        <h6 class="text-white mb-0">Ali Reza</h6>
                                        <span class="text-white small">Islamic Scholar</span>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>



        </div>
    </div> -->


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
                        <div class="counter-icon"> <img src="assets/images/service-icon2.png" alt="title"></div>
                        <div class="counter-content">
                            <h2 data-aos="fade-up" class="h1 text-white"><span class="counter-number">100</span></h2>
                            <h5 class="m-0 text-white">Inspirational Khuthba</h5>
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
                <span data-aos="fade-in" class="text-primary">You love them</span>
                <h2 class="h1">Islamic Scholar</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="team-item mt-4">
                        <div class="team-image">
                            <ul class="team-social list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul><img src="assets/images/scholar/1.jpg" alt="title">
                        </div>
                        <div class="team-content">
                            <h5>Nur Ahmad</h5>
                            <span class="text-primary">PHD, AB University</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="team-item mt-4">
                        <div class="team-image">
                            <ul class="team-social list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul><img src="assets/images/scholar/5.jpg" alt="title">
                        </div>
                        <div class="team-content">
                            <h5>Mir Ali</h5>
                            <span class="text-primary">PHD, CD University</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="team-item mt-4">
                        <div class="team-image">
                            <ul class="team-social list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul><img src="assets/images/scholar/3.jpg" alt="title">
                        </div>
                        <div class="team-content">
                            <h5>Robert N.</h5>
                            <span class="text-primary">PHD, EF University</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="team-item mt-4">
                        <div class="team-image">
                            <ul class="team-social list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul><img src="assets/images/scholar/4.jpg" alt="title">
                        </div>
                        <div class="team-content">
                            <h5>Jhon Doe</h5>
                            <span class="text-primary">PHD, GH University</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  ====================== Call To Action Area =============================  -->
    <div class="call-to-action-area bg-image-pattern py-lg-8 py-5 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto text-center">
                    <h3 class="text-white"> اب الْمُسْلِمُ مَنْ سَلِمَ الْمُسْلِمُونَ مِنْ لِسَانِهِ وَيَدِهِ </h3>
                    <h2 class="text-white mb-3">A Muslim is the one who avoids harming Muslims with his tongue and hands
                    </h2>
                    <p data-aos="slide-up" class="small text-white m-0">- Sahih al-Bukhari, 10 </p>
                </div>
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
    <script>
    $(document).ready(function() {
        // Panggil fungsi untuk menghitung waktu shalat saat halaman home di-load
        $.ajax({
            url: '<?php echo site_url('Home/getPrayerTime'); ?>',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                // Panggil fungsi untuk menghitung mundur waktu shalat
                // Hitung jam mundur
                var countdown = setInterval(function() {
                    var currentTime = new Date();
                    var time = data.reverse_time.time_mundur.split(':');
                    // var prayerTimeParts = prayerTime.split(":");
                    var prayerDate = new Date();
                    prayerDate.setHours(parseInt(time[0]));
                    prayerDate.setMinutes(parseInt(time[1]));
                    prayerDate.setSeconds(parseInt(time[2]));

                    var timeDiff = prayerDate - currentTime;
                    var hours = Math.floor(timeDiff / (1000 * 60 * 60));
                    var minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((timeDiff % (1000 * 60)) / 1000);

                    // Tampilkan waktu shalat mundur
                    $('#jam').text(hours);
                    $('#menit').text(minutes);
                    $('#detik').text(seconds);

                    // Hentikan hitung mundur jika waktu shalat sudah lewat
                    if (timeDiff <= 0) {
                        clearInterval(countdown);
                    }
                }, 1000);
            }
        });
        // Fungsi untuk menghitung mundur waktu shalat
        function countDownPrayerTime(prayerTime) {
            var countdown = setInterval(function() {
                var currentTime = new Date();
                var prayerTimeParts = prayerTime.split(":");
                var prayerDate = new Date();
                prayerDate.setHours(parseInt(prayerTimeParts[0]));
                prayerDate.setMinutes(parseInt(prayerTimeParts[1]));
                prayerDate.setSeconds(parseInt(prayerTimeParts[2]));

                var timeDiff = prayerDate - currentTime;
                var hours = Math.floor(timeDiff / (1000 * 60 * 60));
                var minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((timeDiff % (1000 * 60)) / 1000);

                // Tampilkan waktu shalat mundur
                $('#jam').text(hours);
                $('#menit').text(minutes);
                $('#detik').text(seconds);

                // Hentikan hitung mundur jika waktu shalat sudah lewat
                if (timeDiff <= 0) {
                    clearInterval(countdown);
                }
            }, 1000);
        }

    })
    </script>

    <!-- endgulp -->
    <script type="text/javascript">
    window.$crisp = [];
    window.CRISP_WEBSITE_ID = "0fb3e5b5-1038-45e7-a153-173d144eee90";
    (function() {
        d = document;
        s = d.createElement("script");
        s.src = "https://client.crisp.chat/l.js";
        s.async = 1;
        d.getElementsByTagName("head")[0].appendChild(s);
    })();
    </script>
</body>

</html>