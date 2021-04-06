<?php

function link_phone()
{
    // $telefones = "https://bit.ly/3cDwWvi";
    // $telefones1 = "https://bit.ly/2MyW2k6";

    $telefones = "https://bit.ly/atendK";
    $telefones1 = "https://bit.ly/atendK";


    date_default_timezone_set('America/Sao_Paulo');

    $start = strtotime(date('Y-m-d' . '08:00:00'));
    $end = strtotime(date('Y-m-d' . '17:30:00'));
    $now = time();

    if ($start <= $now && $now <= $end) {
        echo $telefones;
    } else
        echo $telefones1;
}
?>
<!DOCTYPE html>
<html lang="pt-br">


<!-- Mirrored from amava.chitrakootweb.com/demo-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Mar 2021 11:39:25 GMT -->

<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="Chitrakoot Web" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="Startup Agency and SasS Business Template" />
    <meta name="description" content="Amava - Startup Agency and SasS Business Template" />

    <!-- title  -->
    <title>SMS Mobile</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="img/logos/favicon.png" />
    <link rel="apple-touch-icon" href="img/logos/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/logos/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/logos/apple-touch-icon-114x114.png" />

    <!-- plugins -->
    <link rel="stylesheet" href="css/plugins.css" />

    <!-- quform css -->
    <link rel="stylesheet" href="quform/css/base.css">

    <!-- switcher css -->
    <link href="css/switcher.css" rel="stylesheet">

    <!-- theme core css -->
    <link href="css/styles.css" rel="stylesheet" id="colors">
    <link rel="stylesheet" href="css/ranger.css" />
    <style>
        .form-control {
            height: 35px !important;
        }
    </style>
    <!-- Hotjar Tracking Code for https://smsmobile.com.br/site/ -->
    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 2292224,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
    <!-- Hotjar Tracking Code for https://smsmobile.com.br/site/ -->
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1389331134769640');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1389331134769640&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PQFZ5V2VKJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-PQFZ5V2VKJ');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->

</head>

<body>

    <!-- start page loading -->
    <div id="preloader">
        <div class="row loader">
            <div class="loader-icon"></div>
        </div>
    </div>
    <!-- end page loading -->

    <!-- start main-wrapper section -->
    <div class="main-wrapper">

        <!-- start header section -->
        <header class="position-absolute w-100 transparent-header white-header-mobile sm-position-relative">
            <div class="navbar-default">
                <!-- start top search -->
                <div class="top-search bg-theme-solid">
                    <div class="container">
                        <form class="search-form" action="https://amava.chitrakootweb.com/search.html" method="GET" accept-charset="utf-8">
                            <div class="input-group">
                                <span class="input-group-addon cursor-pointer">
                                    <button class="search-form_submit fas fa-search font-size18 text-white" type="submit"></button>
                                </span>
                                <input type="text" class="search-form_input form-control" name="s" autocomplete="off" placeholder="Type & hit enter...">
                                <span class="input-group-addon close-search"><i class="fas fa-times mt-2"></i></span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end top search -->

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-12">
                            <div class="menu_area alt-font">
                                <nav class="navbar navbar-expand-lg navbar-light p-0">

                                    <div class="navbar-header navbar-header-custom">
                                        <!-- start logo -->
                                        <a href="index.php" class="navbar-brand"><img id="logo" src="img/logos/logo_2x1 sms.png" alt="logo"></a>
                                        <!-- end logo -->
                                    </div>

                                    <div class="navbar-toggler"></div>

                                    <!-- start menu area -->
                                    <ul class="navbar-nav mx-auto" id="nav" style="display: none;">
                                        <li><a href="index.php">Início</a>
                                        </li>
                                        <!-- <li><a href="https://smsmobile.com.br/blog/">Blog</a></li> -->
                                        <li><a href="index.php#price_sms">Planos</a></li>
                                        <li><a href="index.php#duvidas_sms">Dúvidas</a></li>
                                        <li><a href="index.php#contato_sms">Contato</a></li>
                                        <li><a href="api.php">API</a></li>



                                        <!-- <li><a href="javascript:void(0)">Pages</a>
                                            <ul>
                                                <li><a href="our-team.html">Our Team</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                                <li><a href="javascript:void(0)">Case Studies</a>
                                                    <ul>
                                                        <li><a href="case-studies.html">Case Studies</a></li>
                                                        <li><a href="case-study-detail.html">Case Studies Detail</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:void(0)">Job Detail</a>
                                                    <ul>
                                                        <li><a href="apply-job.html">Apply Job</a></li>
                                                        <li><a href="job-detail.html">Job Detail</a></li>
                                                        <li><a href="job-listing.html">Job Listing</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:void(0)">Projects</a>
                                                    <ul>
                                                        <li><a href="projects.html">Projects</a></li>
                                                        <li><a href="projects-style2.html">Projects Style2</a></li>
                                                        <li><a href="single-project.html">Single Project</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:void(0)">Elements</a>
                                                    <ul>
                                                        <li><a href="process.html">Process</a></li>
                                                        <li><a href="pricing.html">Pricing</a></li>
                                                        <li><a href="tables.html">Tables</a></li>
                                                        <li><a href="tabs-and-accordions.html">Tabs and Accordions</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:void(0)">Account</a>
                                                    <ul>
                                                        <li><a href="login.html">Login</a></li>
                                                        <li><a href="login-cover.html">Login Cover</a></li>
                                                        <li><a href="register.html">Register</a></li>
                                                        <li><a href="register-cover.html">Register Cover</a></li>
                                                        <li><a href="password-recovery.html">Reset Password</a></li>
                                                        <li><a href="password-recovery-cover.html">Reset Password Cover</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:void(0)">Others</a>
                                                    <ul>
                                                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                        <li><a href="404.html">404 Style1</a></li>
                                                        <li><a href="404-page.html">404 Style2</a></li>
                                                        <li><a href="coming-soon.html">Comingsoon Style1</a></li>
                                                        <li><a href="coming-soon1.html">Comingsoon Style2</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0)">Services</a>
                                            <ul>
                                                <li><a href="service-1.html">Service 01</a></li>
                                                <li><a href="service-2.html">Service 02</a></li>
                                                <li><a href="service-3.html">Service 03</a></li>
                                                <li><a href="service-4.html">Service 04</a></li>
                                                <li><a href="service-5.html">Service 05</a></li>
                                                <li><a href="service-6.html">Service 06</a></li>
                                                <li><a href="service-7.html">Service 07</a></li>
                                                <li><a href="service-8.html">Service 08</a></li>
                                                <li><a href="service-detail.html">Service Detail</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0)">Blog</a>
                                            <ul>
                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                <li><a href="blog-default.html">Blog Default</a></li>
                                                <li><a href="blog-post.html">Blog Post</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact Us</a></li> -->
                                    </ul>
                                    <!-- end menu area -->

                                    <div class="d-sm-flex ml-lg-auto m-sm-auto d-none">
                                        <ul class="nav ml-1 ml-lg-2 align-self-center">
                                            <!-- button -->

                                            <li class="nav-item pl-2">
                                                <a class="btn active" href="https://app.smsmobile.com.br/sms/login.php" role="button" id="dropdownMenuLink">
                                                    Login
                                                </a>
                                            </li>
                                            <li class="nav-item pl-2">
                                                <a class="butn style-one small" target="_blank" href="https://bit.ly/atendK"><span><i class="fab fa-whatsapp"></i> Contato</span></a>
                                            </li>

                                        </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header section -->