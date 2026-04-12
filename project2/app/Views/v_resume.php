<?= $this->extend('layouts/template-home'); ?>
<?= $this->section('content'); ?>

<main class="main">

    <section id="resume" class="resume section">

      <div class="container section-title" data-aos="fade-up">
        <h2>Resume</h2>
        <p>An academic track record and project experience that hones analytical capabilities, problem-solving skills, and entrepreneurial spirit.</p>
      </div><div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Summary</h3>

            <div class="resume-item pb-0">
              <h4>ahmad azarruddin </h4>
              <p><em>Innovative informatics engineering with experience in application development, business process analysis, and UI/UX design. Actively managing an independent culinary business while completing studies.</em></p>
              <ul>
                <li>lamongan, East Java, Indonesia</li>
                <li>+62 812--9267-5810</li>
                <li>ahmadazarruddin@gmail.com</li>
              </ul>
            </div><h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Bachelor of Information Systems</h4>
              <h5>2023 - Present</h5>
              <p><em>Universitas Nahdlatul Ulama Indonesia</em></p>
              <p>Focusing on software engineering, back-end development, Android-based application development, and web engineering.</p>
            </div></div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">Professional & Academic Experience</h3>
            <div class="resume-item">
              <h4>programer dev</h4>
              <h5>Jan 2023 - Present</h5>
              <p><em>WFh</em></p>
              <ul>
                <li>Assisted in the development and maintenance of web applications using PHP and JavaScript.</li>
                <li>Collaborated with team members to identify and resolve technical issues.</li>
                <li>Participated in code reviews and contributed to improving code quality.</li>
              </ul>
            </div><div class="resume-item">
              <h4>Android App Developer (independent project)</h4>
              <h5>Jan 2025</h5>
              <p><em>Academic Project</em></p>
              <ul>
                <li>Designed and developed a simple Android application for personal finance management.</li>
                <li>Utilized Android Studio and Kotlin to implement basic cash flow tracking features.</li>
                <li>Documented the development process and application architecture.</li>
              </ul>
            </div></div>

        </div>

      </div>

    </section>

</main>

<?= $this->endSection(); ?>