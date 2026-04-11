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
              <h4>Adilah Nazifah Salamah</h4>
              <p><em>Innovative Information Systems student with experience in application development, business process analysis, and UI/UX design. Actively managing an independent culinary business while completing studies.</em></p>
              <ul>
                <li>Depok, West Java, Indonesia</li>
                <li>+62 852-1060-9076</li>
                <li>difanazf06@gmail.com</li>
              </ul>
            </div><h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Bachelor of Information Systems</h4>
              <h5>2023 - Present</h5>
              <p><em>Universitas Nahdlatul Ulama Indonesia</em></p>
              <p>Focusing on software project management, database design, Android-based application development, and web engineering.</p>
            </div></div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">Professional & Academic Experience</h3>
            <div class="resume-item">
              <h4>Business Process Analyst (PPM)</h4>
              <h5>Jan 2026 - Present</h5>
              <p><em>AHA Music Course Yayasan Islam Al-Hamidiyah</em></p>
              <ul>
                <li>Conducted comprehensive observation and analysis of business processes at AHA Music Course.</li>
                <li>Compiled the Student Introduction Program (PPM) report focusing on structural workflow evaluation.</li>
                <li>Recommended information system improvements to enhance administrative efficiency.</li>
              </ul>
            </div><div class="resume-item">
              <h4>Android App Developer (Group Project)</h4>
              <h5>Jan 2026</h5>
              <p><em>Academic Project</em></p>
              <ul>
                <li>Collaborated in a team to design and develop a simple Financial Tracker application.</li>
                <li>Utilized Android Studio and Kotlin to implement basic cash flow tracking features.</li>
                <li>Involved in creating project presentations, documenting development steps, and application architecture.</li>
              </ul>
            </div></div>

        </div>

      </div>

    </section>

</main>

<?= $this->endSection(); ?>