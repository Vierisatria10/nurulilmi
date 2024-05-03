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
                <h1 class="text-white mb-2">Kontak</h1>
                <nav class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href='<?= base_url('home') ?>'>Home</a></li>
                        <li class="breadcrumb-item active">Kontak Kami</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!--  ====================== Contact Area =============================  -->
    <div class="contact-area py-lg-10 py-8">
        <div class="container">
            <div class="row align-items-stretch col-mb-50 mb-0">
                <div class="col-md-6">
                    <form class="contact-form p-4 rounded" method="POST" action="<?= base_url('kontak/kirim_pesan') ?>">

                        <div class="row">
                            <div class="col pb-3">
                                <h4 class="fw-bold text-primary">Kirim Masukan</h4>
                                <p class="text-muted">Silihkan kirim masukan anda terkait program kami</p>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="">Name</label>
                                    <input type="text" name="nama" class="form-control">
                                    <?= form_error('nama', '<small class="text-danger ">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="">No Hp</label>
                                    <input type="text" name="no_hp" class="form-control">
                                    <?= form_error('no_hp', '<small class="text-danger ">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="">Subject</label>
                                <input type="text" name="subject" class="form-control">
                                <?= form_error('subject', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                            <div class="mb-3">
                                <label for="">Message</label>
                                <textarea class="form-control" rows="7" name="pesan"></textarea>
                                <?= form_error('pesan', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Masukan</button>
                    </form>
                </div>
                <div class="col-md-6 min-vh-50">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.188243163735!2d106.4995803!3d-6.1913069!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4200f7581fff27%3A0x629723ba39fcbcf1!2sMasjid%20Nurul%20Ilmi!5e0!3m2!1sid!2sid!4v1708707629915!5m2!1sid!2sid"
                        style="border:0; width: 100%; height: 100%" allowfullscreen frameborder="0"></iframe>

                </div>

            </div>

        </div>

    </div>
    <div class="contact-area pb-8">
        <div class="container">
            <div class="row">
                <?php foreach($data_setting as $setting) : ?>
                <div class="col-md-4">
                    <div class="contact-info-item mb-3">
                        <div class="contact-wrapper bg-light ">
                            <div class="contact-icon">
                                <img src="<?= base_url('frontend/assets/images/contact-icon.png') ?>" alt="title">
                            </div>
                            <div class="contact-content mt-4">
                                <h4 class="mb-3">Alamat
                                </h4>
                                <p class="m-0"><?= $setting->alamat ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <div class="col-md-4">
                    <div class="contact-info-item mb-3">
                        <div class="contact-wrapper bg-light">
                            <div class="contact-icon">
                                <img src="<?= base_url('frontend/assets/images/contact-icon3.png') ?>" alt="title">
                            </div>
                            <div class="contact-content mt-4">
                                <h4 class="mb-3">Telepon
                                </h4>
                                <p class="m-0"><?= $setting->no_hp ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info-item mb-3">
                        <div class="contact-wrapper bg-light">
                            <div class="contact-icon">
                                <img src="<?= base_url('frontend/assets/images/contact-icon2.png') ?>" alt="title">
                            </div>
                            <div class="contact-content mt-4">
                                <h4 class="mb-3">Email
                                </h4>
                                <p class="m-0"><?= $setting->email ?>
                                </p>
                            </div>
                        </div>
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if ($this->session->flashdata('success')) : ?>
    <script>
    Swal.fire({
        title: "Berhasil!",
        text: "<?= $this->session->flashdata('success') ?>",
        icon: "success",
        showConfirmButton: true,
    });
    </script>
    <?php endif; ?>
</body>

</html>