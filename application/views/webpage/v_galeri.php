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
    <!-- Lightgallery -->
    <link type="text/css" rel="stylesheet" href="<?= base_url('frontend/assets/lightgallery/css/lightgallery.css') ?>" />
    <link type="text/css" rel="stylesheet" href="<?= base_url('frontend/assets/lightgallery/css/lg-zoom.css') ?>" />
    <link type="text/css" rel="stylesheet" href="<?= base_url('frontend/assets/lightgallery/css/lg-thumbnail.css') ?>" />
    <link type="text/css" rel="stylesheet" href="<?= base_url('frontend/assets/lightgallery/css/lightgallery-bundle.css') ?>" />
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
    <!--  ====================== Page Title Area =============================  -->
    <div class="page-title-area py-lg-6 py-5 bg-image-pattern">
        <div class="container">
            <div class="page-title-wrapper text-center">
                <h1 class="text-white mb-2">Galeri</h1>
                <nav class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Galeri</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!--  ====================== Team Area =============================  -->
    <div class="team-area py-lg-10 py-8">
        <div class="container">
           
            
            <!-- <div class="section-title text-center mb-4">

                <h2 class="h1"><?= $galeri->galeri_nama ?></h2>
            </div> -->

            <div class="row">
                <?php if(empty($data_galeri)) : ?>
                    <h3 class="text-center">
                        Data Galeri Belum Ada
                    </h3>
                <?php else: ?>
                <?php foreach($data_galeri as $galeri) : ?>
                <div class="col-md-4 mt-3">
                    <div id="lightgallery">
                        <a href="<?= base_url('upload/galeri/'.$galeri->galeri_foto) ?>" data-lg-size="1600-2400">
                            <img alt="img1" src="<?= base_url('upload/galeri/'.$galeri->galeri_foto) ?>" />
                        </a>
                    </div>
                </div>
                
                <?php endforeach; ?>
                <?php endif; ?>
            </div>            
        </div>
    </div>
   
    <!--  ====================== Footer Area =============================  -->
    <?php $this->load->view('layout/footer') ?>
    <!-- gulp:js -->
    <script src="<?= base_url('frontend/') ?>assets/js/build.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- <script src="<?= base_url('frontend/assets/lightgallery/js/lightgallery.umd.js') ?>"></script> -->
    <!-- Or use the minified version -->
    <script src="<?= base_url('frontend/assets/lightgallery/js/lightgallery.min.js') ?>"></script>

    <!-- lightgallery plugins -->
    <script src="<?= base_url('frontend/assets/lightgallery/js/plugins/lg-thumbnail.umd.js') ?>"></script>
    <script src="<?= base_url('frontend/assets/lightgallery/js/plugins/lg-autoplay.umd.js') ?>"></script>

    <!-- endgulp -->
    <script type="text/javascript">
    lightGallery(document.getElementById('lightgallery'), {
        // plugins: [lgZoom, lgThumbnail, lgAutoplay],
        speed: 1000,
        thumbnail: true,
        animateThumb: false,
        zoomFromOrigin: false,
        allowMediaOverlap: true,
        toggleThumb: true,
        mode: 'lg-slide'
        // ... other settings
    });
    </script>
</body>

</html>