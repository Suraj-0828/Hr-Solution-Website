    <!-- sidebar area start -->
    <section class="sidebar__area">
        <div class="sidebar__shape" data-background="assets/img/shape/hexa.png"></div>
        <div class="sidebar__wrapper">
            <div class="sidebar__close">
                <button class="sidebar__close-btn" id="sidebar__close-btn">
                    <span><i class="fal fa-times"></i></span>
                    <span>close</span>
                </button>
            </div>
            <div class="sidebar__content">
                <div class="logo mb-40">
                    <a href="index.php">
                        <img src="assets/img/logo/logo-white.png" alt="logo">
                    </a>
                </div>
                <div class="mobile-menu d-block"></div>
                <div class="hedder-button mt-30">
                    <a class="h-btn h-btn-2 mb-15" href="#"><i class="far fa-user-circle"></i> Sign In</a>
                    <a class="h-btn h-btn-green h-btn-white" href="#"><i class="far fa-lock-alt"></i> Log In</a>
                </div>
            </div>
        </div>
    </section>
    <div class="body-overlay"></div>
    <!-- sidebar area end -->


    <header class="header-transparent">
        <div id="sticky-header" class="main-menu-area menu-01 header-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="logo">
                            <a href="index.php"><img src="assets/img/logo/logo.png" alt="" /></a>
                        </div>
                        <div class="logo-black">
                            <a href="index.php"><img src="assets/img/logo/logo-black.png" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-6 col-sm-6 col-6">
                        <div class="header-right d-flex justify-content-end justify-content-lg-between align-items-center">
                            <div class="main-menu d-none d-lg-block">
                                <nav id="mobile-menu">
                                    <ul>

                                        <li><a href="index.php">Home</a>
                                        </li>

                                        <li><a href="about-us.php">About Us</a>
                                        </li>

                                        <li><a href="search.php">Search Page</a>
                                        </li>

                                        <li><a href="job-listing.php">Job Listing</a>
                                        </li>

                                        <li><a href="job-details.php">Job Details</a>
                                        </li>

                                        <li><a href="contact-us.php">Contact Us</a>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                            <div class="header-btn d-none d-lg-block">
                                <div class="hedder-button">
                                    <a class="h-btn d-lg-none d-xl-inline-block" href="#" data-toggle="modal" data-target="#registerModal"><i class="far fa-user-circle"></i> Sign In</a>
                                    <a class="h-btn h-btn-green" href="#" data-toggle="modal" data-target="#registerModal"><i class="far fa-lock-alt"></i> Log In</a>
                                </div>
                            </div>
                            <div class="sidebar__menu d-lg-none">
                                <div class="sidebar-toggle-btn" id="sidebar-toggle">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>






    <div class="modal fade" id="modal-subscribe" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content shadow-lg rounded-3">
                <div class="modal-header text-white">
                    <img src="assets/img/logo/logo-black.png" />
                    <button type="button" class="btn-close btn-close-white mt-10" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class=" text-white pb-2 pt-1">

                </div>

                <div class="modal-body bg-light p-4 pop-radius">
                    <form method="post" action="backend">
                        <input type="hidden" name="dzToDo" value="Contact">
                        <div class="row">
                            <!-- Child's Name -->
                            <div class="mb-3 col-md-12">
                                <input name="name" id="childName" type="text" class="form-control" required placeholder="Full Name">
                            </div>
                            <div class="mb-3 col-md-12">
                                <input name="email" id="childName" type="mailto" class="form-control" required placeholder="Email ID">
                            </div>
                            <div class="mb-3 col-md-12">
                                <input name="phone" id="childName" type="tel" class="form-control" required placeholder="Mobile Number">
                            </div>
                            <div class="mb-3 col-md-12">
                                <input name="whataap" id="childName" type="tel" class="form-control" required placeholder="WhatsApp Number">
                            </div>
                            <div class="mb-3 col-md-12">
                                <input name="resume" id="childName" type="text" class="form-control" required placeholder="Upload Resume">
                            </div>

                        </div>
                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-color btn-lg w-100">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>