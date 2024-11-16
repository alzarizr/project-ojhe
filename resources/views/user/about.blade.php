@extends('layouts.app')

@section('content')

<main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div
        class="breadcrumbs d-flex align-items-center"
        style="
          background-image: url('{{asset ('assets/img/about-header.jpg') }}');
        "
      >
        <div
          class="container position-relative d-flex flex-column align-items-center"
        >
          <h1>About</h1>
          <ol>
            <li><a href="{{route ('home') }}">Home</a></li>
            <li>About</li>
          </ol>
        </div>
      </div>
      <!-- End Breadcrumbs -->

      <!-- ======= About Section Our Story ======= -->
      <section id="about-story" class="about">
        <div class="container section-title" data-aos="fade-up">
          <header class="section-header">
            <h2>Our Story</h2>
            <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
          </header>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up">
          <div class="row gy-4" data-aos="fade-up">
            <div
              class="col-lg-4 order-lg-1 order-2 d-flex align-items-center justify-content-center"
            >
              <img
                src="{{asset ('assets/img/DokumentasiService/ruko-coolze.JPG') }}"
                class="img-fluid"
                alt="Coolze"
              />
            </div>
            <div class="col-lg-8 order-lg-2 order-1">
              <div class="content ps-lg-5 mb-4">
                <!-- Your "Our Story" content goes here -->
                <p>
                  Coolze AC adalah perusahaan yang berdiri pada tahun 2022.
                  Coolze menyediakan jasa perawatan dan pemeliharaan HVAC AC
                  residential & Commercial AC. memberikan pelayanan terbaik
                  dalam menyelesaikan masalah pada AC anda. Perusahaan ini
                  dibentuk oleh pengusaha muda, dengan tim management dan
                  teknisi profesional yang bisa dijamin kualitas pelayanannya.
                  Kami juga bekerjasama dengan mitra profesional yang siap
                  menjadi solusi masalah AC anda.
                  <br />
                  <br />
                  Coolze diberi kepercayaan menjadi Authorized Dealer brand Gree
                  & Daikin untuk penjualan unit AC Split, Cassete, dan lainnya.
                </p>

                <div class="brand-images">
                  <div class="brand-logo">
                    <img
                      src="{{asset ('assets/img/icon-logo/certified-logo.png') }}"
                      class="img-fluid brand"
                      alt="Gree"
                      style="max-width: 80px; height: auto"
                    />
                  </div>
                  <div class="brand-logo">
                    <img
                      src="{{asset ('assets/img/brand/Gree.png') }}"
                      class="img-fluid brand"
                      alt="Gree"
                      style="max-width: 200px; height: auto"
                    />
                  </div>
                  <div class="brand-logo">
                    <img
                      src="{{asset ('assets/img/brand/Daikin.png') }}"
                      class="img-fluid brand"
                      alt="Daikin"
                      style="max-width: 200px; height: auto"
                    />
                  </div>
                </div>

                <!-- <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                </ul> -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ======= End About Section Our Story ======= -->

      <!-- Certificate Coolze -->
      <section id="certificate" class="certificate certificate-section">
        <div class="container" data-aos="fade-up">
          <div
            class="certificate-items d-flex justify-content-center align-items-center"
          >
            <div class="certificate-item">
              <img
                src="{{asset ('assets/img/sertifikat-daikin-coolze.jpg') }}"
                class="img-fluid"
                alt="sertifikat dealer daikin coolze"
              />
            </div>
            <div class="certificate-item">
              <img
                src="{{asset ('assets/img/sertifikat-gree-coolze.jpg') }}"
                class="img-fluid"
                alt="sertifikat dealer gree coolze"
              />
            </div>
          </div>
        </div>
      </section>
      <!-- End Certificate Coolze -->

      <!-- End Certificate Coolze -->

      <!-- ======= About Section Company History ======= -->
      <section id="company-history" class="about">
        <div class="container section-title" data-aos="fade-up">
          <header class="section-header">
            <h2>Company History</h2>
          </header>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up">
          <div class="row gy-4" data-aos="fade-up">
            <div
              class="col-lg-4 order-lg-2 order-2 d-flex align-items-center justify-content-center"
            >
              <img
                src="{{asset ('assets/img/company-history.jpg') }}"
                class="img-fluid"
                alt="coolze history"
                style="max-width: 300px; height: auto"
              />
            </div>
            <div class="col-lg-8 order-lg-1 order-1">
              <div class="content ps-lg-5 mb-4">
                <p>
                  Coolze lahir dari keluhan banyak orang yang sulit menemukan
                  Solusi Masalah AC
                </p>
                <!-- Add your Company History content here -->
                <h4>Company Roadmap</h4>
                <ul>
                  <p>
                    <strong><span class="year-highlight">2022: </span></strong>
                    Coolze berawal dari menyediakan jasa Pemeliharaan AC
                    Residential
                  </p>
                  <p>
                    <strong><span class="year-highlight">2023: </span></strong>
                    Coolze di percaya pabrik-pabrik untuk pemeliharaan AC rutin
                    dan menjadi Dealer Resmi AC Gree & Daikin
                  </p>
                  <p>
                    <strong><span class="year-highlight">2023: </span></strong>
                    Coolze terus berkembang dalam penambahan Team Teknisi dan
                    dapat melayani lebih banyak client
                  </p>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ======= End About Section Company History ======= -->

      <!-- ======= About Section Our Values ======= -->
      <section id="about-values" class="about">
        <div class="container section-title" data-aos="fade-up">
          <header class="section-header">
            <h2>Our Values</h2>
          </header>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up">
          <div class="row gy-4" data-aos="fade-up">
            <div
              class="col-lg-4 order-lg-2 order-2 d-flex align-items-center justify-content-center"
            >
              <img
                src="{{asset ('assets/img/visi-misi.jpg') }}"
                class="img-fluid"
                alt="Values"
              />
            </div>
            <div class="col-lg-8 order-lg-1 order-1">
              <div class="content ps-lg-5 mb-4">
                <!-- Your "Our Values" content goes here -->
                <h3>Vision</h3>
                <p>
                  Visi kami adalah Coolze menjadi top of mind Solusi Masalah AC.
                  Terus meningkatkan kualitas dan berkembang untuk menjangkau
                  pelanggan yang lebih luas dan memberikan pelayanan terbaik
                </p>
                <h3>Mission</h3>
                <p>
                  Misi kami adalah memberikan pelayanan terbaik dalam menangani
                  masalah AC dan perawatan AC. Dengan mengutamakan kualitas
                  sehingga client puas dengan service Coolze
                </p>
                <ul>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> "Quality over
                    quantity, makes Coolze giving the best service"
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> “Customer
                    satisfaction is Coolze’s number one priority”
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> "Coolze ready to
                    provide the best service"
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ======= End About Section Our Values ======= -->

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
                <img
                  src="{{asset ('assets/img/clients/client-1.png') }}"
                  class="img-fluid"
                  alt="Japfa Comfeed Indonesia"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/clients/client-13.png') }}"
                  class="img-fluid"
                  alt="PT. Prima Food International"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/clients/client-11.png') }}"
                  class="img-fluid"
                  alt="Cooler City"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/clients/client-12.png') }}"
                  class="img-fluid"
                  alt="Edu Center Indonesia"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/clients/client-14.png') }}"
                  class="img-fluid"
                  alt="PT. MONIER"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/clients/client-4.png') }}"
                  class="img-fluid"
                  alt="Divatama Intiperintis Indopaper"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/clients/client-3.png') }}"
                  class="img-fluid"
                  alt="Old Chang Kee"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/clients/client-5.png') }}"
                  class="img-fluid"
                  alt="Omija"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/clients/client-2.png') }}"
                  class="img-fluid"
                  alt="Cipta Perkasa Metalindo"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/clients/client-6.png') }}"
                  class="img-fluid"
                  alt="Summarecon Mall Serpong"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/clients/client-7.png') }}"
                  class="img-fluid"
                  alt="Sinarmas Land"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/clients/client-8.png') }}"
                  class="img-fluid"
                  alt="Triniti Land"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/clients/client-9.png') }}"
                  class="img-fluid"
                  alt="Ciputra Group"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/clients/client-10.png') }}"
                  class="img-fluid"
                  alt="Paramount Land"
                />
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <!-- End Clients Section -->

      <!-- ======= Call To Action Section ======= -->
      <section id="call-to-action" class="call-to-action">
        <div class="container" data-aos="fade-up">
          <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
              <!-- <a href="index.html" class="logo d-flex align-items-center"> -->
              <!-- Uncomment the line below if you also wish to use an image logo -->
              <img
                src="{{asset ('assets/img/Logo/coolze-stamp-4.png') }}"
                alt="Coolze Logo"
                style="max-width: 250px; height: auto"
              />
              <!-- </a> -->
              <!-- <h3>Coolze</h3> -->
              <p>
                <br />
                Masuki kenyamanan yang sejuk bersama kami. Temukan kesegaran
                yang Anda cari. Jangan biarkan panas mengganggu Anda; raih
                kesegaran sekarang. Hubungi kami untuk kenyamanan yang sempurna.
              </p>
              <a class="cta-btn" href="contact">Hubungi Kami</a>
            </div>
          </div>
        </div>
      </section>
      <!-- End Call To Action Section -->
    </main>

@endsection