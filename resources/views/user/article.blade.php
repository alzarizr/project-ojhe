@extends('layouts.app')

@section('content')

<main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div
        class="breadcrumbs d-flex align-items-center"
        style="
          background-image: url('{{asset ('assets/img/blog-header.jpg') }}');
        "
      >
        <div
          class="container position-relative d-flex flex-column align-items-center"
        >
          <h1>Article</h1>
          <ol>
            <li><a href="{{route ('home') }}">Home</a></li>
            <li>Article</li>
          </ol>
        </div>
      </div>
      <!-- End Breadcrumbs -->

      <!-- ======= Blog Section ======= -->
      <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
          <div class="row g-5">
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-5 posts-list">
                <!-- Artikel 1 -->
                <div class="col-lg-6">
                  <article class="d-flex flex-column">
                    <div class="post-img">
                      <img
                        src="{{asset ('assets/img/blog/blog-1.jpg') }}"
                        alt="Pentingnya Melakukan Servis AC Secara Berkala"
                        class="img-fluid"
                      />
                    </div>

                    <h2 class="title">
                      <a href="{{route ('articleDetail') }}"
                        >Pentingnya Melakukan Servis AC Secara Berkala</a
                      >
                    </h2>

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

                    <div class="content">
                      <p>
                        Servis AC secara teratur sangat penting untuk
                        meningkatkan efisiensi energi dan mengurangi tagihan
                        energi. Seiring waktu, unit AC menjadi kurang efisien
                        karena keausan, yang mengakibatkan peningkatan konsumsi
                        energi dan tagihan listrik yang lebih tinggi.
                      </p>
                    </div>

                    <div class="read-more mt-auto align-self-end">
                      <a href="{{route ('articleDetail') }}"
                        >Read More <i class="bi bi-arrow-right"></i
                      ></a>
                    </div>
                  </article>
                </div>
                <!-- End post list item -->

                <!-- Artikel 2 -->
                <div class="col-lg-6">
                  <article class="d-flex flex-column">
                    <div class="post-img">
                      <img
                        src="{{asset ('assets/img/blog/blog-2.jpg') }}"
                        alt="Sistem HVAC dan Perannya Pada Gedung"
                        class="img-fluid"
                      />
                    </div>

                    <h2 class="title">
                      <a href="{{route ('articleDetail') }}"
                        >Sistem HVAC dan Perannya Pada Gedung</a
                      >
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center">
                          <i class="bi bi-person"></i>
                          <a href="#">Tim Coolze</a>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="bi bi-clock"></i>
                          <a href="#"
                            ><time datetime="2023-09-29">Sept 29, 2023</time></a
                          >
                        </li>
                      </ul>
                    </div>

                    <div class="content">
                      <p>
                        Sistem HVAC (Heating, Ventilation, and Air Conditioning)
                        adalah salah satu komponen kunci dalam perencanaan dan
                        operasi gedung modern. Sistem ini tidak hanya mengatur
                        suhu dalam ruangan, tetapi juga mempengaruhi kenyamanan,
                        produktivitas, kesehatan, dan efisiensi energi gedung.
                        Dalam artikel ini, kita akan menjelaskan apa itu sistem
                        HVAC dan perannya yang vital dalam gedung.
                      </p>
                    </div>

                    <div class="read-more mt-auto align-self-end">
                      <a href="{{route ('articleDetail') }}"
                        >Read More <i class="bi bi-arrow-right"></i
                      ></a>
                    </div>
                  </article>
                </div>
                <!-- End post list item -->

                <!-- Artikel 3 -->
                <div class="col-lg-6">
                  <article class="d-flex flex-column">
                    <div class="post-img">
                      <img
                        src="{{asset ('assets/img/blog/blog-3.jpg') }}"
                        alt="Menghemat Tagihan Listrik dengan AC Low Watt dan
                        Inverter"
                        class="img-fluid"
                      />
                    </div>

                    <h2 class="title">
                      <a href="{{route ('articleDetail') }}"
                        >Menghemat Tagihan Listrik dengan AC Low Watt dan
                        Inverter</a
                      >
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center">
                          <i class="bi bi-person"></i>
                          <a href="#">Tim Coolze</a>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="bi bi-clock"></i>
                          <a href="#"
                            ><time datetime="2023-09-20">Sept 20, 2023</time></a
                          >
                        </li>
                      </ul>
                    </div>

                    <div class="content">
                      <p>
                        Suhu panas yang tinggi seringkali membuat kita
                        mengandalkan AC (Air Conditioner) untuk menjaga
                        kenyamanan dalam ruangan. Namun, penggunaan AC yang
                        berlebihan dapat meningkatkan tagihan listrik bulanan.
                      </p>
                    </div>

                    <div class="read-more mt-auto align-self-end">
                      <a href="{{route ('articleDetail') }}"
                        >Read More <i class="bi bi-arrow-right"></i
                      ></a>
                    </div>
                  </article>
                </div>
                <!-- End post list item -->

                <!-- Artikel 4 -->
                <div class="col-lg-6">
                  <article class="d-flex flex-column">
                    <div class="post-img">
                      <img
                        src="{{asset ('assets/img/blog/blog-4.jpg') }}"
                        alt="AC Cassette vs AC Split: Pilihan Mana yang Lebih
                        Unggul?"
                        class="img-fluid"
                      />
                    </div>

                    <h2 class="title">
                      <a href="{{route ('articleDetail') }}"
                        >AC Cassette vs AC Split: Pilihan Mana yang Lebih
                        Unggul?</a
                      >
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center">
                          <i class="bi bi-person"></i>
                          <a href="#">Tim Coolze</a>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="bi bi-clock"></i>
                          <a href="#"
                            ><time datetime="2023-09-19">Sept 19, 2023</time></a
                          >
                        </li>
                      </ul>
                    </div>

                    <div class="content">
                      <p>
                        Saat mempertimbangkan sistem pendingin udara untuk
                        ruangan Anda, pertanyaan yang sering muncul adalah
                        apakah AC Cassette lebih baik dibandingkan AC Split.
                        Keduanya adalah solusi yang umum digunakan untuk menjaga
                        suhu ruangan tetap nyaman, tetapi masing-masing memiliki
                        kelebihan dan kelemahan mereka sendiri.
                      </p>
                    </div>

                    <div class="read-more mt-auto align-self-end">
                      <a href="{{route ('articleDetail') }}"
                        >Read More <i class="bi bi-arrow-right"></i
                      ></a>
                    </div>
                  </article>
                </div>
                <!-- End post list item -->

                <!-- Artikel 5 -->
                <div class="col-lg-6">
                  <article class="d-flex flex-column">
                    <div class="post-img">
                      <img
                        src="{{asset ('assets/img/blog/blog-5.jpg') }}"
                        alt="Mekanisme Kerja AC Split Duct dalam Mengalirkan Udara
                        Sejuk"
                        class="img-fluid"
                      />
                    </div>

                    <h2 class="title">
                      <a href="{{route ('articleDetail') }}"
                        >Mekanisme Kerja AC Split Duct dalam Mengalirkan Udara
                        Sejuk</a
                      >
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center">
                          <i class="bi bi-person"></i>
                          <a href="#">Tim Coolze</a>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="bi bi-clock"></i>
                          <a href="#"
                            ><time datetime="2023-09-18">Sept 18, 2023</time></a
                          >
                        </li>
                      </ul>
                    </div>

                    <div class="content">
                      <p>
                        AC Split Duct adalah salah satu jenis sistem pendinginan
                        udara yang banyak digunakan di gedung, kantor, dan
                        tempat-tempat komersial. Artikel ini akan membahas
                        bagaimana AC Split Duct bekerja dalam mengalirkan udara
                        dingin ke berbagai ruangan.
                      </p>
                    </div>

                    <div class="read-more mt-auto align-self-end">
                      <a href="{{route ('articleDetail') }}"
                        >Read More <i class="bi bi-arrow-right"></i
                      ></a>
                    </div>
                  </article>
                </div>
                <!-- End post list item -->

                <!-- Artikel 6 -->
                <div class="col-lg-6">
                  <article class="d-flex flex-column">
                    <div class="post-img">
                      <img
                        src="{{asset ('assets/img/blog/blog-6.jpg') }}"
                        alt="Mengapa AC Anda Tidak Mengeluarkan Udara Dingin dan
                        Bagaimana Mengatasinya"
                        class="img-fluid"
                      />
                    </div>

                    <h2 class="title">
                      <a href="{{route ('articleDetail') }}"
                        >Mengapa AC Anda Tidak Mengeluarkan Udara Dingin dan
                        Bagaimana Mengatasinya</a
                      >
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center">
                          <i class="bi bi-person"></i>
                          <a href="#">Tim Coolze</a>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="bi bi-clock"></i>
                          <a href="#"
                            ><time datetime="2023-09-13">Sept 13, 2022</time></a
                          >
                        </li>
                      </ul>
                    </div>

                    <div class="content">
                      <p>
                        Ketika cuaca panas datang, AC (Air Conditioner) adalah
                        penyelamat yang sangat diandalkan dalam menjaga
                        kenyamanan dalam ruangan. Namun, terkadang kita bisa
                        mengalami masalah ketika AC tidak mengeluarkan udara
                        dingin seperti yang seharusnya. Artikel ini akan
                        membahas beberapa penyebab umum mengapa AC Anda mungkin
                        tidak dingin dan solusi sederhana yang dapat Anda
                        lakukan untuk mengatasi masalah tersebut.
                      </p>
                    </div>

                    <div class="read-more mt-auto align-self-end">
                      <a href="{{route ('articleDetail') }}"
                        >Read More <i class="bi bi-arrow-right"></i
                      ></a>
                    </div>
                  </article>
                </div>
                <!-- End post list item -->
              </div>
              <!-- End blog posts list -->

              <!-- <div class="blog-pagination">
                <ul class="justify-content-center">
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                </ul>
              </div> -->
              <!-- End blog pagination -->
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
              <div class="sidebar ps-lg-4">
                <!-- <div class="sidebar-item search-form">
                  <h3 class="sidebar-title">Search</h3>
                  <form action="" class="mt-3">
                    <input type="text" />
                    <button type="submit"><i class="bi bi-search"></i></button>
                  </form>
                </div> -->
                <!-- End sidebar search formn-->

                <!-- <div class="sidebar-item categories">
                  <h3 class="sidebar-title">Categories</h3>
                  <ul class="mt-3">
                    <li>
                      <a href="#">General <span>(25)</span></a>
                    </li>
                    <li>
                      <a href="#">Lifestyle <span>(12)</span></a>
                    </li>
                    <li>
                      <a href="#">Travel <span>(5)</span></a>
                    </li>
                    <li>
                      <a href="#">Design <span>(22)</span></a>
                    </li>
                    <li>
                      <a href="#">Creative <span>(8)</span></a>
                    </li>
                    <li>
                      <a href="#">Educaion <span>(14)</span></a>
                    </li>
                  </ul>
                </div> -->
                <!-- End sidebar categories-->

                <div class="sidebar-item recent-posts">
                  <h3 class="sidebar-title">Recent Posts</h3>

                  <div class="mt-3">
                    <div class="post-item mt-3">
                      <img
                        src="{{asset ('assets/img/blog/blog-1.jpg') }}"
                        alt="Pentingnya Melakukan Servis AC"
                        class="flex-shrink-0"
                      />

                      <div>
                        <h4>
                          <a href="{{route ('articleDetail') }}"
                            >Pentingnya Melakukan Servis AC Secara Berkala</a
                          >
                        </h4>
                        <time datetime="2023-10-01">Oct 1, 2023</time>
                      </div>
                    </div>
                    <!-- End recent post item-->

                    <div class="post-item">
                      <img
                        src="{{asset ('assets/img/blog/blog-2.jpg') }}"
                        alt="Servis Sistem HVAC dan Perannya Pada Gedung"
                        class="flex-shrink-0"
                      />
                      <div>
                        <h4>
                          <a href="{{route ('articleDetail') }}"
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
                        alt="Menghemat Tagihan Listrik dengan AC Low Watt dan
                            Inverter"
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

                <!-- <div class="sidebar-item tags">
                  <h3 class="sidebar-title">Tags</h3>
                  <ul class="mt-3">
                    <li><a href="#">App</a></li>
                    <li><a href="#">IT</a></li>
                    <li><a href="#">Business</a></li>
                    <li><a href="#">Mac</a></li>
                    <li><a href="#">Design</a></li>
                    <li><a href="#">Office</a></li>
                    <li><a href="#">Creative</a></li>
                    <li><a href="#">Studio</a></li>
                    <li><a href="#">Smart</a></li>
                    <li><a href="#">Tips</a></li>
                    <li><a href="#">Marketing</a></li>
                  </ul>
                </div> -->
                <!-- End sidebar tags-->
              </div>
              <!-- End Blog Sidebar -->
            </div>
          </div>
        </div>
      </section>
      <!-- End Blog Section -->
    </main>

@endsection