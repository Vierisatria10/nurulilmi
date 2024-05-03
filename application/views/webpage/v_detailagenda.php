<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $agenda['judul']; ?></title>
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
    <!-- Owl carousel css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <!--  ====================== Page Title Area =============================  -->
    <div class="page-title-area py-lg-6 py-5 bg-image-pattern">
        <div class="container">
            <div class="page-title-wrapper text-center">
                <h1 class="text-white mb-2"><?= $agenda['judul']; ?></h1>
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
                <h3 class="mb-3 text-primary"><?= $agenda['judul']; ?></h3>
                <div class="col-md-8">
                    <img src="<?= base_url('upload/agenda/'.$agenda['gambar']) ?>" style="height: auto; width: 100%;"
                        alt="">
                    <p>
                        <?= $agenda['deskripsi']; ?>
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
                    <h2 class="my-4">Tulis Komentar Anda Terkait <?= $agenda['judul'] ?></h2>
                    <form class="contact-form">
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <input type="email" class="form-control" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <input type="email" class="form-control" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="mb-4">
                                <textarea class="form-control" rows="7" placeholder="Your Comment"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </form>
                </div>

                <div class="col-md-5 col-lg-4">
                    <div class="course-feature mb-4 bg-white rounded">
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
                    </div>

                    <div class="course-feature bg-white rounded">
                        <h4 class="mb-4 text-primary">Agenda Terbaru</h4>
                        <?php foreach($data_agenda as $agd) : ?>
                        <div class="course-block-author mt-3">
                            <img src="<?= base_url('upload/agenda/'.$agd['gambar']) ?>" alt="title">
                            <div class="info">
                                <p class="m-0"><a href='<?= base_url('agenda') ?>'><?= $agd['judul'] ?></a>
                                    <br> <?= format_indo($agd['tgl_awal']); ?> WIB
                                </p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="owl-carousel mt-4">
                        <div><img src="<?= base_url('frontend/assets/images/slide1.jpg') ?>" alt=""> </div>
                        <div><img src="<?= base_url('frontend/assets/images/slide2.jpeg') ?>" alt=""> </div>
                        <div><img src="<?= base_url('frontend/assets/images/slide1.jpg') ?>" alt=""> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  ====================== Footer Area =============================  -->
    <?php $this->load->view('layout/footer') ?>
    <!-- gulp:js -->
    <script src="<?= base_url('frontend/') ?>assets/js/build.min.js"></script>
    <!-- owl carousel js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 5000,
            responsiveClass: true,
            autoplayHoverPause: true
        });
    });
    </script>
    <!-- endgulp -->
</body>

</html>