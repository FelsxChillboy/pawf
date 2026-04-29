<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 my-2 card">
            <div class="card-body">
                <h6 class="fw-bold mb-1">Email</h6>
                <p class="text-muted mb-1 small">Kirim pesan lewat email</p>
                <a href="mailto:ahmadazarruddin@gmail.com" class="text-decoration-none fw-semibold text-danger">
                    ahmadazarruddin@gmail.com
                </a>
            </div>
        </div>
        <div class="col-md-12 my-2 card">
            <div class="card-body">
            </div>
            <h6 class="fw-bold mb-1">No.HP</h6>
            <p class="text-muted mb-1 small">Chat kami di WhatsApp</p>
            <a href="https://wa.me/6281292675810" target="_blank" class="btn btn-sm btn-success mt-1">
                💬 Chat WhatsApp
            </a>
        </div>
        <div class="col-md-12 my-2 card">
            <div class="card-body">
                <h6 class="fw-bold mb-1">Alamat</h6>
                <p class="text-muted mb-1 small">Kunjungi kami di lokasi berikut</p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4431638961996!2d106.85056887440972!3d-6.205125860782921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5a75d490f1b%3A0x88ddc31195a1c7f!2sSekretariat%20Rayon%20PMII%20Teknik%20Unusia!5e0!3m2!1sen!2sid!4v1777443000081!5m2!1sen!2sid"
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>