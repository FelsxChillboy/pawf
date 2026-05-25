<?= $this->extend('layouts/template-home'); ?>
<?= $this->section('content'); ?>

<main class="main">

    <section id="services" class="services section">

        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>Services I provide, encompassing IT expertise, design, and the provision of high-quality culinary products.</p>
        </div><div class="container">

            <div class="row gy-4">

            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
                <div>
                <h4 class="title"><a href="service-details.html" class="stretched-link">Android App Development</a></h4>
                <p class="description">Developing functional mobile applications using Android Studio and Kotlin.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                <div>
                <h4 class="title"><a href="service-details.html" class="stretched-link">Business Process Analysis</a></h4>
                <p class="description">In-depth evaluation of organizational workflows to provide more efficient system solutions.</p>
                </div>
            </div><div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
                <div>
                <h4 class="title"><a href="service-details.html" class="stretched-link">Project Management</a></h4>
                <p class="description">Planning, managing software project phases, and implementing change management concepts.</p>
                </div>
            </div><div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
                <div>
                <h4 class="title"><a href="service-details.html" class="stretched-link">UI/UX & Visual Design</a></h4>
                <p class="description">Designing attractive, intuitive user interfaces and creating visual assets for product branding.</p>
                </div>
            </div><div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
                <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
                <div>
                <h4 class="title"><a href="service-details.html" class="stretched-link">Web Development</a></h4>
                <p class="description">Building web solutions using React for the front-end and Python (Flask) for the back-end.</p>
                </div>
            </div><div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
                <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
                <div>
                <h4 class="title"><a href="service-details.html" class="stretched-link">Premium Culinary Products</a></h4>
                <p class="description">Providing high-quality snacks: assorted risol (mayo beef, matcha, etc.), fried/shrimp dimsum, and shredded chicken cireng.</p>
                </div>
            </div></div>

        </div>

    </section>

</main>

<?= $this->endSection(); ?>