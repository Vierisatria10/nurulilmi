<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kategori Artikel</title>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

    <!-- gulp:css -->
    <link rel="stylesheet" href="<?= base_url('frontend/') ?>assets/css/app.min.css">
    <!-- Owl carousel css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


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
                <h1 class="text-white mb-2">Kategori Video</h1>
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
                <!-- <h3 class="mb-3 text-primary"><?= $detail_kategori->judul; ?></h3> -->
                <div class="col-md-8">
                    <div id="blog" class="blog-area">
                        <div class="container">
                            <h4>Kategori Video</h4>
                            <div class="row">
                                <?php if(empty($detail_kategori)) : ?>
                                    <p class="text-center">
                                        Data Kategori Video Belum Ada
                                    </p>
                                <?php else : ?>
                                <?php foreach($detail_kategori as $kat) : ?>
                                <div class="col-lg-6 col-md-6" id="kategori-container">
                                    <div class="blog-style mt-4">
                                        <div class="blog-image">
                                            <iframe src="<?= $kat->link ?>" width="100%" height="100%"
                                            frameborder="0" allowfullscreen></iframe>
                                        </div>
                                        <div class="blog-content">
                                            <span class="blog-meta"><i class="fas fa-tag me-2"></i><a
                                                    href="<?= base_url('Video/kategori_video/'.$kat->nama_video) ?>"><?= $kat->nama_video ?></a></span>
                                            <h4><a href="<?= $kat->link ?>" target="_blank">
                                                    <?= $kat->judul ?></a></h4>
                                            <small class="text-muted"><i class="fa fa-clock"></i>
                                                <?= format_indo($kat->tanggal) ?></small>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button class="mt-4 btn text-center btn-dark ls1 text-uppercase load-next-portfolio"
                                    id="load-more-btn">Load More</button>
                            </div>

                        </div>
                    </div>



                </div>

                <div class="col-md-4 mt-3 col-lg-4">
                    <!-- Slider main container -->
                    <div class="owl-carousel">
                        <div><img src="<?= base_url('frontend/assets/images/slide1.jpg') ?>" alt=""> </div>
                        <div><img src="<?= base_url('frontend/assets/images/slide2.jpeg') ?>" alt=""> </div>
                        <div><img src="<?= base_url('frontend/assets/images/slide1.jpg') ?>" alt=""> </div>
                    </div>
                    <div class="course-feature mb-4 bg-white rounded">
                        <div class="container">
                            <h5 class="text-primary pb-2" id="text_shalat">Jadwal Shalat</h5>
                            <!-- <p><?= $waktu['data']['jadwal']['tanggal'] ?></p> -->
                            <hr style="border: 2px solid #DC3545 !important; margin-top: -10px;">
                            <select name="kota" id="city-selector" class="form-select select2 mb-3">
                                <option value="">Pilih Kota</option>
                            </select>
                            <br><br>
                            <div id="schedule-table"></div>
                            <table id="salat-table" class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>Waktu Shalat</th>
                                        <th>Jam</th>
                                    </tr>
                                </thead>
                                <tbody id="salat-times">
                                    <tr>
                                        <td>Subuh</td>
                                        <td id="subuh"></td>
                                    </tr>
                                    <tr>
                                        <td>Maghrib</td>
                                        <td id="maghrib"></td>
                                    </tr>
                                    <tr>
                                        <td>Isya</td>
                                        <td id="isya"></td>
                                    </tr>
                                    <tr>
                                        <td>Dzuhur</td>
                                        <td id="dzuhur"></td>
                                    </tr>
                                    <tr>
                                        <td>Ashar</td>
                                        <td id="ashar"></td>
                                    </tr>
                                    <tr>
                                        <td>Dhuha</td>
                                        <td id="dhuha"></td>
                                    </tr>
                                    <tr>
                                        <td>Imsak</td>
                                        <td id="imsak"></td>
                                    </tr>
                                </tbody>
                            </table>
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
    <!-- Sertakan file JavaScript Select2 dari CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <!-- owl carousel js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Moment.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.36/moment-timezone.min.js"></script>

    <!-- endgulp -->
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
    <script>
    $(document).ready(function() {

        // Inisialisasi Select2
        $('.select2').select2({
            placeholder: 'Pilih Kota',
            width: '100%',
            allowClear: false // Opsional, untuk menambahkan tombol clear
        });
        $.ajax({
            url: "<?php echo base_url('Blog/getCityData'); ?>",
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                $.each(response.data, function(key, value) {
                    $('#city-selector').append('<option value="' + value.id +
                        '">' + value.lokasi + '</option>');
                });
            }
        });
        $('#city-selector').change(function() {
            var cityId = $(this).val();
            if (cityId) {
                $.ajax({
                    url: "<?php echo base_url('Blog/getShalatSchedule'); ?>",
                    type: 'POST',
                    data: {
                        city_id: cityId
                    },
                    dataType: 'json',
                    success: function(response) {
                        $('#text_shalat').text('Jadwal Shalat ' + response.data.lokasi);
                        $('#subuh').text(response.data.jadwal.subuh);
                        $('#dzuhur').text(response.data.jadwal.dzuhur);
                        $('#ashar').text(response.data.jadwal.ashar);
                        $('#maghrib').text(response.data.jadwal.maghrib);
                        $('#isya').text(response.data.jadwal.isya);
                        $('#dhuha').text(response.data.jadwal.dhuha);
                        $('#imsak').text(response.data.jadwal.imsak);
                        // var schedule =
                        //     '<table class="table table-bordered table-striped text-center"><tr><th>Waktu Shalat</th><th>Jam</th></tr>';
                        // var data = response.data.jadwal;
                        // schedule += '<tr><td>Subuh</td><td>' + data.subuh + '</td></tr>';
                        // schedule += '<tr><td>Dzuhur</td><td>' + data.dzuhur + '</td></tr>';
                        // schedule += '<tr><td>Ashar</td><td>' + data.ashar + '</td></tr>';
                        // schedule += '<tr><td>Maghrib</td><td>' + data.maghrib +
                        //     '</td></tr>';
                        // schedule += '<tr><td>Isya</td><td>' + data.isya + '</td></tr>';
                        // schedule += '<tr><td>Dhuha</td><td>' + data.dhuha + '</td></tr>';
                        // schedule += '<tr><td>Imsak</td><td>' + data.imsak + '</td></tr>';
                        // $('#schedule-table').html(schedule);
                        // $('#text_shalat').html('Jadwal Shalat ' + response.data.lokasi);
                        // $('#schedule-table').html(schedule);
                    }
                });
            }
        });

        var offset = 0;
        // Fungsi untuk memuat data saat tombol "Load More" diklik
        function loadMoreData() {
            $.ajax({
                url: "<?= base_url('Video/loadMoreKategori/') ?>" + offset,
                type: 'GET',
                beforeSend: function() {
                    // Tampilkan SweetAlert2 ketika permintaan AJAX dikirim
                    Swal.fire({
                        title: 'Loading Data',
                        timer: 3000,
                        allowOutsideClick: false,
                        showConfirmButton: false,
                        onBeforeOpen: () => {
                            Swal.showLoading();
                        }
                    });
                },
                success: function(response) {
                    // Tutup SweetAlert2 setelah menerima respons dari server
                    Swal.close();
                    var kagetoriData = JSON.parse(response);
                    if (kagetoriData.length > 0) {
                        for (var i = 0; i < kagetoriData.length; i++) {
                            // Memanggil fungsi strip_tags untuk membersihkan teks dari HTML
                            // var deskripsi = strip_tags(kagetoriData[i].deskripsi);
                            // Memanggil fungsi character_limiter untuk membatasi teks menjadi 200 karakter
                            // deskripsi = character_limiter(deskripsi, 200);
                            var tanggal = format_indo(kagetoriData[i].tanggal);

                            $('#kategori-container').append(
                                '<div class="blog-style mt-4"><div class="blog-image"><iframe src="'kategoriData[i].link'" width="100%" height="100%"frameborder="0" allowfullscreen></iframe></div><div class="blog-content"><span class="blog-meta"><i class="fas fa-tag me-2"></i><a href="<?= base_url("blog/kategori/") ?> ' +
                                kategoriData[i].nama_video + '">' + kategoriData[i]
                                .nama_video +
                                '</a></span><h4><a href="<?= base_url('Video/kategori_video/') ?> ' +
                                kategoriData[i].slug + '">' + kagetoriData[i].judul +
                                '</a></h4><small class="text-muted"><i class="fa fa-clock"></i>' +
                                tanggal + '</small></div></div>'
                            );
                        }
                        offset += kagetoriData.length;
                    } else {
                        $('#load-more-btn').text('No More Data');
                        $('#load-more-btn').prop('disabled', true);
                    }
                }
            });
        }

        // Memuat data lebih lanjut saat tombol "Load More" diklik
        $('#load-more-btn').click(function() {
            loadMoreData();
        });
    });

    function strip_tags(html) {
        var doc = new DOMParser().parseFromString(html, 'text/html');
        return doc.body.textContent || "";
    }
    // Set zona waktu default ke Asia/Jakarta
    moment.tz.setDefault("Asia/Jakarta");
    // Fungsi untuk memformat tanggal menjadi format Indonesia
    function format_indo(tanggal) {
        return moment(tanggal).format('DD MMMM YYYY');
    }

    // Fungsi character_limiter untuk membatasi teks menjadi sejumlah karakter tertentu
    function character_limiter(text, limit) {
        return text.length > limit ? text.substring(0, limit) + '...' : text;
    }
    </script>
</body>

</html>