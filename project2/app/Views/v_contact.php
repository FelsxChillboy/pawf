<?= $this->extend('layouts/template-home'); ?>
<?= $this->section('content'); ?>

<main class="main">

    <section id="contact" class="contact section">

      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Feel free to get in touch with me for collaborations, project inquiries, or just to say hello. I’m always open to discussing new opportunities, creative ideas, or ways to be part of your vision.
        You can reach me through the contact form below or via my social media and email. I’ll do my best to respond as soon as possible.
        Let’s connect and create something great together!</p>
      </div><div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Location</h3>
                  <p>DKI jakarta, West Java, Indonesia</p>
                </div>
              </div><div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call/WhatsApp</h3>
                  <p>+62 812-9267-5810</p>
                </div>
              </div><div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Me</h3>
                  <p>ahmadazarruddin@gmail.com</p>
                </div>
              </div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4431638961996!2d106.85056887440972!3d-6.205125860782921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5a75d490f1b%3A0x88ddc31195a1c7f!2sSekretariat%20Rayon%20PMII%20Teknik%20Unusia!5e0!3m2!1sen!2sid!4v1775881047785!5m2!1sen!2sid" width="600" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Your Name</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Message</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div></div>

      </div>

    </section>

</main>

<?= $this->endSection(); ?>