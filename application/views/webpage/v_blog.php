<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        <?= $title; ?>
    </title>
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

.bg-market {
    background: #FFC107 !important;
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
                <h1 class="text-white mb-2">Blog</h1>
                <nav class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href='<?= base_url(' home') ?>'>Home</a></li>
                        <li class="breadcrumb-item active">Postingan Masjid Nurul Ilmi</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!--  ====================== About Area =============================  -->
    <div class="about-area py-lg-10 py-8">
        <div class="container">
            <div class="row">
                <h3 class="mb-3 text-primary">Blog</h3>
                <div class="col-lg-8">
                    <?php if(!empty($pesan)) : ?>
                    <p class="text-center">
                        <?= $pesan ?>
                    </p>
                    <?php else: ?>
                    <?php foreach($data_artikel as $artikel) : ?>
                    <div class="row">
                        <div class="col-12" id="artikel-container">
                            <div class="card mt-4 shadow-sm">
                                <div class="card-body">

                                    <div class="grid-inner row g-0 p-4">
                                        <div class="col-md-5 mb-md-0">
                                            <a href="#" class="entry-image">
                                                <img src="<?= base_url('upload/artikel/'.$artikel['gambar']) ?>"
                                                    alt="Lifesaver- Community Education and Training"
                                                    style="height: auto; width: 100%;">
                                                <!-- <div class="entry-date">10<span>Apr</span></div> -->
                                            </a>
                                        </div>
                                        <div class="col-md-7 ps-md-4">
                                            <div class="entry-title title-sm">
                                                <h2><a href="<?= base_url('blog/detail/'.$artikel['slug']) ?>">
                                                        <?= html_escape($artikel['judul']); ?>
                                                    </a>
                                                </h2>
                                            </div>
                                            <div class="entry-meta">

                                                <a href="#"><i class="fas fa-calendar-alt"></i>
                                                    Dibuat Tanggal
                                                    <?= format_indo($artikel['tanggal_dibuat']); ?>
                                                </a>
                                                <br>
                                            </div>
                                            <div class="entry-content">
                                                <p>
                                                <p><strong>
                                                        <?= $artikel['judul']; ?>
                                                    </strong></p>
                                                <p>
                                                    <?= strip_tags(character_limiter($artikel['deskripsi'], 200)) ?>
                                                </p>
                                                <a href="<?= base_url('blog/detail/'.$artikel['slug']); ?>"
                                                    class="btn btn-primary">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="justify-content-center">
                                    <div id="msg_loader" style="display:none;"><img
                                            src="<?= base_url('assets/dists/img/loader.gif') ?>" height="100px"
                                            width="auto" class="aligncenter"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                    <!-- Infinity Scroll Loader
                            ============================================= -->
                    <div class="row">
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
                                id="load-more-btn">Load More</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 col-md-4">
                    <div class="course-feature mb-4 bg-white text-center rounded">
                        <i class="fas fa-search fa-2x"></i>
                        <h5 class="text-primary pb-2 text-center">Cari Blog</h5>
                        <form action="<?= base_url('blog/cari_blog') ?>" method="POST">
                            <div class="form-group">
                                <input type="text" name="keyword" id="keyword" class="form-control" placeholder="JUDUL">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary" style="width: 100%;">CARI</button>
                        </form>
                    </div>

                    <div class="course-feature mb-4 bg-white rounded">
                        <h5 class="text-primary pb-2">Kategori Populer</h5>
                        <hr style="border: 2px solid #DC3545 !important; 
                            margin-top: -10px;">
                        <ul>
                            <?php foreach($data_kategori as $row) : ?>
                            <li class="d-flex align-items-center"><a
                                    href="<?= base_url('blog/kategori/'.$row['slug_kategori']) ?>"
                                    class="flex-fill"><?= $row['nama_kategori'] ?></a><span
                                    class="badge text-white bg-market"><?= $row['jumlah'] ?></span></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="course-feature mb-4 bg-white rounded">
                        <h5 class="text-primary pb-2" id="text_shalat">Jadwal Shalat</h5>
                        <p><?= $waktu['data']['jadwal']['tanggal'] ?></p>
                        <hr style="border: 2px solid #DC3545 !important; margin-top: -10px;">
                        <select name="kota" id="city-selector" class="form-select mb-3">
                            <option value="">Pilih Kota</option>
                        </select>
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
    <!--  ====================== Footer Area =============================  -->
    <?php $this->load->view('layout/footer') ?>
    <!-- gulp:js -->
    <script src="<?= base_url('frontend/') ?>assets/js/build.min.js"></script>
    <!-- Moment.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.36/moment-timezone.min.js"></script>

    <script>
    $(document).ready(function() {
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
                url: "<?= base_url('blog/loadMore/') ?>" + offset,
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
                    var blogData = JSON.parse(response);
                    if (blogData.length > 0) {
                        for (var i = 0; i < blogData.length; i++) {
                            // Memanggil fungsi strip_tags untuk membersihkan teks dari HTML
                            var deskripsi = strip_tags(blogData[i].deskripsi);
                            // Memanggil fungsi character_limiter untuk membatasi teks menjadi 200 karakter
                            deskripsi = character_limiter(deskripsi, 200);
                            var tanggal = format_indo(blogData[i].tanggal_dibuat);

                            $('#artikel-container').append(
                                '<div class="card shadow-sm mt-4"><div class="card-body"><div class="grid-inner row g-0 p-4"><div class="col-md-5 mb-md-0"><a href="#" class="entry-image"><img src="<?= base_url("upload/artikel/") ?>' +
                                blogData[i].gambar +
                                '" alt = "Lifesaver- Community Education and Training" style = "height: auto; width: 100%;"></a></div><div class="col-md-7 ps-md-4"><div class="entry-title title-sm"><h2><a href="<?= base_url('blog/detail/') ?>' +
                                blogData[i].slug + '">' +
                                blogData[i].judul +
                                '</a></h2></div><div class="entry-meta"><a href="#"><i class="fas fa-calendar-alt"></i> Dibuat Tanggal ' +
                                tanggal +
                                '</a></div><div class="entry-content"><p><p><strong>' +
                                blogData[i].judul + '</strong></p><p>' +
                                deskripsi +
                                '</p><a href="<?= base_url('blog/detail/') ?>' +
                                blogData[i].slug +
                                '" class="btn btn-primary">Read More</a></div></div></div></div><div class="justify-content-center"><div id="msg_loader" style="display:none;"><img src="<?= base_url('assets / dists / img / loader.gif') ?>" height="100px" width="auto" class="aligncenter"></div></div></div>'
                            );
                        }
                        offset += blogData.length;
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