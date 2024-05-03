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
    <!--  ====================== Page Title Area =============================  -->
    <div class="page-title-area py-lg-6 py-5 bg-image-pattern">
        <div class="container">
            <div class="page-title-wrapper text-center">
                <h1 class="text-white mb-2">Struktur Organisasi</h1>
                <nav class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href='<?= base_url('home') ?>'>Home</a></li>
                        <li class="breadcrumb-item active">Struktur Organisasi Dewan Kemakmuran Masjid Nurul Ilmi</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!--  ====================== Team Area =============================  -->
    <div class="team-area py-lg-10 py-8">
        <div class="container">
            <?php if(!empty($data_struktur)) : ?>
            <?php foreach($data_struktur as $struktur) : ?>
            <div class="section-title text-center mb-4">

                <h2 class="h1"><?= $struktur->nama ?></h2>
            </div>

            <div class="row">

                <div class="col-sm-12 col-lg-12">
                    <div class="team-item mt-4">
                        <div class="team-image">
                            <!-- <ul class="team-social list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul> -->
                            <?php if(!empty($struktur->foto)) : ?>
                            <img src="<?= base_url('upload/struktur/'.$struktur->foto) ?>" alt="title">
                            <?php else: ?>
                            <img src="<?= base_url('upload/default.png') ?>" alt="">
                            <?php endif; ?>
                        </div>
                        <!-- <div class="team-content">
                            <h5>Nama &nbsp;: <?= $pimpinan->nama ?></h5>
                            <span class="text-primary">Jabatan : <?= $pimpinan->jabatan ?></span>
                            <br>
                            <span>Alamat &nbsp;: <?= $pimpinan->alamat ?></span>
                        </div> -->
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php else: ?>
            <h3 class="text-center text-danger">"Data Struktur Organisasi Belum Ada"</h3>
            <?php endif; ?>
        </div>
    </div>
    <!--  ====================== Footer Area =============================  -->
    <?php $this->load->view('layout/footer') ?>
    <!-- gulp:js -->
    <script src="<?= base_url('frontend/') ?>assets/js/build.min.js"></script>
    <!-- endgulp -->
</body>

</html>