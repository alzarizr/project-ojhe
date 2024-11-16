@extends('layouts.app')

@section('content')

<main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div
        class="breadcrumbs d-flex align-items-center"
        style="background-image: url('{{asset ('assets/img/services-header.jpg') }}')"
      >
        <div
          class="container position-relative d-flex flex-column align-items-center"
        >
          <h1>Services</h1>
          <ol>
            <li><a href="{{route ('home') }}">Home</a></li>
            <li>Services</li>
          </ol>
        </div>
      </div>
      <!-- End Breadcrumbs -->

      <!-- Services Section - Home Page -->
      <section id="service" class="service">
        <!--  Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <header class="section-header">
            <h2>Layanan Kami</h2>
            <p>
              Segala jenis dan tipe AC bisa Coolze tangani. Dengan berbagai jasa
              yang kami tawarkan untuk menjadi Solusi Masalah AC pelanggan
            </p>
          </header>
        </div>
        <!-- End Section Title -->

        <div class="container">
          <!-- Item 1 -->
          <div class="row gy-4 align-items-center service-item">
            <div
              class="col-lg-5 order-2 order-lg-1"
              data-aos="fade-left"
              data-aos-delay="200"
            >
              <h3>Project Installation</h3>
              <p>
                Instalasi HVAC (Heating, Ventilation, and Air Conditioning)
                untuk Residensial (Rumah, Apartemen, Kost, Kantor), Project
                Commercial (Gedung, Supermarket, High Rise), Industrial (Gudang,
                Pabrik)
              </p>
            </div>
            <div
              class="col-lg-7 order-1 order-lg-2 d-flex align-items-center"
              data-aos="zoom-out"
              data-aos-delay="100"
            >
              <div class="image-stack">
                <img
                  src="{{asset ('assets/img/HVAC/hvac.jpg') }}"
                  alt="Instalasi AC Gedung"
                  class="stack-front"
                />
                <img
                  src="{{asset ('assets/img/HVAC/factory-hvac1.jpg') }}"
                  alt="Pemasangan AC Pabrik"
                  class="stack-back"
                />
              </div>
            </div>
          </div>
          <!-- Service Item 1 -->

          <!-- Item 2 -->
          <div
            class="row gy-4 align-items-stretch justify-content-between service-item"
          >
            <div
              class="col-lg-6 align-items-center service-img-bg"
              data-aos="zoom-out"
            >
              <img
                src="{{asset ('assets/img/HVAC/multi-s-nobg.png') }}"
                class="img-fluid"
                alt="Penjualan AC Coolze"
                class="stack-front"
              />
            </div>
            <div
              class="col-lg-5 d-flex justify-content-center flex-column"
              data-aos="fade-right"
            >
              <h3>Penjualan Unit & Spare Part</h3>
              <p>
                Melayani kebutuhan AC untuk Residensial, Commercial, dan
                Industrial. Serta menyediakan sparepart sesuai kebutuhan AC
              </p>
              <ul>
                <li>
                  <i class="bi bi-patch-check-fill"></i>
                  <span>Harga terjangkau dan bersaing</span>
                </li>
                <li>
                  <i class="bi bi-patch-check-fill"></i
                  ><span> Garansi resmi Brand</span>
                </li>
                <li>
                  <i class="bi bi-patch-check-fill"></i>
                  <span> Free konsultasi menyesuaikan kebutuhan</span>
                </li>
              </ul>
            </div>
          </div>
          <!-- Service Item -->

          <!-- Item 3 -->
          <div class="row gy-4 align-items-center service-item">
            <div
              class="col-lg-5 order-2 order-lg-1"
              data-aos="fade-left"
              data-aos-delay="200"
            >
              <h3>Perbaikan & Pemeliharaan</h3>
              <p>
                Memberikan jasa pemeliharaan atau perawatan pada unit AC
                residensial, commercial, dan industrial. jasa perbaikan atau
                servis pada AC yang bermasalah di perbaiki sampai kembali
                dingin.
                <br />
                <br />
                "Coolze Solusi Masalah AC"
              </p>
            </div>
            <div
              class="col-lg-7 order-1 order-lg-2 d-flex align-items-center"
              data-aos="zoom-out"
              data-aos-delay="100"
            >
              <div class="image-stack">
                <img
                  src="{{asset ('assets/img/DokumentasiService/doc-servis-1.jpg') }}"
                  alt="Maintenance AC Gedung"
                  class="stack-front"
                />
                <img
                  src="{{asset ('assets/img/DokumentasiService/doc-servis-3.jpg') }}"
                  alt="Pemeliharaan AC Gedung"
                  class="stack-back"
                />
              </div>
            </div>
          </div>
          <!-- Service Item -->
        </div>
      </section>
      <!-- End Service Section -->

      <!-- ======= Documentation Section ======= -->
      <section id="documentation" class="documentation">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <h2>Dokumentasi Servis</h2>
            <!-- <p>Pelanggan Setia Coolze</p> -->
          </header>
          <div class="documentation-slider swiper">
            <div class="swiper-wrapper align-items-center">
              <!-- Dokumentasi Item -->
              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/DokumentasiService/doc-servis-1.jpg') }}"
                  class="img-fluid"
                  alt="Dokumentasi Coolze AC"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/DokumentasiService/doc-servis-2.JPG') }}"
                  class="img-fluid"
                  alt="Pemasangan AC Coolze"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/DokumentasiService/doc-servis-3.jpg') }}"
                  class="img-fluid"
                  alt="Pemeliharaan AC Coolze"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/DokumentasiService/doc-servis-4.jpg') }}"
                  class="img-fluid"
                  alt="Perbaikan AC Coolze"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="assets/img/DokumentasiService/doc-servis-5.jpg"
                  class="img-fluid"
                  alt="Perawatan AC Coolze"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/DokumentasiService/doc-servis-6.JPG') }}"
                  class="img-fluid"
                  alt="Bongkar Pasang AC Coolze"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/DokumentasiService/doc-servis-7.jpg') }}"
                  class="img-fluid"
                  alt="Pembersihan AC Coolze"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/DokumentasiService/doc-servis-8.jpg') }}"
                  class="img-fluid"
                  alt="Pemasangan Project AC Coolze"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/DokumentasiService/doc-servis-9.jpg') }}"
                  class="img-fluid"
                  alt="Dokumentasi Coolze AC"
                />
              </div>

              <!--End Dokumentasi Item -->
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <!-- End Clients Section -->

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

      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Testimonials</h2>
          </div>

          <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
              <div class="swiper-slide">

                <div class="testimonial-item">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    Pertahankan ya mba, karena teknisi AC lainnya
                    kadang lantai bekas cuci masih suka kotor. Dibersihkannya 
                    asal saja. Tetapi Coolze sangat bagus, lantainya dibersihkan 
                    lagi pasca cuci AC.
                  </p>
                  <div class="profile mt-auto">
                    <!-- <img
                      src="https://www.coolzeac.com/assets/img/testimonials/testimonials-1.jpg"
                      class="testimonial-img"
                      alt=""
                    /> -->
                    <h3>Uvi</h3>
                    <h4>Ibu Rumah Tangga</h4>
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    Pekerjaannya rapih dan teliti. 
                    <br>
                    Teknisi yang datang juga sangat handal
                    <br>
                    Sukses terus ya buat Coolze
                  </p>
                  <div class="profile mt-auto">
                    <!-- <img
                      src="https://www.coolzeac.com/assets/img/testimonials/testimonials-2.jpg"
                      class="testimonial-img"
                      alt=""
                    /> -->
                    <h3>Sarah Angelia</h3>
                    <h4>Entrepreneur</h4>
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    Adminnya fast respon, dan pelayanannya bagus. Happy 
                    banget dengan pelayanan Coolze, dari admin sampai
                    teknisinya memberikan yang terbaik.
                  </p>
                  <div class="profile mt-auto">
                    <!-- <img
                      src="https://www.coolzeac.com/assets/img/testimonials/testimonials-3.jpg"
                      class="testimonial-img"
                      alt=""
                    /> -->
                    <h3>Hendra Budiharto</h3>
                    <h4>Store Owner</h4>
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    Pengerjaan teknisi Coolze bersih banget dan sangat detail.
                    <br>
                    Senang banget order disini
                    <br>
                    Kedepannya pasti bakal order lagi.
                  </p>
                  <div class="profile mt-auto">
                    <!-- <img
                      src="https://www.coolzeac.com/assets/img/testimonials/testimonials-4.jpg"
                      class="testimonial-img"
                      alt=""
                    /> -->
                    <h3>Brandon Wilson</h3>
                    <h4>Mahasiswa</h4>
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <!-- End Testimonials Section -->
    </main>

@endsection