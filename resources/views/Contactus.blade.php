<!DOCTYPE html>
<!--[if IE 8]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8" />
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/><![endif]-->
    <title>Contact Us</title>

    <meta name="author" content="themesflat.com" />

    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

    <!-- Swiper slide -->
    <link rel="stylesheet" type="text/css" href="assets/css/swiper-bundle.min.css" />

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/icon/Favicon.png" />
    <link rel="apple-touch-icon-precomposed" href="assets/icon/Favicon.png" />
    <!--[if lt IE 9]>
<script src="javascript/html5shiv.js"></script>
<script src="javascript/respond.min.js"></script>
<![endif]-->
</head>

<body class="header-fixed">
    <!-- preloader -->
    <!-- <div class="preload preload-container">
<div class="preload-logo"></div></div> -->
    <!-- /preloader -->

    <div id="wrapper" class="animsition">
        <div id="page" class="clearfix">
            <!-- Header Wrap -->
            <div id="site-header-wrap">
                <!-- /#top-bar -->
                <!-- Header -->
                <header id="site-header">
                    <div id="site-logo" class="clearfix">
                        <div id="site-log-inner">
                            <a href="/" rel="home" class="main-logo"><img src="assets/images/logo/primespot-logo.svg"
                                    alt="bixos" width="200" height="150" data-width="100" data-height="44"
                                    style="/*width: 100%;*/" /></a>
                        </div>
                    </div>
                    <div class="mobile-button">
                        <span></span>
                    </div>
                    <!-- /.mobile-button -->
                    <!-- /#site-logo -->
                    <div id="site-header-inner">
                        <div class="wrap-inner clearfix">
                            <nav id="main-nav" class="main-nav">
                                <ul id="menu-primary-menu" class="menu">
                                    <li class="menu-item ">
                                        <a href="company">Company</a>
                                        <!-- <ul class="sub-menu">
<li class="menu-item current-item"><a href="company">Company01</a></li>

</ul> -->
                                    </li>
                                    <li class="menu-item  ">
                                        <a href="solution">Solutions</a>
                                        <!-- <ul class="sub-menu">
<li class="menu-item"><a href="solution">Solution01</a></li>
</ul> -->
                                    </li>
                                    <li class="menu-item ">
                                        <a href="integration">Integration</a>
                                        <!-- <ul class="sub-menu">
<li class="menu-item"><a href="integration">Integration01</a></li>
</ul> -->
                                    </li>
                                    <li class="menu-item  ">
                                        <a href="clientele">Clientele</a>
                                        <!-- <ul class="sub-menu">
<li class="menu-item"><a href="clientele">Clientele01</a></li>
</ul> -->
                                    </li>
                                    <li class="menu-item ">
                                        <a href="career">Career</a>
                                        <!-- <ul class="sub-menu">
<li class="menu-item"><a href="career">Career01</a></li>
</ul> -->
                                    </li>
                                    <li class="menu-item ">
                                        <a href="https://primespotindiablog.com/">Blog</a>
                                        <!-- <ul class="sub-menu">
