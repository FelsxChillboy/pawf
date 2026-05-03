<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="container my-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card shadow-lg">
                <div class="card-header bg-success text-white">
                    <h3 class="mb-0">✍️ Tambah Artikel Baru</h3>
                </div>
                <div class="card-body p-4">
                    <form action="/admin/AddArticle" method="post">
                        <?= csrf_field() ?>

                        <?php if (session()->getFlashdata('errors')) : ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>❌ Validasi Gagal!</strong>
                                <ul class="mb-0 mt-2">
                                    <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                                        <li><?= htmlspecialchars($error) ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        <?php endif; ?>

                        <div class="mb-4">
                            <label for="title" class="form-label fw-bold">Judul Artikel <span class="text-danger">*</span></label>
                            <input 
                                type="text" 
                                class="form-control form-control-lg" 
                                id="title" 
                                name="title" 
                                placeholder="Masukkan judul artikel..." 
                                value="<?= old('title') ?>"
                                required>
                            <small class="text-muted d-block mt-2">Judul artikel harus unik dan deskriptif</small>
                        </div>

                        <div class="mb-4">
                            <label for="content" class="form-label fw-bold">Konten <span class="text-danger">*</span></label>
                            <textarea 
                                class="form-control" 
                                id="content" 
                                name="content" 
                                rows="8" 
                                placeholder="Tulis konten artikel Anda di sini..."
                                required><?= old('content') ?></textarea>
                            <small class="text-muted d-block mt-2">Konten dapat berisi HTML dan formatting</small>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-success btn-lg fw-bold flex-grow-1">
                                💾 Simpan Artikel
                            </button>
                            <a href="/admin/article/" class="btn btn-secondary btn-lg fw-bold">
                                ↩️ Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>