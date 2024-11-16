@extends('layouts.app')

@section('content')

<main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div
        class="breadcrumbs d-flex align-items-center"
        style="
          background-image: url('{{asset ('assets/img/contact-header.jpg') }}');
        "
      >
        <div
          class="container position-relative d-flex flex-column align-items-center"
        >
          <h1>Contact</h1>
          <ol>
            <li><a href="{{route ('home') }}">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>
      </div>
      <!-- End Breadcrumbs -->

      <!-- Contact Us Section-->
      <section id="contact" class="contact">
        <div class="container position-relative" data-aos="fade-up">
          <div class="section-header">
            <h2>Contact Us</h2>
          </div>

          <div class="row bawahana">
            <!-- Maps on the left -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <iframe
                style="border: 0; width: 100%; height: 400px"
                src="https://maps.google.com/maps?q=Coolze%20AC&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                frameborder="0"
                allowfullscreen
              ></iframe>
            </div>

            <!-- Image on the right -->
            <div
              class="col-lg-6 d-flex justify-content-center"
              data-aos="fade-up"
              data-aos-delay="250"
            >
              <img
                src="{{asset ('assets/img/DokumentasiService/ruko-coolze-contact.JPG') }}"
                class="img-fluid"
                alt="Your Image Alt Text"
              />

              <img
                src="{{asset ('assets/img/DokumentasiService/ruko-coolze-kecil.JPG') }}"
                class="img-fluid"
                alt="Your Image Alt Text"
              />
            </div>
          </div>

          <!-- Info Items below -->
          <div class="row gy-2">
            <!-- Reduced spacing here -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <div class="info-item d-flex">
                <a
                  href="https://maps.app.goo.gl/FRFHZk6QbfTmeCQq6"
                  target="_blank"
                  class="maps"
                >
                  <i class="bi bi-geo-alt flex-shrink-0"></i>
                </a>
                <div>
                  <h4>Lokasi:</h4>
                  <p>
                    JL Scientia Boulevard, Ruko Faraday Blok A no. 33, Kel.
                    Medang, Kec. Pagedangan, Kab. Tangerang, Banten 15334
                  </p>
                </div>
              </div>
              <!-- End Info Item -->

              <div class="info-item d-flex">
                <a
                  href="mailto:coolzeindonesia@gmail.com?subject=Coolze%Service%AC%20"
                  class="envelope"
                >
                  <i class="bi bi-envelope flex-shrink-0"></i>
                </a>
                <div>
                  <h4>Email:</h4>
                  <p>coolzeindonesia@gmail.com</p>
                </div>
              </div>
              <!-- End Info Item -->

              <div class="info-item d-flex">
                <a href="tel:+6282233338793" class="phone">
                  <i class="bi bi-phone flex-shrink-0"></i>
                </a>
                <div>
                  <h4>Mobile:</h4>
                  <p>+62 822 3333 8793</p>
                </div>
              </div>
              <!-- End Info Item -->
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <div class="info-item d-flex">
                <a
                  href="https://api.whatsapp.com/send?phone=6282233338793"
                  target="_blank"
                  class="whatsapp"
                >
                  <i class="bi bi-whatsapp flex-shrink-0"></i>
                </a>
                <div>
                  <h4>Whatsapp:</h4>
                  <p>+62 822 3333 8793</p>
                </div>
              </div>
              <!-- End Info Item -->
              <div class="info-item d-flex">
                <a
                  href="https://www.tiktok.com/@coolze.id"
                  target="_blank"
                  class="tiktok"
                >
                  <i class="bi bi-tiktok flex-shrink-0"></i>
                </a>
                <div>
                  <h4>TikTok:</h4>
                  <p>@coolze.id</p>
                </div>
              </div>
              <!-- End Info Item -->
              <div class="info-item d-flex">
                <a
                  href="https://instagram.com/coolze.id"
                  target="_blank"
                  class="instagram"
                >
                  <i class="bi bi-instagram flex-shrink-0"></i>
                </a>
                <div>
                  <h4>Instagram:</h4>
                  <p>@coolze.id</p>
                </div>
              </div>
              <!-- End Info Item -->
            </div>

            <!-- Contact Form on the right -->
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="250">
              <form
                action="#"
                method="post"
                role="form"
                class="php-email-form"
              >
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      id="name"
                      placeholder="Your Name"
                      required
                    />
                  </div>
                  <div class="col-md-6 form-group">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      id="email"
                      placeholder="Your Email"
                      required
                    />
                  </div>
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    name="subject"
                    id="subject"
                    placeholder="Subject"
                    required
                  />
                </div>
                <div class="form-group">
                  <textarea
                    class="form-control"
                    name="message"
                    rows="5"
                    placeholder="Message"
                    required
                  ></textarea>
                </div>
                <input type="hidden" name="_captcha" value="false" />
                <input type="hidden" name="_template" value="table" />
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">
                    Your message has been sent. Thank you!
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">
                    Send Message
                  </button>
                </div>
              </form>
            </div>

            <!-- End Contact Form -->
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
    </main>

@endsection