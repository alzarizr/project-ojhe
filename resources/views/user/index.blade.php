@extends('layouts.app')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <p data-aos="fade-up" class="hero-subtitle">
                        <span class="typed" data-typed-items="Service AC,Instalasi AC,Cleaning AC  "></span>
                    </p>
                    <blockquote data-aos="fade-up" data-aos-delay="100">
                        <h1>
                            PT. OJHE
                            <br />
                            Ojhe adalah perusahaan yang bergerak dibidang Pemasangan,
                            Perawatan, dan Perbaikan AC serta pengadaan unit baru dan second.
                            Menjadi perusahaan yang mampu memberikan solusi terbaik untuk
                            kebutuhan berbagai macam AC (Air Conditioner).
                            Memberikan solusi terbaik untuk setiap pelanggan Edukasi yang
                            berkesinambungan demi peningkatan kualitas kerja jujur dan Bertanggung Jawab
                            Hindari korupsi dan tindakan lain yang merugikan banyak pihak
                            Orientasi yang utama adalah kebermanfaatan
                        </h1>
                    </blockquote>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="services" class="btn-get-started">Layanan Kami</a>
                        <!-- <a
                                            href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                                            class="glightbox btn-watch-video d-flex align-items-center"
                                            ><i class="bi bi-play-circle"></i><span>Watch Video</span></a
                                          > -->
                    </div>
                </div>
            </div>
            <!-- ICON -->
            <div class="row">
                <div class="col-xl-4">
                    <!-- ICON -->
                    <div class="button-and-icons-container" data-aos="fade-up" data-aos-delay="300">
                        <div class="socials">
                            <ul class="icon-social" id="iconSocialList">
                                <!-- TikTok -->
                                <li>
                                    <a href="https://tiktok.com/@coolze.id" target="_blank">
                                        <img src="assets/img/icon-logo/tiktok.png" class="img-fluid" alt="logo tik-tok" />
                                        <span>@coolze.id</span>
                                    </a>
                                </li>
                                <!-- Instagram -->
                                <li>
                                    <a href="https://www.instagram.com/optima_jaya_tekhnik" target="_blank">
                                        <img src="assets/img/icon-logo/instagram.png" class="img-fluid"
                                            alt="logo instagram" />
                                        <span>@optima_jaya_tekhnik.id</span>
                                    </a>
                                </li>
                                <!-- Whatsapp -->
                                <li>
                                    <a href="https://wa.me/628123328883" target="_blank">
                                        <img src="{{ asset('assets/img/icon-logo/whatsapp.png') }}" class="img-fluid"
                                            alt="logo whatsapp" />
                                        <span>+62 812 332 8883</span>
                                    </a>
                                </li>
                                <!-- Phone -->
                                <li>
                                    <a href="tel:+628123328883">
                                        <img src="{{ asset('assets/img/icon-logo/phone.png') }}" class="img-fluid"
                                            alt="logo phone" />
                                        <span>+62 812 332 8883</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End ICON -->
                </div>
            </div>
        </div>
        <!-- End .col-xl-4 -->
    </section>
    <!-- End Hero Section -->

    <main id="main">
        <!-- ======= Why Choose Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Why Choose Us</h2>
                </div>

                <div class="row g-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-xl-5 img-bg"
                        style="
                background-image: url('{{ asset('assets/img/why-us-bg.jpg') }}');">
                    </div>
                    <div class="col-xl-7 slides position-relative">
                        <div class="slides-1 swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="item">
                                        <h3 class="mb-3">Latar Belakang</h3>
                                        <h4 class="mb-3">
                                            CV Optima Jaya Tekhnik berdiri pada september 2009
                                            sebagai bentuk usaha nyata dari pendiri perusahaan untuk
                                            meningkatkan taraf hidup dan berbagai manfaat dengan rekan
                                            seprofesi yang lain sejak berdiri.
                                        </h4>
                                        <p>
                                            perusahaan ini berkomitmen
                                            memberikan layanan terbaik dalam pemasangan, perawatan dan perbaikan
                                            berbagai jenis AC, baik untuk kebutuhan personal maupun komersial
                                        </p>
                                    </div>
                                </div>
                                <!-- End slide item -->
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="counts" class="counts">
            <div data-aos="fade-up">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12" data-aos="fade-left" data-aos-delay="100">
                            <div class="content text-center">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="count-box">
                                            <i class="bi bi-emoji-smile"></i>
                                            <span data-purecounter-start="0" data-purecounter-end="100"
                                                data-purecounter-duration="3" class="purecounter"></span>
                                            <p><strong>Proyek Sukses Dikerjakan</strong></p>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="count-box">
                                            <i class="bi bi-journal-richtext"></i>
                                            <span data-purecounter-start="0" data-purecounter-end="3000"
                                                data-purecounter-duration="3" class="purecounter"></span>
                                            <p>
                                                <strong>Pelanggan Puas</strong>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="count-box">
                                            <i class="bi bi-clock"></i>
                                            <span data-purecounter-start="0" data-purecounter-end="20"
                                                data-purecounter-duration="3" class="purecounter"></span>
                                            <p>
                                                <strong>Years of experience</strong>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="count-box">
                                            <i class="bi bi-award"></i>
                                            <span data-purecounter-start="0" data-purecounter-end="15"
                                                data-purecounter-duration="3" class="purecounter"></span>
                                            <p>
                                                <strong>Tenaga Ahli</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Total Client Counts Section -->

        <!-- Services Section - Home Page -->
        <section id="service" class="service">
            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <header class="section-header">
                    <h2>Layanan Kami</h2>
                </header>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <!-- Item 1 -->
                <div class="row gy-4 align-items-center service-item">
                    <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-left" data-aos-delay="200">
                        <h3>Project Instalasi</h3>
                        <p>
                            Instalasi HVAC (Heating, Ventilation, and Air Conditioning)
                            untuk Residensial (Rumah, Apartemen, Kost, Kantor), Project
                            Commercial (Gedung, Supermarket, High Rise), Industrial (Gudang,
                            Pabrik)
                        </p>
                    </div>
                    <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out"
                        data-aos-delay="100">
                        <div class="image-stack">
                            <img src="{{ asset('assets/img/HVAC/hvac.jpg') }}" alt="hvac" class="stack-front" />
                            <img src="{{ asset('assets/img/HVAC/factory-hvac1.jpg') }}" alt="hvac pabrik"
                                class="stack-back" />
                        </div>
                    </div>
                </div>
                <!-- Service Item 1 -->

                <!-- Item 2 -->
                <div class="row gy-4 align-items-stretch justify-content-between service-item">
                    <div class="col-lg-6 align-items-center service-img-bg" data-aos="zoom-out">
                        <img src="{{ asset('assets/img/HVAC/multi-s-nobg.png') }}" class="img-fluid"
                            alt="ac gree multi s" class="stack-front" />
                    </div>
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-right">
                        <h3>Cleaning</h3>
                        <p>
                            Memberikan jasa cleaning atau perawatan pada unit AC
                            residensial, commercial, dan industrial.
                        </p>
                        <ul>
                            <li>
                                <i class="bi bi-patch-check-fill"></i>
                                <span>Harga terjangkau dan bersaing</span>
                            </li>
                            <li>
                                <i class="bi bi-patch-check-fill"></i><span> Garansi resmi Brand</span>
                            </li>
                            <li>
                                <i class="bi bi-patch-check-fill"></i>
                                <span>Free konsultasi menyesuaikan kebutuhan</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Service Item -->

                <!-- Item 3 -->
                <div class="row gy-4 align-items-center service-item">
                    <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-left" data-aos-delay="200">
                        <h3>Service</h3>
                        <p>
                            Memberikan jasa perbaikan atau servis pada AC 
                            yang bermasalah di perbaiki sampai kembali
                            dingin.
                            <br />
                            <br />
                            "AC anda Mengalami masalahan Optima Jaya Tekhnik solusinya"
                        </p>
                    </div>
                    <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out"
                        data-aos-delay="100">
                        <div class="image-stack">
                            <img src="{{ asset('assets/img/DokumentasiService/doc-servis-1.jpg') }}" alt="servis coolze"
                                class="stack-front" />
                            <img src="{{ asset('assets/img/DokumentasiService/doc-servis-3.jpg') }}" alt="servis coolze"
                                class="stack-back" />
                        </div>
                    </div>
                </div>
                <!-- Service Item -->
            </div>
        </section>
        <!-- End Service Section -->

        <!-- Brands -->
        <section id="brands" class="brands">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h2>Brand</h2>
                    <h5>Partner Brand AC Coolze</h5>
                </header>

                <div class="brands-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/brand/Gree.png') }}" class="img-fluid" alt="Gree" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/brand/Daikin.png') }}" class="img-fluid" alt="Daikin" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/brand/LG.png') }}" class="img-fluid" alt="LG" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/brand/Mitshubisi.png') }}" class="img-fluid"
                                alt="Mitshubisi" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/brand/Panasonix.png') }}" class="img-fluid"
                                alt="Panasonix" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/brand/Samsung.png') }}" class="img-fluid" alt="Samsung" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/brand/Sharp.png') }}" class="img-fluid" alt="Sharp" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/brand/Midea.png') }}" class="img-fluid" alt="Midea" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- End Brand Section -->

        <!-- Client -->
        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h2>Our Clients</h2>
                    <p>Pelanggan Setia Coolze</p>
                </header>

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/clients/client-1.png') }}" class="img-fluid"
                                alt="Japfa Comfeed Indonesia" />
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/clients/client-13.png') }}" class="img-fluid"
                                alt="PT. Prima Food International" />
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/clients/client-11.png') }}" class="img-fluid"
                                alt="Cooler City" />
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/clients/client-12.png') }}" class="img-fluid"
                                alt="Edu Center Indonesia" />
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/clients/client-14.png') }}" class="img-fluid"
                                alt="PT. MONIER" />
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/clients/client-4.png') }}" class="img-fluid"
                                alt="Divatama Intiperintis Indopaper" />
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/clients/client-3.png') }}" class="img-fluid"
                                alt="Old Chang Kee" />
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/clients/client-5.png') }}" class="img-fluid"
                                alt="Omija" />
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/clients/client-2.png') }}" class="img-fluid"
                                alt="Cipta Perkasa Metalindo" />
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/clients/client-6.png') }}" class="img-fluid"
                                alt="Summarecon Mall Serpong" />
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/clients/client-7.png') }}" class="img-fluid"
                                alt="Sinarmas Land" />
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/clients/client-8.png') }}" class="img-fluid"
                                alt="Triniti Land" />
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/clients/client-9.png') }}" class="img-fluid"
                                alt="Ciputra Group" />
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/clients/client-10.png') }}" class="img-fluid"
                                alt="Paramount Land" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- End Clients Section -->
    </main>
    <!-- End #main -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Initialize PureCounter for each element with the "purecounter" class
            const counters = document.querySelectorAll(".purecounter");

            counters.forEach((counter) => {
                const start =
                    parseInt(counter.getAttribute("data-purecounter-start")) || 0;
                const end =
                    parseInt(counter.getAttribute("data-purecounter-end")) || 0;
                const duration =
                    parseInt(counter.getAttribute("data-purecounter-duration")) || 2;

                const options = {
                    start,
                    end,
                    duration,
                };

                const pureCounter = new PureCounter(counter, options);
                pureCounter.startCounter(); // Use startCounter instead of start
            });
        });
    </script>
@endsection
