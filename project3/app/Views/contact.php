<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="container my-5">
    <!-- Header -->
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold mb-3">📞 Hubungi Saya</h1>
        <p class="lead text-muted">Ada pertanyaan atau ingin berkolaborasi? Hubungi saya melalui channel di bawah</p>
        <hr class="my-4" style="max-width: 100px; border-width: 3px; margin-left: auto; margin-right: auto;">
    </div>

    <!-- Contact Methods -->
    <div class="row g-4 mb-5">
        <!-- Email -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-lg h-100 text-center transition-all" style="transition: all 0.3s ease;">
                <div class="card-body p-4">
                    <div class="mb-3" style="font-size: 2.5rem;">📧</div>
                    <h5 class="card-title fw-bold mb-3">Email</h5>
                    <p class="text-muted mb-3">Kirim pesan melalui email</p>
                    <a href="mailto:ahmadazarruddin@gmail.com" class="btn btn-danger fw-bold">
                        💌 Kirim Email
                    </a>
                    <p class="small text-muted mt-2">ahmadazarruddin@gmail.com</p>
                </div>
            </div>
        </div>

        <!-- WhatsApp -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-lg h-100 text-center transition-all" style="transition: all 0.3s ease;">
                <div class="card-body p-4">
                    <div class="mb-3" style="font-size: 2.5rem;">💬</div>
                    <h5 class="card-title fw-bold mb-3">WhatsApp</h5>
                    <p class="text-muted mb-3">Chat kami secara langsung</p>
                    <a href="https://wa.me/6281292675810" target="_blank" class="btn btn-success fw-bold">
                        💬 Chat WhatsApp
                    </a>
                    <p class="small text-muted mt-2">+62 812-9267-5810</p>
                </div>
            </div>
        </div>

        <!-- Location -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-lg h-100 text-center transition-all" style="transition: all 0.3s ease;">
                <div class="card-body p-4">
                    <div class="mb-3" style="font-size: 2.5rem;">📍</div>
                    <h5 class="card-title fw-bold mb-3">Lokasi</h5>
                    <p class="text-muted mb-3">Kunjungi kami di sini</p>
                    <a href="#map" class="btn btn-info fw-bold text-white">
                        🗺️ Lihat Peta
                    </a>
                    <p class="small text-muted mt-2">Sekretariat Rayon PMII</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card border-0 shadow-lg" id="map">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-0">🗺️ Lokasi di Google Maps</h5>
                </div>
                <div class="card-body p-0">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4431638961996!2d106.85056887440972!3d-6.205125860782921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5a75d490f1b%3A0x88ddc31195a1c7f!2sSekretariat%20Rayon%20PMII%20Teknik%20Unusia!5e0!3m2!1sen!2sid!4v1777443000081!5m2!1sen!2sid"
                        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Info -->
    <div class="row mt-5">
        <div class="col-lg-10 mx-auto">
            <div class="alert alert-info" role="alert">
                <strong>💡 Tip:</strong> Untuk respon yang lebih cepat, silakan hubungi melalui WhatsApp atau email. Saya akan merespon sesegera mungkin!
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>