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
    <header class="header-area">
        <div class="header-top bg-light bg-image-pattern px-xl-8 py-2">
            <div class="container">
                <div class="header-top-wrapper">
                    <ul class="navbar-address list-inline m-0">
                        <li class="list-inline-item"><span class="icon"><img src="assets/images/location-icon.svg"
                                    alt="title"></span>South St. New York, USA</li>
                        <li class="list-inline-item"><span class="icon"><img src="assets/images/phone-icon.svg"
                                    alt="title"></span>Toll Free : (+1) 123 1234 568
                        </li>
                    </ul>
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
                    <a class='navbar-brand' href='/'><img src="<?= base_url('frontend/') ?>assets/images/header-logo.png" alt="images"></a>
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <nav class="navbar-meanmenu">
                            <ul class="navbar-nav">

                                <li class="nav-item">
                                    <a class='nav-link toogler' href='/'> Home </a>
                                    <ul class="dropdown-menu">
                                        <li><a class='dropdown-item' href='/'>Home v1</a></li>
                                        <li><a class='dropdown-item' href='/index-2'>Home v2</a></li>
                                        <li><a class='dropdown-item' href='/index-3'>Home v3</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"> <a class='nav-link' href='/about'>About</a></li>
                                <li class="nav-item"> <a class='nav-link' href='/service'>Services</a></li>
                                <li class="nav-item">
                                    <a class='nav-link toogler' href='/blog'> Profil </a>
                                    <ul class="dropdown-menu">
                                        <li><a class='dropdown-item' href='<?= base_url('visimisi') ?>'>Visi & Misi</a>
                                        </li>
                                        <li><a class='dropdown-item' href='/author'>Author</a></li>
                                        <li><a class='dropdown-item' href='/single'>Blog Post</a></li>
                                        <li><a class='dropdown-item' href='/single-2'>Blog Post v2</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link toogler" href="#"> Pages </a>
                                    <ul class="dropdown-menu">
                                        <li><a class='dropdown-item' href='/event'>Event</a></li>
                                        <li><a class='dropdown-item' href='/single-course'>Courses</a></li>
                                        <li><a class='dropdown-item' href='/campaign'>Donate</a></li>
                                        <li><a class='dropdown-item' href='/maintenance-1'>Maintenance 1</a></li>
                                        <li><a class='dropdown-item' href='/maintenance-2'>Maintenance 2</a></li>
                                        <li><a class='dropdown-item' href='/team'>Our Team</a></li>
                                        <li><a class='dropdown-item' href='/faq'>FAQ</a></li>
                                        <li><a class='dropdown-item' href='/404'>404 </a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"> <a class='nav-link' href='/contact'>Contact</a></li>
                            </ul>
                        </nav>
                        <ul class="navbar-nav align-items-center ms-auto">
                            <li class="nav-item"> <a class='nav-link me-4' href='/campaign'>Donate Now</a></li>
                            <li class="nav-item"> <a class="search-toggler" href="#"><img src="assets/images/loupe.png"
                                        alt="title"></a>
                                <form class="search-form" action="#">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <button class="btn btn-primary" type="submit">Search</button>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--  ====================== Page Title Area =============================  -->
    <div class="page-title-area py-lg-6 py-5 bg-image-pattern">
    <div class="container">
    <div class="page-title-wrapper text-center">
      <h1 class="text-white mb-2">Visi & Misi</h1>
      <nav class="page-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href='<?= base_url('home') ?>'>Home</a></li>
          <li class="breadcrumb-item active">Visi & Misi</li>
        </ol>
      </nav>
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