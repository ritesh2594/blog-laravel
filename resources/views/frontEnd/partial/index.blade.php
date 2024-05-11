﻿<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('assets/frontEnd/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontEnd/css/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontEnd/css/uicons-regular-rounded.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontEnd/css/flaticon_baxo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontEnd/css/swiper.bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontEnd/css/aos.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontEnd/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontEnd/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontEnd/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontEnd/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontEnd/css/dark-theme.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/frontEnd/img/favicon.webp') }}">
    <title>Baxo - Responsive Blog HTML Template</title>
</head>

<body>
    <div class="navbar-area header-two" id="navbar">
        <div class="header-top">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6 col-5">
                        <button class="subscribe-btn" data-bs-toggle="modal"
                            data-bs-target="#newsletter-popup">Subscribe<i class="flaticon-right-arrow"></i></button>
                    </div>
                    <div class="col-lg-4 col-md-6 md-none">
                        <a class="navbar-brand" href="index.html">
                            <img class="logo-light" src="{{ asset('assets/frontEnd/img/logo.webp') }}" alt="logo">
                            <img class="logo-dark" src="{{ asset('assets/frontEnd/img/logo-white.webp') }}"
                                alt="logo">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-7">
                        <ul class="social-profile list-style">
                            <li><a href="https://www.fb.com" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                            <li><a href="https://www.twitter.com" target="_blank"><i class="ri-twitter-fill"></i></a>
                            </li>
                            <li><a href="https://www.instagram.com" target="_blank"><i
                                        class="ri-instagram-line"></i></a></li>
                            <li><a href="https://www.linkedin.com" target="_blank"><i class="ri-linkedin-fill"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg">
                <a class="sidebar-toggler md-none" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button"
                    aria-controls="navbarOffcanvas">
                    <img src="{{ asset('assets/frontEnd/img/icons/menubar-black.svg') }}" alt="Image">
                </a>
                <a class="navbar-brand d-lg-none" href="index.html">
                    <img class="logo-light" src="{{ asset('assets/frontEnd/img/logo.webp') }}" alt="logo">
                    <img class="logo-dark" src="{{ asset('assets/frontEnd/img/logo-white.webp') }}" alt="logo">
                </a>
                <button type="button" class="search-btn d-lg-none" data-bs-toggle="modal"
                    data-bs-target="#searchModal">
                    <i class="flaticon-loupe"></i>
                </button>
                <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button"
                    aria-controls="navbarOffcanvas">
                    <span class="burger-menu">
                        <span class="top-bar"></span>
                        <span class="middle-bar"></span>
                        <span class="bottom-bar"></span>
                    </span>
                </a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="dropdown-toggle nav-link active">
                                Home
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="index.html" class="nav-link">
                                        Home Demo One
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-2.html" class="nav-link active">
                                        Home Demo Two
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-3.html" class="nav-link">
                                        Home Demo Three
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                Pages
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="about.html" class="nav-link">
                                        About Us
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">
                                        Contact Us
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="team.html" class="nav-link">
                                        Team
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="author.html" class="nav-link">
                                        Author
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="privacy-policy.html" class="nav-link">
                                        Privacy Policy
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="terms-conditions.html" class="nav-link">
                                        Terms & Conditions
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="error-404.html" class="nav-link">
                                        404 Error Page
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                Business
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="business.html" class="nav-link">
                                        Business News
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="business-details.html" class="nav-link">
                                        Business News Details
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                Politics
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="politics.html" class="nav-link">
                                        Political News
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="politics-details.html" class="nav-link">
                                        Political News Details
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                Video
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="featured-video.html" class="nav-link">
                                        Featured Video
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="featured-video-details.html" class="nav-link">
                                        Featured Video Details
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                Sports
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="sports.html" class="nav-link">
                                        Sports News
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="sports-details.html" class="nav-link">
                                        Sports News Details
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link dropdown-toggle">
                                Shop
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="shop-grid.html" class="nav-link">
                                        Shop Grid
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="shop-left-sidebar.html" class="nav-link">
                                        Shop Left Sidebar
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="shop-right-sidebar.html" class="nav-link">
                                        Shop Right Sidebar
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="shop-details.html" class="nav-link">
                                        Shop Details
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="cart.html" class="nav-link">
                                        Cart
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="wishlist.html" class="nav-link">
                                        Wishlist
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="checkout.html" class="nav-link">
                                        Checkout
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('login-view') }}" class="nav-link">
                                        Login
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="signup.html" class="nav-link">
                                        Sign Up
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="others-option d-flex align-items-center">
                        <div class="option-item">
                            <a class="shopcart" href="cart.html"><i class="flaticon-shopping-cart"></i>
                                <span>5</span></a>
                        </div>
                        <div class="option-item">
                            <button type="button" class="search-btn" data-bs-toggle="modal"
                                data-bs-target="#searchModal">
                                <i class="flaticon-loupe"></i>
                            </button>
                        </div>
                        <div class="option-item">
                            <a href="login.html" class="btn-two">Sign In</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>


    <div class="responsive-navbar offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1"
        id="navbarOffcanvas">
        <div class="offcanvas-header">
            <a href="index.html" class="logo d-inline-block">
                <img class="logo-light" src="{{ asset('assets/frontEnd/img/logo.webp') }}" alt="logo">
                <img class="logo-dark" src="{{ asset('assets/frontEnd/img/logo-white.webp') }}" alt="logo">
            </a>
            <button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="ri-close-line"></i>
            </button>
        </div>
        <div class="offcanvas-body">
            <div class="accordion" id="navbarAccordion">
                <div class="accordion-item">
                    <button class="accordion-button collapsed active" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Home
                    </button>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion2">
                                <div class="accordion-item">
                                    <a class="accordion-link active" href="index.html">
                                        Home Demo One
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a class="accordion-link" href="index-2.html">
                                        Home Demo Two
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a class="accordion-link" href="index-3.html">
                                        Home Demo Three
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapbaxour" aria-expanded="false" aria-controls="collapbaxour">
                        Pages
                    </button>
                    <div id="collapbaxour" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion45">
                                <div class="accordion-item">
                                    <a class="accordion-link" href="about.html">
                                        About Us
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a class="accordion-link" href="contact.html">
                                        Contact Us
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="team.html" class="accordion-link">
                                        Team
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="author.html" class="accordion-link">
                                        Author
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="privacy-policy.html" class="accordion-link">
                                        Privacy Policy
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="terms-conditions.html" class="accordion-link">
                                        Terms & Conditions
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="error-404.html" class="accordion-link">
                                        404 Error Page
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Business
                    </button>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion7">
                                <div class="accordion-item">
                                    <a href="business.html" class="accordion-link">
                                        Business News
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="business-details.html" class="accordion-link">
                                        Business News Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Politics
                    </button>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion30">
                                <div class="accordion-item">
                                    <a href="politics.html" class="accordion-link">
                                        Political News
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="politics-details.html" class="accordion-link">
                                        Political News Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Video
                    </button>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion11">
                                <div class="accordion-item">
                                    <a href="featured-video.html" class="accordion-link">
                                        Featured Video
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="featured-video-details.html" class="accordion-link">
                                        Featured Video Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFourth" aria-expanded="false" aria-controls="collapseFourth">
                        Sports
                    </button>
                    <div id="collapseFourth" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion111">
                                <div class="accordion-item">
                                    <a href="sports.html" class="accordion-link">
                                        Sports News
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="sports-details.html" class="accordion-link">
                                        Sports News Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Shop
                    </button>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion70">
                                <div class="accordion-item">
                                    <a href="shop-grid.html" class="accordion-link">
                                        Shop Grid
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="shop-left-sidebar.html" class="accordion-link">
                                        Shop Left Sidebar
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="shop-right-sidebar.html" class="accordion-link">
                                        Shop Right Sidebar
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="shop-details.html" class="accordion-link">
                                        Shop Details
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="cart.html" class="accordion-link">
                                        Cart
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="wishlist.html" class="accordion-link">
                                        Wishlist
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="checkout.html" class="accordion-link">
                                        Checkout
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="login.html" class="accordion-link">
                                        Login
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="signup.html" class="accordion-link">
                                        Sign Up
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-contact-info">
                <h4>Contact Info</h4>
                <ul class="contact-info list-style">
                    <li>
                        <i class="ri-map-pin-fill"></i>
                        <p>28/A Street, New York, USA</p>
                    </li>
                    <li>
                        <i class="ri-mail-fill"></i>
                        <a href="/cdn-cgi/l/email-protection#157d7079797a5577746d7a3b767a78"><span
                                class="__cf_email__"
                                data-cfemail="6d05080101022d0f0c1502430e0200">[email&#160;protected]</span></a>
                    </li>
                    <li>
                        <i class="ri-phone-fill"></i>
                        <a href="tel:1800123456789">+1 800 123 456 789</a>
                    </li>
                </ul>
                <ul class="social-profile list-style">
                    <li><a href="https://www.fb.com" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                    <li><a href="https://www.instagram.com" target="_blank"><i class="ri-instagram-line"></i></a>
                    </li>
                    <li><a href="https://www.linkedin.com" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                    <li><a href="https://www.twitter.com" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                </ul>
            </div>
            <div class="others-option d-flex d-lg-none align-items-center">
                <div class="option-item">
                    <a href="login.html" class="btn-two">Sign In</a>
                </div>
            </div>
        </div>
    </div>

    <div class="hero-slider-wrap">
        <div class="hero-slider swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide hero-news-card">
                    <img src="{{ asset('assets/frontEnd/img/hero/hero-slide-1.webp') }}" alt="Image">
                    <div class="hero-news-info">
                        <a href="business.html" class="news-cat">Sports</a>
                        <h3><a href="business-details.html">How Technology Helps Sports Fitness</a></h3>
                        <p>Traveling is a wonderful way to escape the daily routine and experience new cultures,
                            cuisines, and landscapes. It is a form of self-discovery and a chance to broaden your
                            horizons.</p>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Mar 27, 2024</a>
                            </li>
                            <li><i class="fi fi-rr-clock-three"></i>10 Min Read</li>
                        </ul>
                    </div>
                </div>
                <div class="swiper-slide hero-news-card">
                    <img src="{{ asset('assets/frontEnd/img/hero/hero-slide-2.webp') }}" alt="Image">
                    <div class="hero-news-info">
                        <a href="business.html" class="news-cat">Travel</a>
                        <h3><a href="business-details.html">Exploring The World: Travel Adventures</a></h3>
                        <p>Traveling is a wonderful way to escape the daily routine and experience new cultures,
                            cuisines, and landscapes. It is a form of self-discovery and a chance to broaden your
                            horizons.</p>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Mar 22, 2024</a>
                            </li>
                            <li><i class="fi fi-rr-clock-three"></i>12 Min Read</li>
                        </ul>
                    </div>
                </div>
                <div class="swiper-slide hero-news-card">
                    <img src="{{ asset('assets/frontEnd/img/hero/hero-slide-3.webp') }}" alt="Image">
                    <div class="hero-news-info">
                        <a href="business.html" class="news-cat">Sports</a>
                        <h3><a href="business-details.html">Life Health Continues To Spread Rapidly</a></h3>
                        <p>Traveling is a wonderful way to escape the daily routine and experience new cultures,
                            cuisines, and landscapes. It is a form of self-discovery and a chance to broaden your
                            horizons.</p>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Mar 14, 2024</a>
                            </li>
                            <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                        </ul>
                    </div>
                </div>
                <div class="swiper-slide hero-news-card">
                    <img src="{{ asset('assets/frontEnd/img/hero/hero-slide-4.webp') }}" alt="Image">
                    <div class="hero-news-info">
                        <a href="business.html" class="news-cat">Travel</a>
                        <h3><a href="business-details.html">Top 6 Places To Explore In 2023</a></h3>
                        <p>Traveling is a wonderful way to escape the daily routine and experience new cultures,
                            cuisines, and landscapes. It is a form of self-discovery and a chance to broaden your
                            horizons.</p>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 23, 2024</a>
                            </li>
                            <li><i class="fi fi-rr-clock-three"></i>8 Min Read</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="hero-prev"><i class="fi-rr-angle-left"></i></div>
            <div class="hero-next"><i class="fi-rr-angle-right"></i></div>
        </div>
    </div>


    <div class="pt-100">
        <div class="container-fluid">
            <div class="content-wrapper">
                <div class="left-content">
                    <div class="row align-items-end mb-20">
                        <div class="col-md-6">
                            <h2 class="section-title-three">Editor's Pick</h2>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <a href="business.html" class="link-one">View All News<i
                                    class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="row editors-wrap-two pb-75">
                        <div class="col-xl-7">
                            <div class="news-card-four">
                                <img src="{{ asset('assets/frontEnd/img/news/news-61.webp') }}" alt="Image">
                                <div class="news-card-info">
                                    <a href="business.html" class="news-cat">Politics</a>
                                    <h3><a href="business-details.html">How Maps Reshape American Politics In World</a>
                                    </h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03,
                                                2024</a></li>
                                        <li><i class="fi fi-rr-comment"></i>03</li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="news-card-wrap">
                                <div class="news-card-three">
                                    <div class="news-card-img">
                                        <img src="{{ asset('assets/frontEnd/img/news/news-37.webp') }}"
                                            alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <a href="news-by-category.html" class="news-cat">Health</a>
                                        <h3><a href="business-details.html">Life Health Continues To Spread Rapidly,
                                                Are
                                                Many People</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb
                                                    03, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-card-three">
                                    <div class="news-card-img">
                                        <img src="{{ asset('assets/frontEnd/img/news/news-35.webp') }}"
                                            alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <a href="news-by-category.html" class="news-cat">Travel</a>
                                        <h3><a href="business-details.html">World Trending Best 10 Website Travel Tips
                                                For Runners</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb
                                                    03, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-card-three">
                                    <div class="news-card-img">
                                        <img src="{{ asset('assets/frontEnd/img/news/news-36.webp') }}"
                                            alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <a href="news-by-category.html" class="news-cat">Business</a>
                                        <h3><a href="business-details.html">How To Find The Right Template For Your
                                                Specific Product</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb
                                                    03, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-card-three">
                                    <div class="news-card-img">
                                        <img src="{{ asset('assets/frontEnd/img/news/news-3.webp') }}"
                                            alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <a href="news-by-category.html" class="news-cat">Health</a>
                                        <h3><a href="business-details.html">Life Health Continues To Spread Rapidly,
                                                Are
                                                Many People</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb
                                                    03, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-end mb-20 selected-wrap-two">
                        <div class="col-md-6">
                            <h2 class="section-title-three">Selected Posts</h2>
                        </div>
                        <div class="col-md-6">
                            <ul class="nav nav-tabs news-tablist" role="tablist">
                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab_1"
                                        type="button" role="tab">Poilitics</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab_2"
                                        type="button" role="tab">Sports</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link " data-bs-toggle="tab" data-bs-target="#tab_3"
                                        type="button" role="tab">Business</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content selected-news-content">
                        <div class="tab-pane fade show active" id="tab_1" role="tabpanel">
                            <div class="row justify-content-center">
                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                                    <div class="news-card-thirteen">
                                        <div class="news-card-img">
                                            <img src="{{ asset('assets/frontEnd/img/news/politics/politics-1.webp') }}"
                                                alt="Iamge">
                                            <a href="business.html" class="news-cat">Politics</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">Navigating The Political Systems Of The
                                                    7 Continents</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a
                                                        href="news-by-date.html">Feb 27, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                                    <div class="news-card-thirteen">
                                        <div class="news-card-img">
                                            <img src="{{ asset('assets/frontEnd/img/news/politics/politics-2.webp') }}"
                                                alt="Iamge">
                                            <a href="business.html" class="news-cat">Politics</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">Political Diversity Across The Seven
                                                    Continents</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a
                                                        href="news-by-date.html">Feb 27, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                                    <div class="news-card-thirteen">
                                        <div class="news-card-img">
                                            <img src="{{ asset('assets/frontEnd/img/news/politics/politics-3.webp') }}"
                                                alt="Iamge">
                                            <a href="business.html" class="news-cat">Politics</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">The World Of Politics: A Seven
                                                    -continent Overview</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a
                                                        href="news-by-date.html">Feb 27, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                                    <div class="news-card-thirteen">
                                        <div class="news-card-img">
                                            <img src="{{ asset('assets/frontEnd/img/news/politics/politics-4.webp') }}"
                                                alt="Iamge">
                                            <a href="business.html" class="news-cat">Politics</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">Making Sense Of Global Political Issues
                                                    And Trends</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a
                                                        href="news-by-date.html">Feb 27, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                                    <div class="news-card-thirteen">
                                        <div class="news-card-img">
                                            <img src="{{ asset('assets/frontEnd/img/news/politics/politics-5.webp') }}"
                                                alt="Iamge">
                                            <a href="business.html" class="news-cat">Politics</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">Uncovering The Political Landscapes Of
                                                    The Seven Worlds</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a
                                                        href="news-by-date.html">Feb 27, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                                    <div class="news-card-thirteen">
                                        <div class="news-card-img">
                                            <img src="{{ asset('assets/frontEnd/img/news/politics/politics-6.webp') }}"
                                                alt="Iamge">
                                            <a href="business.html" class="news-cat">Politics</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">Cyclist Out Of Giro D'italia After
                                                    Injuring Eye With Prosecco Cork</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a
                                                        href="news-by-date.html">Feb 27, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab_2" role="tabpanel">
                            <div class="row justify-content-center">
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="news-card-thirteen">
                                        <div class="news-card-img">
                                            <img src="{{ asset('assets/frontEnd/img/news/news-90.webp') }}"
                                                alt="Iamge">
                                            <a href="business.html" class="news-cat">Sports</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">Fit For The Field: A Guide To Training
                                                    &
                                                    Nutrition For Athletes</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a
                                                        href="news-by-date.html">Feb 27, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="news-card-thirteen">
                                        <div class="news-card-img">
                                            <img src="{{ asset('assets/frontEnd/img/news/news-91.webp') }}"
                                                alt="Iamge">
                                            <a href="business.html" class="news-cat">Sports</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">Queen Misses Games Due To Health
                                                    Reasons</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a
                                                        href="news-by-date.html">Feb 27, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="news-card-thirteen">
                                        <div class="news-card-img">
                                            <img src="{{ asset('assets/frontEnd/img/news/news-92.webp') }}"
                                                alt="Iamge">
                                            <a href="business.html" class="news-cat">Sports</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">Ex-fifa Officials Platini Acquitted Of
                                                    Fraud Charges</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a
                                                        href="news-by-date.html">Feb 27, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="news-card-thirteen">
                                        <div class="news-card-img">
                                            <img src="{{ asset('assets/frontEnd/img/news/news-93.webp') }}"
                                                alt="Iamge">
                                            <a href="business.html" class="news-cat">Sports</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">How Is Technology Changing Treatment Of
                                                    Injuries?</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a
                                                        href="news-by-date.html">Feb 27, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="news-card-thirteen">
                                        <div class="news-card-img">
                                            <img src="{{ asset('assets/frontEnd/img/news/news-94.webp') }}"
                                                alt="Iamge">
                                            <a href="business.html" class="news-cat">Sports</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">Meet The Final Three Teams To Qualify
                                                    For The 2023 World Cup</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a
                                                        href="news-by-date.html">Feb 27, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="news-card-thirteen">
                                        <div class="news-card-img">
                                            <img src="{{ asset('assets/frontEnd/img/news/news-95.webp') }}"
                                                alt="Iamge">
                                            <a href="business.html" class="news-cat">Sports</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">Cyclist Out Of Giro D'italia After
                                                    Injuring Eye With Prosecco Cork</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a
                                                        href="news-by-date.html">Feb 27, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab_3" role="tabpanel">
                            <div class="row justify-content-center">
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="news-card-thirteen">
                                        <div class="news-card-img">
                                            <img src="{{ asset('assets/frontEnd/img/news/politics/politics-9.webp') }}"
                                                alt="Iamge">
                                            <a href="business.html" class="news-cat">Business</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">Ex-fifa Officials latini Acquitted Of
                                                    Fraud Charges</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a
                                                        href="news-by-date.html">Feb 27, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="news-card-thirteen">
                                        <div class="news-card-img">
                                            <img src="{{ asset('assets/frontEnd/img/news/politics/politics-10.webp') }}"
                                                alt="Iamge">
                                            <a href="business.html" class="news-cat">Business</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">How Is Technology Changing Treatment Of
                                                    Injuries?</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a
                                                        href="news-by-date.html">Feb 27, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="news-card-thirteen">
                                        <div class="news-card-img">
                                            <img src="{{ asset('assets/frontEnd/img/news/news-94.webp') }}"
                                                alt="Iamge">
                                            <a href="business.html" class="news-cat">Business</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">Meet The Final Three Teams To Qualify
                                                    For The 2023 World Cup</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a
                                                        href="news-by-date.html">Feb 27, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="news-card-thirteen">
                                        <div class="news-card-img">
                                            <img src="{{ asset('assets/frontEnd/img/news/news-95.webp') }}"
                                                alt="Iamge">
                                            <a href="business.html" class="news-cat">Business</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">Cyclist Out Of Giro D'italia After
                                                    Injuring Eye With Prosecco Cork</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a
                                                        href="news-by-date.html">Feb 27, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="news-card-thirteen">
                                        <div class="news-card-img">
                                            <img src="{{ asset('assets/frontEnd/img/news/politics/politics-7.webp') }}"
                                                alt="Iamge">
                                            <a href="business.html" class="news-cat">Business</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">The Political Landscape: Navigating
                                                    Power And Policy</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a
                                                        href="news-by-date.html">Feb 27, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="news-card-thirteen">
                                        <div class="news-card-img">
                                            <img src="{{ asset('assets/frontEnd/img/news/politics/politics-8.webp') }}"
                                                alt="Iamge">
                                            <a href="business.html" class="news-cat">Business</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">Navigating the Political Sphere:
                                                    Insights and Analysis</a></h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a
                                                        href="news-by-date.html">Feb 27, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="business.html" class="btn-three d-block w-100 mt-20">More Posts<i
                            class="flaticon-arrow-right"></i></a>
                    <div class="row align-items-end mb-20 pt-100">
                        <div class="col-md-6">
                            <h2 class="section-title-three">Most Popular</h2>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <a href="business.html" class="link-one">View All News<i
                                    class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="row gx-45">
                        <div class="col-xl-7">
                            <div class="news-card-four">
                                <img src="{{ asset('assets/frontEnd/img/news/news-31.webp') }}" alt="Image">
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Kyrgios And Djokovic Agree To Post-match
                                            Meal</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03,
                                                2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-card-five">
                                <div class="news-card-img">
                                    <img src="{{ asset('assets/frontEnd/img/news/news-32.webp') }}" alt="Image">
                                    <a href="business.html" class="news-cat">Sports</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Muga Nemo Aptent Quaerat Explicabo Urna Ni Like
                                            Ange</a></h3>
                                    <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print,
                                        graphic or web desi…</p>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03,
                                                2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-card-five">
                                <div class="news-card-img">
                                    <img src="{{ asset('assets/frontEnd/img/news/news-33.webp') }}" alt="Image">
                                    <a href="business.html" class="news-cat">Fashion</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Selective Focus Photography Of Orange Fox
                                            Life</a></h3>
                                    <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print,
                                        graphic or web desi…</p>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03,
                                                2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="news-card-two">
                                <div class="news-card-img">
                                    <img src="{{ asset('assets/frontEnd/img/news/news-34.webp') }}" alt="Image">
                                    <a href="business.html" class="news-cat">Politics</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Beyond Good & Evil 2 Has Been In Development
                                            Longer Than Literally Any Game, Ever</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03,
                                                2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-card-three">
                                <div class="news-card-img">
                                    <img src="{{ asset('assets/frontEnd/img/news/news-35.webp') }}" alt="Image">
                                </div>
                                <div class="news-card-info">
                                    <a href="business.html" class="news-cat">Travel</a>
                                    <h3><a href="business-details.html">World Trending Best 10 Website Travel Tips For
                                            Runners Groups Of</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03,
                                                2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-card-three">
                                <div class="news-card-img">
                                    <img src="{{ asset('assets/frontEnd/img/news/news-36.webp') }}" alt="Image">
                                </div>
                                <div class="news-card-info">
                                    <a href="business.html" class="news-cat">Business</a>
                                    <h3><a href="business-details.html">How To Find The Right Template For Your
                                            Specific
                                            Product</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03,
                                                2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-card-three">
                                <div class="news-card-img">
                                    <img src="{{ asset('assets/frontEnd/img/news/news-37.webp') }}" alt="Image">
                                </div>
                                <div class="news-card-info">
                                    <a href="business.html" class="news-cat">Health</a>
                                    <h3><a href="business-details.html">Life Health Continues To Spread Rapidly, Are
                                            Many People</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03,
                                                2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-end mb-20 pt-100">
                        <div class="col-md-6">
                            <h2 class="section-title-three">General News</h2>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <a href="business.html" class="link-one">View All News<i
                                    class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="general-news-two">
                        <div class="row justify-content-center">
                            <div class="col-xl-6">
                                <div class="news-card-twelve">
                                    <div class="news-card-img">
                                        <img src="{{ asset('assets/frontEnd/img/news/news-20.webp') }}"
                                            alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <a href="business.html" class="news-cat">Fashion</a>
                                        <h3><a href="business-details.html">Is This The Beginning Of The End Of The
                                                Internet?</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb
                                                    03, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-card-twelve">
                                    <div class="news-card-img">
                                        <img src="{{ asset('assets/frontEnd/img/news/news-21.webp') }}"
                                            alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <a href="business.html" class="news-cat">Politics</a>
                                        <h3><a href="business-details.html">7 Steps To Get Professional Facial Results
                                                At Home</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb
                                                    03, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-card-twelve">
                                    <div class="news-card-img">
                                        <img src="{{ asset('assets/frontEnd/img/news/news-22.webp') }}"
                                            alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <a href="business.html" class="news-cat">Inspiration</a>
                                        <h3><a href="business-details.html">Creative Photography Ideas From Smart
                                                Devices</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb
                                                    03, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="news-card-twelve">
                                    <div class="news-card-img">
                                        <img src="{{ asset('assets/frontEnd/img/news/news-23.webp') }}"
                                            alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <a href="business.html" class="news-cat">Politics</a>
                                        <h3><a href="business-details.html">6 Romantic Places You Want To Visit With
                                                Your Partner</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb
                                                    03, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-card-twelve">
                                    <div class="news-card-img">
                                        <img src="{{ asset('assets/frontEnd/img/news/news-24.webp') }}"
                                            alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <a href="business.html" class="news-cat">Active</a>
                                        <h3><a href="business-details.html">The Best Place To Celebrate Birthday And
                                                Music</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a
                                                    href="news-by-date.html">Feb
                                                    03, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-card-twelve">
                                    <div class="news-card-img">
                                        <img src="{{ asset('assets/frontEnd/img/news/news-25.webp') }}"
                                            alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <a href="business.html" class="news-cat">Business</a>
                                        <h3><a href="business-details.html">Splurge Or Save Last Minute Pampering Gift
                                                Ideas</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a
                                                    href="news-by-date.html">Feb
                                                    03, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="promo-wrap pt-100">
                        <div class="promo-card bg-f">
                            <img src="{{ asset('assets/frontEnd/img/promo-shape-2.webp') }}" alt="Image"
                                class="promo-shape">
                            <div class="promo-content">
                                <a href="index.html" class="logo"><img
                                        src="{{ asset('assets/frontEnd/img/logo-white.webp') }}"
                                        alt="Image"></a>
                                <p>The European languages are members of the same family.</p>
                            </div>
                            <div class="promo-img">
                                <img src="{{ asset('assets/frontEnd/img/promo-img.webp') }}" alt="Image">
                            </div>
                        </div>
                    </div>

                    <div class="video-wrap-three pt-100 pb-75">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="section-title-three mb-20">Featured Video</h2>
                            </div>
                            <div class="col-md-6 text-md-end">
                                <a href="featured-video.html" class="link-one mb-20">View All Featured Video<i
                                        class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                        <div class="row justify-content-center gx-45">
                            <div class="col-xl-8">
                                <div class="news-card-eleven">
                                    <div class="news-card-img">
                                        <img src="{{ asset('assets/frontEnd/img/news/news-100.webp') }}"
                                            alt="Image">
                                        <a class="play-now" data-fslightbox=""
                                            href="https://www.youtube.com/watch?v=oDDbVC3Hekc">
                                            <i class="flaticon-play-button"></i>
                                        </a>
                                    </div>
                                    <div class="news-card-info">
                                        <h3><a href="business-details.html">Apex Legends Season 11 Start Date, Time, &
                                                What To Expect</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li class="author">
                                                <span class="author-img">
                                                    <img src="{{ asset('assets/frontEnd/img/author/author-thumb-1.webp') }}"
                                                        alt="Image">
                                                </span>
                                                <a href="author.html">James William</a>
                                            </li>
                                            <li><i class="fi fi-rr-calendar-minus"></i><a
                                                    href="news-by-date.html">Feb
                                                    03, 2024</a></li>
                                            <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="news-card-three">
                                    <div class="news-card-img">
                                        <img src="{{ asset('assets/frontEnd/img/news/news-35.webp') }}"
                                            alt="Image">
                                        <a class="play-now" data-fslightbox=""
                                            href="https://www.youtube.com/watch?v=oDDbVC3Hekc">
                                            <i class="flaticon-play-button"></i>
                                        </a>
                                    </div>
                                    <div class="news-card-info">
                                        <a href="business.html" class="news-cat">Travel</a>
                                        <h3><a href="business-details.html">World Trending Best 10 Website Travel
                                                Tips</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a
                                                    href="news-by-date.html">Feb
                                                    03, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-card-three">
                                    <div class="news-card-img">
                                        <img src="{{ asset('assets/frontEnd/img/news/news-36.webp') }}"
                                            alt="Image">
                                        <a class="play-now" data-fslightbox=""
                                            href="https://www.youtube.com/watch?v=oDDbVC3Hekc">
                                            <i class="flaticon-play-button"></i>
                                        </a>
                                    </div>
                                    <div class="news-card-info">
                                        <a href="business.html" class="news-cat">Business</a>
                                        <h3><a href="business-details.html">How To Find The Right Template For Your
                                                Product</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a
                                                    href="news-by-date.html">Feb
                                                    03, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-card-three">
                                    <div class="news-card-img">
                                        <img src="{{ asset('assets/frontEnd/img/news/news-37.webp') }}"
                                            alt="Image">
                                        <a class="play-now" data-fslightbox=""
                                            href="https://www.youtube.com/watch?v=oDDbVC3Hekc">
                                            <i class="flaticon-play-button"></i>
                                        </a>
                                    </div>
                                    <div class="news-card-info">
                                        <a href="business.html" class="news-cat">Health</a>
                                        <h3><a href="business-details.html">Life Health Continues To Spread Rapidly,
                                                Are
                                                Many People</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a
                                                    href="news-by-date.html">Feb
                                                    03, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-card-three">
                                    <div class="news-card-img">
                                        <img src="{{ asset('assets/frontEnd/img/news/news-3.webp') }}"
                                            alt="Image">
                                        <a class="play-now" data-fslightbox=""
                                            href="https://www.youtube.com/watch?v=oDDbVC3Hekc">
                                            <i class="flaticon-play-button"></i>
                                        </a>
                                    </div>
                                    <div class="news-card-info">
                                        <a href="business.html" class="news-cat">Lifestyle</a>
                                        <h3><a href="business-details.html">5 Things We Know About Gta Trilogy:
                                                Definitive Edition So Far</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a
                                                    href="news-by-date.html">Feb
                                                    03, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="latest-news pb-100">
                        <div class="row align-items-end mb-20">
                            <div class="col-md-6">
                                <h2 class="section-title-three">Latest News</h2>
                            </div>
                            <div class="col-md-6 text-md-end">
                                <a href="business.html" class="link-one">View All News<i
                                        class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                        <div class="row gx-5">
                            <div class="col-xl-7">
                                <div class="scrollscreen">
                                    <div class="news-card-five">
                                        <div class="news-card-img">
                                            <img src="{{ asset('assets/frontEnd/img/news/news-9.webp') }}"
                                                alt="Image">
                                            <a href="business.html" class="news-cat">Lifestyle</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">Good Day To Take A Photo With Your
                                                    Favorite Style</a></h3>
                                            <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying
                                                print, graphic or desi…</p>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a
                                                        href="news-by-date.html">Apr 22, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="news-card-five">
                                        <div class="news-card-img">
                                            <img src="{{ asset('assets/frontEnd/img/news/news-10.webp') }}"
                                                alt="Image">
                                            <a href="business.html" class="news-cat">Fashion</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">I Turned My Home Into A Fortress of
                                                    Surveillance</a></h3>
                                            <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying
                                                print, graphic or desi…</p>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a
                                                        href="news-by-date.html">Apr 15, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>10 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="news-card-five">
                                        <div class="news-card-img">
                                            <img src="{{ asset('assets/frontEnd/img/news/news-11.webp') }}"
                                                alt="Image">
                                            <a href="business.html" class="news-cat">Science</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">Man Wearing Black Pullover Hoodie To
                                                    Smoke Light In</a></h3>
                                            <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying
                                                print, graphic or desi…</p>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a
                                                        href="news-by-date.html">Apr 17, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>8 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="news-card-five">
                                        <div class="news-card-img">
                                            <img src="{{ asset('assets/frontEnd/img/news/news-12.webp') }}"
                                                alt="Image">
                                            <a href="business.html" class="news-cat">Photography</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">Recovery And Cleanup In Florida After
                                                    Hurricane Ian</a></h3>
                                            <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying
                                                print, graphic or desi…</p>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a
                                                        href="news-by-date.html">Apr 12, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>13 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="news-card-five">
                                        <div class="news-card-img">
                                            <img src="{{ asset('assets/frontEnd/img/news/news-13.webp') }}"
                                                alt="Image">
                                            <a href="business.html" class="news-cat">Business</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">Apex Legends Season 11 Starting From
                                                    August, 2024</a></h3>
                                            <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying
                                                print, graphic or desi…</p>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a
                                                        href="news-by-date.html">Apr 07, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="news-card-five">
                                        <div class="news-card-img">
                                            <img src="{{ asset('assets/frontEnd/img/news/news-14.webp') }}"
                                                alt="Image">
                                            <a href="business.html" class="news-cat">Travel</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">Creative Photography Ideas From Smart
                                                    Devices</a></h3>
                                            <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying
                                                print, graphic or desi…</p>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a
                                                        href="news-by-date.html">Apr 05, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>11 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="news-card-five">
                                        <div class="news-card-img">
                                            <img src="{{ asset('assets/frontEnd/img/news/news-15.webp') }}"
                                                alt="Image">
                                            <a href="business.html" class="news-cat">Travel</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">6 Romantic Places You Want To Visit
                                                    With
                                                    Your Partner</a></h3>
                                            <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying
                                                print, graphic or desi…</p>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a
                                                        href="news-by-date.html">Apr 03, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="news-card-five">
                                        <div class="news-card-img">
                                            <img src="{{ asset('assets/frontEnd/img/news/news-16.webp') }}"
                                                alt="Image">
                                            <a href="business.html" class="news-cat">Fashion</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a href="business-details.html">7 Steps To Get Professional Facial
                                                    Results At Home</a></h3>
                                            <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying
                                                print, graphic or desi…</p>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a
                                                        href="news-by-date.html">Apr 02, 2024</a></li>
                                                <li><i class="fi fi-rr-clock-three"></i>10 Min Read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="news-card-two">
                                    <div class="news-card-img">
                                        <img src="{{ asset('assets/frontEnd/img/news/news-17.webp') }}"
                                            alt="Image">
                                        <a href="business.html" class="news-cat">Technology</a>
                                    </div>
                                    <div class="news-card-info">
                                        <h3><a href="business-details.html">Elijah James: The Nashville Photographer
                                                Shares Her Unique Journey</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a
                                                    href="news-by-date.html">Feb
                                                    25, 2024</a></li>
                                            <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-card-three">
                                    <div class="news-card-img">
                                        <img src="{{ asset('assets/frontEnd/img/news/news-18.webp') }}"
                                            alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <a href="business.html" class="news-cat">Travel</a>
                                        <h3><a href="business-details.html">A Complimentary Day At Mandarin The
                                                Oriental</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a
                                                    href="news-by-date.html">Feb
                                                    23, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-card-three">
                                    <div class="news-card-img">
                                        <img src="{{ asset('assets/frontEnd/img/news/news-19.webp') }}"
                                            alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <a href="business.html" class="news-cat">Business</a>
                                        <h3><a href="business-details.html">First prototype Flight Using Kinetic
                                                Launch
                                                System</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a
                                                    href="news-by-date.html">Feb
                                                    22, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="sidebar">
                    <div class="sidebar-widget-two">
                        <div class="contact-widget">
                            <img src="{{ asset('assets/frontEnd/img/contact-bg.svg') }}" alt="Image"
                                class="contact-shape">
                            <a href="index.html" class="logo">
                                <img class="logo-light" src="{{ asset('assets/frontEnd/img/logo.webp') }}"
                                    alt="Image">
                                <img class="logo-dark" src="{{ asset('assets/frontEnd/img/logo-white.webp') }}"
                                    alt="Image">
                            </a>
                            <p>Mauris mattis auctor cursus. Phasellus iso tellus tellus, imperdiet ut imperdiet eu,
                                noiaculis a sem Donec vehicula luctus nunc in laoreet Aliquam</p>
                            <ul class="social-profile list-style">
                                <li><a href="https://www.fb.com" target="_blank"><i
                                            class="flaticon-facebook-1"></i></a>
                                </li>
                                <li><a href="https://www.twitter.com" target="_blank"><i
                                            class="flaticon-twitter-1"></i></a></li>
                                <li><a href="https://www.instagram.com" target="_blank"><i
                                            class="flaticon-instagram-2"></i></a></li>
                                <li><a href="https://www.linkedin.com" target="_blank"><i
                                            class="flaticon-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <h3 class="sidebar-widget-title">Social Links</h3>
                        <ul class="social-widget list-style">
                            <li>
                                <a href="https://www.fb.com" target="_blank">
                                    <span><img src="{{ asset('assets/frontEnd/img/icons/facebook.svg') }}"
                                            alt="Image"></span>
                                    Facebook
                                </a>
                                <p>28 <br> Likes</p>
                            </li>
                            <li>
                                <a href="https://www.twitter.com" target="_blank">
                                    <span><img src="{{ asset('assets/frontEnd/img/icons/twitter.svg') }}"
                                            alt="Image"></span>
                                    Twitter
                                </a>
                                <p>289k Followers</p>
                            </li>
                            <li>
                                <a href="https://www.instagram.com" target="_blank">
                                    <span><img src="{{ asset('assets/frontEnd/img/icons/instagram.svg') }}"
                                            alt="Image"></span>
                                    Instagram
                                </a>
                                <p>231k Followers</p>
                            </li>
                            <li>
                                <a href="https://www.pinterest.com" target="_blank">
                                    <span><img src="{{ asset('assets/frontEnd/img/icons/pinterest.svg') }}"
                                            alt="Image"></span>
                                    Pinterest
                                </a>
                                <p>28k Followers</p>
                            </li>
                            <li>
                                <a href="https://www.youtube.com" target="_blank">
                                    <span><img src="{{ asset('assets/frontEnd/img/icons/youtube.svg') }}"
                                            alt="Image"></span>
                                    Youtube
                                </a>
                                <p>159k Subscribers</p>
                            </li>
                            <li>
                                <a href="https://www.soundcloud.com" target="_blank">
                                    <span><img src="{{ asset('assets/frontEnd/img/icons/soundcloud.svg') }}"
                                            alt="Image"></span>
                                    Soundcloud
                                </a>
                                <p>31k Followers</p>
                            </li>
                            <li>
                                <a href="https://www.behance.com" target="_blank">
                                    <span><img src="{{ asset('assets/frontEnd/img/icons/behance.svg') }}"
                                            alt="Image"></span>
                                    Behance
                                </a>
                                <p>28 Followers</p>
                            </li>
                            <li>
                                <a href="https://www.vimeo.com" target="_blank">
                                    <span><img src="{{ asset('assets/frontEnd/img/icons/vimeo.svg') }}"
                                            alt="Image"></span>
                                    Vimeo
                                </a>
                                <p>55k Followers</p>
                            </li>
                            <li>
                                <a href="https://www.telegram.com" target="_blank">
                                    <span><img src="{{ asset('assets/frontEnd/img/icons/telegram.svg') }}"
                                            alt="Image"></span>
                                    Telegram
                                </a>
                                <p>788k Followers</p>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-widget newsletter-widget-two">
                        <h2>Newsletter</h2>
                        <h6>Join 70,000 Subscribers</h6>
                        <form action="#">
                            <input type="email" placeholder="Email Address">
                            <button type="submit">Subscribe<i class="flaticon-right-arrow-1"></i></button>
                        </form>
                        <p>By signing up, you agree to our <a href="privacy-policy.html">Privacy Policy</a></p>
                    </div>
                    <div class="sidebar-widget">
                        <h3 class="sidebar-widget-title">Popular Tags</h3>
                        <ul class="tag-list list-style">
                            <li><a href="news-by-tags.html">BUSINESS</a></li>
                            <li><a href="news-by-tags.html">FOOD</a></li>
                            <li><a href="news-by-tags.html">LIFESTYLE</a></li>
                            <li><a href="news-by-tags.html">SCIENCE</a></li>
                            <li><a href="news-by-tags.html">SPORTS</a></li>
                            <li><a href="news-by-tags.html">TECHNOLOGY</a></li>
                            <li><a href="news-by-tags.html">CONTENT</a></li>
                            <li><a href="news-by-tags.html">FEATURED</a></li>
                            <li><a href="news-by-tags.html">AUDIO</a></li>
                            <li><a href="news-by-tags.html">PHOTO</a></li>
                            <li><a href="news-by-tags.html">FASHION</a></li>
                            <li><a href="news-by-tags.html">SUCCESSFUL</a></li>
                        </ul>
                    </div>
                    <div class="sidebar-widget">
                        <h3 class="sidebar-widget-title">Popular Posts</h3>
                        <div class="pp-post-wrap">
                            <div class="news-card-one">
                                <div class="news-card-img">
                                    <img src="{{ asset('assets/frontEnd/img/news/news-thumb-4.webp') }}"
                                        alt="Image">
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Bernie Nonummy Pelopai Iatis Eum Litora</a>
                                    </h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr
                                                22,
                                                2024</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-card-one">
                                <div class="news-card-img">
                                    <img src="{{ asset('assets/frontEnd/img/news/news-thumb-5.webp') }}"
                                        alt="Image">
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">How Youth Viral Diseases May The Year 2023</a>
                                    </h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr
                                                23,
                                                2024</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-card-one">
                                <div class="news-card-img">
                                    <img src="{{ asset('assets/frontEnd/img/news/news-thumb-6.webp') }}"
                                        alt="Image">
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Man Wearing Black Pullover Hoodie To Smoke</a>
                                    </h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr
                                                14,
                                                2024</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-card-one">
                                <div class="news-card-img">
                                    <img src="{{ asset('assets/frontEnd/img/news/news-thumb-7.webp') }}"
                                        alt="Image">
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">First Prototype Flight Using Kinetic Launch
                                            System</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr
                                                07,
                                                2024</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-card-one">
                                <div class="news-card-img">
                                    <img src="{{ asset('assets/frontEnd/img/news/news-thumb-8.webp') }}"
                                        alt="Image">
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Beauty Queens Need Material & Products</a>
                                    </h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr
                                                03,
                                                2024</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-card-one">
                                <div class="news-card-img">
                                    <img src="{{ asset('assets/frontEnd/img/news/news-thumb-9.webp') }}"
                                        alt="Image">
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">That Woman Comes From Heaven Look Like
                                            Angel</a>
                                    </h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr
                                                01,
                                                2024</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <h3 class="sidebar-widget-title">Explore Topics</h3>
                        <ul class="category-widget list-style">
                            <li><a href="business.html"><i class="flaticon-right-arrow"></i>Celebration
                                    <span>(6)</span></a></li>
                            <li><a href="business.html"><i
                                        class="flaticon-right-arrow"></i>Culture<span>(3)</span></a>
                            </li>
                            <li><a href="business.html"><i
                                        class="flaticon-right-arrow"></i>Fashion<span>(2)</span></a>
                            </li>
                            <li><a href="business.html"><i
                                        class="flaticon-right-arrow"></i>Inspiration<span>(8)</span></a></li>
                            <li><a href="business.html"><i
                                        class="flaticon-right-arrow"></i>Lifestyle<span>(6)</span></a></li>
                            <li><a href="business.html"><i
                                        class="flaticon-right-arrow"></i>Politics<span>(2)</span></a>
                            </li>
                            <li><a href="business.html"><i
                                        class="flaticon-right-arrow"></i>Trending<span>(4)</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-widget">
                        <h3 class="sidebar-widget-title">Celebration</h3>
                        <div class="featured-widget">
                            <div class="featured-slider swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="news-card-one">
                                            <div class="news-card-img">
                                                <img src="{{ asset('assets/frontEnd/img/news/news-thumb-1.webp') }}"
                                                    alt="Image">
                                            </div>
                                            <div class="news-card-info">
                                                <h3><a href="business-details.html">How Youth Viral Diseases May The
                                                        Year 2023</a></h3>
                                                <ul class="news-metainfo list-style">
                                                    <li><i class="fi fi-rr-calendar-minus"></i><a
                                                            href="news-by-date.html">Mar 24, 2024</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="news-card-one">
                                            <div class="news-card-img">
                                                <img src="{{ asset('assets/frontEnd/img/news/news-thumb-2.webp') }}"
                                                    alt="Image">
                                            </div>
                                            <div class="news-card-info">
                                                <h3><a href="business-details.html">Nintendo Switch Online’s Next Wave
                                                        of N64 Games</a></h3>
                                                <ul class="news-metainfo list-style">
                                                    <li><i class="fi fi-rr-calendar-minus"></i><a
                                                            href="news-by-date.html">Mar 22, 2024</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="news-card-one">
                                            <div class="news-card-img">
                                                <img src="{{ asset('assets/frontEnd/img/news/news-thumb-3.webp') }}"
                                                    alt="Image">
                                            </div>
                                            <div class="news-card-info">
                                                <h3><a href="business-details.html">5 things We Know About GTA
                                                        Definitive Edition</a></h3>
                                                <ul class="news-metainfo list-style">
                                                    <li><i class="fi fi-rr-calendar-minus"></i><a
                                                            href="news-by-date.html">Mar 14, 2024</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-prev"><i class="flaticon-left-arrow"></i></div>
                                <div class="featured-next"><i class="flaticon-right-arrow"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid pb-50">
        <div class="instagram-slider swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a class="instagram-slide" href="https://www.instagram.com" target="_blank">
                        <img src="{{ asset('assets/frontEnd/img/instagram/insta-1.webp') }}" alt="Image">
                        <span>@Baxo on Instagram<i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="instagram-slide" href="https://www.instagram.com" target="_blank">
                        <img src="{{ asset('assets/frontEnd/img/instagram/insta-2.webp') }}" alt="Image">
                        <span>@Baxo on Instagram<i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="instagram-slide" href="https://www.instagram.com" target="_blank">
                        <img src="assets/img/instagram/insta-3.webp')}}" alt="Image">
                        <span>@Baxo on Instagram<i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="instagram-slide" href="https://www.instagram.com" target="_blank">
                        <img src="assets/img/instagram/insta-4.webp')}}" alt="Image">
                        <span>@Baxo on Instagram<i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="instagram-slide" href="https://www.instagram.com" target="_blank">
                        <img src="assets/img/instagram/insta-5.webp')}}" alt="Image">
                        <span>@Baxo on Instagram<i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="instagram-slide" href="https://www.instagram.com" target="_blank">
                        <img src="assets/img/instagram/insta-6.webp')}}" alt="Image">
                        <span>@Baxo on Instagram<i class="flaticon-right-arrow-1"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="footer-wrap">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <p class="copyright-text">© <span>Baxo</span> is proudly owned by <a
                            href="https://hibootstrap.com/">HiBootstrap</a></p>
                </div>
                <div class="col-lg-4 text-center">
                    <ul class="social-profile list-style">
                        <li><a href="https://www.fb.com" target="_blank"><i class="flaticon-facebook-1"></i></a>
                        </li>
                        <li><a href="https://www.twitter.com" target="_blank"><i
                                    class="flaticon-twitter-1"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com" target="_blank"><i
                                    class="flaticon-instagram-2"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com" target="_blank"><i
                                    class="flaticon-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="footer-right">
                        <button class="subscribe-btn" data-bs-toggle="modal"
                            data-bs-target="#newsletter-popup">Become a
                            subscriber<i class="flaticon-right-arrow"></i></button>
                        <p>Get all the latest posts delivered straight to your inbox.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <button type="button" id="backtotop" class="position-fixed text-center border-0 p-0">
        <i class="ri-arrow-up-line"></i>
    </button>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/frontEnd/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontEnd/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontEnd/js/fslightbox.js') }}"></script>
    <script src="{{ asset('assets/frontEnd/js/aos.min.js') }}"></script>
    <script src="{{ asset('assets/frontEnd/js/main.js') }}"></script>
</body>

</html>
