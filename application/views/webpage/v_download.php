<!-- application/views/agenda/index.php -->

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

ul.icon-list {
    list-style: none;
}

.topmargin {
    margin-top: 3rem !important;
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
                <h1 class="text-white mb-2">Download</h1>
                <nav class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href='<?= base_url('home') ?>'>Home</a></li>
                        <li class="breadcrumb-item active">File Download</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <div class="about-area py-lg-10 py-8">
        <div class="container">
            <div class="row">
                <!-- <h3 class="mb-3 text-primary">Download</h3> -->

                <form action="<?= base_url('download/search') ?>" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Search File"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">Cari</button>
                        </div>
                    </div>
                </form>

                <?php if(!empty($pesan)) : ?>
                <p class="text-center mt-4"><?= $pesan ?></p>
                <?php else: ?>
                <?php foreach($data_download as $download) : ?>

                <div class="col-md-6 mt-4">
                    <?php if(!empty($download->file)) : ?>
                    <a href="<?= base_url('upload/download/'.$download->file) ?>" target="_blank"><i
                            class="fa fa-file-download fa-2x"></i> <?= $download->nama_file ?></a>
                    <?php else : ?>
                    <img src="<?= base_url('upload/default.png') ?>" width="100" alt="">
                    <?php endif; ?>
                </div>

                <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>


    <!-- Tombol Load More -->
    <!-- <button id="load-more-btn">Load More</button> -->

    <!-- Form Pencarian -->
    <!-- <input type="text" id="search-keyword" placeholder="Search...">
    <button id="search-btn">Search</button> -->

    <!--  ====================== Footer Area =============================  -->
    <?php $this->load->view('layout/footer') ?>
    <!-- gulp:js -->
    <script src="<?= base_url('frontend/') ?>assets/js/build.min.js"></script>
    <script>
    $(document).ready(function() {
        // Fungsi untuk pencarian data
        $('#search-btn').click(function() {
            var keyword = $('#search-keyword').val();
            $.ajax({
                type: 'POST',
                url: '<?= base_url('download/search') ?>',
                data: {
                    keyword: keyword
                },
                dataType: 'json',
                success: function(response) {
                    $('#download-container').empty();
                    $.each(response, function(index, download) {
                        $('#download-container').append(
                            '<div class="col-6 mt-4"><a href="<?= base_url('upload/download/') ?> ' +
                            download.file +
                            '" target="_blank"><i class="fa fa-file-download fa-2x"></i>' +
                            download.nama_file + '</a></div>');
                    });
                }
            });
        });
    });

    function strip_tags(html) {
        var doc = new DOMParser().parseFromString(html, 'text/html');
        return doc.body.textContent || "";
    }

    // Fungsi character_limiter untuk membatasi teks menjadi sejumlah karakter tertentu
    function character_limiter(text, limit) {
        return text.length > limit ? text.substring(0, limit) + '...' : text;
    }
    </script>
</body>

</html>