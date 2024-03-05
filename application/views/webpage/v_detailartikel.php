<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $detail_artikel['judul']; ?></title>
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
    <style>
    .grid-inner {
        width: 100%;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
    }

    .grid-container,
    .grid-inner {
        position: relative;
        overflow: hidden;
    }
    </style>
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
    <!--  ====================== Page Title Area =============================  -->
    <div class="page-title-area py-lg-6 py-5 bg-image-pattern">
        <div class="container">
            <div class="page-title-wrapper text-center">
                <h1 class="text-white mb-2"><?= $detail_artikel['judul']; ?></h1>
                <nav class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href='<?= base_url('home') ?>'>Home</a></li>
                        <li class="breadcrumb-item active"><?= $judul ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!--  ====================== About Area =============================  -->
    <div class="about-area py-lg-10 py-8">
        <div class="container">
            <div class="row">
                <h3 class="mb-3 text-primary"><?= $detail_artikel['judul']; ?></h3>
                <div class="col-md-8">
                    <img src="<?= base_url('upload/artikel/'.$detail_artikel['gambar']) ?>"
                        style="height: auto; width: 100%;" alt="">
                    <p>
                        <?= $detail_artikel['deskripsi']; ?>
                    </p>
                    <br><br>
                    <span>Bagikan :</span>
                    <div class="p-2">
                        <ul class="entry-social list-inline  mb-5">
                            <li class="list-inline-item twitter">
                                <a href="https://twitter.com/" target="_blank">
                                    <i class="fab fa-twitter"></i>

                                </a>
                            </li>
                            <li class="list-inline-item facebook">
                                <a href="https://anchor.fm/" target="_blank">
                                    <i class="fab fa-facebook-f"></i>

                                </a>
                            </li>
                            <li class="list-inline-item linkedin">
                                <a href="https://linkedin.com/" target="_blank">
                                    <i class="fab fa-linkedin"></i>

                                </a>
                            </li>
                            <li class="list-inline-item pinterest">
                                <a href="https://www.pinterest.com/" target="_blank">
                                    <i class="fab fa-pinterest"></i>

                                </a>
                            </li>
                            <li class="list-inline-item whatsapp">
                                <a href="https://www.whatsapp.com/" target="_blank">
                                    <i class="fab fa-whatsapp"></i>

                                </a>
                            </li>

                        </ul>
                    </div>
                    <h4>Related Posts:</h4>
                    <div class="posts-sm row col-mb-30 related-posts">
                        <div class="entry col-md-6">
                            <!-- Post Article -->
                            <div class="grid-inner row align-items-center no-gutter">
                                <div class="col-auto">
                                    <div class="entry-image">
                                        <a
                                            href="https://istiqlal.or.id/blog/detail/adab--kunci-bahagia-dan-kesuksesan-hidup.html"><img
                                                src="https://istiqlal.or.id/assets/img/artikel/Screenshot_2024-01-31_140042.png"
                                                alt="Adab: Kunci Bahagia dan Kesuksesan Hidup"></a>
                                    </div>
                                </div>
                                <div class="col ps-3">
                                    <div class="entry-title">
                                        <h4 class="fw-medium"><a
                                                href="https://istiqlal.or.id/blog/detail/adab--kunci-bahagia-dan-kesuksesan-hidup.html">Adab:
                                                Kunci Bahagia dan Kesuksesan Hidup</a></h4>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><span>by</span> <a href="#">admin</a></li>
                                            <li><i class="icon-time"></i><a href="#">31 Jan 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 col-lg-4">
                    <!-- <div class="course-feature mb-4 bg-white rounded">
                        <h4 class="text-primary pb-2">Informasi Agenda :</h4>
                        <ul class="list-inline">
                            <li><span class="me-2 text-primary"><i class="fas fa-calendar-plus"></i></span>
                                <?= format_indo($agenda['tgl_awal']); ?> <?= $agenda['jam_awal']; ?> WIB</li>
                            <li class="mt-1">
                                <span class="me-2 text-primary">
                                    <i class="fas fa-clock"></i>
                                </span><?= format_indo($agenda['tgl_akhir']); ?> <?= $agenda['jam_akhir']; ?> WIB
                            </li>
                            <li class="mt-1">
                                <span class="me-2 text-primary">
                                    <i class="fas fa-map-marker-alt"></i>
                                </span><?= $agenda['lokasi']; ?>
                            </li>
                            <li class="mt-1">
                                <span class="me-2 text-primary">
                                    <i class="fas fa-user"></i>
                                </span><?= $agenda['user']; ?>
                            </li>
                        </ul>
                    </div> -->

                    <div class="course-feature bg-white rounded">
                        <h4 class="mb-4 text-primary">Artikel Terbaru</h4>
                        <?php foreach($data_artikel as $art) : ?>
                        <div class="course-block-author mt-3">
                            <img src="<?= base_url('upload/artikel/'.$art['gambar']) ?>" alt="title">
                            <div class="info">
                                <p class="m-0"><a href='<?= base_url('blog') ?>'><?= $art['judul'] ?></a>
                                    <br> <?= format_indo($art['tanggal_dibuat']); ?> WIB
                                </p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  ====================== Footer Area =============================  -->
    <?php $this->load->view('layout/footer') ?>
    <!-- gulp:js -->
    <script src="<?= base_url('frontend/') ?>assets/js/build.min.js"></script>
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