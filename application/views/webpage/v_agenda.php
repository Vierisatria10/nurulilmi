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
        <?php $this->load->view('layout/header.php') ?>
    </header>
    <!--  ====================== Page Title Area =============================  -->
    <div class="page-title-area py-lg-6 py-5 bg-image-pattern">
        <div class="container">
            <div class="page-title-wrapper text-center">
                <h1 class="text-white mb-2">Agenda</h1>
                <nav class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href='<?= base_url('home') ?>'>Home</a></li>
                        <li class="breadcrumb-item active">Agenda Masjid Nurul Ilmi</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
      <!--  ====================== About Area =============================  -->
   <div class="about-area py-lg-10 py-8">
        <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-5 offset-lg-1 order-md-1">
            <div class="donation-details mb-4 mb-md-0">
                <div class="donation-wrapper text-center">
                <i class="fas fa-search fa-2x"></i>
                <h3 class="text-primary pb-2 text-center">Cari Agenda</h3>
                <form action="" method="POST">
                    <div class="form-group">
                        <input type="text" name="cari" class="form-control" placeholder="JUDUL">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" style="width: 100%;">CARI</button>
                </form>
                <!-- <ul class="donation-list list-inline">
                    <li><span class="me-2 text-primary"><i class="fas fa-user"></i></span>
                    </li>
                    <li><span class="me-2 text-primary"><i class="fas fa-calendar-plus"></i></span> Start At  WIB
                    </li>
                    <li><span class="me-2 text-primary"><i class="fas fa-clock"></i></span> End At WIB
                    </li>
                    <li><span class="me-2 text-primary"><i class="fas fa-map-marker"></i></span></li>
                  
                    </li>
                </ul> -->
                
                </div>
            </div>
            </div>
            <?php foreach($data_agenda as $agenda) : ?>
            <div class="col-md-6 order-md-0">
                <h3 class="text-primary mb-3">About This Event</h3>
                <img src="<?= base_url('upload/agenda/'.$agenda->gambar) ?>" style="height: auto; width: 100%;" alt="<?= $agenda->judul; ?>">

                <p>
                    To know the where blind they they'd self-interest, surprise insurance western then didn't and was of stiff legs sign king's know on from client yet office yet nations apparent as cover that she gradually late for that yes, of as of change. Tone occupied so were ambushed inn monitor expenses.
                </p>
                <p>The to of the there coordinates and tall the cache front they explain least, than tried purpose the he the remodelling effects, to half the diet, it hired and of in drunk with</p>
        
            </div>
            <?php endforeach; ?>
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