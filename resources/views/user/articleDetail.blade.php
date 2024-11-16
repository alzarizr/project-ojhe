@extends('layouts.app')

@section('content')

<main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div
        class="breadcrumbs d-flex align-items-center"
        style="
          background-image: url('assets/img/blog-header.jpg');
        "
      >
        <div
          class="container position-relative d-flex flex-column align-items-center"
        >
          <h1>Article Details</h1>
          <ol>
            <li><a href="{{route ('home') }}">Home</a></li>
            <li><a href="{{route ('article') }}">Article</a></li>
            <li>Article Details</li>
          </ol>
        </div>
      </div>
      <!-- End Breadcrumbs -->

      <!-- ======= Blog Details Section ======= -->
      <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
          <div class="row g-5">
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
              <article class="blog-details">
                <div class="post-img">
                  <img
                    src="{{asset ('assets/img/blog/blog-1.jpg') }}"
                    alt="Pentingnya Melakukan Servis AC"
                    class="img-fluid"
                  />
                </div>

                <h1 class="title">
                  Pentingnya Melakukan Servis AC Secara Berkala
                </h1>

                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center">
                      <i class="bi bi-person"></i>
                      <a href="#">Tim Coolze</a>
                    </li>
                    <li class="d-flex align-items-center">
                      <i class="bi bi-clock"></i>
                      <a href="#"
                        ><time datetime="2023-10-01">Oct 1, 2023</time></a
                      >
                    </li>
                  </ul>
                </div>
                <!-- End meta top -->

                <div class="content">
                  <p>
                    Servis AC secara teratur sangat penting untuk meningkatkan
                    efisiensi energi dan mengurangi tagihan energi. Seiring
                    waktu, unit AC menjadi kurang efisien karena keausan, yang
                    mengakibatkan peningkatan konsumsi energi dan tagihan
                    listrik yang lebih tinggi. Dengan melakukan servis rutin
                    pada unit AC, termasuk membersihkan dan mengganti filter,
                    memeriksa tingkat zat pendingin, dan memastikan aliran udara
                    yang baik, efisiensi energi dapat ditingkatkan . Hal ini
                    tidak hanya menghemat uang untuk tagihan energi namun juga
                    mengurangi jejak karbon, sehingga berkontribusi terhadap
                    lingkungan yang lebih berkelanjutan. Konservasi energi
                    sangat penting, dan servis AC secara teratur adalah cara
                    efektif untuk mencapainya.
                  </p>

                  <p>
                    Selain meningkatkan efisiensi energi, servis AC secara
                    teratur dapat meningkatkan umur unit AC. Servis rutin yang
                    diabaikan, paparan terhadap cuaca buruk, serta kotoran dan
                    serpihan di luar ruangan dapat menyebabkan kerusakan pada
                    sistem, sehingga menyebabkan perbaikan yang mahal atau
                    bahkan kegagalan dini. Servis rutin dapat membantu
                    mengidentifikasi dan mengatasi potensi masalah sebelum
                    menjadi masalah besar, sehingga memperpanjang umur unit AC.
                    Hal ini tidak hanya menghemat uang untuk perbaikan atau
                    penggantian tetapi juga memastikan unit AC berfungsi optimal
                    sepanjang masa pakainya.
                  </p>

                  <p>
                    Servis AC secara rutin juga dapat meningkatkan kualitas
                    udara dan mengurangi risiko kesehatan. Unit AC memiliki
                    kemampuan menyaring polusi dan bakteri dari udara, sehingga
                    meningkatkan kualitas udara dalam ruangan. Namun jika tidak
                    dibersihkan secara rutin, unit AC dapat menjadi tempat
                    berkembang biaknya kuman dan debu sehingga berpotensi
                    menimbulkan gangguan kesehatan seperti batuk dan alergi.
                    Selain itu, menggunakan AC pada suhu yang terlalu rendah
                    atau dalam waktu lama dapat meningkatkan risiko hipotermia
                    atau masalah kesehatan lainnya. Dengan melakukan servis
                    rutin pada unit AC, termasuk membersihkan dan mendisinfeksi
                    sistem, kualitas udara dapat ditingkatkan dan risiko
                    kesehatan dapat diminimalkan.
                  </p>

                  <p>
                    Kesimpulannya, servis AC secara teratur sangat penting untuk
                    meningkatkan efisiensi energi, meningkatkan umur unit AC,
                    dan meningkatkan kualitas udara sekaligus mengurangi risiko
                    kesehatan. Dengan memasukkan layanan AC rutin ke dalam
                    rutinitas pemeliharaan, individu dapat menghemat uang untuk
                    tagihan energi, mencegah perbaikan yang mahal, dan mendorong
                    lingkungan hidup yang lebih sehat.
                  </p>

                  <blockquote>
                    <p>
                      Konsultasi, Info, dan bantuan lebih lanjut hubungi kami
                      sekarang.
                    </p>
                    <br />
                    <!-- Social Icon -->
                    <div class="social-icons">
                      <a
                        href="contact"
                        target="_blank"
                        class="social-icon"
                      >
                        <i class="bi bi-browser-chrome"></i>
                        <span>coolzeac.com/contact</span>
                      </a>
                      <a
                        href="https://api.whatsapp.com/send?phone=6282233338793"
                        target="_blank"
                        class="social-icon"
                      >
                        <i class="bi bi-whatsapp"></i>
                        <span>Whatsapp</span>
                      </a>
                      <a
                        href="mailto:coolzeindonesia@gmail.com?subject=Coolze%Service%AC%20"
                        class="social-icon"
                      >
                        <i class="bi bi-envelope"></i>
                        Email
                      </a>
                    </div>
                    <!-- End Social Icon -->
                  </blockquote>
                </div>
                <!-- End post content -->

                <div class="meta-bottom">
                  <i class="bi bi-tools"></i>
                  <ul class="cats">
                    <li><a href="#">Service</a></li>
                  </ul>

                  <!-- <i class="bi bi-tags"></i>
                  <ul class="tags">
                    <li><a href="#">Creative</a></li>
                    <li><a href="#">Tips</a></li>
                    <li><a href="#">Marketing</a></li>
                  </ul> -->
                </div>
                <!-- End meta bottom -->
              </article>
              <!-- End blog post -->
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
              <div class="sidebar ps-lg-4">
                <!-- End sidebar search formn-->

                <div class="sidebar-item recent-posts">
                  <h3 class="sidebar-title">Recent Posts</h3>

                  <div class="mt-3">
                    <div class="post-item">
                      <img
                        src="{{asset ('assets/img/blog/blog-2.jpg') }}"
                        alt="Servis Sistem HVAC dan Perannya Pada Gedung"
                        class="flex-shrink-0"
                      />
                      <div>
                        <h4>
                          <a href="article-details-2"
                            >Sistem HVAC dan Perannya Pada Gedung</a
                          >
                        </h4>
                        <time datetime="2023-09-29">Sept 29, 2023</time>
                      </div>
                    </div>
                    <!-- End recent post item-->

                    <div class="post-item">
                      <img
                        src="{{asset ('assets/img/blog/blog-3.jpg') }}"
                        alt="Menghemat Tagihan Listrik dengan AC"
                        class="flex-shrink-0"
                      />
                      <div>
                        <h4>
                          <a href="{{route ('articleDetail') }}"
                            >Menghemat Tagihan Listrik dengan AC Low Watt dan
                            Inverter</a
                          >
                        </h4>
                        <time datetime="2023-09-20">Sept 20, 2023</time>
                      </div>
                    </div>
                    <!-- End recent post item-->

                    <div class="post-item">
                      <img
                        src="{{asset ('assets/img/blog/blog-4.jpg') }}"
                        alt="AC Cassette vs AC Split"
                        class="flex-shrink-0"
                      />
                      <div>
                        <h4>
                          <a href="{{route ('articleDetail') }}"
                            >AC Cassette vs AC Split: Pilihan Mana yang Lebih
                            Unggul?</a
                          >
                        </h4>
                        <time datetime="2023-09-19">Sept 19, 2020</time>
                      </div>
                    </div>
                    <!-- End recent post item-->

                    <div class="post-item">
                      <img
                        src="{{asset ('assets/img/blog/blog-5.jpg') }}"
                        alt="Mekanisme Kerja AC Split Duct"
                        class="flex-shrink-0"
                      />
                      <div>
                        <h4>
                          <a href="{{route ('articleDetail') }}"
                            >Mekanisme Kerja AC Split Duct dalam Mengalirkan
                            Udara Sejuk</a
                          >
                        </h4>
                        <time datetime="2023-09-18">Sept 18, 2023</time>
                      </div>
                    </div>
                    <!-- End recent post item-->

                    <div class="post-item">
                      <img
                        src="{{asset ('assets/img/blog/blog-6.jpg') }}"
                        alt="Mengapa AC Anda Tidak Mengeluarkan Udara Dingin"
                        class="flex-shrink-0"
                      />
                      <div>
                        <h4>
                          <a href="{{route ('articleDetail') }}"
                            >Mengapa AC Anda Tidak Mengeluarkan Udara Dingin dan
                            Bagaimana Mengatasinya</a
                          >
                        </h4>
                        <time datetime="2023-09-13">Sept 13, 2023</time>
                      </div>
                    </div>
                    <!-- End recent post item-->
                  </div>
                </div>
                <!-- End sidebar recent posts-->
              </div>
              <!-- End Blog Sidebar -->
            </div>
          </div>
        </div>
      </section>
      <!-- End Blog Details Section -->
    </main>

@endsection