
<?= $this->extend('layouts/template-home'); ?>
<?= $this->section('content'); ?>

<main class="main">

    <section id="skills" class="skills section light-background">

      <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <p>A blend of technical skills in software development, business system analysis, and creative design.</p>
      </div><div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>Android Studio (Kotlin)</span> <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><div class="progress">
              <span class="skill"><span>Python (Flask)</span> <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><div class="progress">
              <span class="skill"><span>React & JavaScript</span> <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div></div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>Database & SQL</span> <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><div class="progress">
              <span class="skill"><span>API Development</span> <i class="val">65%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><div class="progress">
              <span class="skill"><span>Node.js</span> <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div></div>

        </div>

      </div>

    </section>

</main>

<?= $this->endSection(); ?>  