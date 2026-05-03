<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="container my-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card shadow-lg">
                <div class="card-header bg-warning text-dark">
                    <h3 class="mb-0">✏️ Edit Artikel</h3>
                </div>
                <div class="card-body p-4">
                    <form action="/admin/article/update/<?= $article['id'] ?>" method="post">
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
                                value="<?= htmlspecialchars($article['title']) ?>" 
                                required>
                        </div>

                        <div class="mb-4">
                            <label for="content" class="form-label fw-bold">Konten <span class="text-danger">*</span></label>
                            <textarea 
                                class="form-control" 
                                id="content" 
                                name="content" 
                                rows="8" 
                                required><?= htmlspecialchars($article['content']) ?></textarea>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-warning btn-lg fw-bold flex-grow-1">
                                💾 Perbarui Artikel
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