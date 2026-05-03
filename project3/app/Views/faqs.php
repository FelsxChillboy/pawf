<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="container my-5">
    <!-- Header -->
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold mb-3">❓ Pertanyaan yang Sering Diajukan</h1>
        <p class="lead text-muted">Temukan jawaban untuk pertanyaan umum tentang blog dan konten saya</p>
        <hr class="my-4" style="max-width: 100px; border-width: 3px; margin-left: auto; margin-right: auto;">
    </div>

    <!-- FAQ Accordion -->
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="accordion" id="faqAccordion">
                <!-- FAQ Item 1 -->
                <div class="accordion-item mb-3 border-0 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            ❓ Apa itu MyBlog?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p>MyBlog adalah platform blog yang saya buat untuk berbagi ilmu tentang PHP, Web Development, dan Database. Di sini saya membagikan pengalaman dan pengetahuan saya dalam dunia programming.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="accordion-item mb-3 border-0 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            📝 Berapa sering artikel baru dipublikasikan?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p>Saya berusaha untuk mempublikasikan artikel baru secara berkala. Frekuensi publikasi tergantung pada jadwal saya sebagai mahasiswa dan project yang sedang saya kerjakan. Anda bisa subscribe newsletter untuk mendapat notifikasi artikel terbaru!</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="accordion-item mb-3 border-0 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            💬 Dapatkah saya berkomentar di artikel?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p>Tentu saja! Anda dapat berkomentar di setiap artikel yang ada. Komentar Anda akan dimoderasi terlebih dahulu sebelum ditampilkan untuk menjaga kualitas diskusi. Anda juga bisa memberikan feedback atau saran untuk artikel berikutnya.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="accordion-item mb-3 border-0 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                            🔒 Bagaimana dengan privasi data saya?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p>Data pribadi Anda sangat penting bagi kami. Email dan informasi yang Anda berikan hanya akan digunakan untuk keperluan blog dan tidak akan dibagikan kepada pihak ketiga tanpa persetujuan Anda. Kami menerapkan standar keamanan data yang ketat.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="accordion-item mb-3 border-0 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                            📚 Bisakah saya menggunakan konten dari blog ini?
                        </button>
                    </h2>
                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p>Konten di MyBlog dapat digunakan dengan memberikan kredit dan attribution yang sesuai. Jika Anda ingin menggunakan konten untuk keperluan komersial, silakan hubungi saya terlebih dahulu untuk mendiskusikan syarat dan ketentuannya.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 6 -->
                <div class="accordion-item mb-3 border-0 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                            🤝 Bisakah saya berkolaborasi dengan Anda?
                        </button>
                    </h2>
                    <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p>Tentu! Saya selalu terbuka untuk kolaborasi dan ide-ide baru. Jika Anda tertarik untuk berkolaborasi, silakan <a href="/contact" class="fw-bold">hubungi saya</a> melalui email atau WhatsApp untuk membahas lebih lanjut.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Help -->
    <div class="row mt-5">
        <div class="col-lg-8 mx-auto">
            <div class="card border-0 bg-light">
                <div class="card-body text-center p-4">
                    <h5 class="fw-bold mb-3">Tidak menemukan jawaban?</h5>
                    <p class="text-muted mb-3">Jika Anda memiliki pertanyaan yang tidak tersedia di halaman ini, jangan ragu untuk menghubungi saya.</p>
                    <a href="/contact" class="btn btn-primary fw-bold">
                        📧 Hubungi Saya
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>