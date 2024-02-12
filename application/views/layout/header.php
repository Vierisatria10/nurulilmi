<div class="header-bottom bg-white px-xl-8">
    <nav class="container">
        <div class="header-navbar navbar navbar-expand-lg">
            <a class='navbar-brand' href='/'><img src="<?= base_url('frontend/assets/images/header-logo.png') ?>"
                    alt="images"></a>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <nav class="navbar-meanmenu">
                    <ul class="navbar-nav">
                        <li class="nav-item"> <a class='nav-link' href='<?= base_url('home') ?>'>Home</a></li>
                        <li class="nav-item"> <a class='nav-link' href='/about'>About</a></li>
                        <li class="nav-item"> <a class='nav-link' href='/service'>Services</a></li>
                        <li class="nav-item">
                            <a class='nav-link toogler' href='/blog'> Profil </a>
                            <ul class="dropdown-menu">
                                <li><a class='dropdown-item' href='<?= base_url('visimisi') ?>'>Visi & Misi</a>
                                </li>
                                <li><a class='dropdown-item' href='/author'>Sejarah</a></li>
                                <li><a class='dropdown-item' href='<?= base_url('pimpinan') ?>'>Pimpinan</a>
                                </li>
                                <li><a class='dropdown-item' href='/single-2'>Imam dan Muadzin</a></li>
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