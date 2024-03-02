<footer class="footer-area pt-8">
    <div class="footer-top   bg-image-pattern  py-lg-8 py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-4">
                    <div class="footer-widget my-4 me-md-4">
                        <a href="#" class="footer-brand mb-4"><img
                                src="<?= base_url('frontend/') ?>assets/images/footer-brand.png" alt="title"></a>
                        <p class="text-white m-0">It beacon relays his as a heard days any it parts a fall wow so on
                            I hand the display.
                        </p>
                    </div>
                </div>
                <div class="col-md-7 col-lg-8">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="footer-widget my-3">
                                <h4 class="mb-3 text-white">Pages</h4>
                                <ul class="footer-list list-inline">
                                    <li><a href='/about'>About Us</a></li>
                                    <li><a href='/blog'>Archives News</a></li>
                                    <li><a href='/single-2'>Single News</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="footer-widget my-3">
                                <h4 class="mb-3 text-white">Useful Link</h4>
                                <ul class="footer-list list-inline">
                                    <li><a href='/service-2'>Service</a></li>
                                    <li><a href='/event'>Event</a></li>
                                    <li><a href='/team'>Our Staff</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="footer-widget my-3">
                                <h4 class="mb-3 text-white">Information</h4>
                                <ul class="footer-list list-inline">
                                    <li><a href='/blog'>Blog</a></li>
                                    <li><a href='/campaign'>Donation</a></li>
                                    <li><a href='/faq'>FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="footer-widget my-3">
                                <h4 class="mb-3 text-white">Get In Touch</h4>
                                <ul class="footer-list list-inline">
                                    <li><a href='/single-course'>Courses</a></li>
                                    <li><a href="events.html">Event</a></li>
                                    <li><a href='/contact'>Contact</a></li>
                                </ul>
                                <ul class="footer-social m-0 mt-4 list-inline" data-aos="slide-up">
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
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
<!-- jQuery -->
<script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assets/') ?>plugins/jquery-ui/jquery-ui.min.js"></script>
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

});
</script>