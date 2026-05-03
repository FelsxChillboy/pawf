<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="container my-5">
    <!-- Header -->
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold mb-3">👋 Tentang Saya</h1>
        <p class="lead text-muted">Mengenal lebih dekat Ahmad Azarrudin - Web Developer & Mahasiswa Informatika</p>
        <hr class="my-4" style="max-width: 100px; border-width: 3px; margin-left: auto; margin-right: auto;">
    </div>

    <!-- About Sections -->
    <div class="row g-4">
        <!-- Section 1: Siapa Aku -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-lg h-100 transition-all" style="transition: all 0.3s ease;">
                <div class="card-body text-center">
                    <div class="mb-3" style="font-size: 3rem;">👨‍🎓</div>
                    <h5 class="card-title fw-bold mb-3">Siapa Aku</h5>
                    <p class="card-text text-muted">
                        Saya adalah mahasiswa Teknik Informatika semester 6 yang sedang berusaha untuk meraih gelar S.Kom. Bersemangat tentang dunia teknologi dan inovasi digital.
                    </p>
                </div>
            </div>
        </div>

        <!-- Section 2: Keahlian -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-lg h-100 transition-all" style="transition: all 0.3s ease;">
                <div class="card-body text-center">
                    <div class="mb-3" style="font-size: 3rem;">🚀</div>
                    <h5 class="card-title fw-bold mb-3">Keahlian Saya</h5>
                    <p class="card-text text-muted">
                        Mahir di bidang <strong>Frontend Development</strong> dan sedang belajar <strong>Backend</strong> untuk mencapai status <strong>Full Stack Developer</strong>.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-info">HTML/CSS</span>
                        <span class="badge bg-success">JavaScript</span>
                        <span class="badge bg-warning text-dark">Bootstrap</span>
                        <span class="badge bg-primary">PHP</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 3: Hobi -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-lg h-100 transition-all" style="transition: all 0.3s ease;">
                <div class="card-body text-center">
                    <div class="mb-3" style="font-size: 3rem;">🔧</div>
                    <h5 class="card-title fw-bold mb-3">Passion Saya</h5>
                    <p class="card-text text-muted">
                        Saya suka mengoprek (mencoba, mengembangkan, dan memperbaiki) project atau apapun yang berhubungan dengan teknologi informatika.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Info Section -->
    <div class="row mt-5">
        <div class="col-lg-8 mx-auto">
            <div class="card border-0 shadow-sm bg-light">
                <div class="card-body p-4">
                    <h4 class="fw-bold mb-3">📚 Perjalanan Pembelajaran</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <strong>✓ Frontend Developer</strong> - Mahir membuat tampilan web yang menarik dan responsif
                        </li>
                        <li class="mb-3">
                            <strong>✓ PHP & CodeIgniter</strong> - Belajar backend development untuk membuat aplikasi web yang lengkap
                        </li>
                        <li class="mb-3">
                            <strong>✓ Database & SQL</strong> - Memahami pengelolaan data dan query optimization
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="row mt-5">
        <div class="col-lg-8 mx-auto text-center">
            <p class="lead mb-4">Tertarik untuk berkolaborasi? Mari terhubung!</p>
            <a href="/contact" class="btn btn-primary btn-lg fw-bold">
                📧 Hubungi Saya
            </a>
        </div>
    </div>
</div>

<?= $this->endSection() ?>