<li class="menu-item"><a href="career">Career01</a></li>
</ul> -->
                                    </li>
                                    <li class="menu-item d-contact-btn ">
                                        <a href="contact"><span>Contact Us </span></a>
                                    </li>

                                </ul>
                            </nav>
                            <!-- /#main-nav -->
                        </div>
                        <!-- /.wrap-inner -->
                    </div> <!-- /#site-header-inner -->

                    <div class="tf-button">
                        <a href="contact" class="button btn-1"><span>Contact Us </span></a>
                    </div>
                </header>
                <!-- /#site-header -->
                <section class="flat-title-page-Contact">
                    <div class="overlay-page"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="breadcrumbs">
                                    <h1>Contact Us</h1>
                                    <div class="breadcrumb-trail link-style-2">
                                        <a class="home" href="/">Home Page</a><span>Contact Us</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- #site-header-wrap -->

            <div class="container p-5">
                <div class="row pt-5 pb-5">
                    <div class="col-lg-5 pt-3 contact-map-img">
                        <div class="flat-trusted">
                            <div class="mark-page37 tf-mark "><img src="assets/images/mark-page/dots.svg" alt="images"
                                    style="width:70%"> </div>

                        </div>
                        <img src="/assets/images/image-box/map-20-05-2023.png" alt="" />
                        <p style="text-align: justify;">PrimeSpot specializes in integrated e-commerce solutions for
                            brands, with special expertise in premium and luxury brands.
                            After tasting success with over 100+ brands like Bvlgari, Chopard, Hermes, Guess, DKNY, CK,
                            Polaroid, and many more in the fragrance, beauty,
                            luggage & sunglass categories; PrimeSpot set out to service other organizations keeping in
                            mind the highest standards of efficiency and networking
                            to enable brands to tap into the booming business of e-commerce.</p>
                    </div>
                    <div class="col-lg-7 pt-3">

                        <h2 class="mb-5">How we can help you?</h2>
                        <form action="{{route('Sendemail')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                            @endif
                            <div class="pb-5">
                                <label for=""><b> First Name</b></label>
                                <input name="fname" class="mt-2" type="text" required />
                            </div>

                            <div class="pb-5"><label for=""><b> Last Name</b></label><input name="lname" class="mt-2"
                                    type="text" required /></div>
                            <div class="pb-5"><label for=""><b> Email</b></label><input name="email" class="mt-2"
                                    type="email" required /></div>
                            <div class="pb-5"><label for=""><b> Mobile/Phone number</b></label><input name="phone"
                                    class="mt-2" type="number" required /></div>
                            <div class="pb-5"><label for=""><b> Subject</b></label><input name="sub" class="mt-2"
                                    type="text" required /></div>
                            <div class="form-half">
                                <div class="pb-5 ">
                                    <label class="comp-lable" for=""><b> Company name</b></label>
                                    <br />
                                    <input name="cname" class="mt-2 contact-form-c-name " type="text" required />
                                </div>
                                <div class="pb-5">
                                    <label for=""><b> Profile link/ Document</b></label>
                                    <br />
                                    <input name="file" class="mt-2" type="file" required />
                                </div>
                            </div>
                            <div class="pb-4">
                                <label for=""><b> Message</b></label>
                                <textarea name="msg" class="mt-2" name="Message" id="" cols="30" rows="10">
</textarea>
                            </div>
                            <button name="submit" type="submit" id="comment-reply"
                                class="button btn-style4 btn-submit-comment">
                                <span>Submit</span>
                            </button>
                        </form>
                    </div>
                    <div class="flat-trusted">
                        <div class="mark-page38 tf-mark "> <img src="assets/images/mark-page/hexagone.svg" alt="images"
                                style="width:70%"> </div>
                        <div class="mark-page39 tf-mark animate-up"> <img src="assets/images/mark-page/red-truck.svg"
                                alt="images" style="width:70%"> </div>
                    </div>
                </div>
            </div>


            <!-- Footer -->
            <x-footer />
            <!-- /#footer -->

            <!-- Bottom -->
            <!-- <div class="widget-social-footer">
<div class="container">
<div>
<h3>
Copywright by
<a
href="https://themeforest.net/user/themesflat/portfolio"
class="text-color-3"
>@ThemesFlat</a
>.All Rights Reserved.
</h3>
</div>
</div>
</div>
</div> -->
            <!-- /#page -->
        </div>
        <a id="scroll-top"></a>
        <!-- /#wrapper -->

        <!-- Javascript -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="assets/js/jquery.easing.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/shortcodes.js"></script>
        <script src="assets/js/jquery.fancybox.js"></script>
        <script src="assets/js/plugin.js"></script>
        <script src="assets/js/jquery-validate.js"></script>

        <script src="assets/js/swiper-bundle.min.js"></script>
        <script src="assets/js/swiper.js"></script>
</body>

</html>
