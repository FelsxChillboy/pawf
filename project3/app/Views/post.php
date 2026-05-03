<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="container my-5">
    <!-- Header Section -->
    <div class="mb-5">
        <h1 class="display-4 fw-bold mb-3">📖 Perpustakaan Artikel</h1>
        <p class="lead text-muted">Temukan artikel menarik tentang PHP, Web Development, dan Database</p>
        <hr class="my-4" style="max-width: 100px; border-width: 3px;">
    </div>

    <!-- Search Form -->
    <div class="row mb-5">
        <div class="col-lg-8 mx-auto">
            <form method="GET" action="/post" class="mb-4">
                <div class="input-group input-group-lg">
                    <input 
                        type="text" 
                        name="q" 
                        class="form-control" 
                        placeholder="Cari artikel..." 
                        value="<?= htmlspecialchars($keyword ?? '') ?>">
                    <button type="submit" class="btn btn-primary fw-bold">🔍 Cari</button>
                    <?php if (!empty($keyword)) : ?>
                        <a href="/post" class="btn btn-outline-secondary">Reset</a>
                    <?php endif; ?>
                </div>
            </form>

            <!-- Categories Filter -->
            <?php if (!empty($categories)) : ?>
                <div class="mb-4">
                    <p class="fw-bold mb-3">🏷️ Filter Kategori:</p>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="/post" class="btn btn-outline-secondary btn-sm <?= empty($categoryId) ? 'active' : '' ?>">
                            ◉ Semua
                        </a>
                        <?php foreach ($categories as $cat) : ?>
                            <a href="/post?category=<?= $cat['id'] ?>" class="btn btn-outline-secondary btn-sm <?= $categoryId == $cat['id'] ? 'active' : '' ?>">
                                ◉ <?= htmlspecialchars($cat['name']) ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Search Results Info -->
    <?php if (!empty($keyword)) : ?>
        <div class="row mb-4">
            <div class="col-lg-8 mx-auto">
                <div class="alert alert-info" role="alert">
                    <strong>🔎 Hasil Pencarian:</strong> "<?= htmlspecialchars($keyword) ?>" (<?= count($posts) ?> artikel ditemukan)
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- Posts Grid -->
    <div class="row">
        <?php if (empty($posts)) : ?>
            <div class="col-lg-8 mx-auto">
                <div class="alert alert-warning text-center py-5" role="alert">
                    <h4 class="mb-3">📭 Tidak Ada Artikel</h4>
                    <p class="mb-0">
                        <?= !empty($keyword) ? 'Tidak ada artikel yang sesuai dengan pencarian Anda.' : 'Belum ada artikel yang diterbitkan.' ?>
                    </p>
                </div>
            </div>
        <?php else : ?>
            <div class="col-lg-8 mx-auto w-100">
                <?php 
                    // Hitung nomor urut global dengan pagination
                    $perPage = 6; // Pastikan ini sesuai dengan pagination di controller
                    $currentPage = $pager ? $pager->getCurrentPage() : 1;
                    $offset = ($currentPage - 1) * $perPage;
                ?>
                <?php foreach ($posts as $i => $post) : ?>
                    <div class="card shadow-sm border-0 mb-4 transition-all" style="transition: all 0.3s ease;">
                        <div class="row g-0">
                            <div class="col-md-2 bg-light d-flex align-items-center justify-content-center fw-bold text-primary" style="font-size: 2rem;">
                                <?= str_pad($offset + $i + 1, 2, '0', STR_PAD_LEFT) ?>
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="/post/<?= $post['slug'] ?>" class="text-decoration-none text-dark fw-bold">
                                            <?= htmlspecialchars($post['title']) ?>
                                        </a>
                                    </h5>
                                    <p class="card-text text-muted">
                                        <?= substr(strip_tags($post['content']), 0, 150) ?>...
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">
                                            <strong>✍️ <?= htmlspecialchars($post['author'] ?? 'Admin') ?></strong> | 
                                            📅 <?= date('d M Y', strtotime($post['created_at'])) ?>
                                        </small>
                                        <a href="/post/<?= $post['slug'] ?>" class="btn btn-sm btn-outline-primary">
                                            Baca Selengkapnya →
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    <!-- Pagination -->
    <?php if ($pager) : ?>
        <div class="row mt-5">
            <div class="col-lg-8 mx-auto">
                <nav aria-label="Page navigation" class="d-flex justify-content-center">
                    <?= $pager->links() ?>
                </nav>
            </div>
        </div>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>