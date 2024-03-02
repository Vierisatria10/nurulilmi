<!-- application/views/agenda/index.php -->

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


    <div class="about-area py-lg-10 py-8">
        <div class="container">
            <div class="row">
                <h3 class="mb-3 text-primary">Agenda</h3>
                <div class="col-lg-8">
                    <?php if(!empty($pesan)) : ?>
                    <p class="text-center"><?= $pesan ?></p>
                    <?php else: ?>
                    <?php foreach($data_agenda as $agenda) : ?>
                    <div class="row">

                        <div class="col-12" id="agenda-container">
                            <div class="card mt-4 shadow-sm">
                                <div class="card-body">
                                    <div class="grid-inner row g-0 p-4">
                                        <div class="col-md-5 mb-md-0">
                                            <a href="#" class="entry-image">
                                                <img src="<?= base_url('upload/agenda/'.$agenda['gambar']) ?>"
                                                    alt="Lifesaver- Community Education and Training"
                                                    style="height: auto; width: 100%;">
                                                <!-- <div class="entry-date">10<span>Apr</span></div> -->
                                            </a>
                                        </div>
                                        <div class="col-md-7 ps-md-4">
                                            <div class="entry-title title-sm">
                                                <h2><a
                                                        href="<?= base_url('agenda/detailAgenda/'.$agenda['slug']) ?>"><?= html_escape($agenda['judul']); ?></a>
                                                </h2>
                                            </div>
                                            <div class="entry-meta">

                                                <a href="#"><i class="fas fa-calendar-alt"></i>
                                                    <?= $agenda['jam_awal']; ?> WIB
                                                    - <?= $agenda['jam_akhir']; ?> WIB</a>
                                                <br>
                                                <a href="#"><i class="fas fa-map-marker-alt"></i>
                                                    <?= $agenda['lokasi']; ?></a>

                                            </div>
                                            <div class="entry-content">
                                                <p>
                                                <p><strong><?= $agenda['judul']; ?></strong></p>
                                                <p><?= strip_tags(character_limiter($agenda['deskripsi'], 200)) ?>
                                                </p>
                                                <a href="<?= base_url('agenda/detailAgenda/'.$agenda['slug']); ?>"
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

                <div class="col-lg-4 mt-4 col-md-5">
                    <div class="course-feature mb-4 bg-white text-center rounded">
                        <i class="fas fa-search fa-2x"></i>
                        <h3 class="text-primary pb-2 text-center">Cari Agenda</h3>
                        <form action="<?= base_url('agenda/cari_agenda') ?>" method="POST">
                            <div class="form-group">
                                <input type="text" name="keyword" id="keyword" class="form-control" placeholder="JUDUL">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary" style="width: 100%;">CARI</button>
                        </form>
                    </div>
                    <!-- Sidebar Widget 2
                        ============================================= -->
                    <div class="widget">
                        <div class="owl-carousel carousel-widget" data-margin="0" data-items="1" data-pagi="false"
                            data-loop="true" data-speed="1000" data-autoplay="5000">
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
        // Memuat data pertama kali ketika halaman dimuat
        // loadMoreData();
        var offset = 1;
        // Fungsi untuk memuat data saat tombol "Load More" diklik
        function loadMoreData() {
            $.ajax({
                url: "<?= base_url('agenda/loadMore/') ?>" + offset,
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
                    var agendaData = JSON.parse(response);
                    if (agendaData.length > 0) {
                        for (var i = 0; i < agendaData.length; i++) {
                            // Memanggil fungsi strip_tags untuk membersihkan teks dari HTML
                            var deskripsi = strip_tags(agendaData[i].deskripsi);
                            // Memanggil fungsi character_limiter untuk membatasi teks menjadi 200 karakter
                            deskripsi = character_limiter(deskripsi, 200);

                            $('#agenda-container').append(
                                '<div class="card shadow-sm mt-4"><div class="card-body"><div class="grid-inner row g-0 p-4"><div class="col-md-5 mb-md-0"><a href="#" class="entry-image"><img src="<?= base_url("upload/agenda/") ?>' +
                                agendaData[i].gambar +
                                '" alt = "Lifesaver- Community Education and Training" style = "height: auto; width: 100%;"></a></div><div class="col-md-7 ps-md-4"><div class="entry-title title-sm"><h2><a href="<?= base_url('agenda/detailAgenda/') ?>' +
                                agendaData[i].slug + '">' +
                                agendaData[i].judul +
                                '</a></h2></div><div class="entry-meta"><a href="#"><i class="fas fa-calendar-alt"></i> ' +
                                agendaData[i].jam_awal + ' WIB - ' + agendaData[i]
                                .jam_akhir +
                                ' WIB</a><br><a href="#"><i class="fas fa-map-marker-alt"></i> ' +
                                agendaData[i].lokasi +
                                '</a></div><div class="entry-content"><p><p><strong>' +
                                agendaData[i].judul + '</strong></p><p>' +
                                deskripsi +
                                '</p><a href="<?= base_url('agenda/detailAgenda/') ?>' +
                                agendaData[i].slug +
                                '" class="btn btn-primary">Read More</a></div></div></div></div><div class="justify-content-center"><div id="msg_loader" style="display:none;"><img src="<?= base_url('assets/dists/img/loader.gif') ?>" height="100px" width="auto" class="aligncenter"></div></div></div>'
                            );
                        }
                        offset += agendaData.length;
                    } else {
                        $('#load-more-btn').text('No More Data');
                        $('#load-more-btn').prop('disabled', true);
                    }
                }
            });
        }


        // Fungsi untuk pencarian data
        $('#search-btn').click(function() {
            var keyword = $('#search-keyword').val();
            $.post("<?= base_url('agenda/search/') ?>", {
                keyword: keyword
            }, function(data) {
                $('#agenda-container').html(data);
            });
        });

        // Memuat data lebih lanjut saat tombol "Load More" diklik
        $('#load-more-btn').click(function() {
            loadMoreData();
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