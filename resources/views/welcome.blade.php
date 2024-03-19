<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from webangon.com/html/robert/index-3-black.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Sep 2023 07:35:51 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Arcel Capital Personal Portfolio </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="manifest" href="site.html">
    <link rel="shortcut icon" type="x-icon" href="favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!--  START ALL CSS  -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/jquery.pagepiling.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/line-awesome.css">
    <link rel="stylesheet" href="assets/css/robert-style.css">
    <link rel="stylesheet" href="assets/css/robert-responsive.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,500i,600,700,800&amp;display=swap"
        rel="stylesheet">
    <!--  END ALL CSS  -->

</head>

<body>
    <!--[if lte IE 9]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
 <![endif]-->


    <div class="hola">
        <div id="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- START NAVBAR -->
    <div id="header-sticky" class="small-menu mobile-menu bg-black-menu">
        <div class="container">
            <div class="row bbr-mb">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-8">
                    <div class="logo">
                        <a href="#">
                            <img src="assets/img/logo/logo.jpeg" width="100" height="70" alt="ArcelCapital" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-2">
                    <div class="wrap_nav mainmenu text-right">
                        <ul id="nav-13" class="menu">
                            <li data-menuanchor="home" class="active"><a href="#page1">home</a></li>
                            <li data-menuanchor="about"><a href="#page2">about</a></li>
                            <li data-menuanchor="services"><a href="#page3">services</a></li>
                            <li data-menuanchor="portfolio"><a href="#page4">portfolio</a></li>
                            <li data-menuanchor="blog"><a href="#page5">blog</a></li>
                            <li data-menuanchor="contact"><a href="#page6">contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END NAVBAR -->
    <!-- START HOME -->
    <div id="pagepiling">
        <div class="section pp-scrollable bg-black" id="section1">
            <div class="banner-area hero-block">
                <div class="banner-active">
                    <div class="banner-wrapper vh d-flex">
                        <div class="container">
                            @foreach ($profile as $pro)
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="myphoto">
                                            <img src="{{ '/storage/' . $pro->logo }} " alt="ArcelCapital">
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-left">
                                        <div class="banner_inner text-left">
                                            <h3 class="text-gradient" id="personal">
                                                <span class="typewriter-wrapper">
                                                    <span id="2sRCVJ3sE"
                                                        class="typewriter-char typewriter-item-0">U</span>
                                                    <span id="PIYMVDjg5"
                                                        class="typewriter-char typewriter-item-1">I</span>
                                                    <span id="9LopKcXqkCBA"
                                                        class="typewriter-char typewriter-item-2">/</span>
                                                </span><span class="typewriter-cursor">|</span>
                                            </h3>
                                            <h1>Hello, I'm {{ $pro->user->name }}</h1>
                                            <p>Rearrange the entire color palette, making your site unique and
                                                beautiful.theme using a wide selection </p>
                                            <div class="home-all-button new-btn mt-3">
                                                <a href="#">See All Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="animation-circle-inverse right">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section pp-scrollable bg-black" id="section2">
            <div class="section-two section-protfolio res-topp">
                <div class="container">
                    <div class="row resume-bottom">
                        @foreach ($profile as $pro)
                            <div class="col-lg-6">
                                <div class="con-about">
                                    <img class="about-img" src="{{ '/storage/' . $pro->photo }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-5 offset-lg-1 mt-5">
                                <div class="about-text">

                                    <h2>About Me</h2>
                                    <p>{{ $pro->description }}. </p>
                                    <ul class="about-info mt-4 px-md-0 px-2">
                                        <li class="d-flex"><span>Name :</span> <span>{{ $pro->user->name }}</span></li>
                                        <li class="d-flex"><span>Date of birth :</span>
                                            <span>{{ $pro->date_of_birth }}</span></li>
                                        <li class="d-flex"><span>Address :</span> <span>{{ $pro->address }}</span></li>
                                        <li class="d-flex"><span>Zip code :</span> <span>{{ $pro->zip_code }}</span>
                                        </li>
                                        <li class="d-flex"><span>Email :</span> <span>{{ $pro->email }}</span></li>
                                        <li class="d-flex"><span>Phone : </span> <span>{{ $pro->phone }}</span></li>
                                    </ul>
                                    <div class="home-all-button new-btn mt-4">
                                        <a href="#">See All Demo</a>
                                    </div>
                                </div>
                        @endforeach

                    </div>
                </div>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="Education" class="resume-page resume-bottom">
                                <h2 class="heading">Education</h2>
                                @foreach ($educations as $edu)
                                    <div class="resume-wrap d-flex ftco-animate fadeInUp ftco-animated">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <i class="fa fa-graduation-cap"></i>
                                        </div>
                                        <div class="text pl-3">
                                            <span class="date">{{ $edu->startDate }}-{{ $edu->enddate }}</span>
                                            <h2>{{ $edu->name }}</h2>
                                            <p>{{ $edu->description }}.</p>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="Experience" class="resume-page resume-bottom">
                                <h2 class="heading">Experience</h2>
                                @foreach ($experiences as $exp)
                                    <div class="resume-wrap d-flex ftco-animate fadeInUp ftco-animated">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <i class="fa fa-briefcase"></i>
                                        </div>
                                        <div class="text pl-3">
                                            <span class="date">{{ $exp->startDate }}- {{ $exp->enddate }}</span>
                                            <h2>{{ $exp->name }}</h2>
                                            <p>{{ $exp->description }}.</p>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="Skills" class="resume-page ">
                                <h2 class="heading">Awards</h2>
                                @foreach ($awards as $aw)
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="counter-wrapper text-center with-margin">
                                                <div class="counter-icon">
                                                    <i class="la la-user-friends"></i>
                                                </div>
                                                <div class="counter-text">
                                                    <h2 class="counter">{{ $aw->client }}</h2>
                                                    <span>Happy Clients</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="counter-wrapper text-center with-margin">
                                                <div class="counter-icon">
                                                    <i class="la la-edit"></i>
                                                </div>
                                                <div class="counter-text">
                                                    <h2 class="counter">{{ $aw->design }}</h2>
                                                    <span>Running Design</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 ">
                                            <div class="counter-wrapper text-center ">
                                                <div class="counter-icon">
                                                    <i class="la la-award"></i>
                                                </div>
                                                <div class="counter-text">
                                                    <h2 class="counter">{{ $aw->win }}</h2>
                                                    <span>Award Win</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="counter-wrapper text-center ask-middle-2">
                                                <div class="counter-icon">
                                                    <i class="la la-thumbs-up"></i>
                                                </div>
                                                <div class="counter-text">
                                                    <h2 class="counter">{{ $aw->jobs }}</h2>
                                                    <span>Complete Jobs</span>
                                                </div>
                                            </div>
                                        </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="Skills" class="resume-page res-top-margin">
                            <h2 class="heading">Skills</h2>
                            @foreach ($skills as $sk)
                                <div class="col-md-12 animate-box">
                                    <div class="progress-wrap">
                                        <div class="skill-bar-content">
                                            <span class="skill-title">{{ $sk->name }}</span>
                                        </div>
                                        <div class="bar1 barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill progress" data-percentage="{{ $sk->percent }}"></span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="section pp-scrollable bg-black" id="section3">
        <div class="service section-two section-service">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-tittle text-center">
                            <div class="tittle-detail">
                                <span class="text-gradient">Services</span>
                                <h2>Top Categories</h2>
                                <p>Rearrange the entire color palette, making your site unique and beautiful.theme using
                                    a wide selection </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-features box-border text-center">
                            <div class="service-icon">
                                <i class="lab la-dochub"></i>
                            </div>
                            <div class="services-content">
                                <h3>Web Designer</h3>
                                <p>Here are many variations of passages of check Lorem Ipsum has been industry's
                                    standard dummy text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-features box-border text-center">
                            <div class="service-icon">
                                <i class="las la-chart-bar"></i>
                            </div>
                            <div class="services-content">
                                <h3>Flexible Layouts</h3>
                                <p>Here are many variations of passages of check Lorem Ipsum has been industry's
                                    standard dummy text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-features box-border text-center">
                            <div class="service-icon">
                                <i class="lab la-hotjar"></i>
                            </div>
                            <div class="services-content">
                                <h3>Content Writter</h3>
                                <p>Here are many variations of passages of check Lorem Ipsum has been industry's
                                    standard dummy text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-features box-border text-center">
                            <div class="service-icon">
                                <i class="las la-briefcase"></i>
                            </div>
                            <div class="services-content">
                                <h3>SEO Marketing</h3>
                                <p>Here are many variations of passages of check Lorem Ipsum has been industry's
                                    standard dummy text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-features box-border text-center">
                            <div class="service-icon">
                                <i class="las la-rocket"></i>
                            </div>
                            <div class="services-content">
                                <h3>IT Solutions</h3>
                                <p>Here are many variations of passages of check Lorem Ipsum has been industry's
                                    standard dummy text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-features box-border text-center">
                            <div class="service-icon">
                                <i class="lab la-chromecast"></i>
                            </div>
                            <div class="services-content">
                                <h3>Graphic Artist</h3>
                                <p>Here are many variations of passages of check Lorem Ipsum has been industry's
                                    standard dummy text</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 mt-5 mb-30">
                        <div class="section-dash-warp">
                            <div class="dash-tittle text-center">
                                <div class="video-holder">
                                    <a href="https://www.youtube.com/embed/7e90gBu4pas?autoplay=1" class="video-btn"
                                        data-type="iframe">
                                        <span class="video-btn-style margin-10px-right margin-15px-bottom">
                                            <i class="fa fa-play"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pp-scrollable bg-black" id="section4">
        <div id="Portfolio" class="section-two section-protfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-tittle text-center">
                            <div class="tittle-detail">
                                <span class="text-gradient">Portfolio</span>
                                <h2>My Portfolio</h2>
                                <p>Rearrange the entire color palette, making your site unique and beautiful.theme using
                                    a wide selection </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid filter custom">
                    <div class="row">
                        @foreach ($projets as $pro)
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 grid-item cat1 cat3">
                                <div class="protfolio-wrapper mb-30">
                                    <div class="portfolio-hover">
                                        <img src="{{ '/storage/'. $pro->photo }}" alt="" />
                                    </div>
                                    <figcaption>
                                        <i class="las la-arrows-alt"></i>
                                        <h2><a href="#">{{ $pro->name }}</a></h2>
                                    </figcaption>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pp-scrollable bg-black" id="section5">
        <div id="blog" class="section-two section-blog">
            <div class="container">
                <div class="blog-area">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-tittle text-center">
                                <div class="tittle-detail">
                                    <span class="text-gradient">blogs</span>
                                    <h2>Latest Posts</h2>
                                    <p>Rearrange the entire color palette, making your site unique and beautiful.theme
                                        using a wide selection </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="new-blog-builder res-bottom">
                                <div class="blog-wrapper-image">
                                    <img src="img/blog/1.jpg">
                                </div>
                                <div class="grid-content">
                                    <div class="meta-wrap">
                                        <h2 class="post-title-builder">
                                            <a href="#">Build Your Website Into Design Automatically</a>
                                        </h2>
                                        <p>Rearrange the entire color palette, making your site unique and beautiful.
                                        </p>
                                        <span class="bp-padd">
                                            <i class="las la-folder-open"></i>
                                            <a href="#">Branding ,</a>
                                            <a href="#">Fusion</a>
                                        </span>
                                        <span>
                                            <i class="las la-user"></i>
                                            <a href="#" title="Posts by admin" rel="author">by admin</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="new-blog-builder res-bottom">
                                <div class="blog-wrapper-image">
                                    <img src="img/blog/3.jpg">
                                </div>
                                <div class="grid-content">
                                    <div class="meta-wrap">
                                        <h2 class="post-title-builder">
                                            <a href="#">Build Your Website Into Design Automatically</a>
                                        </h2>
                                        <p>Rearrange the entire color palette, making your site unique and beautiful.
                                        </p>
                                        <span class="bp-padd">
                                            <i class="las la-folder-open"></i>
                                            <a href="#">Branding ,</a>
                                            <a href="#">Fusion</a>
                                        </span>
                                        <span>
                                            <i class="las la-user"></i>
                                            <a href="#" title="Posts by admin" rel="author">by admin</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="new-blog-builder res-bottom">
                                <div class="blog-wrapper-image">
                                    <img src="img/blog/6.jpg">
                                </div>
                                <div class="grid-content">
                                    <div class="meta-wrap">
                                        <h2 class="post-title-builder">
                                            <a href="#">Build Your Website Into Design Automatically</a>
                                        </h2>
                                        <p>Rearrange the entire color palette, making your site unique and beautiful.
                                        </p>
                                        <span class="bp-padd">
                                            <i class="las la-folder-open"></i>
                                            <a href="#">Branding ,</a>
                                            <a href="#">Fusion</a>
                                        </span>
                                        <span>
                                            <i class="las la-user"></i>
                                            <a href="#" title="Posts by admin" rel="author">by admin</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="new-blog-builder res-bottom">
                                <div class="blog-wrapper-image">
                                    <img src="img/blog/4.jpg">
                                </div>
                                <div class="grid-content">
                                    <div class="meta-wrap">
                                        <h2 class="post-title-builder">
                                            <a href="#">Build Your Website Into Design Automatically</a>
                                        </h2>
                                        <p>Rearrange the entire color palette, making your site unique and beautiful.
                                        </p>
                                        <span class="bp-padd">
                                            <i class="las la-folder-open"></i>
                                            <a href="#">Branding ,</a>
                                            <a href="#">Fusion</a>
                                        </span>
                                        <span>
                                            <i class="las la-user"></i>
                                            <a href="#" title="Posts by admin" rel="author">by admin</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="new-blog-builder res-bottom">
                                <div class="blog-wrapper-image">
                                    <img src="img/blog/5.jpg">
                                </div>
                                <div class="grid-content">
                                    <div class="meta-wrap">
                                        <h2 class="post-title-builder">
                                            <a href="#">Build Your Website Into Design Automatically</a>
                                        </h2>
                                        <p>Rearrange the entire color palette, making your site unique and beautiful.
                                        </p>
                                        <span class="bp-padd">
                                            <i class="las la-folder-open"></i>
                                            <a href="#">Branding ,</a>
                                            <a href="#">Fusion</a>
                                        </span>
                                        <span>
                                            <i class="las la-user"></i>
                                            <a href="#" title="Posts by admin" rel="author">by admin</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="new-blog-builder res-bottom">
                                <div class="blog-wrapper-image">
                                    <img src="img/blog/2.jpg">
                                </div>
                                <div class="grid-content">
                                    <div class="meta-wrap">
                                        <h2 class="post-title-builder">
                                            <a href="#">Build Your Website Into Design Automatically</a>
                                        </h2>
                                        <p>Rearrange the entire color palette, making your site unique and beautiful.
                                        </p>
                                        <span class="bp-padd">
                                            <i class="las la-folder-open"></i>
                                            <a href="#">Branding ,</a>
                                            <a href="#">Fusion</a>
                                        </span>
                                        <span>
                                            <i class="las la-user"></i>
                                            <a href="#" title="Posts by admin" rel="author">by admin</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pp-scrollable bg-black" id="section6">
        <div id="contact" class="section-two section-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-tittle text-center">
                            <div class="tittle-detail">
                                <span class="text-gradient">contact</span>
                                <h2>Personal Info</h2>
                                <p>Rearrange the entire color palette, making your site unique and beautiful.theme using
                                    a wide selection </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-xl-3 col-md-3">
                        <div class="detail-share mll-bottom">
                            <div>
                                <i class="la la-phone-volume"></i>
                            </div>
                            <div class="contact-title">
                                <h5>Call Me here</h5>
                                <p>+356 4657 8878</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3">
                        <div class="detail-share mll-bottom">
                            <div>
                                <i class="la la-map-marker-alt"></i>
                            </div>
                            <div class="contact-title">
                                <h5>Visit Office</h5>
                                <p>55, Lvabbari. Street, USA.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3">
                        <div class="detail-share mll-bottom">
                            <div>
                                <i class="la la-envelope"></i>
                            </div>
                            <div class="contact-title">
                                <h5>Email Us At</h5>
                                <p>About.420@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3">
                        <div class="detail-share mll-bottom">
                            <div>
                                <i class="las la-globe"></i>
                            </div>
                            <div class="contact-title">
                                <h5>Website</h5>
                                <p>http://yoursite.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row resume-bottom">
                    <div class="col-md-6">
                        <div class="map-warp">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1825.7529629112532!2d90.38888959995522!3d23.76499199779321!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c75f2944fbf1%3A0xc2b073b23f015fea!2sElenbari+Jame+Masjid!5e0!3m2!1sen!2sbd!4v1549536484950"
                                frameborder="0" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="col-md-6 ask-middle">
                        <div class="comment-respond">
                            <form class="clearfix">
                                <div class="col col-xs-12">
                                    <textarea class="form-control" placeholder="write.."></textarea>
                                </div>
                                <div class="col col-md-6">
                                    <input type="text" class="form-control" placeholder="First Name..">
                                </div>
                                <div class="col col-md-6">
                                    <input type="text" class="form-control" placeholder="Last Name..">
                                </div>
                                <div class="col col-xs-12">
                                    <input type="email" class="form-control" placeholder="Email Address..">
                                </div>
                                <div class="col col-xs-12 submit-btn">
                                    <button type="submit">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-warp">
                            <div class="footer-info-wrapper">
                                <img class="footer-logo" src="img/logo/logo-white.png" alt="porri">
                                <div class="social-icon">
                                    <a class="bg-blue" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="bg-gray" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="bg-red" href="#"><i class="fa fa-google"></i></a>
                                    <a class="bg-orange" href="#"><i class="fa fa-instagram"></i></a>
                                    <a class="bg-red2" href="#"><i class="fa fa-pinterest"></i></a>
                                    <a class="bg-green" href="#"><i class="fa fa-dribbble"></i></a>
                                </div>
                                <div class="copyright-1">
                                    Copyright @2020 <a
                                        href="https://themeforest.net/user/themexhunter">ThemexHunter.</a> All Rights
                                    Reserved.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>






    <!-- START ALL assets/js/SCRIPT -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/fancyBox%20v2.1.5.js"></script>
    <script src="assets/js/jquery.parallax-1.1.3.js"></script>
    <script src="assets/js/jquery.barfiller.js"></script>
    <script src="assets/js/jquery.pagepiling.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/typewritter.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/robert-main.js"></script>
    <script src="assets/js/plugins.js"></script>
    <!-- END ALL assets/js/SCRIPT -->
</body>


<!-- Mirrored from webangon.com/html/robert/index-3-black.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Sep 2023 07:36:49 GMT -->

</html>
