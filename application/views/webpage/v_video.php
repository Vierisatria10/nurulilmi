<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= base_url('frontend/') ?>assets/images/favicon.png" type="images/x-icon" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url('frontend/') ?>assets/js/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('frontend/') ?>assets/js/OwlCarousel/owl.theme.default.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Philosopher:wght@700&display=swap"
        rel="stylesheet">
    <!-- gulp:css -->
    <link rel="stylesheet" href="<?= base_url('frontend/') ?>assets/css/app.min.css">
    <!-- endgulp -->
</head>

<style>
.widget {
    position: relative;
}
</style>

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
                <h1 class="text-white mb-2">Nurul Ilmi TV</h1>
                <nav class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href='<?= base_url('home') ?>'>Home</a></li>
                        <li class="breadcrumb-item active">Nurul Ilmi TV</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!--  ====================== About Area =============================  -->
    <div class="about-area py-lg-10 py-8">
        <div class="container">
            <div class="row">
                <h3 class="mb-3 text-primary">Nurul Ilmi TV</h3>
                <div class="col-lg-9">
                    <?php if(!empty($pesan)) : ?>
                    <p class="text-center"><?= $pesan ?></p>
                    <?php else: ?>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-4 mb-2">

                            <?php foreach($data_video as $video) : ?>
                            <div class="blog-style mt-4">
                                <div class="blog-image">
                                    <iframe src="//www.youtube.com/embed/RtC-HZkhtq0" frameborder="0"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="blog-content">
                                    <h4 class="mb-0"><a href='<?= base_url($video->link ) ?>'><?= $video->judul ?></a>
                                    </h4>
                                    <h4><a href='<?= base_url($video->link ) ?>'></a>
                                    </h4>
                                    <a
                                        href='<?= base_url("video/kategori_video/".$video->slug) ?>'><?= $video->nama_video ?></a>
                                </div>
                            </div>
                            <?php endforeach; ?>


                            <!-- Infinity Scroll Loader
                            ============================================= -->
                            <!-- <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="page-load-status hovering-load-status">
                                        <div class="css3-spinner infinite-scroll-request">
                                            <div class="css3-spinner-ball-pulse-sync">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="mt-4 btn text-center btn-dark ls1 text-uppercase load-next-portfolio"
                                        id="btn-load">Load More</button>
                                </div>
                            </div> -->

                        </div>
                        <div class="col-lg-4 col-md-5 mt-4">
                            <div class="course-feature mb-4 bg-white text-center rounded">
                                <i class="fas fa-search fa-2x"></i>
                                <h3 class="text-primary pb-2 text-center">Cari Agenda</h3>
                                <form action="<?= base_url('agenda/cari_agenda') ?>" method="POST">
                                    <div class="form-group">
                                        <input type="text" name="keyword" id="keyword" class="form-control"
                                            placeholder="JUDUL">
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary" style="width: 100%;">CARI</button>
                                </form>
                            </div>
                            <!-- Sidebar Widget 2
                        ============================================= -->
                            <div class="widget">
                                <div class="owl-carousel carousel-widget" data-margin="0" data-items="1"
                                    data-pagi="false" data-loop="true" data-speed="1000" data-autoplay="5000">
                                    <a href="https://istiqlal.or.id/virtualtour/"><img
                                            src="https://istiqlal.or.id/assets/img/informasi/zwv7jcnx3a.jpg"
                                            class="img-responsive aligncenter" target="_blank"></a>
                                    <a
                                        href="https://docs.google.com/forms/d/e/1FAIpQLSftLB133mq71JmbrviugP_--vKArqYupbiYY4Ov2Rog__7uyA/viewform"><img
                                            src="https://istiqlal.or.id/assets/img/informasi/jjspsr995w.jpeg"
                                            class="img-responsive aligncenter" target="_blank"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>




            </div>
        </div>
    </div>
    <!--  ====================== Footer Area =============================  -->
    <?php $this->load->view('layout/footer') ?>
    <!-- gulp:js -->
    <script src="<?= base_url('frontend/') ?>assets/js/build.min.js"></script>
    <script>
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