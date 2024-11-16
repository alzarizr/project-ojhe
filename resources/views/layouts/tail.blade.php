    <script src="{{asset ('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset ('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{asset ('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{asset ('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{asset ('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{asset ('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <!-- Extra Vendor -->
    <script src="{{asset ('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
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
          pureCounter.startCounter();
        });
      });
    </script>

    <script src="{{asset ('assets/js/main.js') }}"></script>
  </body>

</html>
