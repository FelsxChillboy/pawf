<?= $this->extend('layouts/template-home'); ?>
<?= $this->section('content'); ?>

<main class="main">

    <section id="hero" class="hero section dark-background">

      <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in" class="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2>Adilah Nazifah Salamah</h2>
        <p>I'm <span class="typed" data-typed-items="Information Systems Student">Information Systems Student</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
      </div>

    </section>
    
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Customers</strong> <span>From culinary orders & freelance</span></p>
            </div>
          </div><div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Academic Projects</strong> <span>System Analysis & Programming</span></p>
            </div>
          </div><div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="450" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Coding</strong> <span>Android Studio, Python & React</span></p>
            </div>
          </div><div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Menu Variants</strong> <span>Various homemade food products</span></p>
            </div>
          </div></div>

      </div>

    </section>
    
    <section id="testimonials" class="testimonials section light-background">

      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Reviews and appreciation from lecturers, academic project peers, and loyal customers of my culinary business.</p>
      </div><div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>The PPM report created for AHA Music Course was highly detailed and on target. Adilah's understanding of business processes greatly helped evaluate our system.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>PPM Supervisor</h3>
                <h4>AHA Music Course</h4>
              </div>
            </div><div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Collaboration on the financial tracker app project using Android Studio went smoothly thanks to Adilah's coding skills and good time management.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Fellow Student</h3>
                <h4>Project Team</h4>
              </div>
            </div><div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>The beef mayo risol and cheese dimsum are absolute champions! Always order them for family events, the taste is consistently delicious and the packaging is neat.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Loyal Customer</h3>
                <h4>Culinary Business</h4>
              </div>
            </div><div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Very helpful when discussing Economics Engineering or Project Management, the explanations are easy to understand for exam preparation!</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Classmate</h3>
                <h4>Information Systems</h4>
              </div>
            </div><div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>The visual design for her food catalog images is appetizing, her UI/UX and graphic design skills really stand out. Highly recommended.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>Design Client</h3>
                <h4>Freelance Project</h4>
              </div>
            </div></div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section>

</main>

<?= $this->endSection(); ?>