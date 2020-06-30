<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>.:SIRUSAK</title>
        <link rel="icon" href="/assets/img/rusak.ico">
            <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/assets/landing/css/bootstrap.min.css">
        <!-- animate CSS -->
        <link rel="stylesheet" href="/assets/landing/css/animate.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="/assets/landing/css/owl.carousel.min.css">
        <!-- themify CSS -->
        <link rel="stylesheet" href="/assets/landing/css/themify-icons.css">
        <!-- flaticon CSS -->
        <link rel="stylesheet" href="/assets/landing/css/flaticon.css">
        <!-- magnific popup CSS -->
        <link rel="stylesheet" href="/assets/landing/css/magnific-popup.css">
        <!-- nice select CSS -->
        <link rel="stylesheet" href="/assets/landing/css/nice-select.css">
        <!-- swiper CSS -->
        <link rel="stylesheet" href="/assets/landing/css/slick.css">
        <!-- style CSS -->
        <link rel="stylesheet" href="/assets/landing/css/style.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="col-md-12">
            <section class="banner_part">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-xl-5">
                            <div class="banner_text">
                                <div class="banner_text_iner">
                                    <h1>Sistem Informasi</h1>
                                    <h1>Rumah Sakit <small>XYZ</small></h1>
                                    {{-- <h5>We are here for your care</h5>
                                    <h1>Best Care &
                                        Better Doctor</h1> --}}
                                    <p>Web ini dibuat dengan tujuan sebagai syarat untuk menambah nilai pada mata kuliah
                                        Pemrograman Web semester genap. Fakultas Teknik | Program Studi Informatika |
                                        Universitas 17 Agustus 1945 Surabaya.
                                    </p>
                                    @if (Route::has('login'))
                                        <div>
                                            @auth
                                                <a href="{{ url('/home') }}" class="btn_2">Home</a>
                                            @else
                                                <a href="{{ route('login') }}" class="btn_2">Login</a>

                                                @if (Route::has('register'))
                                                    {{-- <a href="{{ route('register') }}">Register</a> --}}
                                                @endif
                                            @endauth
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner_img">
                                <img src="assets/img/banner_img.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about us part start-->
            <section class="about_us padding_top">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-6 col-lg-6">
                            <div class="about_us_img">
                                <img src="/assets/landing/img/top_service.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5">
                            <div class="about_us_text">
                                <h2>About us</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua
                                    Quis ipsum suspendisse ultrices gravida. Risus cmodo viverra
                                    maecenas accumsan lacus vel</p>
                                <a class="btn_2 " href="#">learn more</a>
                                <div class="banner_item">
                                    <div class="single_item">
                                        <img src="/assets/landing/img/icon/banner_1.svg" alt="">
                                        <h5>Emergency</h5>
                                    </div>
                                    <div class="single_item">
                                        <img src="/assets/landing/img/icon/banner_2.svg" alt="">
                                        <h5>Appointment</h5>
                                    </div>
                                    <div class="single_item">
                                        <img src="/assets/landing/img/icon/banner_3.svg" alt="">
                                        <h5>Qualfied</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- feature_part start-->
            <section class="feature_part">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8">
                            <div class="section_tittle text-center">
                                <h2>Our services</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-3 col-sm-12">
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <span class="single_feature_icon"><img src="/assets/landing/img/icon/feature_1.svg" alt=""></span>
                                    <h4>Better Future</h4>
                                    <p>Darkness multiply rule Which from without life creature blessed
                                        give moveth moveth seas make day which divided our have.</p>
                                </div>
                            </div>
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <span class="single_feature_icon"><img src="/assets/landing/img/icon/feature_2.svg" alt=""></span>
                                    <h4>Better Future</h4>
                                    <p>Darkness multiply rule Which from without life creature blessed
                                        give moveth moveth seas make day which divided our have.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                                <div class="single_feature_img">
                                    <img src="/assets/landing/img/service.png" alt="">
                                </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <span class="single_feature_icon"><img src="/assets/landing/img/icon/feature_1.svg" alt=""></span>
                                    <h4>Better Future</h4>
                                    <p>Darkness multiply rule Which from without life creature blessed
                                        give moveth moveth seas make day which divided our have.</p>
                                </div>
                            </div>
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <span class="single_feature_icon"><img src="/assets/landing/img/icon/feature_2.svg" alt=""></span>
                                    <h4>Better Future</h4>
                                    <p>Darkness multiply rule Which from without life creature blessed
                                        give moveth moveth seas make day which divided our have.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- our depertment part start-->
            <section class="our_depertment section_padding">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-xl-12">
                            <div class="depertment_content">
                                <div class="row justify-content-center">
                                    <div class="col-xl-8">
                                        <h2>Our Depertment</h2>
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="single_our_depertment">
                                                    <span class="our_depertment_icon"><img src="/assets/landing/img/icon/feature_2.svg"
                                                            alt=""></span>
                                                    <h4>Better Future</h4>
                                                    <p>Darkness multiply rule Which from without life creature blessed
                                                        give moveth moveth seas make day which divided our have.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="single_our_depertment">
                                                    <span class="our_depertment_icon"><img src="/assets/landing/img/icon/feature_2.svg"
                                                            alt=""></span>
                                                    <h4>Better Future</h4>
                                                    <p>Darkness multiply rule Which from without life creature blessed
                                                        give moveth moveth seas make day which divided our have.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="single_our_depertment">
                                                    <span class="our_depertment_icon"><img src="/assets/landing/img/icon/feature_2.svg"
                                                            alt=""></span>
                                                    <h4>Better Future</h4>
                                                    <p>Darkness multiply rule Which from without life creature blessed
                                                        give moveth moveth seas make day which divided our have.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="single_our_depertment">
                                                    <span class="our_depertment_icon"><img src="/assets/landing/img/icon/feature_2.svg"
                                                            alt=""></span>
                                                    <h4>Better Future</h4>
                                                    <p>Darkness multiply rule Which from without life creature blessed
                                                        give moveth moveth seas make day which divided our have.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
