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
    <?php $this->load->view('layout/header') ?>
    <!--  ====================== Prayer Timeline Area =============================  -->
    <div class="prayer-time-area bg-light bg-image-pattern py-lg-7 py-5">
        <div class="container">
            <div class="prayer-timeline-container">
                <div class="prayer-slider">

                    <div class="item">
                        <div class="prayer-timeline">
                            <div class="prayer-wrapper">
                                <h6 class="text-primary mb-3">MORNING PRAYER</h6>
                                <h2 class="mb-4">Fajr</h2>
                                <span data-aos="fade-up" class="p-2 px-3 text-primary rounded  bg-light"><span
                                        class="me-1"><i class="far fa-clock"></i></span> 4 : 28 AM </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="prayer-timeline">
                            <h6 class="text-primary mb-3">NOON PRAYER</h6>
                            <h2 class="mb-4">Dhuhr</h2>
                            <span data-aos="fade-up" class="p-2 px-3 text-primary rounded  bg-light"><span
                                    class="me-1"><i class="far fa-clock"></i></span>12:01 PM </span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="prayer-timeline">
                            <div class="prayer-wrapper">
                                <h6 class="text-primary mb-3">AFTERNOON PRAYER</h6>
                                <h2 class="mb-4">Asr</h2>
                                <span data-aos="fade-up" class="p-2 px-3 text-primary rounded  bg-light"><span
                                        class="me-1"><i class="far fa-clock"></i></span> 4:30 PM </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="prayer-timeline">
                            <div class="prayer-wrapper">
                                <h6 class="text-primary mb-3">EVENING PRAYER</h6>
                                <h2 class="mb-4">Maghrib</h2>
                                <span data-aos="fade-up" class="p-2 px-3 text-primary rounded  bg-light"><span
                                        class="me-1"><i class="far fa-clock"></i></span> 6:17 PM </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="prayer-timeline">
                            <div class="prayer-wrapper">
                                <h6 class="text-primary mb-3">NIGHT PRAYER</h6>
                                <h2 class="mb-4">Isha'a</h2>
                                <span data-aos="fade-up" class="p-2 px-3 text-primary rounded  bg-light"><span
                                        class="me-1"><i class="far fa-clock"></i></span> 7:34 PM </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="prayer-timeline">
                            <div class="prayer-wrapper">
                                <h6 class="text-primary mb-3">WEEKLY PRAYER</h6>
                                <h2 class="mb-4">Jumah</h2>
                                <span data-aos="fade-up" class="p-2 px-3 text-primary rounded  bg-light"><span
                                        class="me-1"><i class="far fa-clock"></i></span> 1:30 PM </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="prayer-timeline">
                            <div class="prayer-wrapper">
                                <h6 class="text-primary mb-3">SUNRISE TIME</h6>
                                <h2 class="mb-4">Sunrise</h2>
                                <span data-aos="fade-up" class="p-2 px-3 text-primary rounded  bg-light"><span
                                        class="me-1"><i class="far fa-clock"></i></span> 5 : 44 AM </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="prayer-timeline">
                            <div class="prayer-wrapper">
                                <h6 class="text-primary mb-3">SUNSET TIME</h6>
                                <h2 class="mb-4">Sunset</h2>
                                <span data-aos="fade-up" class="p-2 px-3 text-primary rounded  bg-light"><span
                                        class="me-1"><i class="far fa-clock"></i></span> 6 : 17 PM </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  ====================== About Area =============================  -->
    <div id="about" class="about-area pt-lg-10 pt-8">
        <div class="container">
            <div class="row align-items-center">
                <div class="text-center text-md-start col-md-6">
                    <div class="section-title mb-4">
                        <span data-aos="fade-in" class="text-secondary ">Mosque Intro</span>
                        <h2 class="h1 text-primary">Welcome to the Grand Mosque</h2>
                    </div>
                    <p>
                        Mountains, their a that of nation and english the to desk out alphabet would written career
                        times to and term absolutely feedback of a the of has have distant step if semantics, had
                        regurgitated even to were the pros working found. The be to chequered pointed the worthy warned
                        a narrow odd are than roasted.
                    </p>
                    <p>
                        The lay to the he the their to tag antiquity began fur from sitting us, cities film english
                        could are quite business he be, who proper.
                    </p>
                    <div data-aos="fade-up" class="btn-container">
                        <a class='btn btn-primary text-white mt-4 mb-4 mb-md-0' href='/about'>More Information <i
                                class="fas fa-angle-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 offset-lg-1">
                    <div class="upcoming-prayer bg-light bg-image-pattern">
                        <div class="upcoming-prayer-wrapper ">
                            <h3 class="text-primary">Upcomimg Player Time</h3>

                            <ul class="prayer-meta list-inline   mt-4 ">
                                <li class="list-inline-item"><small><i
                                            class="fas fa-mosque text-primary"></i>Asr</small></li>
                                <li class="list-inline-item"><small><i class="far fa-clock text-primary"></i> 4 : 30
                                        PM</small></li>
                            </ul>
                            <ul class="prayer-countdown my-4 list-inline">
                                <li>
                                    <h3 id="hours" class="display-4 text-primary">0</h3><span
                                        class="text-secondary">Hours</span>
                                </li>
                                <li>
                                    <h3 id="minutes" class="display-4  text-primary">0</h3><span
                                        class="text-secondary">Minutes</span>
                                </li>
                                <li>
                                    <h3 id="seconds" class="display-4  text-primary">0</h3><span
                                        class="text-secondary">Seconds</span>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  ====================== Video Area =============================  -->
    <div id="khuthba" class="video-area py-lg-10 py-8">
        <div class="container">
            <div class="text-center">
                <div class="section-title mb-4">
                    <span data-aos="fade-in" class="text-secondary">Sermons / Khuthba</span>
                    <h2 class="h1 text-primary">Khuthba Collection</h2>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="video-item mt-4">
                        <div class="video-image">
                            <img src="assets/images/khuthba/1.jpg" alt="title">
                            <a class="video-popup" href="https://www.youtube.com/watch?v=CQzFHdaMvuM"><i
                                    class="fas fa-video"></i></a>
                        </div>
                        <div class="video-content">
                            <h5 class="text-white">EP #19 : The Call of Ibrahim </h5>
                            <a class="badge bg-primary text-white fw-normal">04 Feb, 2021</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="video-item mt-4">
                        <div class="video-image">
                            <img src="assets/images/khuthba/2.jpg" alt="title">
                            <a class="video-popup" href="https://www.youtube.com/watch?v=CQzFHdaMvuM"><i
                                    class="fas fa-video"></i></a>
                        </div>
                        <div class="video-content">
                            <h5 class="text-white">EP #18 : Hajj - The Journey of Hearts
                            </h5>
                            <a class="badge bg-primary text-white fw-normal">28 Jan, 2021</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="video-item mt-4">
                        <div class="video-image">
                            <img src="assets/images/khuthba/3.jpg" alt="title">
                            <a class="video-popup" href="https://www.youtube.com/watch?v=CQzFHdaMvuM"><i
                                    class="fas fa-video"></i></a>
                        </div>
                        <div class="video-content">
                            <h5 class="text-white">EP #17 : Guiding to Allah by the Book
                            </h5>
                            <a class="badge bg-primary text-white fw-normal">21 Jan, 2021</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="video-item mt-4">
                        <div class="video-image">
                            <img src="assets/images/khuthba/4.jpg" alt="title">
                            <a class="video-popup" href="https://www.youtube.com/watch?v=CQzFHdaMvuM"><i
                                    class="fas fa-video"></i></a>
                        </div>
                        <div class="video-content">
                            <h5 class="text-white">EP #16 : Ramadan Warriors
                            </h5>
                            <a class="badge bg-primary text-white fw-normal">14 Jan, 2021</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="video-item mt-4">
                        <div class="video-image">
                            <img src="assets/images/khuthba/5.jpg" alt="title">
                            <a class="video-popup" href="https://www.youtube.com/watch?v=CQzFHdaMvuM"><i
                                    class="fas fa-video"></i></a>
                        </div>
                        <div class="video-content">
                            <h5 class="text-white">EP #15 : Have You Ever Tasted Jannah?
                            </h5>
                            <a class="badge bg-primary text-white fw-normal">09 Jan, 2021</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="video-item mt-4">
                        <div class="video-image">
                            <img src="assets/images/khuthba/6.jpg" alt="title">
                            <a class="video-popup" href="https://www.youtube.com/watch?v=CQzFHdaMvuM"><i
                                    class="fas fa-video"></i></a>
                        </div>
                        <div class="video-content">
                            <h5 class="text-white">EP #14 : Sabr or Shukr
                            </h5>
                            <a class="badge bg-primary text-white fw-normal">02 Jan, 2021</a>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5" data-aos="slide-up"><a class='btn btn-primary text-white'
                        href='/all-khuthba'>More Khuthba</a></div>
            </div>

        </div>
    </div>
    <!--  ====================== Service Area =============================  -->
    <div class="service-area bg-image-pattern service-shape py-lg-10 py-8 bg-light">
        <div class="container">
            <div class="section-title text-center mb-4">
                <span data-aos="fade-in" class="text-primary">What we do</span>
                <h2 class="h1">Social Services</h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="service-item mt-4">
                        <div class="service-wrapper bg-white">
                            <div class="service-icon">
                                <img src="assets/images/service-icon.png" alt="title">
                            </div>
                            <div class="service-content mt-4">
                                <h5 class="mb-3">Health CheckUp</h5>
                                <p>Quite into liabilities frequency; Each be own for through parents' understand the of
                                    it is met and as
                                    some</p>
                                <a data-bs-toggle="modal" data-bs-target="#service1" href="#" class="text-primary">Learn
                                    More <i class="fas fa-angle-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="service-modal modal fade" id="service1">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Health CheckUp</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>The that all once our the relieved its accompany will. Must for have or a back to
                                        war, the desk in the me boss it note has could are boss of escape, in
                                        consideration film control phase the quitting negatives, the be high and he his
                                        researches by politely then.</p>
                                    <p>Suggests it even how several rather of it to his real of week you him should the
                                        out gave could mister or annoyed. Devious you simple, been brothers evening. To
                                        couldn't a to stitching in orthographic the tone to feel the not reached ran
                                        study of you tend with will the nice, all must off and advantage become not the
                                        its would of at after me make could on as explain the seen, for simple, first
                                        for left recommendation hired their time illustrated insurance with universal
                                        proposal I pleasure there mountains, all attention particularly more son, card a
                                        and, we.
                                    </p>
                                    <p>
                                        Four to greediness the in a written the a finds the getting staple towards his
                                        they goals so, minutes. Been having problem of trial. King's and her off of any
                                        time. Next or said reflections, rhetoric desk clarinet several ideas only you
                                        right, made known not so powers sleep. Road, than attempt, suspicious may
                                        respective circumstances. Turned the is don't in the and is remain which see his
                                        too felt frequently excuse small I one about the his answering feedback th</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item mt-4">
                        <div class="service-wrapper bg-white">
                            <div class="service-icon">
                                <img src="assets/images/service-icon2.png" alt="title">
                            </div>
                            <div class="service-content mt-4">
                                <h5 class="mb-3">Community Services</h5>
                                <p>Life of as differentiates up this or my the at sleep frugality a mars back, office
                                    universe a he somehow the rippedup</p>
                                <a data-bs-toggle="modal" data-bs-target="#service2" href="#" class="text-primary">Learn
                                    More <i class="fas fa-angle-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="service-modal modal fade" id="service2">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Community Services</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>The that all once our the relieved its accompany will. Must for have or a back to
                                        war, the desk in the me boss it note has could are boss of escape, in
                                        consideration film control phase the quitting negatives, the be high and he his
                                        researches by politely then.</p>
                                    <p>Suggests it even how several rather of it to his real of week you him should the
                                        out gave could mister or annoyed. Devious you simple, been brothers evening. To
                                        couldn't a to stitching in orthographic the tone to feel the not reached ran
                                        study of you tend with will the nice, all must off and advantage become not the
                                        its would of at after me make could on as explain the seen, for simple, first
                                        for left recommendation hired their time illustrated insurance with universal
                                        proposal I pleasure there mountains, all attention particularly more son, card a
                                        and, we.
                                    </p>
                                    <p>
                                        Four to greediness the in a written the a finds the getting staple towards his
                                        they goals so, minutes. Been having problem of trial. King's and her off of any
                                        time. Next or said reflections, rhetoric desk clarinet several ideas only you
                                        right, made known not so powers sleep. Road, than attempt, suspicious may
                                        respective circumstances. Turned the is don't in the and is remain which see his
                                        too felt frequently excuse small I one about the his answering feedback th</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item mt-4">
                        <div class="service-wrapper bg-white">
                            <div class="service-icon">
                                <img src="assets/images/service-icon3.png" alt="title">
                            </div>
                            <div class="service-content mt-4">
                                <h5 class="mb-3">Umrah & Hajj</h5>
                                <p>Testimony best of a creative was thought. Can poster he three who and catch rendering
                                    may pane </p>
                                <a data-bs-toggle="modal" data-bs-target="#service3" href="#" class="text-primary">Learn
                                    More <i class="fas fa-angle-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="service-modal modal fade" id="service3">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Umrah & Hajj</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>The that all once our the relieved its accompany will. Must for have or a back to
                                        war, the desk in the me boss it note has could are boss of escape, in
                                        consideration film control phase the quitting negatives, the be high and he his
                                        researches by politely then.</p>
                                    <p>Suggests it even how several rather of it to his real of week you him should the
                                        out gave could mister or annoyed. Devious you simple, been brothers evening. To
                                        couldn't a to stitching in orthographic the tone to feel the not reached ran
                                        study of you tend with will the nice, all must off and advantage become not the
                                        its would of at after me make could on as explain the seen, for simple, first
                                        for left recommendation hired their time illustrated insurance with universal
                                        proposal I pleasure there mountains, all attention particularly more son, card a
                                        and, we.
                                    </p>
                                    <p>
                                        Four to greediness the in a written the a finds the getting staple towards his
                                        they goals so, minutes. Been having problem of trial. King's and her off of any
                                        time. Next or said reflections, rhetoric desk clarinet several ideas only you
                                        right, made known not so powers sleep. Road, than attempt, suspicious may
                                        respective circumstances. Turned the is don't in the and is remain which see his
                                        too felt frequently excuse small I one about the his answering feedback th</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--  ====================== Event Area =============================  -->
    <div class="event-area py-lg-10 py-8">
        <div class="container">
            <div class="section-title text-center mb-4">
                <span data-aos="fade-in" class="text-primary">Ethical & Moral Beliefs</span>
                <h2 class="h1">Upcoming Events</h2>
            </div>
            <div class="row d-flex align-items-stretch">

                <div class="col-md-6 col-lg-4">
                    <div class="event-item mt-4">
                        <div class="event-image">
                            <img src="assets/images/event/1.jpg" alt="image">
                            <span class="event-btn badge bg-primary text-white"><i class="far fa-calendar-alt me-2"></i>
                                01 Dec 2020</span>
                        </div>
                        <div class="event-content">
                            <ul class="event-address list-inline">
                                <li class="list-inline-item"><span class="icon"><img
                                            src="assets/images/location-icon.svg" alt="title"></span> New York, USA 485
                                </li>
                            </ul>
                            <h5 class="mb-3">Lazy Boy - It's All in Your Mind!</h5>
                            <a class='text-primary' href='/event'>More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="event-item mt-4">
                        <div class="event-image">
                            <img src="assets/images/event/2.jpg" alt="image">
                            <span class="event-btn badge bg-primary text-white"><i class="far fa-calendar-alt me-2"></i>
                                01 Dec 2020</span>
                        </div>
                        <div class="event-content">
                            <ul class="event-address list-inline">
                                <li class="list-inline-item"><span class="icon"><img
                                            src="assets/images/location-icon.svg" alt="title"></span> New York, USA 485
                                </li>
                            </ul>
                            <h5 class="mb-3">The Best Remembrance​</h5>
                            <a class='text-primary' href='/event'>More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="event-item mt-4">
                        <div class="event-image">
                            <img src="assets/images/event/3.jpg" alt="image">
                            <span class="event-btn badge bg-primary text-white"><i class="far fa-calendar-alt me-2"></i>
                                01 Dec 2020</span>
                        </div>
                        <div class="event-content">
                            <ul class="event-address list-inline">
                                <li class="list-inline-item"><span class="icon"><img
                                            src="assets/images/location-icon.svg" alt="title"></span> New York, USA 485
                                </li>
                            </ul>
                            <h5 class="mb-3">Returning to Allah</h5>
                            <a class='text-primary' href='/event'>More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="event-item mt-4">
                        <div class="event-image">
                            <img src="assets/images/event/4.jpg" alt="image">
                            <span class="event-btn badge bg-primary text-white"><i class="far fa-calendar-alt me-2"></i>
                                01 Dec 2020</span>
                        </div>
                        <div class="event-content">
                            <ul class="event-address list-inline">
                                <li class="list-inline-item"><span class="icon"><img
                                            src="assets/images/location-icon.svg" alt="title"></span> New York, USA 485
                                </li>
                            </ul>
                            <h5 class="mb-3">Bathe Yourself with Money!</h5>
                            <a class='text-primary' href='/event'>More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="event-item mt-4">
                        <div class="event-image">
                            <img src="assets/images/event/5.jpg" alt="image">
                            <span class="event-btn badge bg-primary text-white"><i class="far fa-calendar-alt me-2"></i>
                                01 Dec 2020</span>
                        </div>
                        <div class="event-content">
                            <ul class="event-address list-inline">
                                <li class="list-inline-item"><span class="icon"><img
                                            src="assets/images/location-icon.svg" alt="title"></span> New York, USA 485
                                </li>
                            </ul>
                            <h5 class="mb-3">My Mother, My Best Friend</h5>
                            <a class='text-primary' href='/event'>More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="event-item mt-4">
                        <div class="event-image">
                            <img src="assets/images/event/6.jpg" alt="image">
                            <span class="event-btn badge bg-primary text-white"><i class="far fa-calendar-alt me-2"></i>
                                01 Dec 2020</span>
                        </div>
                        <div class="event-content">
                            <ul class="event-address list-inline">
                                <li class="list-inline-item"><span class="icon"><img
                                            src="assets/images/location-icon.svg" alt="title"></span> New York, USA 485
                                </li>
                            </ul>
                            <h5 class="mb-3">Faith Has a Language</h5>
                            <a class='text-primary' href='/event'>More Details</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--  ====================== Call To Action Area =============================  -->
    <div class="call-to-action-area py-lg-8 py-5 bg-image-pattern bg-primary">
        <div class="container">
            <div class="mb-4 text-center">
                <h2 class="h1 text-white">Get Hadith Everyday</h2>
                <p class="text-white">Sign up bellow to get hidth everyday in your inbox</p>
            </div>
            <form class="call-to-action-form m-auto" action="#">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Your Name">
                    <input type="text" class="form-control" placeholder="Your Email">
                    <button class="btn btn-light" type="submit">Get Started</button>
                </div>
            </form>
        </div>
    </div>
    <!--  ====================== Course Area =============================  -->
    <div class="course-area py-lg-10 py-8">
        <div class="container">
            <div class="section-title text-center mb-4">
                <span data-aos="fade-in" class="text-primary">Learn With Us</span>
                <h2 class="h1">Online Islamic Courses</h2>
            </div>
            <div class="row" data-masonry='{"percentPosition": true }'>
                <div class="col-md-6 col-lg-4">
                    <div class="course-item mb-4">
                        <img class="course-image" src="assets/images/course/1.jpg" alt="title">
                        <div class="course-overlay">
                            <h4 class="mb-md-3"><a class='text-white' href='/single-course'>Dur al-Manthur </a></h4>
                            <div class="course-content">
                                <div class="course-author"><img src="assets/images/author/1.jpg" alt="title">

                                    <div class="info">
                                        <h6 class="text-white mb-0">Ali Reza</h6>
                                        <span class="text-white small">Islamic Scholar</span>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-item mb-4">
                        <img class="course-image" src="assets/images/course/2.jpg" alt="title">
                        <div class="course-overlay">
                            <h4 class="mb-md-3"><a class='text-white' href='/single-course'>Surah Quraish</a></h4>
                            <div class="course-content">
                                <div class="course-author"><img src="assets/images/author/1.jpg" alt="title">

                                    <div class="info">
                                        <h6 class="text-white mb-0">Ali Reza</h6>
                                        <span class="text-white small">Islamic Scholar</span>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-item mb-4">
                        <img class="course-image" src="assets/images/course/3.jpg" alt="title">
                        <div class="course-overlay">
                            <h4 class="mb-md-3"><a class='text-white' href='/single-course'>Surat Al-'Adiyat</a></h4>
                            <div class="course-content">
                                <div class="course-author"><img src="assets/images/author/1.jpg" alt="title">

                                    <div class="info">
                                        <h6 class="text-white mb-0">Ali Reza</h6>
                                        <span class="text-white small">Islamic Scholar</span>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-item mb-4">
                        <img class="course-image" src="assets/images/course/4.jpg" alt="title">
                        <div class="course-overlay">
                            <h4 class="mb-md-3"><a class='text-white' href='/single-course'>Surat Al-Qari'ahf</a></h4>
                            <div class="course-content">
                                <div class="course-author"><img src="assets/images/author/1.jpg" alt="title">

                                    <div class="info">
                                        <h6 class="text-white mb-0">Ali Reza</h6>
                                        <span class="text-white small">Islamic Scholar</span>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-item mb-4">
                        <img class="course-image" src="assets/images/course/5.jpg" alt="title">
                        <div class="course-overlay">
                            <h4 class="mb-md-3"><a class='text-white' href='/single-course'>Tafsir al-Jalalayn </a></h4>
                            <div class="course-content">
                                <div class="course-author"><img src="assets/images/author/1.jpg" alt="title">

                                    <div class="info">
                                        <h6 class="text-white mb-0">Ali Reza</h6>
                                        <span class="text-white small">Islamic Scholar</span>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-item mb-4">
                        <img class="course-image" src="assets/images/course/6.jpg" alt="title">
                        <div class="course-overlay">
                            <h4 class="mb-md-3"><a class='text-white' href='/single-course'>Surah Yaa'sin</a></h4>
                            <div class="course-content">
                                <div class="course-author"><img src="assets/images/author/1.jpg" alt="title">

                                    <div class="info">
                                        <h6 class="text-white mb-0">Ali Reza</h6>
                                        <span class="text-white small">Islamic Scholar</span>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>



        </div>
    </div>


    <!--  ====================== Testimonial Area =============================  -->
    <div class="testimonial-area bg-light bg-image-pattern py-lg-10 py-8">
        <div class="container">
            <div class="section-title text-center mb-4">
                <span data-aos="fade-in" class="text-primary">Testimonial</span>
                <h2 class="h1">Your's Feedback</h2>
            </div>
            <div class="testimonial-slider">
                <div class="item">
                    <div class="testimonial-item bg-white">
                        <div class="content">
                            <h4 class="mb-3">"Excellent Code"</h4>
                            <p class="mb-3">I am a developer But themeix really nailed it. They knows
                                the code and i am really satisfied for their service. </p>
                        </div>
                        <div class="author-info">
                            <img src="assets/images/author/3.jpg" class="author-image rounded-circle" alt="title">

                            <h6 class="m-0">Robert M.</h6>
                            <p class="small m-0">Web Developer</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-item  bg-white">
                        <div class="content">
                            <h4 class="mb-3">"Back over the men go"</h4>
                            <p class="mb-3">They knows
                                the code and i am really satisfied for their service occupied world can thousand. </p>
                        </div>
                        <div class="author-info">
                            <img src="assets/images/author/2.jpg" class="author-image rounded-circle" alt="title">

                            <h6 class="m-0">Abigail Holmes
                            </h6>
                            <p class="small m-0">Web Developer</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-item  bg-white">
                        <div class="content">
                            <h4 class="mb-3">"Excellent Code"</h4>
                            <p class="mb-3">Leave close essay not be derivative occupied world can thousand little
                                complicated enjoying life studies irregular nonsense</p>
                        </div>
                        <div class="author-info">
                            <img src="assets/images/author/3.jpg" class="author-image rounded-circle" alt="title">

                            <h6 class="m-0">Maliyah Pratt
                            </h6>
                            <p class="small m-0">Web Developer</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-item  bg-white">
                        <div class="content">
                            <h4 class="mb-3">"By mice then to of"</h4>
                            <p class="mb-3">I am a developer But themeix really nailed it. They knows
                                the code and i am really satisfied for their service. </p>
                        </div>
                        <div class="author-info">
                            <img src="assets/images/author/1.jpg" class="author-image rounded-circle" alt="title">

                            <h6 class="m-0">Owen Bain
                            </h6>
                            <p class="small m-0">Web Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  ====================== Counter Area =============================  -->
    <div class="counter-area py-lg-8 py-5 bg-image-pattern bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="counter-item my-3">
                        <div class="counter-icon"> <img src="assets/images/service-icon.png" alt="title"></div>
                        <div class="counter-content">
                            <h2 data-aos="fade-up" class="h1 text-white"><span class="counter-number">45000</span></h2>
                            <h5 class="m-0 text-white">Community Members</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="counter-item my-3">
                        <div class="counter-icon"> <img src="assets/images/service-icon2.png" alt="title"></div>
                        <div class="counter-content">
                            <h2 data-aos="fade-up" class="h1 text-white"><span class="counter-number">100</span></h2>
                            <h5 class="m-0 text-white">Inspirational Khuthba</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="counter-item my-3">
                        <div class="counter-icon"> <img src="assets/images/service-icon3.png" alt="title"></div>
                        <div class="counter-content">
                            <h2 data-aos="fade-up" class="h1 text-white"><span class="counter-number">83</span></h2>
                            <h5 class="m-0 text-white">Islamic Events</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  ====================== Team Area =============================  -->
    <div class="team-area py-lg-10 py-8">
        <div class="container">
            <div class="section-title text-center mb-4">
                <span data-aos="fade-in" class="text-primary">You love them</span>
                <h2 class="h1">Islamic Scholar</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="team-item mt-4">
                        <div class="team-image">
                            <ul class="team-social list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul><img src="assets/images/scholar/1.jpg" alt="title">
                        </div>
                        <div class="team-content">
                            <h5>Nur Ahmad</h5>
                            <span class="text-primary">PHD, AB University</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="team-item mt-4">
                        <div class="team-image">
                            <ul class="team-social list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul><img src="assets/images/scholar/5.jpg" alt="title">
                        </div>
                        <div class="team-content">
                            <h5>Mir Ali</h5>
                            <span class="text-primary">PHD, CD University</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="team-item mt-4">
                        <div class="team-image">
                            <ul class="team-social list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul><img src="assets/images/scholar/3.jpg" alt="title">
                        </div>
                        <div class="team-content">
                            <h5>Robert N.</h5>
                            <span class="text-primary">PHD, EF University</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="team-item mt-4">
                        <div class="team-image">
                            <ul class="team-social list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul><img src="assets/images/scholar/4.jpg" alt="title">
                        </div>
                        <div class="team-content">
                            <h5>Jhon Doe</h5>
                            <span class="text-primary">PHD, GH University</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  ====================== Call To Action Area =============================  -->
    <div class="call-to-action-area bg-image-pattern py-lg-8 py-5 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto text-center">
                    <h3 class="text-white"> اب الْمُسْلِمُ مَنْ سَلِمَ الْمُسْلِمُونَ مِنْ لِسَانِهِ وَيَدِهِ </h3>
                    <h2 class="text-white mb-3">A Muslim is the one who avoids harming Muslims with his tongue and hands
                    </h2>
                    <p data-aos="slide-up" class="small text-white m-0">- Sahih al-Bukhari, 10 </p>
                </div>
            </div>
        </div>
    </div>
    <!--  ====================== Blog Area =============================  -->
    <div id="blog" class="blog-area pt-lg-10 pt-8">
        <div class="container">
            <div class="section-title text-center mb-4">
                <span class="text-primary">Blog</span>
                <h2 class="h1">Latest News</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-style mt-4">
                        <div class="blog-image">
                            <img src="assets/images/news/1.jpg" alt="title">
                        </div>
                        <div class="blog-content">
                            <span class="blog-meta"><i class="fas fa-tag me-2"></i><a
                                    href='/category'>Sermons</a></span>
                            <h4><a href='/single'> Our Home Entertainment has Evolved Significantly</a></h4>
                            <a href='/single'>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-style mt-4">
                        <div class="blog-image">
                            <img src="assets/images/news/2.jpg" alt="title">
                        </div>
                        <div class="blog-content">
                            <span class="blog-meta"><i class="fas fa-tag me-2"></i><a href='/category'>News</a></span>
                            <h4><a href='/single'> His their his up had quietly the evening cache way distribution</a>
                            </h4>
                            <a href='/single'>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-style mt-4">
                        <div class="blog-image">
                            <img src="assets/images/news/3.jpg" alt="title">
                        </div>
                        <div class="blog-content">
                            <span class="blog-meta"><i class="fas fa-tag me-2"></i> <a href='/category'>Event</a></span>
                            <h4><a href='/single'> Wild in is at hills phase Sisters times my for influenced</a></h4>
                            <a href='/single'>Read More</a>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-5" data-aos="slide-up"><a class='btn btn-primary text-white'
                        href='/blog'>View All News</a></div>

            </div>
        </div>
    </div>
    <!--  ====================== Contact Area =============================  -->
    <div id="contact" class="contact-area py-lg-10 py-8">
        <div class="container">
            <div class="row align-items-center">
                <div class="text-center text-md-start col-md-5">
                    <div class="section-title mb-4">
                        <span class="text-primary">Contact Us</span>
                        <h2 class="h1">Dont be a stranger just say hello.
                        </h2>

                    </div>
                    <p>We will connect back to you in next few moments. Our team of professional alims and scholars are
                        always there to help and guide you.
                    </p>
                    <h4 class="mb-4">Follow Us On Social Media</h4>
                    <ul class="contact-share-social list-inline mb-5">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-6 offset-md-1">
                    <form class="contact-form">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <input type="email" class="form-control" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <input type="email" class="form-control" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="mb-4">
                                <textarea class="form-control" rows="7" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
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