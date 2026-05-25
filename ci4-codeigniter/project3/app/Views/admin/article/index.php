<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h2 fw-bold">📚 Kelola Artikel</h1>
        <div class="d-flex gap-2">
            <a href="/admin/AddArticle" class="btn btn-info btn-lg fw-bold">
                🧪 Test CRUD
            </a>
            <a href="/admin/AddArticle" class="btn btn-success btn-lg fw-bold">
                <i class="bi bi-plus-circle"></i> Tambah Artikel Baru
            </a>
        </div>
    </div>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>✓ Sukses!</strong> <?= session()->getFlashdata('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <?php if (empty($articles)) : ?>
        <div class="alert alert-info" role="alert">
            <strong>ℹ️ Belum ada artikel.</strong> Silakan <a href="/admin/AddArticle" class="alert-link">tambah artikel baru</a>.
        </div>
    <?php else : ?>
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center" style="width: 50px;">No</th>
                        <th>Judul Artikel</th>
                        <th class="text-center" style="width: 150px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($articles as $i => $article): ?>
                        <tr>
                            <td class="text-center fw-bold"><?= $i + 1 ?></td>
                            <td>
                                <strong><?= htmlspecialchars($article['title']) ?></strong>
                                <br>
                                <small class="text-muted">
                                    <?php if (!empty($article['created_at'])) : ?>
                                        Dibuat: <?= date('d M Y H:i', strtotime($article['created_at'])) ?>
                                    <?php endif; ?>
                                </small>
                            </td>
                            <td class="text-center">
                                <a href="/admin/article/edit/<?= $article['id'] ?>" class="btn btn-sm btn-warning">
                                    ✏️ Edit
                                </a>
                                <a href="/admin/article/delete/<?= $article['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus artikel ini?')">
                                    🗑️ Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>