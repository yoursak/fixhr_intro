<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
        <meta name="keywords" content="bootstrap 5, premium, marketing, multipurpose" />
        <meta name="author" content="Coderthemes" />

        <!-- Site Title -->
        <title>FixHR - Fast & Eassy Attendance</title>
        <!-- Site favicon -->
        <link rel="shortcut icon" href="{{asset('assets/logo/logo_final_bg.png')}}" />

        <!-- Swiper js -->
        <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}" type="text/css" />

        <!--Material Icon -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/materialdesignicons.min.css')}}" />

        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css" />
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
    </head>

    <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="60">
        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky-dark" id="navbar-sticky">
            <div class="container">
                <!-- LOGO -->
                <a class="logo text-uppercase" href="index-1.html">
                    <img src="{{asset('assets/logo/Fix_HR_color.png')}}" alt="" style="height: 3rem"/>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mx-auto navbar-center" id="mySidenav">
                        <li class="nav-item">
                            <a href="#home" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#features" class="nav-link">Features</a>
                        </li>
                        <li class="nav-item">
                            <a href="#screenshot" class="nav-link">Screenshot</a>
                        </li>
                        <li class="nav-item">
                            <a href="#testimonial" class="nav-link">Testimonial</a>
                        </li>
                        <li class="nav-item">
                            <a href="#pricing" class="nav-link">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link">Contact Us</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-center">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="btn btn-sm nav-btn" data-bs-toggle="modal" data-bs-target="#signupModal">Sign Up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- home-agency start -->
        <section class="hero-3" id="home">
            <div class="bg-overlay-img"></div>
            <div class="container">
                <div class="row align-items-center hero-content">
                    <div class="col-lg-6">
                        <h1 class="hero-title fw-bold mb-4 display-4">Best Way to Mark Attendance Online</h1>
                        <p class="opacity-75 mb-4 fs-17">Efficient Attendance Tracking Made Simple - Seamlessly Manage Your Attendance Records and Boost Productivity.</p>

                        <p class="text-muted mb-2"><i class="mdi mdi-checkbox-marked-circle-outline text-success me-2"></i>User friendly and easy to use.</p>
                        <p class="text-muted mb-2"><i class="mdi mdi-checkbox-marked-circle-outline text-success me-2"></i>Fast and 99.9% accuracy.</p>
                        <p class="text-muted mb-4 pb-3"><i class="mdi mdi-checkbox-marked-circle-outline text-success me-2"></i>High Security Lavel.</p>
                        <a href="javascript:void(0);" class="btn btn-lg btn-primary">Get Started</a>
                    </div>

                    <div class="col-lg-6">
                        <img src="{{asset('assets/images/screenshort/cretive.png')}}" alt="" class="img-fluid mt-5 mt-lg-0">
                    </div>
                </div>
            </div>
        </section>
        <!-- home-agency end -->

        <!-- How it work start -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-8 col-lg-6 text-center">
                        <h6 class="subtitle">How it <span class="fw-bold">Work</span></h6>
                        <h2 class="title">How dose it work ?</h2>
                        <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque rem aperiam.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="work-box px-lg-5 text-center mb-5 mb-lg-0">
                            <div class="work-icon bg-soft-primary mb-4">
                                <i class="mdi mdi-format-list-bulleted"></i>
                            </div>
                            <h5 class="fw-semibold">1. Intuitive visual editor</h5>
                            <p class="text-muted">Nemo enim ipsam quia voluptas sit aspernatur ist dolores.</p>
                            <img src="{{asset('assets/images/arrow-top.png')}}" alt="" class="work-arrow" />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="work-box px-lg-5 text-center mb-5 mb-lg-0">
                            <div class="work-icon bg-soft-success mb-4">
                                <i class="mdi mdi-palette-outline"></i>
                            </div>
                            <h5 class="fw-semibold">2. Huge design collection</h5>
                            <p class="text-muted">Nemo enim ipsam quia voluptas sit aspernatur ist dolores.</p>
                            <img src="{{asset('assets/images/arrow-bottom.png')}}" alt="" class="work-arrow" />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="work-box px-lg-5 text-center mb-5 mb-lg-0">
                            <div class="work-icon bg-soft-warning mb-4">
                                <i class="mdi mdi-layers-triple"></i>
                            </div>
                            <h5 class="fw-semibold">3. One click installation</h5>
                            <p class="text-muted">Nemo enim ipsam quia voluptas sit aspernatur ist dolores.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- How it work end -->

        <!-- features start -->
        <section class="section bg-light" id="features">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-8 col-lg-6 text-center">
                        <h6 class="subtitle">Our <span class="fw-bold">Features</span></h6>
                        <h2 class="title">Empowering Attendance with FixHR</h2>
                        <p class="text-muted">FixHR empowers organizations by providing them with the tools and insights they need to take control of their attendance management.</p>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <img src="{{asset('assets/images/features-1.png')}}" alt="" class="img-fluid d-block mx-auto ms-lg-auto" />
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <h1 class="fs-38 mb-4">Unlock Your Attendance Journey</h1>
                        <p class="text-muted">On the other hand, we denounce with righteous indignation so blinded that they cannot.</p>

                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                                <span class="avatar avatar-lg bg-white text-primary rounded-circle shadow-primary">
                                    <i class="mdi mdi-check"></i>
                                </span>
                            </div>
                            <div class="flex-grow-1 ms-4">
                                <p class="text-muted"><span class="text-dark fw-bold">The wise a therefore always holds</span> in us matters to this principle a selection a rejects pleasures.</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                                <span class="avatar avatar-lg bg-white text-primary rounded-circle shadow-primary">
                                    <i class="mdi mdi-layers-outline"></i>
                                </span>
                            </div>
                            <div class="flex-grow-1 ms-4">
                                <p class="text-muted">Sed perspiciatis omnis a <span class="text-dark fw-bold">natus error accusantium doloremque</span> laudantium tota rem aperiam eaque ipsa quae illo inventore.</p>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                                <span class="avatar avatar-lg bg-white text-primary rounded-circle shadow-primary">
                                    <i class="mdi mdi-lock-outline"></i>
                                </span>
                            </div>
                            <div class="flex-grow-1 ms-4">
                                <p class="text-muted">
                                    Et sit <span class="text-dark fw-bold">quidem rerum facilis as expedita</span> distinctio am libero tempore cum <span class="text-dark fw-bold">soluta nobis est</span> eligendi optio cumque nihil impedit
                                    quo minus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features end -->

        <!-- features start -->
        <section class="section bg-light features-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <h1 class="fs-38 mb-4">Connecting people, Places</h1>
                        <p class="text-muted">On the other hand, we denounce with righteous indignation so blinded that they cannot.</p>

                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                                <span class="avatar avatar-lg bg-white text-primary rounded-circle shadow-primary">
                                    <i class="mdi mdi-check"></i>
                                </span>
                            </div>
                            <div class="flex-grow-1 ms-4">
                                <p class="text-muted"><span class="text-dark fw-bold">The wise a therefore always holds</span> in us matters to this principle a selection a rejects pleasures.</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                                <span class="avatar avatar-lg bg-white text-primary rounded-circle shadow-primary">
                                    <i class="mdi mdi-layers-outline"></i>
                                </span>
                            </div>
                            <div class="flex-grow-1 ms-4">
                                <p class="text-muted">Sed perspiciatis omnis a <span class="text-dark fw-bold">natus error accusantium doloremque</span> laudantium tota rem aperiam eaque ipsa quae illo inventore.</p>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                                <span class="avatar avatar-lg bg-white text-primary rounded-circle shadow-primary">
                                    <i class="mdi mdi-lock-outline"></i>
                                </span>
                            </div>
                            <div class="flex-grow-1 ms-4">
                                <p class="text-muted">
                                    Et sit <span class="text-dark fw-bold">quidem rerum facilis as expedita</span> distinctio am libero tempore cum <span class="text-dark fw-bold">soluta nobis est</span> eligendi optio cumque nihil impedit
                                    quo minus.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 offset-lg-1">
                        <img src="{{asset('assets/images/screenshort/cretive-1.png')}}" alt="" class="img-fluid d-block mx-auto ms-lg-auto" />
                    </div>
                </div>
            </div>
        </section>
        <!-- features end -->

        <!-- counter start -->
        <section class="section cta-bg">
            <div class="bg-overlay bg-dark"></div>
            <div class="container">
                <div class="row" id="counter">
                    <div class="col-sm-6 col-lg-3">
                        <div class="text-center my-3">
                            <div class="d-flex align-items-center counter-content text-start">
                                <div class="flex-shrink-0">
                                    <i class="mdi mdi-web text-white display-5"></i>
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h1 class="text-white"><span class="counter_value" data-target="825">0</span></h1>
                                    <p class="counter-name text-white opacity-75 mb-0 text-uppercase">Global Brands</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="text-center my-3">
                            <div class="d-flex align-items-center counter-content text-start">
                                <div class="flex-shrink-0">
                                    <i class="mdi mdi-emoticon-happy text-white display-5"></i>
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h1 class="text-white"><span class="counter_value" data-target="1800">0</span>+</h1>
                                    <p class="counter-name text-white opacity-75 mb-0 text-uppercase">Happy Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="text-center my-3">
                            <div class="d-flex align-items-center counter-content text-start">
                                <div class="flex-shrink-0">
                                    <i class="mdi mdi-lightbulb-on text-white display-5"></i>
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h1 class="text-white"><span class="counter_value" data-target="599">0</span>+</h1>
                                    <p class="counter-name text-white opacity-75 mb-0 text-uppercase">Creative Idea</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="text-center my-3">
                            <div class="d-flex align-items-center counter-content text-start">
                                <div class="flex-shrink-0">
                                    <i class="mdi mdi-account-multiple text-white display-5"></i>
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h1 class="text-white"><span class="counter_value" data-target="2000">0</span>+</h1>
                                    <p class="counter-name text-white opacity-75 mb-0 text-uppercase">User clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- counter end -->

        <!-- App Screens start -->
        <section class="section overflow-hidden" id="screenshot">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-8 col-lg-6 text-center">
                        <h6 class="subtitle">App <span class="fw-bold">Screens</span></h6>
                        <h2 class="title">Awesome Screenshot</h2>
                        <p class="text-muted mb-0">Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque rem aperiam.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <!-- Swiper -->
                        <div class="screen-slider overflow-hidden">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{asset('assets/images/screenshort/screenshort (1).png')}}" alt="" class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('assets/images/screenshort/screenshort (2).png')}}" alt="" class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('assets/images/screenshort/screenshort (3).png')}}" alt="" class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('assets/images/screenshort/screenshort (4).png')}}" alt="" class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('assets/images/screenshort/screenshort (5).png')}}" alt="" class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('assets/images/screenshort/screenshort (7).png')}}" alt="" class="img-fluid" />
                                </div>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- App Screens end -->

        <!-- testimonial start -->
        <section class="section bg-light" id="testimonial">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-8 col-lg-6 text-center">
                        <h6 class="subtitle">Our <span class="fw-bold">Testimonial</span></h6>
                        <h2 class="title">What Our Customers Say</h2>
                        <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque rem aperiam.</p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="testimonial-box text-center">
                            <p class="text-muted mb-2">“Itaque earum us tenetur sapiente delectus asperiores repellat.”</p>
                            <h5 class="fs-18 fw-semibold lh-base mb-4 pb-3">
                                At vero eos et accusamus iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atqued corrupti as quos dolores quas molestias excepturi occaecati provident.
                            </h5>
                            <img src="{{asset('assets/images/users/user-1.jpg')}}" alt="" class="shadow rounded-circle" width="70" />
                            <h5 class="fs-18 fw-semibold mt-4 mb-0">Mayra Vasquez</h5>
                            <p class="text-muted fs-14">Web Development, USA</p>
                        </div>
                    </div>
                </div>

                <div class="row mt-md-5">
                    <div class="col-sm-6 col-md-3">
                        <div class="text-center py-3">
                            <img src="{{asset('assets/images/brand-logo/dribbble.png')}}" alt="" height="40" />
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="text-center py-3">
                            <img src="{{asset('assets/images/brand-logo/insta.png')}}" alt="" height="40" />
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="text-center py-3">
                            <img src="{{asset('assets/images/brand-logo/bootstrap.png')}}" alt="" height="40" />
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="text-center py-3">
                            <img src="{{asset('assets/images/brand-logo/jquery.png')}}" alt="" height="40" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial end -->

        <!-- Pricing start -->
        <section class="section" id="pricing">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-8 col-lg-6 text-center">
                        <h6 class="subtitle">Our <span class="fw-bold">Pricing</span></h6>
                        <h2 class="title">Pricing Plan</h2>
                        <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque rem aperiam.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <ul class="nav nav-pills pricing-tab mb-4" id="pills-tab" role="tablist">
                            <li class="nav-item me-2" role="presentation">
                                <button class="nav-link active" id="pills-monthly-tab" data-bs-toggle="pill" data-bs-target="#pills-monthly" type="button" role="tab" aria-controls="pills-monthly" aria-selected="true">Monthly</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-yearly-tab" data-bs-toggle="pill" data-bs-target="#pills-yearly" type="button" role="tab" aria-controls="pills-yearly" aria-selected="false">Yearly</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="pricing-box">
                                            <div class="text-center mb-4 bg-light p-4 rounded">
                                                <h5>Free</h5>
                                                <h1 class="mt-3 mb-0 text-primary">$0.00<span class="text-muted fs-16 fw-normal"> /Month</span></h1>
                                            </div>
                                            <ul class="list-unstyled text-secondary mb-5 pt-2">
                                                <li class="my-3"><i class="mdi mdi-check me-1"></i> <span class="fw-semibold text-dark">3</span> Projects</li>
                                                <li class="my-3"><i class="mdi mdi-check me-1"></i> <span class="fw-semibold text-dark">580GB</span> Storage</li>
                                                <li class="my-3"><i class="mdi mdi-check me-1"></i> <span class="fw-semibold text-dark">Unlimited</span> Contacts</li>
                                                <li class="my-3"><i class="mdi mdi-check me-1"></i> <span class="fw-semibold text-dark">5</span> Domains</li>
                                                <li class="my-3"><i class="mdi mdi-check me-1"></i> Free Support <span class="fw-semibold text-dark">24/7</span></li>
                                            </ul>
                                            <a href="javascript:void(0);" class="btn btn-gradient-primary w-100">Choose Plan</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="pricing-box">
                                            <span class="pricing-badge">Most Popular</span>
                                            <div class="text-center mb-4 bg-light p-4 rounded">
                                                <h5>Standard</h5>
                                                <h1 class="mt-3 mb-0 text-primary">$29.00<span class="text-muted fs-16 fw-normal"> /Month</span></h1>
                                            </div>
                                            <ul class="list-unstyled text-secondary mb-5 pt-2">
                                                <li class="my-3"><i class="mdi mdi-check me-1"></i> <span class="fw-semibold text-dark">10</span> Projects</li>
                                                <li class="my-3"><i class="mdi mdi-check me-1"></i> <span class="fw-semibold text-dark">1TB</span> Storage</li>
                                                <li class="my-3"><i class="mdi mdi-check me-1"></i> <span class="fw-semibold text-dark">Unlimited</span> Contacts</li>
                                                <li class="my-3"><i class="mdi mdi-check me-1"></i> <span class="fw-semibold text-dark">12</span> Domains</li>
                                                <li class="my-3"><i class="mdi mdi-check me-1"></i> Free Support <span class="fw-semibold text-dark">24/7</span></li>
                                            </ul>
                                            <a href="javascript:void(0);" class="btn btn-gradient-primary w-100">Choose Plan</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="pricing-box">
                                            <div class="text-center mb-4 bg-light p-4 rounded">
                                                <h5>Enterprice</h5>
                                                <h1 class="mt-3 mb-0 text-primary">$49.00<span class="text-muted fs-16 fw-normal"> /Month</span></h1>
                                            </div>
                                            <ul class="list-unstyled text-secondary mb-5 pt-2">
                                                <li class="my-3"><i class="mdi mdi-check me-1"></i> <span class="fw-semibold text-dark">20</span> Projects</li>
                                                <li class="my-3"><i class="mdi mdi-check me-1"></i> <span class="fw-semibold text-dark">2.5TB</span> Storage</li>
                                                <li class="my-3"><i class="mdi mdi-check me-1"></i> <span class="fw-semibold text-dark">Unlimited</span> Contacts</li>
                                                <li class="my-3"><i class="mdi mdi-check me-1"></i> <span class="fw-semibold text-dark">18</span> Domains</li>
                                                <li class="my-3"><i class="mdi mdi-check me-1"></i> Free Support <span class="fw-semibold text-dark">24/7</span></li>
                                            </ul>
                                            <a href="javascript:void(0);" class="btn btn-gradient-primary w-100">Choose Plan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-yearly" role="tabpanel" aria-labelledby="pills-yearly-tab">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="pricing-box">
                                            <div class="text-center mb-4 bg-light p-4 rounded">
                                                <h5>Basic</h5>
                                                <h1 class="mt-3 mb-0 text-primary">$39.00<span class="text-muted fs-16 fw-normal"> /Year</span></h1>
                                            </div>
                                            <ul class="list-unstyled text-secondary mb-5 pt-2">
                                                <li class="my-3"><i class="mdi mdi-check me-1"></i> <span class="fw-semibold text-dark">15</span> Projects</li>
                                                <li class="my-3"><i class="mdi mdi-check me-1"></i> <span class="fw-semibold text-dark">3TB</span> Storage</li>
                                                <li class="my-3"><i class="mdi mdi-check me-1"></i> <span class="fw-semibold text-dark">Unlimited</span> Contacts</li>
                                                <li class="my-3"><i class="mdi mdi-check me-1"></i> <span class="fw-semibold text-dark">20</span> Domains</li>
                                                <li class="my-3"><i class="mdi mdi-check me-1"></i> Free Support <span class="fw-semibold text-dark">24/7</span></li>
                                            </ul>
                                            <a href="javascript:void(0);" class="btn btn-gradient-primary w-100">Choose Plan</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="pricing-box">
                                            <span class="pricing-badge">Most Popular</span>
                                            <div class="text-center mb-4 bg-light p-4 rounded">
                                                <h5>Standard</h5>
                                                <h1 class="mt-3 mb-0 text-primary">$79.00<span class="text-muted fs-16 fw-normal"> /Year</span></h1>
                                            </div>
                                            <ul class="list-unstyled text-secondary mb-5 pt-2">
                                                <li class="my-3"><i class="mdi mdi-check me-1"></i> <span class="fw-semibold text-dark">32</span> Projects</li>
                                                <li class="my-3"><i class="mdi mdi-check me-1"></i> <span class="fw-semibold text-dark">6TB</span> Storage</li>
                                                <li class="my-3"><i class="mdi mdi-check me-1"></i> <span class="fw-semibold text-dark">Unlimited</span> Contacts</li>
                                                <li class="my-3"><i class="mdi mdi-check me-1"></i> <span class="fw-semibold text-dark">35</span> Domains</li>
                                                <li class="my-3"><i class="mdi mdi-check me-1"></i> Free Support <span class="fw-semibold text-dark">24/7</span></li>
                                            </ul>
                                            <a href="javascript:void(0);" class="btn btn-gradient-primary w-100">Choose Plan</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="pricing-box">
                                            <div class="text-center mb-4 bg-light p-4 rounded">
                                                <h5>Enterprice</h5>
                                                <h1 class="mt-3 mb-0 text-primary">$99.00<span class="text-muted fs-16 fw-normal"> /Year</span></h1>
                                            </div>
                                            <ul class="list-unstyled text-secondary mb-5 pt-2">
                                                <li class="my-3"><i class="mdi mdi-check me-1"></i> <span class="fw-semibold text-dark">50</span> Projects</li>
                                                <li class="my-3"><i class="mdi mdi-check me-1"></i> <span class="fw-semibold text-dark">10TB</span> Storage</li>
                                                <li class="my-3"><i class="mdi mdi-check me-1"></i> <span class="fw-semibold text-dark">Unlimited</span> Contacts</li>
                                                <li class="my-3"><i class="mdi mdi-check me-1"></i> <span class="fw-semibold text-dark">55</span> Domains</li>
                                                <li class="my-3"><i class="mdi mdi-check me-1"></i> Free Support <span class="fw-semibold text-dark">24/7</span></li>
                                            </ul>
                                            <a href="javascript:void(0);" class="btn btn-gradient-primary w-100">Choose Plan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing end -->

        <!-- faqs start -->
        <section class="section bg-light">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-8 col-lg-6 text-center">
                        <h6 class="subtitle">Our <span class="fw-bold">FAQs</span></h6>
                        <h2 class="title">Frequently Asked Questions</h2>
                        <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque rem aperiam.</p>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <img src="{{asset('assets/images/faq.png')}}" alt="" class="img-fluid d-block mx-auto" />
                    </div>

                    <div class="col-lg-7 offset-lg-1">
                        <div class="accordion accordion-flush faqs-accordion mt-4 mt-lg-0" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                        How to install App?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body text-secondary">
                                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur adipisci velit sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                                    </div>
                                </div>
                            </div>
                            <!-- accordion-header end -->

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        How do I get the Mobile App for my phone?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body text-secondary">
                                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
                                        provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                                    </div>
                                </div>
                            </div>
                            <!-- accordion-header end -->

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        What’s special about FixHR?
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body text-secondary">
                                        Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                                    </div>
                                </div>
                            </div>
                            <!-- accordion-header end -->

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        How much does FixHR cost?
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body text-secondary">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                                        sunt explicabo.
                                    </div>
                                </div>
                            </div>
                            <!-- accordion-header end -->

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        How do I disable installed apps?
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body text-secondary">
                                        Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                                    </div>
                                </div>
                            </div>
                            <!-- accordion-header end -->

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                        What about the security of my payments?
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body text-secondary">
                                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                    </div>
                                </div>
                            </div>
                            <!-- accordion-header end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faqs end -->

        <!-- cta start -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="text-center">
                            <h1 class="display-5 fw-bold mb-4">
                                Available For Your <br />
                                Smartphone.
                            </h1>
                            <p class="text-muted mx-auto mb-5 w-75">You can download the FixHR application for your smartphone from google play store essily.</p>
                            <a href="javascript:void(0);" class="me-1">
                                <img src="{{asset('assets/images/i-store.png')}}" alt="" class="shadow" height="52" />
                            </a>
                            <a href="javascript:void(0);">
                                <img src="{{asset('assets/images/play-store.png')}}" alt="" class="shadow" height="52" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta end -->

        <!-- contact start -->
        <section class="section bg-light" id="contact">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-8 col-lg-6 text-center">
                        <h6 class="subtitle">Our <span class="fw-bold">Contact Us</span></h6>
                        <h2 class="title">Get in Touch</h2>
                        <p class="text-muted">We are available 24<i class="fa fa-xmark"></i>7 for your support, you can ask any kind of queries which is facing you.</p>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="d-flex align-items-center mb-5">
                            <div class="flex-shrink-0">
                                <img src="{{asset('assets/images/hello-icon.png')}}" alt="..." height="80" class="" />
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h2 class="mb-0">Say Hello!</h2>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0">
                                    <div class="contact-icon bg-soft-primary text-primary">
                                        <i class="mdi mdi-email"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mb-0 fs-18">Email</h5>
                                </div>
                            </div>
                            <p class="mb-1"><i class="mdi mdi-arrow-right-thin text-muted me-1"></i><a href="javascript:void(0);" class="text-secondary">teammustangs@fixingdots.com</a></p>
                            <p class=""><i class="mdi mdi-arrow-right-thin text-muted me-1"></i><a href="javascript:void(0);" class="text-secondary">support@fixingdots.com</a></p>
                        </div>
                        <div class="mb-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0">
                                    <div class="contact-icon bg-soft-primary text-primary">
                                        <i class="mdi mdi-phone"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mb-0 fs-18">Phone</h5>
                                </div>
                            </div>
                            <p class="mb-1"><i class="mdi mdi-arrow-right-thin text-muted me-1"></i><a href="javascript:void(0);" class="text-secondary">(+91) 1234 5678 00</a></p>
                            <p class=""><i class="mdi mdi-arrow-right-thin text-muted me-1"></i><a href="javascript:void(0);" class="text-secondary">(+91) 1234 5678 90</a></p>
                        </div>
                        <div class="">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0">
                                    <div class="contact-icon bg-soft-primary text-primary">
                                        <i class="mdi mdi-google-maps"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mb-0 fs-18">Address</h5>
                                </div>
                            </div>
                            <h5 class="fs-16 mb-2 text-secondary"><i class="mdi mdi-arrow-right-thin text-muted me-1"></i> Raipur Office</h5>
                            <p class="text-muted lh-base">Ring Road No. - 2 Opposite Dixit Doers, Gondwara, Bilaspur Rd, Bhanpuri, Raipur, Chhattisgarh 492001</p>
                        </div>
                    </div>
                    <div class="col-lg-7 offset-lg-1">
                        <div class="card contact-form rounded-lg mt-4 mt-lg-0">
                            <div class="card-body p-5">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="formFirstName" class="form-label">First Name</label>
                                                <input type="text" class="form-control" id="formFirstName" placeholder="Your first name..." required />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="formLastName" class="form-label">Last Name</label>
                                                <input type="text" class="form-control" id="formLastName" placeholder="Last first name..." required />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="formEmail" class="form-label">Email Address</label>
                                                <input type="email" class="form-control" id="formEmail" placeholder="Your email..." required />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="formPhone" class="form-label">Phone Number</label>
                                                <input type="text" class="form-control" id="formPhone" placeholder="Type phone number..." required />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="formSubject" class="form-label">Subject</label>
                                                <input type="text" class="form-control" id="formSubject" placeholder="Type subject..." required />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-4">
                                                <label for="formMessages" class="form-label">Messages</label>
                                                <textarea class="form-control" id="formMessages" rows="4" placeholder="Type messages..." required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-gradient-danger">Send Messages <i class="mdi mdi-send ms-1"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact end -->

        <!-- footer & cta start -->
        <section class="footer bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 text-center text-lg-start">
                        <div class="footer-logo mb-4">
                            <a href="#">
                                <img src="{{asset('assets/logo/Fix_HR1.png')}}" alt="" style="height: 4rem"/>
                            </a>
                        </div>
                        <a href="#" class="text-white">teammustangs@fixingdots.com</a>
                        <p class="text-white">+01 ( 1234 567 890 )</p>

                        <h5 class="fs-18 mb-3 text-white">Follow Us</h5>
                        <ul class="list-inline mt-5">
                            <li class="list-inline-item">
                                <a href="javascript:void(0);" class="footer-social-icon"><i class="mdi mdi-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript:void(0);" class="footer-social-icon"><i class="mdi mdi-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript:void(0);" class="footer-social-icon"><i class="mdi mdi-linkedin"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript:void(0);" class="footer-social-icon"><i class="mdi mdi-skype"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <h5 class="fs-22 mb-3 fw-semibold text-white">About Us</h5>
                                <ul class="list-unstyled footer-nav">
                                    <li><a href="javascript:void(0);" class="footer-link">Support Center</a></li>
                                    <li><a href="javascript:void(0);" class="footer-link">Customer Support</a></li>
                                    <li><a href="javascript:void(0);" class="footer-link">About Us</a></li>
                                    <li><a href="javascript:void(0);" class="footer-link">Copyright</a></li>
                                    <li><a href="javascript:void(0);" class="footer-link">Popular Campaign</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <h5 class="fs-22 mb-3 fw-semibold text-white">Our Information</h5>
                                <ul class="list-unstyled footer-nav">
                                    <li><a href="javascript:void(0);" class="footer-link">Return Policy</a></li>
                                    <li><a href="javascript:void(0);" class="footer-link">Privacy Policy</a></li>
                                    <li><a href="javascript:void(0);" class="footer-link">Terms & Conditions</a></li>
                                    <li><a href="javascript:void(0);" class="footer-link">Site Map</a></li>
                                    <li><a href="javascript:void(0);" class="footer-link">Store Hours</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <h5 class="fs-22 mb-3 fw-semibold text-white">My Account</h5>
                                <ul class="list-unstyled footer-nav">
                                    <li><a href="javascript:void(0);" class="footer-link">Press Inquiries</a></li>
                                    <li><a href="javascript:void(0);" class="footer-link">Social Media Directories</a></li>
                                    <li><a href="javascript:void(0);" class="footer-link">Images & B-roll</a></li>
                                    <li><a href="javascript:void(0);" class="footer-link">Permissions</a></li>
                                    <li><a href="javascript:void(0);" class="footer-link">Speaker Requests</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <h5 class="fs-22 mb-3 fw-semibold text-white">Policy</h5>
                                <ul class="list-unstyled footer-nav">
                                    <li><a href="javascript:void(0);" class="footer-link">Application Security</a></li>
                                    <li><a href="javascript:void(0);" class="footer-link">Softwere Principles</a></li>
                                    <li><a href="javascript:void(0);" class="footer-link">Unwanted Softwere Policy</a></li>
                                    <li><a href="javascript:void(0);" class="footer-link">Risponsible Supply Chain</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="footer-tagline">
            <div class="container">
                <div class="row justify-content-between py-2">
                    <div class="col-md-6">
                        <p class="text-white opacity-75 mb-0 fs-14"><script>document.write(new Date().getFullYear())</script> © FixHR - <a href="https://fixingdots.com/" class="text-white" target="blank">FixingDots.com</a></p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <a href="javascript:void(0);" class="text-white opacity-75 fs-14">Terms Conditions & Policy</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer & cta end -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" class="back-to-top-btn btn btn-gradient-primary" id="back-to-top"><i class="mdi mdi-chevron-up"></i></a>

        <!-- Login Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body p-4">
                        <div class="text-center mb-4">
                            <h4 class="mb-0">Welcome Back</h4>
                            <p class="text-muted fs-15">Welcome back! Please enter your details.</p>
                        </div>
                        <div class="mb-3">
                            <label for="emailAddress" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="emailAddress" placeholder="Your email..." />
                        </div>
                        <div class="mb-2">
                            <label for="inputPasseord" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPasseord" />
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-4 pb-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remember for 30 days
                                </label>
                            </div>
                            <a href="javascript:void(0);" class="text-secondary fs-13">Forgot Password..?</a>
                        </div>

                        <a href="javascript:void(0);" class="btn btn-gradient-primary w-100" data-bs-dismiss="modal">Sign up</a>
                        <div class="text-center">
                            <div class="position-relative my-4">
                                <span class="bg-soft-secondary w-100 d-inline-block" style="height: 1px;"></span>
                                <p class="text-muted fs-15 mb-0 mt-1 bg-white px-2 position-absolute top-50 start-50 translate-middle">
                                    Or continue with
                                </p>
                            </div>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="javascript:void(0);" class="btn btn-danger">
                                        <img src="{{asset('assets/images/auth-icon/google.png')}}" alt="google" class="img-fluid" width="24" />
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0);" class="btn btn-primary">
                                        <img src="{{asset('assets/images/auth-icon/facebook.png')}}" alt="" class="img-fluid" width="24" />
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0);" class="btn btn-info">
                                        <img src="{{asset('assets/images/auth-icon/twitter.png')}}" alt="" class="img-fluid" width="24" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Signup Modal -->
        <div class="modal fade" id="signupModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body p-4">
                        <div class="text-center mb-4">
                            <h4 class="">Sign up</h4>
                            <p class="text-muted text-uppercase fs-14">Start For Free</p>
                        </div>
                        <div class="mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="Your first name..." />
                        </div>
                        <div class="mb-3">
                            <label for="lasttName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lasttName" placeholder="Your last name..." />
                        </div>
                        <div class="mb-3">
                            <label for="emailAddress1" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="emailAddress1" placeholder="Your email..." />
                        </div>
                        <div class="mb-2">
                            <label for="inputPasseord2" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPasseord2" />
                        </div>
                        <div class="form-check mb-4 pb-2">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" />
                            <label class="form-check-label" for="flexCheckDefault1"> I agree to the <a href="javascript:void(0);">Terms of Service</a> and <a href="javascript:void(0);">Privacy Policy</a> </label>
                        </div>

                        <a href="javascript:void(0);" class="btn btn-gradient-primary w-100" data-bs-dismiss="modal">Create account</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- javascript -->
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <!-- counter -->
        <script src="{{asset('assets/js/counter.init.js')}}"></script>
        <!-- swiper -->
        <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/swiper.js')}}"></script>
        <script src="{{asset('assets/js/app.js')}}"></script>
    </body>

</html>
