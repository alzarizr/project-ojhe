@extends('layouts.app')

@section('content')

<main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div
        class="breadcrumbs d-flex align-items-center"
        style="
          background-image: url('assets/img/portfolio-header.jpg');
        "
      >
        <div
          class="container position-relative d-flex flex-column align-items-center"
        >
          <h1>Project</h1>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Project</li>
          </ol>
        </div>
      </div>
      <!-- End Breadcrumbs -->

      <!-- ======= Project Section ======= -->
      <section id="project" class="project sections-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Project</h2>
            <p>
              Coolze dipercaya untuk Pengadaan, Pemasangan, dan Pemeliharaan AC
              oleh Perusahaan ternama.
            </p>
          </div>

          <div
            class="project-isotope"
            data-project-filter="*"
            data-project-layout="masonry"
            data-project-sort="original-order"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div>
              <div class="col-lg-12 d-flex justify-content-center">
                <ul class="project-flters">
                  <li data-filter="*" class="filter-active">All</li>
                  <li data-filter=".filter-residential">Residential</li>
                  <li data-filter=".filter-commercial">Commercial</li>
                  <li data-filter=".filter-industrial">Industrial</li>
                </ul>
                <!-- End project Filters -->
              </div>
            </div>

            <div class="row gy-4 project-container">
              <!-- =======Industrial Client=========== -->
              <div class="col-lg-4 col-md-6 project-item filter-industrial">
                <div class="project-wrap">
                  <a
                    href="assets/img/project/japfa.png"
                    data-gallery="project-gallery-app"
                    class="glightbox"
                    ><img
                      src="assets/img/project/japfa.png"
                      class="img-fluid"
                      alt="Japfa Comfeed Indonesia TBK"
                  /></a>
                  <div class="project-info">
                    <h4>PT. Japfa Comfeed Indonesia TBK</h4>
                    <p>
                      Pengadaan dan Pemasangan AC split pada ruang produksi
                      pabrik PT. Japfa Comfeed Indonesia TBK, Tangerang
                    </p>
                  </div>
                </div>
              </div>
              <!-- End project Item -->

              <div class="col-lg-4 col-md-6 project-item filter-industrial">
                <div class="project-wrap">
                  <a
                    href="assets/img/project/divatama.png"
                    data-gallery="project-gallery-app"
                    class="glightbox"
                    ><img
                      src="assets/img/project/divatama.png"
                      class="img-fluid"
                      alt="PT. Divatama Intiperintis Indopaper"
                  /></a>
                  <div class="project-info">
                    <h4>PT. Divatama Intiperintis Indopaper</h4>
                    <p>
                      Pemeliharaan AC rutin ruang produksi pabrik PT. Divatama
                      Intiperintis Indopaper
                    </p>
                  </div>
                </div>
              </div>
              <!-- End project Item -->

              <div class="col-lg-4 col-md-6 project-item filter-commercial">
                <div class="project-wrap">
                  <a
                    href="assets/img/project/educenter.jpg"
                    data-gallery="project-gallery-app"
                    class="glightbox"
                    ><img
                      src="assets/img/project/educenter.jpg"
                      class="img-fluid"
                      alt="Edu Center BSD"
                  /></a>
                  <div class="project-info">
                    <h4>Edu Center BSD</h4>
                    <p>
                      Pengadaan, pemasangan, dan pemeliharaan AC rutin Gedung
                      Edukasi Edu Center BSD
                    </p>
                  </div>
                </div>
              </div>
              <!-- End project Item -->

              <div class="col-lg-4 col-md-6 project-item filter-commercial">
                <div class="project-wrap">
                  <a
                    href="assets/img/project/primafood.png"
                    data-gallery="project-gallery-app"
                    class="glightbox"
                    ><img
                      src="assets/img/project/primafood.png"
                      class="img-fluid"
                      alt="PT. Prima International"
                  /></a>
                  <div class="project-info">
                    <h4>PT. Primafood International</h4>
                    <p>
                      Pemeliharaan dan perbaikan AC Rutin semua outlet Prima
                      Freshmart
                    </p>
                  </div>
                </div>
              </div>
              <!-- End project Item -->

              <div class="col-lg-4 col-md-6 project-item filter-industrial">
                <div class="project-wrap">
                  <a
                    href="assets/img/project/monier.jpeg"
                    data-gallery="project-gallery-app"
                    class="glightbox"
                    ><img
                      src="assets/img/project/monier.jpeg"
                      class="img-fluid"
                      alt="PT. MONIER"
                  /></a>
                  <div class="project-info">
                    <h4>PT. MONIER</h4>
                    <p>
                      Pemasangan, Perbaikan, dan perawatan rutin AC pabrik
                      roofing PT. Monier
                    </p>
                  </div>
                </div>
              </div>
              <!-- End project Item -->

              <!-- =======End Industrial Client=========== -->

              <!-- =======Residential Client=========== -->
              <div class="col-lg-4 col-md-6 project-item filter-residential">
                <div class="project-wrap">
                  <a
                    href="assets/img/project/summarecon.jpg"
                    data-gallery="project-gallery-app"
                    class="glightbox"
                    ><img
                      src="assets/img/project/summarecon.jpg"
                      class="img-fluid"
                      alt="PT Summarecon Agung TBK"
                  /></a>
                  <div class="project-info">
                    <h4>PT Summarecon Agung TBK</h4>
                    <p>
                      Pengadaan dan pemasangan untuk rumah ruko, dan apartemen
                      developer Summarecon Serpong
                    </p>
                  </div>
                </div>
              </div>
              <!-- End project Item -->

              <div class="col-lg-4 col-md-6 project-item filter-residential">
                <div class="project-wrap">
                  <a
                    href="assets/img/project/sinarmas.jpg"
                    data-gallery="project-gallery-app"
                    class="glightbox"
                    ><img
                      src="assets/img/project/sinarmas.jpg"
                      class="img-fluid"
                      alt="PT Bumi Serpong Damai TBK"
                  /></a>
                  <div class="project-info">
                    <h4>PT Bumi Serpong Damai TBK</h4>
                    <p>
                      Pengadaan dan pemasangan untuk rumah ruko, dan apartemen
                      developer BSD (Bumi Serpong Damai)
                    </p>
                  </div>
                </div>
              </div>
              <!-- End project Item -->

              <div class="col-lg-4 col-md-6 project-item filter-residential">
                <div class="project-wrap">
                  <a
                    href="assets/img/project/paramound-land.jpg"
                    data-gallery="project-gallery-app"
                    class="glightbox"
                    ><img
                      src="assets/img/project/paramound-land.jpg"
                      class="img-fluid"
                      alt="PT Paramount Land Development"
                  /></a>
                  <div class="project-info">
                    <h4>PT Paramount Land Development</h4>
                    <p>
                      Pengadaan dan pemasangan untuk rumah dan ruko developer
                      Paramount Gading Serpong, Paramount Petals
                    </p>
                  </div>
                </div>
              </div>
              <!-- End project Item -->

              <div class="col-lg-4 col-md-6 project-item filter-residential">
                <div class="project-wrap">
                  <a
                    href="assets/img/project/summarecon.jpg"
                    data-gallery="project-gallery-app"
                    class="glightbox"
                    ><img
                      src="assets/img/project/summarecon.jpg"
                      class="img-fluid"
                      alt="PT Alam Sutera Realty TBK"
                  /></a>
                  <div class="project-info">
                    <h4>PT Alam Sutera Realty TBK</h4>
                    <p>
                      Pengadaan dan pemasangan untuk rumah dan apartemen
                      developer Alam Sutera Tangerang
                    </p>
                  </div>
                </div>
              </div>
              <!-- End project Item -->

              <div class="col-lg-4 col-md-6 project-item filter-residential">
                <div class="project-wrap">
                  <a
                    href="assets/img/project/triniti-land.jpg"
                    data-gallery="project-gallery-app"
                    class="glightbox"
                    ><img
                      src="assets/img/project/triniti-land.jpg"
                      class="img-fluid"
                      alt="PT Perintis Triniti Properti TBK"
                  /></a>
                  <div class="project-info">
                    <h4>PT Perintis Triniti Properti TBK</h4>
                    <p>
                      Pengadaan dan pemasangan untuk apartemen developer Triniti
                      Land
                    </p>
                  </div>
                </div>
              </div>
              <!-- End project Item -->

              <div class="col-lg-4 col-md-6 project-item filter-residential">
                <div class="project-wrap">
                  <a
                    href="assets/img/project/ciputra.jpg"
                    data-gallery="project-gallery-app"
                    class="glightbox"
                    ><img
                      src="assets/img/project/ciputra.jpg"
                      class="img-fluid"
                      alt="PT Ciputra Development TBK"
                  /></a>
                  <div class="project-info">
                    <h4>PT Ciputra Development TBK</h4>
                    <p>
                      Pengadaan dan pemasangan untuk rumah Ruko, dan apartemen
                      developer Citra Raya Cikupa
                    </p>
                  </div>
                </div>
              </div>
              <!-- End project Item -->

              <!-- =======End Residential Client=========== -->

              <!-- =======Commercial Client=========== -->

              <div class="col-lg-4 col-md-6 project-item filter-industrial">
                <div class="project-wrap">
                  <a
                    href="assets/img/project/cipta-perkasa-metal.png"
                    data-gallery="project-gallery-app"
                    class="glightbox"
                    ><img
                      src="assets/img/project/cipta-perkasa-metal.png"
                      class="img-fluid"
                      alt="PT. Cipta Perkasa Metalindo"
                  /></a>
                  <div class="project-info">
                    <h4>PT. Cipta Perkasa Metalindo</h4>
                    <p>
                      Pemeliharaan AC rutin ruang office pabrik PT. Cipta
                      Perkasa Metalindo
                    </p>
                  </div>
                </div>
              </div>
              <!-- End project Item -->

              <div class="col-lg-4 col-md-6 project-item filter-commercial">
                <div class="project-wrap">
                  <a
                    href="assets/img/clients/client-3.png"
                    data-gallery="project-gallery-app"
                    class="glightbox"
                    ><img
                      src="assets/img/clients/client-3.png"
                      class="img-fluid"
                      alt="Old Chang Kee"
                  /></a>
                  <div class="project-info">
                    <h4>Old Chang Kee</h4>
                    <p>
                      Pengadaan dan Pemasangan AC commercial cassete dan AC
                      Split pada outlet dan office Old Chang Kee.
                    </p>
                  </div>
                </div>
              </div>
              <!-- End project Item -->

              <div class="col-lg-4 col-md-6 project-item filter-commercial">
                <div class="project-wrap">
                  <a
                    href="assets/img/clients/client-5.png"
                    data-gallery="project-gallery-app"
                    class="glightbox"
                    ><img
                      src="assets/img/clients/client-5.png"
                      class="img-fluid"
                      alt="Omija"
                  /></a>
                  <div class="project-info">
                    <h4>Omija</h4>
                    <p>
                      Pengadaan dan Pemasangan AC Split pada outlet Omija
                      Tangerang
                    </p>
                  </div>
                </div>
              </div>
              <!-- End project Item -->

              <!-- =======End Commercial Client=========== -->
            </div>
            <!-- End Project Container -->
          </div>
        </div>
      </section>
      <!-- End Project Section -->

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
                <img
                  src="assets/img/clients/client-1.png"
                  class="img-fluid"
                  alt="Japfa Comfeed Indonesia"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="assets/img/clients/client-13.png"
                  class="img-fluid"
                  alt="PT. Prima Food International"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="assets/img/clients/client-11.png"
                  class="img-fluid"
                  alt="Cooler City"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="assets/img/clients/client-12.png"
                  class="img-fluid"
                  alt="Edu Center Indonesia"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="assets/img/clients/client-14.png"
                  class="img-fluid"
                  alt="PT. MONIER"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="assets/img/clients/client-4.png"
                  class="img-fluid"
                  alt="Divatama Intiperintis Indopaper"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="assets/img/clients/client-3.png"
                  class="img-fluid"
                  alt="Old Chang Kee"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="assets/img/clients/client-5.png"
                  class="img-fluid"
                  alt="Omija"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="assets/img/clients/client-2.png"
                  class="img-fluid"
                  alt="Cipta Perkasa Metalindo"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="assets/img/clients/client-6.png"
                  class="img-fluid"
                  alt="Summarecon Mall Serpong"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="assets/img/clients/client-7.png"
                  class="img-fluid"
                  alt="Sinarmas Land"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="assets/img/clients/client-8.png"
                  class="img-fluid"
                  alt="Triniti Land"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="assets/img/clients/client-9.png"
                  class="img-fluid"
                  alt="Ciputra Group"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="assets/img/clients/client-10.png"
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
    </main>

@endsection