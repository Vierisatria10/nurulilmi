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
    <?php $this->load->view('layout/header') ?>
    <!--  ====================== Prayer Timeline Area =============================  -->
    <div class="prayer-time-area bg-light bg-image-pattern py-lg-7 py-5">
        <div class="container">
            <div class="prayer-timeline-container">
                <div class="prayer-slider">

                    <div class="item">
                        <div class="prayer-timeline">
                            <div class="prayer-wrapper">
                                <h6 class="text-primary mb-3">MORNING PRAYER</h6>
                                <h2 class="mb-4">Fajr</h2>
                                <span data-aos="fade-up" class="p-2 px-3 text-primary rounded  bg-light"><span
                                        class="me-1"><i class="far fa-clock"></i></span> 4 : 28 AM </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="prayer-timeline">
                            <h6 class="text-primary mb-3">NOON PRAYER</h6>
                            <h2 class="mb-4">Dhuhr</h2>
                            <span data-aos="fade-up" class="p-2 px-3 text-primary rounded  bg-light"><span
                                    class="me-1"><i class="far fa-clock"></i></span>12:01 PM </span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="prayer-timeline">
                            <div class="prayer-wrapper">
                                <h6 class="text-primary mb-3">AFTERNOON PRAYER</h6>
                                <h2 class="mb-4">Asr</h2>
                                <span data-aos="fade-up" class="p-2 px-3 text-primary rounded  bg-light"><span
                                        class="me-1"><i class="far fa-clock"></i></span> 4:30 PM </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="prayer-timeline">
                            <div class="prayer-wrapper">
                                <h6 class="text-primary mb-3">EVENING PRAYER</h6>
                                <h2 class="mb-4">Maghrib</h2>
                                <span data-aos="fade-up" class="p-2 px-3 text-primary rounded  bg-light"><span
                                        class="me-1"><i class="far fa-clock"></i></span> 6:17 PM </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="prayer-timeline">
                            <div class="prayer-wrapper">
                                <h6 class="text-primary mb-3">NIGHT PRAYER</h6>
                                <h2 class="mb-4">Isha'a</h2>
                                <span data-aos="fade-up" class="p-2 px-3 text-primary rounded  bg-light"><span
                                        class="me-1"><i class="far fa-clock"></i></span> 7:34 PM </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="prayer-timeline">
                            <div class="prayer-wrapper">
                                <h6 class="text-primary mb-3">WEEKLY PRAYER</h6>
                                <h2 class="mb-4">Jumah</h2>
                                <span data-aos="fade-up" class="p-2 px-3 text-primary rounded  bg-light"><span
                                        class="me-1"><i class="far fa-clock"></i></span> 1:30 PM </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="prayer-timeline">
                            <div class="prayer-wrapper">
                                <h6 class="text-primary mb-3">SUNRISE TIME</h6>
                                <h2 class="mb-4">Sunrise</h2>
                                <span data-aos="fade-up" class="p-2 px-3 text-primary rounded  bg-light"><span
                                        class="me-1"><i class="far fa-clock"></i></span> 5 : 44 AM </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="prayer-timeline">
                            <div class="prayer-wrapper">
                                <h6 class="text-primary mb-3">SUNSET TIME</h6>
                                <h2 class="mb-4">Sunset</h2>
                                <span data-aos="fade-up" class="p-2 px-3 text-primary rounded  bg-light"><span
                                        class="me-1"><i class="far fa-clock"></i></span> 6 : 17 PM </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  ====================== About Area =============================  -->
    <div id="about" class="about-area pt-lg-10 pt-8">
        <div class="container">
            <div class="row align-items-center">
                <div class="text-center text-md-start col-md-12">
                    <div class="section-title mb-4">
                        <h2 class="text-primary">Visi Nurul Ilmi : </h2>
                    </div>
                    <?php foreach($data_visi as $vm) : ?>
                    <p>
                        <?= $vm['visi']; ?>
                    </p>
                    <?php endforeach; ?>

                </div>
                <div class="text-center text-md-start col-md-12 pt-3">
                    <div class="section-title mb-4">
                        <h2 class="text-primary">Misi Nurul Ilmi</h2>
                    </div>
                    <?php foreach($data_visi as $vm) : ?>
                    <p>
                        <?= $vm['misi']; ?>
                    </p>
                    <?php endforeach; ?>



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