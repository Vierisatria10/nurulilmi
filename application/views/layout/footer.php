<footer class="footer-area pt-8">
    <div class="footer-top bg-image-pattern  py-lg-8 py-4">
        <div class="container">
            <div class="row">
                <?php foreach($data_setting as $setting) : ?>
                <div class="col-md-5 col-lg-4">
                    <div class="footer-widget my-4 me-md-4">
                        <a href="#" class="footer-brand mb-4"><img
                                src="<?= base_url('frontend/') ?>assets/images/logo.jpeg" alt="title"></a>
                        <p class="text-white m-0" style="color: #fff !important;"><?= $setting->alamat ?> </p>
                    </div>
                </div>
                <?php endforeach; ?>
                <div class="col-md-7 col-lg-8">
                    <div class="row">
                        <div class="col-lg-4 col-4">
                            <div class="footer-widget my-3">
                                <h4 class="mb-3 text-white">Pages</h4>
                                <ul class="footer-list list-inline">
                                    <li><a href='<?= base_url('profil') ?>'>Profil</a></li>
                                    <li><a href='<?= base_url('visimisi') ?>'>Visi Misi</a></li>
                                    <li><a href='<?= base_url('sejarah') ?>'>Sejarah</a></li>
                                    <li><a href='<?= base_url('imam') ?>'>Imam dan Muadzin</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-4">
                            <div class="footer-widget my-3">
                                <h4 class="mb-3 text-white">Useful Link</h4>
                                <ul class="footer-list list-inline">
                                    <li><a href='/service-2'>Service</a></li>
                                    <li><a href='/event'>Event</a></li>
                                    <li><a href='/team'>Our Staff</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="footer-widget my-3">
                                <h4 class="mb-3 text-white">Informasi</h4>
                                <ul class="footer-list list-inline">
                                    <li><a href='<?= base_url('blog') ?>'>Artikel</a></li>
                                    <li><a href='<?= base_url('agenda') ?>'>Agenda</a></li>
                                    <li><a href='<?= base_url('kontak') ?>'>Kontak</a></li>
                                </ul>
                                <?php foreach($data_setting as $setting) : ?>
                                <ul class="footer-social m-0 mt-4 list-inline" data-aos="slide-up">
                                    <li class="list-inline-item"><a href="<?= $setting->sosmed1 ?>"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="<?= $setting->sosmed2 ?>"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="<?= $setting->sosmed3 ?>"><i
                                                class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <!-- <div class="col-lg-3 col-6">
                            <div class="footer-widget my-3">
                                <h4 class="mb-3 text-white">Get In Touch</h4>
                                <ul class="footer-list list-inline">
                                    <li><a href='/single-course'>Courses</a></li>
                                    <li><a href="events.html">Event</a></li>
                                    <li><a href='/contact'>Contact</a></li>
                                </ul>
                                
                            </div>
                        </div> -->
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom py-4 bg-secondary">
        <div class="container">
            <p class="text-center m-0 text-white">&copy;
                <span id="spanYear"></span> Masjid Nurul Ilmi Design with <i class="far fa-heart text-success"></i>
                by <a class="text-primary" href="https://themeix.com">Web_ver</a>.
            </p>
        </div>
    </div>
</footer>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function() {
    $('#donate').click(function() {
        Swal.fire({
            icon: 'warning',
            type: 'warning',
            title: 'Pemberitahuan!',
            text: 'Fitur ini belum ada sedang dikembangkan...',
            showConfirmButton: true,

        });
    });

    $('#bidang').click(function() {
        Swal.fire({
            icon: 'warning',
            type: 'warning',
            title: 'Pemberitahuan!',
            text: 'Fitur ini belum ada sedang dikembangkan untuk konsepnya...',
            showConfirmButton: true,

        });
    });

});
</script>